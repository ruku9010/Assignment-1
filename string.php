<?php
$string = ["Hello", "World", "PHP", "Programming"];
$vowels = array("a", "e", "i", "o", "u");

$Hello = (strrev($string[0]));
$World = (strrev($string[1]));
$PHP = (strrev($string[2]));
$Programming = (strrev($string[3]));

$count = 0;             //Hello
for ($i = 0; $i < strlen($string[0]); $i++){
    if (in_array(($string[0][$i]), $vowels)){
        $count++;
    }
}

$count1 = 0;             //World
for ($i = 0; $i < strlen($string[1]); $i++){
    if (in_array(($string[1][$i]), $vowels)){
        $count1++;
    }
}

$count2 = 0;             //PHP
for ($i = 0; $i < strlen($string[2]); $i++){
    if (in_array(($string[2][$i]), $vowels)){
        $count2++;
    }
}

$count3 = 0;             //Programming
for ($i = 0; $i < strlen($string[3]); $i++){
    if (in_array(($string[3][$i]), $vowels)){
        $count3++;
    }
}

echo "Original String: $string[0], Vowel Count: $count, Reversed String: $Hello\n";
echo "Original String: $string[1], Vowel Count: $count1, Reversed String: $World\n";
echo "Original String: $string[2], Vowel Count: $count2, Reversed String: $PHP\n";
echo "Original String: $string[3], Vowel Count: $count3, Reversed String: $Programming";