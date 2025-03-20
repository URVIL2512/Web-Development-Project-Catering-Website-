<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);

    $xml = simplexml_load_file("users.xml") or die("Cannot load XML file.");

    $loginSuccessful = false;
    
    foreach ($xml->user as $user) {
        if ($user->email == $email && $user->password == $password && $user->phone == $phone) {
            $loginSuccessful = true;
            break;
        }
    }

    if ($loginSuccessful) {
        echo "<script>alert('Login successful!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Login failed. Incorrect email, password, or phone number.'); history.back();</script>";
    }
}
?>
