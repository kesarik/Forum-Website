<?php
$showerror = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';

    $user_name = isset($_POST['signupusername']) ? $_POST['signupusername'] : '';
    $pass = isset($_POST['signuppassword']) ? $_POST['signuppassword'] : '';
    $cpass = isset($_POST['signupcpassword']) ? $_POST['signupcpassword'] : '';

    $existsql = "select * from `users` where user_name='$user_name'";
    $result = mysqli_query($conn, $existsql);
    $numrows = mysqli_num_rows($result);

    if ($numrows > 0) {
        $showerror = "Username already in use.";
    } else {
        if ($pass == $cpass) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_name`, `user_pass`, `timestamp`) VALUES ('$user_name', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showAlert = true;
                header("Location:../index.php?signupsuccess=true");
                exit();
            }
        } else {
            $showerror = "Password do not match.";
        }
    }

    // Set header for signup failure
    header("Location:../index.php?signupsuccess=false&error=$showerror");
    exit();
}
?>