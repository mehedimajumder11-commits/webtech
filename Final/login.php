<?php
// Initialize variables
$email = $password = "";
$emailErr = $passwordErr = $successMsg = "";

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect POST data
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    // -----------------------------
    // VALIDATION
    // -----------------------------
    
    if (empty($email)) {
        $emailErr = "Email field cannot be empty.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format.";
    }
    
    if (empty($password)) {
        $passwordErr = "Password field cannot be empty.";
    }
    
    // If no errors
    if (empty($emailErr) && empty($passwordErr)) {
        $successMsg = "Login Successful!<br>Email: " . htmlspecialchars($email);
        // Optional: start session or redirect user here
        
        // After showing success message, refresh page to clear form
        // Use delay 2 seconds to show success
        header("Refresh:2; url=" . $_SERVER['PHP_SELF']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-container">
    <h2>Login</h2>

    <?php
    if (!empty($successMsg)) {
        echo "<div class='success-msg'>{$successMsg}</div>";
    }
    ?>

    <form action="" method="POST">
        
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Enter your email">
            <span class="error"><?php echo $emailErr; ?></span>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password">
            <span class="error"><?php echo $passwordErr; ?></span>
        </div>

        <button type="submit">Login</button>

    </form>
</div>

</body>
</html>
