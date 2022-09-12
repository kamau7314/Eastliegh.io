<?php
    session_start();
    include "db_conn.php";

    if(isset($_POST['fname']) && isset($_POST['sname']) && isset($_POST['email'])
      && isset($_POST['password']) && isset($_POST['re_password'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $fname =validate( $_POST['fname']);
        $sname =validate( $_POST['sname']);
        $email =validate( $_POST['email']);
        $pass =validate( $_POST['password']);
        $re_pass =validate( $_POST['re_password']);

        $user_data = 'fname=' . $fname. '&sname='. $sname .'&email='. $email;
        

        if( empty($fname) && empty($sname) && empty($email)  && empty($pass) && empty($re_pass) ){
            header("location: ../sign-up.php?error=fill all the spaces&$user_data");
            exit();

        }else if (empty($fname)){
            header("location: ../sign-up.php?error=first name Is Required&$user_data");
            exit();
        }else if (empty($sname)){
            header("location: ../sign-up.php?error=second name Is Required&$user_data");
            exit();
        }else if (empty($email)){
            header("location: ../sign-up.php?error=email Is Required&$user_data");
            exit();
        } else if (empty($pass)){
            header("location: ../sign-up.php?error=Password Is Required&$user_data");
            exit();
        } else if (empty($re_pass)){
            header("location: ../sign-up.php?error=repeat Password&$user_data");
            exit();
        } 
        else if ($pass !== $re_pass){
            header("location: ../sign-up.php?error=the confirmation password does not match&$user_data");
            exit();
        } 
        else {
            //hashing the password

               

                $sql = "SELECT * FROM users WHERE email='$email'";
                $result = mysqli_query($conn , $sql);
            
                if(mysqli_num_rows($result) > 0){
                    header("location: ../sign-up.php?error=username is already taken&$user_data");
            exit();
                }else{
                       $sql2 = "INSERT INTO users(f_name, s_name, email,  password) VALUES('$fname', '$sname', '$email', '$pass' )";
                       $result2 = mysqli_query($conn , $sql2);
                       if($result2){
                           header("location: ../sign-up.php?success=your account has been created");
                        exit();

                       }else{
                        header("location: ../sign-up.php?error=unknownerror has occured&$user_data");
                        exit();

                       }
                }
 
        }

    }
    else{
        header("location: ../register.php?error=error database not connected");
        exit();
    }
?>