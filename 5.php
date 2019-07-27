<?php
$data = array ("a","c","b","e","d");
sort ($data);

$dlength = count($data);
for($x = 0; $x < $dlength; $x++){
    echo $data [$x];
}
?>