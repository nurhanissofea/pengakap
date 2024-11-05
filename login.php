<?php

session_start();
include("db.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
       function validate($data){
        $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_POST['email']);
    $re_pass = validate($_POST['password']);

    if (empty($email)) {
        header("Location: auth-login-basic.php?error=Email is required");
        exit();
    } else if (empty($re_pass)){
            header("Location: auth-login-basic.php?error=Password is required");
        exit();
    } else {

        //hashing the password
        $re_pass = md5($re_pass);

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$re_pass'";
       $result = mysqli_query($conn, $sql);

       if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $re_pass) 
            {
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['userType'] = $row['userType'];
            
                if ($row['userType'] === "ketua pemimpin pengakap") {
                header("Location: dashboard_admin.php");
                } else {
                header("Location: dashboard_users.php");  // Redirect to user dashboard
                }
                exit();
            } 
            else {
                header("Location: auth-login-basic.php?error=Incorrect email or password");
                exit();
            }  
            } else {
                header("Location: auth-login-basic.php?error=Incorrect email or password");
            exit();
            }
        }

        } else {
    header("Location: auth-login-basic.php");
    exit();
}

?>