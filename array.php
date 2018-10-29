<?php
$a=array("ram","shyam","rohan");
for ($i = 0; $i < 3; $i++) {
    echo $a[$i]."\n";
}

foreach ($a as $b)
{
    echo $b."\n";
}

$b=array("amit"=>12, "sharma"=>25, "rahul"=>22);
foreach ($b as $k=>$s)
{
    echo $k." => ".$s."\n";
}
$c=array(1,2,3,5,6);
$sum=0;
for($w=0;$w<5;$w++)
{
    $sum=$sum+$c[$w];
}
echo $sum;