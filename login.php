<?php
// Start or resume a session
session_start();

// Include the database connection file
include("connection.php");

// Function to sanitize input data
function sanitizeData($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = sanitizeData($_POST["user"]);
    $password = sanitizeData($_POST["pass"]);

    // SQL query using prepared statement to check if the user exists in the database
    $stmt = $conn->prepare("SELECT * FROM user WHERE User_Name=?");
    $stmt->bind_param("s", $username); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Fetch the user data from the database
        $user_data = $result->fetch_assoc();
        $hashed_password = $user_data['Password'];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Successful login
            $user_id = $user_data['user_id'];
            $user_role = $user_data['role']; 

            // Set session variables
            $_SESSION["user_id"] = $user_id;
            $_SESSION["username"] = $username;

            // Redirect based on user role
            if ($user_role == 'admin' || $user_role == 'staff') {
                header("Location: admin_panel.php");
                exit();
            } else {
                header("Location: homepage.php");
                exit();
            }
        } else {
            // Invalid password
            $_SESSION["error"] = "Invalid password";
            header("Location: login.php");
            exit();
        }
    } else {
        // Invalid username
        $_SESSION["error"] = "Invalid username";
        header("Location: login.php");
        exit();
    }
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&family=Bellota+Text:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Gowun+Dodum&family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.6.8/build/spline-viewer.js"></script>
    
    <link rel="stylesheet" href="css/loginStyles.css" />
</head>
<body>

<?php
    include 'navbar.php';
?>

<div class="spline-background">
    <spline-viewer url="https://prod.spline.design/6h0puN79WD5Hodvj/scene.splinecode"></spline-viewer>
</div>

<div class="textdes">
    Join us today, <br>
    Explore Your-Self & <br>
    Mindfulness 
</div>

<div class="formWrapper">
    <div class="logo">
        <div class="logotext">
            <h3>Welcome to</h3>
            <h2>MINDFUL</h2>
            <h4>Where Mental Health Matters.</h4>
        </div>
        <div class="logoimg">
            <img src="css/img/file (3).png" alt="">
        </div>
    </div>
    <form name="loginForm" action="login.php" method="POST">
    <div class="logincontainer">
        <div class="box2">
            <input type="text" id="un" name="user" placeholder="Enter your username" required>
        </div>
        <div class="box2">
            <input type="password" id="pw" name="pass" placeholder="Enter your password" required>
            <span toggle="#pw" class="toggle-password"><img src="img/svg/eye.svg" alt=""></span>
        </div>
        <div class="checkbox-container">
            <a href="">Forget Password</a>
        </div>
        <div class="submit-container">
          <input type="submit" id="btn" value="Login" name="submit"/>
        </div>
        <div class="dis">
            <a href="signup.php">New User? <br>
                Create an account here!...
            </a>
        </div> 
    </div>

    <?php
      if (isset($_SESSION["error"])) {
        echo '<div class="error-message">' . $_SESSION["error"] . '</div>';
        unset($_SESSION["error"]);
      }
    ?>
</form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const togglePassword = document.querySelector('.toggle-password');
    const passwordField = document.querySelector('#pw')
    togglePassword.addEventListener('click', function () {
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type)
        // Toggle between eye and eye-slash SVG icons
        if (type === 'password') {
            this.innerHTML = 
            `<img src="img/svg/eye.svg" alt="">`;
        } else {
            this.innerHTML = 
            `<img src="img/svg/eye-slash.svg" alt="">`;
        }
    });
    });
</script>

</body>
</html>
