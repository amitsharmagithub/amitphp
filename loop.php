<!doctype>
<html>
<body>

<?php  
for ($i = 0; $i <= 22; $i++)
{
 echo "the number is: $i <br>";   
}
$colors =array("red", "green" ,"blue", "yellow");
foreach ($colors as $value) 
{
    echo "$value <br>";
}
//while

$a=2;

while ($a <=22)
{
echo "the number is: $a <br>";
$a++;
}
//do
$s=5;

do {
    echo "the number is: $s <br>";
    $s++;
} while ($s <= 20);


?>
</body>
</html>