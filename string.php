$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = ["a", "e", "i", "o", "u"];
$count = 0;

for($i = 0; $i < count($strings); $i++){
    for($j = 0; $j < strlen($strings[$i]); $j++){
        if(in_array($strings[$i][$j], $vowels)){
            $count++;
        }
    };
    echo "Original String: ".$strings[$i].", Vowel Count: ".$count.", Reversed String: ".strrev($strings[$i])."\n";
    $count = 0;
}
