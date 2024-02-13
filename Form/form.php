<?php
include "function.php";
$objdatabase = new database();
if ( isset( $_POST['submit'] ) ) {
    $return_mgs = $objdatabase->store_data( $_POST );
}

?>


<!DOCTYPE html>
<html lang="en">

<?php
$header_footer_bgcolor = "rgb(14, 14, 14)";
$body_color            = "#ddd";
$shadow_color          = "rgb(146, 135, 135)";
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
        width: 900px;
        margin: 0;
        position: relative;
        margin: 0 auto;
        text-align: center;
        border: 3px <?php echo $shadow_color ?>;
        border-radius: 5px;
        box-shadow: 2px 3px 5px <?php echo $shadow_color ?>;
        background-color: <?php echo $body_color ?>;

    }

    .header {
        padding: 10px;
        background-color: <?php echo $header_footer_bgcolor ?>;
        top: 0px;
        box-shadow: 2px 3px 5px <?php echo $shadow_color ?>;
    }

    .footer {
        padding: 20px;
        background-color: <?php echo $header_footer_bgcolor ?>;
        bottom: 0px;
        width: 95.70%;
        font-size: 8px;
        font-family: cursiva-monotype;
        font-style: italic;
        box-shadow: 2px 3px 5px <?php echo $shadow_color ?>;
    }

    h1 {
        color: black;
    }

    .Body {
        padding: 30px 10px;
        text-align: left;
    }

    .submit_btn {
        text-align: center;
        margin-top: 50px;


    }

    .displaybtn {

        text-decoration: none;
        padding: 1px 5px;
        cursor: pointer;
        border: 2px solid #6C6C6C;
        background: #E5E5E5;

    }
    </style>
</head>


<body>
    <div class="container">

        <!-- Header start -->
        <div class="header">
            <h1 style="color: white;">PHP Form Demo</h1>
        </div>

        <!-- Body Start -->
        <div class="Body">
            <form action="" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Student's Info</legend>
                    <table>
                        <th>
                            <label>Full Name</label></br></br>
                            <label>Age</label></br></br>
                            <label>Mobile</label></br></br>
                            <label>Password</label></br></br>
                            <label>Gmail ID</label></br></br>
                            <label>Gender</label></br></br>
                            <label>Subject</label></br></br>
                            <label>Skills</label></br></br>
                            <label>Upload Image</label>
                        </th>
                        <th>
                            <label>: </label></br></br>
                            <label>: </label></br></br>
                            <label>: </label></br></br>
                            <label>: </label></br></br>
                            <label>: </label></br></br>
                            <label>: </label></br></br>
                            <label>: </label></br></br>
                            <label>: </label></br></br>
                            <label>: </label>
                        </th>

                        <th>
                            </br>
                            <input type="text" name="name" placeholder="Enter Your Full Name" required /></br></br>
                            <input type="number" name="age" placeholder="22" /></br></br>
                            <input type="tel" name="mobile" pattern="+[0-9]" placeholder="01700000000"
                                required /></br></br>
                            <input type="password" name="password" placeholder="$123456789" required /></br></br>
                            <input type="email" name="gmail" placeholder="example@gmail.com" required /></br></br>
                            <input type="radio" name="gender" value="Male">Male</input>
                            <input type="radio" name="gender" value="Female">Female</input>
                            <input type="radio" name="gender" value="Other" checked>Other</input></br></br>
                            <select name="subject">
                                <option value="None" checked> Select</option>
                                <option value="CES"> CSE</option>
                                <option value="EEE"> EEE</option>
                                <option value="ICE"> ICE</option>
                                <option value="ETE"> ETE</option>
                                <option value="EECE"> EECE</option>
                                <option value="CE"> CE</option>
                            </select></br></br>
                            <input type="checkbox" name="HTML" value="HTML, ">HTML</input>
                            <input type="checkbox" name="CSS" value="CSS, ">CSS</input>
                            <input type="checkbox" name="JAVA Script" value="JAVA Script, ">JAVA Script</input>
                            <input type="checkbox" name="PHP" value="PHP, ">PHP</input>
                            <input type="checkbox" name="JQuery" value="JQuery, ">JQuery</input>
                            <input type="checkbox" name="Bootstrup" value="Bootstrup, ">Bootstrup</input>
                            <input type="checkbox" name="None" value="None." checked>None</input>
                            </br></br>
                            <input type="file" name="image" required />
                        </th>
                    </table>
                    </br></br> </br></br>

                    <fieldset>
                        <legend>Comment</legend>
                        <textarea name="comment" placeholder="Write your comment here..." cols="80" rows="5"></textarea>
                    </fieldset>
                </fieldset>
                <div class="submit_btn">
                    <input type="submit" name="submit" style="cursor:pointer;" value="Submit"
                        }></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" name="clear" style="cursor:pointer;"
                        value="Clear"></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a name="display" class="displaybtn" target="blank" href="display_data.php">Display</a>
                </div>


            </form>
            <?php if ( isset( $return_mgs ) ) {
    echo $return_mgs;
}
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