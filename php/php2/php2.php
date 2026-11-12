<?php
$names=array
(
"s1"=>"rabee",
"s2"=>"samshar",
"s3"=>"amal",
"s4"=>"babu"
);

echo"<center>";
echo"<h2>Original Student List</h2>";
echo"<pre>";
print_r($names);
echo"</pre>";
asort($names);
echo"<h2>ascendingorder:</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
arsort($names);
echo"<h2>Descending order:</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
echo"</center>";
?>
