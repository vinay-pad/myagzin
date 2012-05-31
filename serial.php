<?php

$a = Array();
$a[0] = 1;
foreach($a as $e)
{
echo $e;
}
$rr = serialize($a);
echo $rr;
$tt = unserialize($rr);

echo 'After unserialize';
foreach($tt as $er)
{
echo $er;
}
?>
