<?php

function Palindrome ($kata) {
    $kalimat = str_replace(' ', '', $kata);
    if (strrev($kalimat) == $kalimat) { 
        echo "Palindrome"; 
    }
    else{
        echo "Not a Palindrome";
    }
} 
 
// $palindrome = "aku suka";
// if(Palindrome ($palindrome)) { 
//     echo "Palindrome";
// } else { 
// echo "Not a Palindrome";
// }

echo(Palindrome('aku suka'));
echo(Palindrome('di rumah saya ada kasur rusak'));


?>