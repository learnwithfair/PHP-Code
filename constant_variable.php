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
        }
    </style>
</head>

<body>
    <div class="container">

     <!-- Header start -->
        <div class="header">
            <h1 style="color: white;">Constant variables initialization</h1>
        </div>

        <!-- Body Start -->
        <div class="Body">
            <?php
            define("MAX", 1000,false);
                class constant_variable{
                    function __construct(){
                        echo "<h3>MAX = ".MAX ."</h3>";
                    }
                    function summation($number){
                    $result = MAX + $number;
                    return $result;
                 }
                    function sub($number){
                    $result = MAX - $number;
                    return $result;
                 }
                }
                $obj = new constant_variable();
                $final_result1 = $obj->summation(10);
                $final_result2 = $obj->sub(10);
				echo "<h1>MAX + 10 =  $final_result1 </br></h1>";
				echo "<h1>MAX - 10 =  $final_result2 </br></h1>";
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