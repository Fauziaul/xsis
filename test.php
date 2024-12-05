<?php
function mostFrequentLetter($input) {
 
    $input = strtolower($input);
    $input = preg_replace("/[^a-z]/", "", $input);
    $frequency = array_count_values(str_split($input));
    $mostFrequent = '';
    $maxCount = 0;

    foreach ($frequency as $letter => $count) {
        if ($count > $maxCount || ($count == $maxCount && $letter < $mostFrequent)) {
            $mostFrequent = $letter;
            $maxCount = $count;
        }
    }

    return $mostFrequent;
}

// Contoh input dan output
echo mostFrequentLetter("Letter") . "\n";  // Output: e
echo mostFrequentLetter("Applause") . "\n"; // Output: a
echo mostFrequentLetter("manusia") . "\n"; // Output: a
echo mostFrequentLetter("Fauzi Aulia") . "\n"; // Output: a
echo mostFrequentLetter("I love coding") . "\n"; // Output: i
?>
