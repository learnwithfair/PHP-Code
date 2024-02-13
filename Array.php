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
            text-align:left;
        }
    </style>
</head>


<body>
    <div class="container">

	 <!-- Header start -->
        <div class="header">
            <h1 style="color: white;">PHP Array Demo</h1>
        </div>

        <!-- Body Start -->
        <div class="Body">

            <h2>1D Array:</h2>
            <?php
				$numbers = array(2,3,4,5,6);
                echo "1D Array Numbers are : ";
                for($i = 0; $i<count($numbers);$i++){
                    echo $numbers[$i];
                    echo ", ";
                }
			?>
            <h1></h1>


            <h2>2D Array:</h2>
            <?php
				$numbers = array(
                    array(2,4),
                    array(5,6),            
                    );
                $len = count($numbers);
                echo "2D Array Numbers are : </br>";
               echo " <h1></h1>";
                for($row = 0; $row < $len ;$row++){
                    echo "| ";
                   for($col = 0; $col<$len ; $col++){
                        echo $numbers[$row][$col];
                        if($col == $len-1){
                            echo " |</br>";
                        }else{
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        }                   
                   }                
                }
			?>
            <h1></h1>


            <h2>3D Array:</h2>
            <?php
				$numbers = array(
                    array(2,4,6),
                    array(5,6,8),
                    array(9,6,3),
                   
                    
                );
                $len = count($numbers);
                echo "3D Array Numbers are : </br>";
               echo " <h1></h1>";
                for($row = 0; $row < $len ;$row++){
                    echo "| ";
                   for($col = 0; $col<$len ; $col++){
                        echo $numbers[$row][$col];
                        if($col == $len-1){
                            echo " |</br>";
                        }else{
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        }                   
                   }                
                }
			?>
            <h1></h1>
        </div>
        <!-- Body End -->

		 <!-- Footer start -->
        <div class="footer">
            <h1 style="color: white;">Learn with fair Powered by Rahatul Rabbi</h1>
        </div>
    </div>

</body>

</html>