<?php 

session_start(); 
include("db.php");

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['userType']) && isset($_POST['password']) && isset($_POST['re_password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);
    $re_pass = validate($_POST['re_password']);
    $user_type = validate($_POST['userType']) ? $_POST['userType'] : '';

    $users_data = 'name='. $name . '&email='. $email;


    if (empty($name)) {
        header("Location: auth-register-basic.php?error=Name is required&$users_data"); //Full name null check
        exit();
    }else if(empty($email)){
        header("Location: auth-register-basic.php?error=Email is required&$users_data"); //Email null check
        exit();
    }
    else if(empty($user_type)){
        header("Location: auth-register-basic.php?error=User type is required&$users_data"); //Email null check
        exit();
    }
    else if(empty($pass)){
        header("Location: auth-register-basic.php?error=Password is required&$users_data");  //Password null check
        exit();
    }

    else if(empty($re_pass)){
        header("Location: auth-register-basic.php?error=Re-password is required&$users_data");  //Password confirmation null check
        exit();
    }

    else if($pass !== $re_pass){
        header("Location: auth-register-basic.php?error=The confirmation password  does not match&$users_data"); //Password confirmation verification
        exit();
    }

    else{

        if (strlen($re_pass) < 8) {                // Minimum length check
            header("Location: auth-register-basic.php?error=Password must be at least 8 characters&$users_data");
            exit();
        } if (!preg_match('/[A-Z]/', $re_pass)) {  // Uppercase letter check
            header("Location: auth-register-basic.php?error=Password must contain at least one uppercase letter&$users_data");
            exit();
        } if (!preg_match('/[a-z]/', $re_pass)) {  // Lowercase letter check
            header("Location: auth-register-basic.php?error=Password must contain at least one lowercase letter&$users_data");
            exit();
        } if (!preg_match('/[\W_]/', $re_pass)) {  // Special character check
            header("Location: auth-register-basic.php?error=Password must contain at least one special character&$users_data");
            exit();
        }

        //hashing the password
        $re_pass = md5($re_pass);

        $sql = "SELECT * FROM users WHERE email='$email' ";
        $result = mysqli_query($conn, $sql);

        // Store user type in the session
        $_SESSION['userType'] = $user_type;

        if (mysqli_num_rows($result) > 0)
        {
            header("Location: auth-register-basic.php?error=The email is taken try another&$users_data");
            exit();
        }
        else
        {
            $sql2 = "INSERT INTO users (name, email, password, userType) VALUES('$name', '$email', '$re_pass', '$user_type')";
            $result2 = mysqli_query($conn, $sql2);

            if ($result2) {
                header("Location: auth-register-basic.php?success=Your account has been created succesfully");
                exit();
            }
            else
            {
                header("Location: auth-register-basic.php?error-unknown error occured&$users_data");
                exit();
            }
        }


    }
    
}else{
    header("Location: auth-register-basic.php");
    exit();
}