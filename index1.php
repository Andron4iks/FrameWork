<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>

<?php 
	
	// Переменные

	$number = 3;
	$bool = false;
	$float = 5.5;
	$string = "Hi!";

 ?>

<?php 

	//Константы

	echo PHP_VERSION;

	define('PI', '7,8');
	echo "<br />";
	echo PI;
	
	echo "<br />" . defined("PI");

 ?>

 <?php 

 //Арифметика

 	$a = 132;
 	$b = 43;
 	$sum = $a + $b;
 	$diff = $a - $b;
 	$mult = $a * $b;
 	$dil = $a / $b;
 	$module = $a % $b;

 	echo "Сумма  =  $sum <br />
 				Разница = $diff <br/>
 				Умножение = $mult <br/>
 				Деление = $dil <br/>
 				Модуль = $module <br/>";
  ?>

  <?php 
  	//Строчные операции

  $str1 = "Первая";
  $str2 = "Вторая";

  	echo $str1 ." ". $str2 . " \" \\";
   ?>

   <?php 
   	//логические операции

   $x=12;
   $y=34;
   $z=4.25;

   $bool_1 = $x != $z;
   $bool_2 = $x >= $z;

   echo "<br/>".$bool_1."<br/>".$bool_2;

   $bool_3 = !($x == $y);
   $bool_4 = $x == $y || $z < $y;
   $bool_5 = $z != $y && $x < $y;
   $bool_6 = $z != $x ^ $x > $y;
   $bool = !($x != $y && $z < $x)||$x != $y;

   echo "<br/>".$bool_3."<br/>".$bool_4."<br/>".$bool_5."<br/>".$bool_6."<hr/>".$bool;

    ?>
<?php 

	//Эквивалентность

$string = "What";
$num = 0;

$bool1 = $string == true;

echo "<br/>".$bool1;

$bool2 = $num == "";
echo "<br/>".$bool2;

$bool3 = $string === true;

echo "<hr/>".$bool3;

$bool4 = $num === "";
echo "<br/>".$bool4;
 ?>

 <?php 
//Условные операторы

 $x=10;
 $y=5;

 if ($x == $y && $x!=12 && $y==5 && ($x + 5)==15) {
 	echo "<br/>Ok!";
 }
 	else if ($x == 15 || $y != 7){
 		$x = 6;
 		echo $x;
 	}
 	else {
 		echo "<br/>Not!";
 	}
 	$x == $y ? $str = "Yes" : $str = "No";

 	echo "<br/>".$str;

 		$x = 10;

 		switch ($x) {
 			case 11:
 				echo "<br/>Эта переменная равна $x";
 				break;
 			
 			default:
 				echo "<br/>Нет совпадений";
 				break;
 		}

  ?>
<?php 

//Циклы
	for ($i=0; $i <= 10; $i++) {
		if ($i == 10) continue; 
		if ($i >= 5) break;
		echo "<br/> i = $i <br/>";
	}

	$x = 0;

	while ( $x <= 10) {
		if ($x==5) {
			for ($y=0; $y <=10 ; $y+=5) { 
				echo "y = $y<br/>";
			}
		}
		echo "$x<br/>";
		$x++;

	}
 ?>

 <?php 
 //Function

function FName($value, $x, $y)
 {
 	$value = math($x, $y);
 	echo $value;
 }

function math($x, $y){
	$summa = $x + $y;
	return $summa;
}

$x= 12;
$y= 35;

FName($s, $x, $y);

  ?>

  <?php 
  	//Array 1
  	$array = array(12, -7.5, "Ok", true);
  	$array[] = "No!";
  	print_r($array);

  	for ($i=0; $i < count($array); $i++) { 
  		echo "$i = $array[$i]<br>";
  	}

  	$arrayName = array('age' => 10, 'name' => Petr, 'sex' => man, 'height' => 180);

  	$arrayName['age'] = 25;

  	print_r($arrayName);

  	echo FunctionName($arrayName);

  	function FunctionName($array)
  	{
  		foreach ($array as $key => $value) {
  		echo $key." + ".$value."<br>";
  	}
  		return;
  	}
   ?>

   <?php

   //Array 2 
   	$arrayName = array(array(1, "str", true),array(10),array("string"),array(3.45));

   	print_r($arrayName);

   	echo $arrayName[0][1];
    ?>

    <?php

    	//Область видимости
    $x= 1;
    echo "$x<br>";
    $x= 2;
    echo "$x<br>";

    test();

    function test(){

    	global $x;
    	$x += 25;

    }
    echo "$x<br>";

    function test2(){

    	static $yz;
    	$yz += 20;
    	echo "$yz<br/>";

    }

    for ($i=0; $i < 10; $i++) { 
    	test2();
    }
     ?>

<?php 

//Connect
/*
require 'file';
require_once 'file';
include 'file';
include_once 'file';
*/
 ?>

 <?php 
 	//Мат функции

 	echo M_PI."<br>".M_E."<br>";
 	$x = -1;
 	echo abs($x)."<br>";

 	$y = 2.51;

 	echo round($y)."<br>";
 	echo ceil($y)."<br>";
 	echo floor($y)."<br>";

 	echo mt_rand (5, 10)."<br>";
 	echo min (5, 10)."<br>";
 	echo max (5, 10)."<br>";

  ?>

  <?php 
  	//Строковые ф-ции

  $str = "For Example";

  echo strlen($str)."<br>";
  echo strpos($str, "E")."<br>";
  		strtolower($str);
  
  if (strpos(strtolower($str), "f") === false) {
  	echo "F not found";
  }
  	else echo "F found !!!";

  	echo "<br>".substr($str, 1, 5);
  	echo "<br>".str_replace("For", "This", $str)."<br>";

  	$str1 = "<br><input>123</input>";
  	echo htmlspecialchars($str1);

  	echo "<br>".strtolower($str)." ".strtoupper($str);

  	echo "<br>".md5($str);
  	echo '<br>'.trim($str);
   ?>     