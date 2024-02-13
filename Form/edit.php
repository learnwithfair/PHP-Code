<?php
include "function.php";
$objdatabase = new database();

if ( isset( $_GET["status"] ) ) {
    if ( $_GET['status'] = "edit" ) {
        $update_id   = $_GET["id"];
        $update_data = $objdatabase->display_data_by_id( $update_id );
    }
}
if ( isset( $_POST["update"] ) ) {
    $update_mgs = $objdatabase->update_data( $_POST );
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
                            <input type="text" name="u_name" value="<?php echo $update_data['Name']; ?>"
                                required /></br></br>
                            <input type="number" name="u_age" value="<?php echo $update_data['Age']; ?>" /></br></br>
                            <input type="tel" name="u_mobile" pattern="+[0-9]"
                                value="<?php echo $update_data['Mobile']; ?>" required /></br></br>
                            <input type="password" name="u_password" value="<?php echo $update_data['Password']; ?>"
                                required /></br></br>
                            <input type="email" name="u_gmail" value="<?php echo $update_data['Gmail']; ?>"
                                required /></br></br>
                            <input type="radio" name="u_gender" value="Male">Male</input>
                            <input type="radio" name="u_gender" value="Female">Female</input>
                            <input type="radio" name="u_gender" value="Other" checked>Other</input></br></br>
                            <select name="u_subject">
                                <option value="None" checked> Select</option>
                                <option value="CES"> CSE</option>
                                <option value="EEE"> EEE</option>
                                <option value="ICE"> ICE</option>
                                <option value="ETE"> ETE</option>
                                <option value="EECE"> EECE</option>
                                <option value="CE"> CE</option>
                            </select></br></br>
                            <input type="checkbox" name="u_HTML" value="HTML, ">HTML</input>
                            <input type="checkbox" name="u_CSS" value="CSS, ">CSS</input>
                            <input type="checkbox" name="u_JAVA Script" value="JAVA Script, ">JAVA Script</input>
                            <input type="checkbox" name="u_PHP" value="PHP, ">PHP</input>
                            <input type="checkbox" name="u_JQuery" value="JQuery, ">JQuery</input>
                            <input type="checkbox" name="u_Bootstrup" value="Bootstrup, ">Bootstrup</input>
                            <input type="checkbox" name="u_None" value="None." checked>None</input>
                            </br></br>
                            <input type="file" name="u_image" required />
                        </th>
                    </table>
                    <input type="hidden" name="U_ID" value="<?php echo $update_data['ID']; ?>">
                    </br></br> </br></br>

                    <fieldset>
                        <legend>Comment</legend>
                        <textarea name="u_comment" cols="80" rows="5"><?php echo $update_data['Comment']; ?></textarea>

                    </fieldset>
                </fieldset>

                <div class="submit_btn">
                    <input type="submit" name="update" style="cursor:pointer;" value="Update"
                        }></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" name="clear" style="cursor:pointer;"
                        value="Clear"></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a name="display" class="displaybtn" target="blank" href="display_data.php">Display</a>
                </div>


            </form>
            <?php if ( isset( $update_mgs ) ) {
    echo $update_mgs;
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