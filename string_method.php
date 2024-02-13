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
            <h1 style="color: white;">String Method</h1>
        </div>

        <!-- Body Start -->
        <div class="Body">
            <?php
            $str = "MD RAHATUL RABBI";
            $str2 = " RAJU";
            $lenght = strlen($str);
            $word_count = str_word_count($str);
            $str_position  = strpos($str,"A") + 1;
            $str_reverse = strrev($str);
            $str_replaces = str_replace("RABBI", "ISLAM",$str);
            $str_concatenation = $str.$str2;  
			?>
            <h1>String is : <?php echo $str ?></h1>
            <h3>
                <ol>
                    <li><?php echo "String length : ".$lenght ?></li>
                    <li><?php echo "String word count : ".$word_count ?></li>
                    <li><?php echo "String position of 'A' : ".$str_position ?></li>
                    <li><?php echo "String Reverse : ".$str_reverse?></li>
                    <li><?php echo "String Replace 'RABBI' by 'ISLAM' : ".$str_replaces ?></li>
                    <li><?php echo "String Concatenation '".$str2 ."' with '".$str."' : ".$str_concatenation ?></li>
                 </ol>
            </h3>
        </div>
        <!-- Body End -->

		 <!-- Footer start -->
        <div class="footer">
            <h1 style="color: white;">Learn with fair Powered by Rahatul Rabbi</h1>
        </div>
    </div>

</body>

</html>