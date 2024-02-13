<?php
//Arithmetic Operator
$details = "Arithmetic Operator";
$br = "<br>";
$number1 = 20;
$number2 = 10.42;
$sum = $number1 + $number2;
$sub = $number1 - $number2;
$mul = $number1 * $number2;
$div = $number1 / $number2;
echo $details," For Summation Example :", $br,$br, $number1," + ",$number2 ," = ",$sum,$br,$br; 
echo $details," For Subtraction Example :", $br,$br, $number1," - ",$number2 ," = ",$sub,$br,$br; 
echo $details," For Multiplication Example :", $br,$br, $number1," * ",$number2 ," = ",$mul,$br,$br; 
echo $details," For Division Example :", $br,$br, $number1," / ",$number2 ," = ",$div,$br,$br; 

//Assignment Operator
$details = "<br><br>Assignment Operator :";
$number3 = $number1;
echo $details ,$br,$br,"Number1 = ",$number1,$br,"Number2 = ",$number2,$br;
echo "After Assign number3 assigned by value of number1 : <br> Number3 = ",$number3,$br,$br;

//Logical Operator
$details = "<br><br>Logical Operator :";
echo $details,$br,$br;
//OR Statement
echo "OR Statement '||' :<br>";
if ($number1>= $number3 || $number2>=$number3){
	echo "True<br>";
}
//And Statement
echo "And Statement '&&' :<br>";
if ($number1>= $number3 && $number2 >=$number3){
	echo "True";
}else
	echo "False";
//NOT Statement
echo "<br>NOT Statement '!' :<br>";
if ($number1!= $number3){
	echo "True";
}else
	echo "False";

//Comparison Operator
$details = "<br><br>Comparison Operator :";
echo $details,$br,$br;
if ($number1> $number2){
	echo $number1," > ",$number2, " = True",$br;
} else{
	echo $number1," >",$number2, " = False",$br;
	}
if ($number2<$number1){
	echo $number2," < ",$number1, " = True",$br,$br;
	}

//Increment/Decrement Operator
$details = "<br><br>Increment/Decrement Operator :";
echo $details,$br,$br;
echo "Posfix Increment : ",$number1++,$br;
echo "Prefix Increment : ",++$number1,$br;
echo "Postfix Decrement : ",$number2--,$br;
echo "Prefix Decrement : ",--$number2,$br;
//Index Array , Associate Array, Multidimentional Array 
//Array Operator
//String Operator
$first_name = "Md ";
$middle_name = "Rahatul ";
$last_name = "Rabbi";
$full_name = $first_name.$middle_name.$last_name;
$details = "My name is ";
echo $br,$br,"String Operator :<br>",$details,$full_name;

?>