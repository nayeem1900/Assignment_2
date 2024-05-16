<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Counting vowels
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string, $matches);

    // Reversing string
    $reversedString = strrev($string);

    // Output
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}