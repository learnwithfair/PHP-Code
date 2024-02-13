<?php
class database {
    private $connect;
    public function __CONSTRUCT() {
        $bdhost = "localhost";
        $bduser = "root";
        $bdpass = "";
        $bdname = "student_info";

        $this->connect = mysqli_connect( $bdhost, $bduser, $bdpass, $bdname );
        if ( !$this->connect ) {
            die( "Data base connectin Error!!" );
        }

    }

    public function store_data( $data ) {
        $HTML = $CSS = $JAVA_Script = $PHP = $JQuery = $Bootstrup = $none = "";

        $target_dir = "uploads/";
        $file_name  = $target_dir . $_FILES["image"]["name"];
        // $imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
        $tamp_name = $_FILES["image"]["tmp_name"];

        //  $none = "None";

        $full_name = $data["name"];
        $age       = $data["age"];
        $mobile    = $data["mobile"];
        $password  = $data["password"];
        $gmail     = $data["gmail"];
        $gender    = $data["gender"];
        $subject   = $data["subject"];
        // $image = $data["image"];

        if ( isset( $data["HTML"] ) ) {
            $HTML = $data["HTML"];
        }
        if ( isset( $data["CSS"] ) ) {
            $CSS = $data["CSS"];
        }
        if ( isset( $data["JAVA Script"] ) ) {
            $JAVA_Script = $data["JAVA Script"];
        }
        if ( isset( $data["PHP"] ) ) {
            $PHP = $data["PHP"];
        }
        if ( isset( $data["JQuery"] ) ) {
            $JQuery = $data["JQuery"];
        }
        if ( isset( $data["Bootstrup"] ) ) {
            $Bootstrup = $data["Bootstrup"];
        }
        if ( isset( $data["None"] ) ) {
            $none = $data["None"];
        }
        $skill = $HTML . $CSS . $JAVA_Script . $PHP . $JQuery . $Bootstrup . $none;
        // if(isset($data["None"])){
        //     $none = $data["None"];
        // }
        $comment = $data["comment"];
        $query   = "INSERT INTO student_info_table(Name, Age, Mobile, Password, Gmail, Gender, Subject, Skill, Image, Comment)
                    VALUE('$full_name', $age, $mobile, '$password', '$gmail', '$gender', '$subject', '$skill', '$file_name', '$comment')";

        if ( mysqli_query( $this->connect, $query ) ) {
            move_uploaded_file( $tamp_name, $file_name );
            return "Information Added successfully.";
        }
    }

    public function display_data() {
        $query = "SELECT * FROM student_info_table";
        if ( mysqli_query( $this->connect, $query ) ) {
            $return_data = mysqli_query( $this->connect, $query );
            return $return_data;
        }
    }

    public function display_data_by_id( $id ) {
        $query = "SELECT * FROM student_info_table WHERE ID = $id";
        if ( mysqli_query( $this->connect, $query ) ) {
            $return_data = mysqli_query( $this->connect, $query );

            $fetch_data = mysqli_fetch_assoc( $return_data );

            return $fetch_data;
        }

    }

    public function delete_data( $id ) {
        $catch_img   = "SELECT * FROM student_info_table WHERE ID = $id";
        $stdent_data = mysqli_query( $this->connect, $catch_img );
        $all_data    = mysqli_fetch_assoc( $stdent_data );

        $delete_query = "DELETE FROM student_info_table WHERE ID = $id";
        if ( mysqli_query( $this->connect, $delete_query ) ) {
            mysqli_query( $this->connect, $delete_query );
            if ( unlink( $all_data['Image'] ) ) {
                unlink( $all_data['Image'] );
            }
            return "ID $id is deleted successfuly!! Please reload your page.";
        }

    }

    public function update_data( $data ) {
        $id    = $data["U_ID"];
        $query = "SELECT * FROM student_info_table WHERE ID = $id";
        if ( mysqli_query( $this->connect, $query ) ) {
            $return_data = mysqli_query( $this->connect, $query );

            $fetch_data = mysqli_fetch_assoc( $return_data );
            unlink( $fetch_data['Image'] );}

        $HTML = $CSS = $JAVA_Script = $PHP = $JQuery = $Bootstrup = $none = "";

        $target_dir = "uploads/";
        $file_name  = $target_dir . $_FILES["u_image"]["name"];
        // $imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
        $tamp_name = $_FILES["u_image"]["tmp_name"];

        $full_name = $data["u_name"];
        $age       = $data["u_age"];
        $mobile    = $data["u_mobile"];
        $password  = $data["u_password"];
        $gmail     = $data["u_gmail"];
        $gender    = $data["u_gender"];
        $subject   = $data["u_subject"];

        if ( isset( $data["u_HTML"] ) ) {
            $HTML = $data["u_HTML"];
        }
        if ( isset( $data["u_CSS"] ) ) {
            $CSS = $data["u_CSS"];
        }
        if ( isset( $data["u_JAVA Script"] ) ) {
            $JAVA_Script = $data["u_JAVA Script"];
        }
        if ( isset( $data["u_PHP"] ) ) {
            $PHP = $data["u_PHP"];
        }
        if ( isset( $data["u_JQuery"] ) ) {
            $JQuery = $data["u_JQuery"];
        }
        if ( isset( $data["u_Bootstrup"] ) ) {
            $Bootstrup = $data["u_Bootstrup"];
        }
        if ( isset( $data["u_None"] ) ) {
            $none = $data["u_None"];
        }
        $skill = $HTML . $CSS . $JAVA_Script . $PHP . $JQuery . $Bootstrup . $none;
        // if(isset($data["None"])){
        //     $none = $data["None"];
        // }
        $comment = $data["u_comment"];

        $query = "UPDATE student_info_table SET Name  =  '$full_name', Age = $age, Mobile = $mobile, Password = '$password' , Gmail = '$gmail', Gender = '$gender', Subject = '$subject', Skill = '$skill', Image = '$file_name', Comment = '$comment' WHERE $id = ID";
        if ( mysqli_query( $this->connect, $query ) ) {

            move_uploaded_file( $tamp_name, $file_name );
            return "Data Updated successfully.";
        }
    }

}
?>