<?php

$start_num = "1";
$last_num = "5"; 
$y = (ord($last_num) - ord($start_num)) + 1;
for($i=1; $i <= $y; ++$i){
	for($j=1;$j<=$i;++$j)
	{
		echo ($start_num."&nbsp;");
		}
		++$start_num;
		echo ("<br>");
}
?>