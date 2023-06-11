<?php
$filename = "example.txt";
$file = fopen($filename, "r");
if ($file) {
while (($line = fgets($file)) !== false) {
echo $line . "<br>";
}
fclose($file);
} else {
echo "Failed to open the file.";
}
?>


<?php
$filename = "output.txt";
$file = fopen($filename, "w");
if ($file) {
$content = "Hi there everyone.\n";
fwrite($file, $content);
fclose($file);
echo "File written successfully.";
} else {
echo "Failed to open the file.";
}
?>