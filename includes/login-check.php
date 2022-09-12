<?php
    session_start();
    include "../db_config/db_conn.php";

    if(isset($_POST['email']) && isset($_POST['password'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email =validate( $_POST['email']);
        $pass =validate( $_POST['password']);

        if( empty($email) && empty($pass) ){
            header("location: ../login.php?error=Username and Password Are Required");
            exit();

        }else if (empty($email)){
            header("location: ../login.php?error=Username Is Required");
            exit();
        } else if (empty($pass)){
            header("location: ../login.php?error=Password Is Required");
            exit();
        } 
        else {
           

            $sql = "SELECT * FROM users WHERE email = '$email' AND password ='$pass'";

            $result = mysqli_query($conn , $sql);

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);

                if ($row['cusuname'] === $uname && $row['password'] === $pass){
                    $_SESSION['fname'] = $row['f_name'];
                    $_SESSION['sname'] = $row['s_name'];
                    $_SESSION['email']= $row['email'];
                    $_SESSION['user_id']= $row['id_user'];

                    header("location: ../index.php");
                      exit();
                }else{
                    header("location: ../login.php?error=Username or Password Is Wrong");
                exit();
                }

            }else{
                header("location: ../login.php?error=Username or Password Is Wrong");
            exit();
            }
        }

    }
    else{
        header("location: ../login.php?error");
        exit();
    }
?>