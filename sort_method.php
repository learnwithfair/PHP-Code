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
            <h1 style="color: white;">SORT METHOD</h1>
        </div>

        <!-- Body Start -->
        <h3 class="Body">
            <?php
				$numbers = array(2,5,9,4,3,5);
                $strs = array ("RAHAT", "SUHAN", "BAPPY", "NAYEEM", "MATIN", "SHADHIN");

                function prints($number){                    
                     for($i = 0 ; $i<count($number); $i++){
                         if ((count($number)-1) == $i){
                             echo ($number[$i]);
                         }else{
                            echo ($number[$i]).", ";
                         }
                  
                }
                }
                echo "Before sorting Integer Numbers : ";
                prints($numbers);
                sort($numbers);
                echo "</br>After sorting Integer Numbers : ";
                prints($numbers);
                echo "</br>Before sorting Strings : ";
                prints($strs);
                sort($strs);
                echo "</br>After sorting Strings : ";
                prints($strs);
               
                
			?>
        </h3>
        <!-- Body End -->

		 <!-- Footer start -->
        <div class="footer">
            <h1 style="color: white;">Learn with fair Powered by Rahatul Rabbi</h1>
        </div>
    </div>

</body>

</html>