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
            margin: 0 auto;
          
            /* position: absolute; */
            
            text-align: center;
			border: 3px  <?php echo $shadow_color  ?>;
            border-radius: 5px;
            box-shadow: 2px 3px 5px  <?php echo $shadow_color  ?>;
            background-color: <?php echo $body_color  ?>;
            justify-content:center;
           
  			
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
             display: grid;
            grid-template-columns: auto auto;
            grid-column-gap: 20px;
           

        }
        

    </style>
</head>


<body>
    <div class="container">

	 <!-- Header start -->
        <div class="header">
            <h1 style="color: white;">PHP  Increment & Decrement Operator</h1>
        </div>

        <!-- Body Start -->
        <div class="Body">

         <!-- First Column start -->
           <div class="col1">
               <h1>Suffix Increment Operator</h1>

                <?php          
				$number = 5;                      
                echo "Number is : ".$number;
                echo "</br>";
                echo "Suffix increment Number : ".$number++;
                echo "</br>Suffix increment second times Number : ".$number++;
                echo "</br>";
                 $number += 1;
                echo "Suffix increment Number : ".$number;
                echo "</br>";
                echo "</br>";
                echo "</br>";
               

                //Prefix increment Operator
                 echo "<h1>Prefix Increment Operator</h1>";
                $number = 5;             
                echo "Number is : ".$number;
                echo "</br>";
                echo "Prefix increment Number : ".++$number;
                echo "</br>Prefix increment second times Number : ",++$number;
                echo "</br>";
                 $number += 1;
                echo "Prefix increment Number : ".$number;
                echo "</br>";
                echo "</br>";
                echo "</br>";
                
			?>
           </div>


            <!-- Second Column start -->
           <div class="col2">
                <!-- suffix decrement operator      -->
               <h1>Suffix Decrement Operator</h1>
                <?php          
				$number = 5;            
                echo "Number is : ".$number;
                echo "</br>";
                echo "Suffix decrement Number : ".$number--;
                echo "</br>Suffix decrement second times Number : ".$number--;
                echo "</br>";
                 $number -= 1;
                echo "Suffix decrement Number : ".$number;
                echo "</br>";
                echo "</br>";
                echo "</br>";

                //Prefix decrement Operator
                 echo "<h1>Prefix Decrement Operator</h1>";
                $number = 5;               
                echo "Number is : ".$number;
                echo "</br>";
                echo "Prefix decrement Number : ",--$number;
                echo "</br>Prefix decrement second times Number : ",--$number;
                echo "</br>"; 
                $number -= 1;
                echo "Prefix decrement Number : ".$number;
                echo "</br>";
                echo "</br>";
                echo "</br>";
                
			?>
           </div>
          
        </div>
        <!-- Body End -->

		 <!-- Footer start -->
        <div class="footer">
            <h1 style="color: white;">Learn with fair Powered by Rahatul Rabbi</h1>
        </div>
    </div>

</body>

</html>