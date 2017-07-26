<?php

$uploaddir = '/usr/home/user8/public_html/MYPHP/upload';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

function upload ()
{
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
    echo "Done";
}
else {
    echo "error!"; exit;
}
return $result;
}

var_dump(upload());

    if (count(glob($uploaddir.'/*')) == 'TRUE' )
    {
        echo "not worked";
    }
    else {
        echo "worked";
    }
$a = 5;
$b = 2;


function test ($a, $b)
{
   if ($a == $b)
   {
    echo "yes";
   }
   else {
       echo "no";
   }
}

$c = test();

echo $a;


echo "hello";






?>
