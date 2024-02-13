<!DOCTYPE html>
<html lang="en">

<?php
    $header_footer_bgcolor =  "rgb(14, 14, 14)";
    $body_color = "#ddd";
    $shadow_color = "rgb(146, 135, 135)";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #ffffff;
        }

        .container {
			width:900px;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
			border: 3px  <?php echo $shadow_color  ?>;
            border-radius: 5px;
            box-shadow: 2px 3px 5px  <?php echo $shadow_color  ?>;
            background-color: <?php echo $body_color  ?>;
  			
        }

        .header {
            padding: 10px;
            background-color: <?php echo $header_footer_bgcolor  ?>;
            top: 0px;
            box-shadow: 2px 3px 5px  <?php echo $shadow_color  ?>;
        }

        .footer {
            padding: 20px;
            background-color: <?php echo $header_footer_bgcolor  ?>;
            bottom: 0px;
            width: 95.70%;
            font-size: 8px;
            font-family: cursiva-monotype;
            font-style: italic;
            box-shadow: 2px 3px 5px  <?php echo $shadow_color  ?>;
        }

        h1 {
            color: black;
        }

        .Body {
            padding: 30px 10px;
            text-align : left;
        }
    </style>
</head>


<body>
    <div class="container">

	 <!-- Header start -->
        <div class="header">
            <h1 style="color: white;">PHP FUNCTION CREATE</h1>
        </div>

        <!-- Body Start -->
        <div class="Body">
            <?php
                //Default Function
				function display(){//function initialize
                    echo "I am inside the function</br>";
                }
                echo "<h1> Default Function</br></h1>";
                display(); //calling function

                //Parameterize Function
                function summation($a, $b){
                    $result = $a + $b;
                    return $result;
                }
                $num1 = 10;
                $num2 = 25;
                 echo "<h1> Parameterize Function</br></h1>";
                $final_result = summation($num1,$num2);                
                echo $num1 ." + ".$num2 ." = ". $final_result;

                //Array passing Function
                function array_passing($number){
                    $sum = 0;
                    for($i = 0; $i< count($number) ; $i++){
                        $sum = $sum + $number[$i];
                         if ((count($number)-1) == $i){
                             echo ($number[$i]);
                         }else{
                            echo ($number[$i])." + ";
                         }
                    }
                    echo "  =  ".$sum;
                }
                $numbers = array(1,2,3,4,5,6,7,8,9,10);
                 echo "<h1> Array passing Function</br></h1>";
                array_passing($numbers);

                    //Recursion Function
                  echo "<h1> Recursion Function</br></h1>";
                function recursion($n){
                    if($n==1){
                        return 1;
                    }
                    else{
                        return $n *($n - 1);
                    }
                }
                $number = 3;
                echo "<h3>Factorial value of $number! is = " .recursion($number)." </h3>";

			?>
        </div>
        <!-- Body End -->

		 <!-- Footer start -->
        <div class="footer">
            <h1 style="color: white;">Learn with fair Powered by Rahatul Rabbi</h1>
        </div>
    </div>

</body>

</html>