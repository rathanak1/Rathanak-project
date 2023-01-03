<?php
print("Hello World<br>");
echo "Hello World";
printf("Hello World". "<br>"); 
Printf("i'm Rathanak". "<br>")
?>

<!-- Variables in PHP -->

<?php
$intNum = 472;
$doubleNum = 29.3;
$boolean = true;
$string = "Web Code Geeks";
$array = array("Pineapple", "Grapefruit", "Banana");

echo "My data : " . $boolean ."<br>";
echo "My data array : " . $array[0];
?>
<!-- Conditional Statements in PHP -->
<br>
<?php
$age = 18;
if ($age < 20) {
echo "You are a teenager";
}
?>
<br>
<!-- The If. . . Else statement -->
<?php
$age = 25;
if ($age < 20) {
echo "You are a teenager";
}else {
echo "You are an adult";
}
?>
<br>
<!-- The If. . . Elseif. . . Else statement -->
<?php
$age = 3;
if ($age < 10) {
echo "You are a kid";
} elseif ($age < 20) {
echo "You are a teenager";
} else {
echo "You are an adult";
}
?>
<br>
<!-- Loops in PHP -->
<?php
for ($i=0; $i < 5; $i++) {
    echo "This is loop number $i". "<br>";
    }
    
?>
<br>
<!-- The while loop -->
<?php
$i=0; // initialization
while ($i < 5) {
echo "This is loop number $i". "<br>";
$i++; // step
}
?>
<br>
<!-- The do. . . while loop -->
<?php
$i = 0; // initialization
do {
$i++; // step
echo "This is loop number $i". "<br>";
}while ($i < 5); // condition
?>
<br>
<!-- The foreach loop -->
<?php
$var = array("a","b","c","d","e");
// array declaration
foreach ($var as $key) {
echo "Element is $key". "<br>";
}
?>

<?php
    $change = "I'm not gay";
    echo "Ratanak: $change";
?>
