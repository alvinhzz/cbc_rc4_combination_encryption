<?php
include "crypto_CBC.php";
include "crypto_RC4.php";

$key       = $_POST['kunci'];
$plaintext = array();
$iv        = "A";
$fp = fopen($_FILES['inputFileEnkripsi']['tmp_name'], 'rb');
while ( ($line = fgets($fp)) !== false) {
$plaintext = str_split($line);
}

$cbc = new CBCencrypt($key, $plaintext, $iv);

$ciphertext1 = $cbc->Ciphertxt();

$rc4 = new rc4($key);
$ciphertext2 = $rc4->encrypt($ciphertext1);

// print_r($ciphertext2);
// die;

$file = "ciphertext.txt";
$txt = fopen($file, "w") or die("Unable to open file!");
fwrite($txt, $ciphertext2);
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