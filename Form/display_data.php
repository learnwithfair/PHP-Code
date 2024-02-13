<?php
include "function.php";
$objdatabase  = new database();
$display_mgs  = $objdatabase->display_data();
$display_mgs2 = $objdatabase->display_data();

if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] = 'delete' ) {
        $delete_id  = $_GET['id'];
        $delete_mgs = $objdatabase->delete_data( $delete_id );
        header( "Location: display_data.php" );
        exit();
    }
}

$empty_check = mysqli_fetch_assoc( $display_mgs2 );
if ( !( isset( $empty_check ) ) ) {
    echo "Data is not available";
    exit;
} elseif ( !$display_mgs ) {

    header( "Location: form.php" );
    exit();
} else {

    ?>

<!--#############################################################--->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        border-collapse: collapse;
        border: 1px solid black;
        text-align: center;
        table-layout: fixed;

    }

    td,
    th {
        width: 7%;
        border: 1px solid black;
        padding: 8px;

    }

    td,
    td>a {
        height: 50px;
        overflow: auto;
        text-decoration: none;

    }

    .text_align {
        text-align: justify;

    }

    .editbtn,
    .deletebtn {
        cursor: pointer;
        padding: 5px;
        font-size: 18px;
        box-shadow: 1px 2px 3px black;
        text-decoration: none;
    }

    .deletebtn {
        margin-top: 300px;
        color: white;
        background: red;
    }

    .editbtn {
        color: black;
        background: yellow;
    }
    </style>
</head>

<body>
    <div class="containter">
        <table>
            <thead>
                <tr>
                    <th style="">Serial No</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>Gmail</th>
                    <th>Gender</th>
                    <th>Subject</th>
                    <th>Skills</th>
                    <th>Image</th>
                    <th>Comment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php $count = 0; while ( $student_data = mysqli_fetch_assoc( $display_mgs ) ) {
					$count++;?>
                <tr>
                    <td style=""><?php echo $count ?></td>
                    <td class="text_align"><?php echo $student_data['Name'] ?></td>
                    <td><?php echo $student_data['Age'] ?></td>
                    <td><a href="tel:<?php echo $student_data['Mobile'] ?>"><?php echo $student_data['Mobile'] ?></a>
                    </td>
                    <td><?php echo $student_data['Password'] ?></td>
                    <td><a href="mailto:<?php echo $student_data['Gmail'] ?>"><?php echo $student_data['Gmail'] ?></a>
                    </td>
                    <td><?php echo $student_data['Gender'] ?></td>
                    <td><?php echo $student_data['Subject'] ?></td>
                    <td class="text_align"><?php echo $student_data['Skill'] ?></td>
                    <td><img src="<?php echo $student_data['Image'] ?>" height="80px" width="80px" /></td>
                    <td class="text_align"><?php echo $student_data['Comment'] ?></td>
                    <td method="post" action=""><a class="editbtn"
                            href="edit.php?status=edit&&id=<?php echo $student_data['ID'] ?>">Edit</a>
                        <p></p><a name="delete_btn" class="deletebtn"
                            href="display_data.php?status=delete&&id=<?php echo $student_data['ID'] ?>">Delete</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        </br></br></br>
        <div style="color: red">
            <?php if ( !$display_mgs ) {

    }
    ?>
        </div>
    </div>
</body>

</html>

<?php

}

?>