<?php
include "crypto_CBC.php";
include "crypto_RC4.php";

$key = $_POST['kunci'];
$ciphertext = "";
$iv        = "A";
$fp = fopen($_FILES['inputFileDekripsi']['tmp_name'], 'rb');
// while ( ($line = fgets($fp)) !== false) {
// $ciphertext = $line;
// }

while (! feof($fp)) {
    $ciphertext .= fgets($fp);
}
fclose($fp);

$rc4 =  new rc4($key);
$plaintext2 = $rc4->decrypt($ciphertext);

$cbc = new CBDecrypt($key, $plaintext2, $iv);

$plaintext = $cbc->Plaintext();

$file = "plaintext.txt";
$txt = fopen($file, "w") or die("Unable to open file!");
fwrite($txt, $plaintext);
fclose($txt);

header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename='.basename($file));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
header("Content-Type: text/plain");
readfile($file);
?>