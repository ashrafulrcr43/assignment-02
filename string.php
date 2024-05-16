<?php 
$strings = ["Hello", "World", "PHP", "Programming"];

//select each Array element
$stringArray =str_split($strings[0]);
$stringArray1 =str_split($strings[1]);
$stringArray2 =str_split($strings[2]);
$stringArray3 =str_split($strings[3]);

//convert Array to String
$toString = implode("", $stringArray);
$toString1 = implode("", $stringArray1);
$toString2 = implode("", $stringArray2);
$toString3 = implode("", $stringArray3);

//reverse String
$reversed = strrev($toString);
$reversed1 = strrev($toString1);
$reversed2 = strrev($toString2);
$reversed3 = strrev($toString3);


$vowels = ["a", "e", "i", "o", "u"];
$count = 0;
$count1 = 0;
$count2 = 0;
$count3 = 0;

//First Vowel Count and Reversed
for ($i = 0; $i < strlen($toString);$i++){    
 if (in_array(strtolower($toString[$i]), $vowels)) {
    $count++;
    
  } 
}
//Second Vowel Count and Reversed
for ($i = 0; $i < strlen($toString1);$i++){    
 if (in_array(strtolower($toString1[$i]), $vowels)) {
    $count1++;
    
  } 
}
//Third Vowel Count and Reversed
for ($i = 0; $i < strlen($toString2);$i++){    
 if (in_array(strtolower($toString2[$i]), $vowels)) {
    $count2++;
    
  } 
}
//Fourth Vowel Count and Reversed
for ($i = 0; $i < strlen($toString3);$i++){    
 if (in_array(strtolower($toString3[$i]), $vowels)) {
    $count3++;
    
  } 
}

  
  
print_r("Original String: " . $strings[0] . ", Vowel Count: $count, Reversed String: " . $reversed . "\n") ;
echo "\n";

print_r("Original String: " . $strings[1] . ", Vowel Count: $count1, Reversed String: " . $reversed1 . "\n") ;
echo "\n";
print_r("Original String: " . $strings[2] . ", Vowel Count: $count2, Reversed String: " . $reversed2 . "\n") ;
echo "\n";
print_r("Original String: " . $strings[3] . ", Vowel Count: $count3, Reversed String: " . $reversed3 . "\n") ;
