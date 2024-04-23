<?php
$showAlert = false;
$showerror = false;

// Process form data on form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';

    // Fetching user input
    $user_name = isset($_POST["username"]) ? $_POST["username"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $subject = isset($_POST["subject"]) ? $_POST["subject"] : '';
    $message = isset($_POST["message"]) ? $_POST["message"] : '';

    $sql = "INSERT INTO `contact` (`username`, `email`, `subject`, `message`) 
            VALUES ('$user_name', '$email', '$subject', '$message')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $showAlert = true;
        header("Location:../index.php?contactsuccess=true");
        exit();
        
    } else {
        $showerror = true;
        header("Location:../index.php?contactsuccess=false&error=$showerror");
        exit();
    }
}

?>
