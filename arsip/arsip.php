<?
// function CBCencrypt($key_str, $plaintext_str, $iv_str){
//     $keyLength = strlen($key_str);
//     $plaintextLength = strlen($plaintext_str);
//     // $ivLength = strlen($iv_str);
//     $xor1 = array();
//     $ciphertext = array();
   
//    //convert string to decimal
//     for ($i = 0; $i < $keyLength; $i++) {
//          $key[] = ord($key_str[$i]);
//     }
    
//     for ($i = 0; $i < $plaintextLength; $i++) {
//          $plaintext[] = ord($plaintext_str[$i]);
//     }
    
//     $iv = ord($iv_str);

//     // xor IV dan plaintext

//     for ($i=0; $i < $plaintextLength; $i++) { 
//         for ($j=0; $j < $keyLength; $j++) { 
//             if ($j>$keyLength) {
//                 $j = 0;
//             }

//         }
//     }
    
//         return var_dump($ciphertext);
// }
        
                // echo "$plaintext[$i] XOR ".$xor1[$i-1]."= $xor1[$i]\n";
        
//       $xor1Length = count($xor1);
//     //xor hasil (IV >< plaintex) XOR key 
//      $j = 0;
//         for ($i = 0; $i < $xor1Length; $i++) {
//           if ($j < $keyLength) {
//               $xor2[$i] = $xor1[$i] ^ $key[$j];
//               $j += 1;
//           }else {
//               $j = 0;
//               $i = $i - 1;
//           }
//         }
//     var_dump($xor2);
//   }
//     //geser ke kiri

// $j = 0;
//     for ($i = 0; $i < $plaintextLength; $i++) {
//         if ($i==0) {
//             $xor1[$i] = $plaintext[$i] ^ $iv;
//             $ciphertext[$i] = $xor1[$i] ^ $key[$i];    
//             echo "P-$i XOR IV-$i XOR K-$j <br>";
//             }
//         elseif($i>0){
//             if ($j>$keyLength) {$j = 0;$i = $i-1;}
//             $xor1[$i] = $plaintext[$i] ^ $ciphertext[$i-1];
//             $ciphertext[$i] = $xor1[$i] ^ $key[$j];
            
//             $j += 1;
//             echo "P-$i XOR C-". $i-1 ." XOR K-$j <br>";
//             }
//     }
?>