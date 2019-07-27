<?php
function count_vowels($string) {
  preg_match_all("/[aiueo]/i", $string, $matches);
  return count($matches[0]);
}

echo count_vowels("programmer");
echo "<br>";
echo count_vowels("hmm..");
?>