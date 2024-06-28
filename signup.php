<?php
session_start(); // Ensure session is started
include("connection.php");

if (isset($_POST["submit"])) {
    $name = mysqli_real_escape_string($conn, $_POST["FullName"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $passwordConfirm = mysqli_real_escape_string($conn, $_POST["password2"]);
    $mail = mysqli_real_escape_string($conn, $_POST["email"]);
    $mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
    $gender = isset($_POST["gender"]) ? mysqli_real_escape_string($conn, $_POST["gender"]) : '';
    $dob = mysqli_real_escape_string($conn, $_POST["dob"]);

    // Perform additional validation if needed
    if (empty($username) || empty($password) || empty($passwordConfirm) || empty($name) || empty($mail) || empty($mobile) || empty($gender) || empty($dob)) {
        $_SESSION["error"] = "Every field is required.";
    } elseif ($password !== $passwordConfirm) {
        // Check if the password and password confirmation match
        $_SESSION["error"] = "Password and password confirmation do not match.";
    } else {
        // Start transaction
        $conn->begin_transaction();
        try {
            // Check if the username already exists
            $checkUsernameQuery = "SELECT * FROM user WHERE User_Name = '$username'";
            $checkUsernameResult = $conn->query($checkUsernameQuery);

            if ($checkUsernameResult->num_rows > 0) {
                $_SESSION["error"] = "Username already exists. Please choose a different one.";
                // Rollback transaction
                $conn->rollback();
            } else {

                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Insert the user into the database
                $sql = "INSERT INTO user (Full_Name, User_Name, Password, email, Mobile_Number, Gender, DOB) 
                        VALUES ('$name', '$username', '$hashedPassword', '$mail', '$mobile', '$gender', '$dob')";

                if ($conn->query($sql) === TRUE) {
                    // Commit transaction
                    $conn->commit();
                    $_SESSION["success"] = "User registered successfully, <br>Please Login";
                } else {
                    $_SESSION["error"] = "Error: " . $sql . "<br>" . $conn->error;
                    // Rollback transaction
                    $conn->rollback();
                }
            }
        } catch (Exception $e) {
            // An exception has been thrown
            $_SESSION["error"] = "Transaction failed: " . $e->getMessage();
            // Rollback transaction
            $conn->rollback();
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signupStyles.css" />

    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.6.8/build/spline-viewer.js"></script>

</head>
<body>

<?php
include 'navbar.php';
?>

<?php if (isset($_SESSION["error"]) || isset($_SESSION["success"])): ?>
    <div class="message-container">
        <?php
        // Display error message
if (isset($_SESSION["error"])) {
echo "<p style='color: red;'>" . $_SESSION["error"] . "</p>";
unset($_SESSION["error"]); // Clear the error message
} elseif (isset($_SESSION["success"])) {
echo "<p style='color: green;'>" . $_SESSION["success"] . "</p>";
unset($_SESSION["success"]);
}
?>
</div>

<?php endif; ?>

<div class="spline-background">
  <spline-viewer url="https://prod.spline.design/6h0puN79WD5Hodvj/scene.splinecode"></spline-viewer>
</div>

<form action="signup.php" method="POST">
    <div class="container" id="cnt">
        <div class="column">
            <div class="box">
                <label for="input1">Full Name</label><br>
                <input type="text" id="input1" name="FullName" placeholder="enter your full name" value="<?php echo isset($_POST["FullName"]) ? htmlspecialchars($_POST["FullName"]) : ''; ?>">
            </div>
            <div class="box">
                <label for="input1">e-mail</label><br>
                <input type="text" id="input1" name="email" placeholder="enter your e-mail" value="<?php echo isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : ''; ?>">
            </div>
            <div class="box">
                <label for="input1">Password</label><br>
                <input type="password" id="input1" name="password" placeholder="enter your password">
            </div>
            <div class="box">
                <label for="input1">Gender</label><br>
                <div class="radio-group">
                    <label for="male" class="label1">Male</label><br>
                    <input type="radio" id="male" name="gender" value="male" <?php echo (isset($_POST["gender"]) && $_POST["gender"] == 'male') ? 'checked' : ''; ?>>
                    <label for="female" class="label2">Female</label><br>
                    <input type="radio" id="female" name="gender" value="female" <?php echo (isset($_POST["gender"]) && $_POST["gender"] == 'female') ? 'checked' : ''; ?>>
                    <label for="other" class="label3">Other</label><br>
                    <input type="radio" id="other" name="gender" value="other" <?php echo (isset($_POST["gender"]) && $_POST["gender"] == 'other') ? 'checked' : ''; ?>>
                </div>
            </div>
        </div>
        <div class="column2">
            <div class="box2">
                <label for="input1">Username</label><br>
                <input type="text" id="input1" name="username" placeholder="enter your username" value="<?php echo isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : ''; ?>">
            </div>
            <div class="box2">
                <label for="input1">Mobile Number</label><br>
                <input type="text" id="input1" name="mobile" placeholder="enter your mobile number" value="<?php echo isset($_POST["mobile"]) ? htmlspecialchars($_POST["mobile"]) : ''; ?>">
            </div>
            <div class="box2">
                <label for="input1">Confirm Password</label><br>
                <input type="password" id="input1" name="password2" placeholder="confirm your password">
            </div>
            <div class="box2">
                <label for="input1">Date of Birth</label><br>
                <input type="date" id="input1" name="dob" value="<?php echo isset($_POST["dob"]) ? htmlspecialchars($_POST["dob"]) : ''; ?>">
            </div>
        </div>
    </div>
    <div class="submit-container">
        <!-- <button type="submit">Register</button> -->
        <input type="submit" id="btn" value="Register" name="submit" />
    </div>
    <div class="dis">
        By Clicking Register you are confirming that,<br> 
        you have read and agree to our <a href="">Terms & Conditions</a> and <a href=""> Privacy Policy.</a>
    </div>
</form>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var messageContainer = document.querySelector(".message-container");
        if (messageContainer && messageContainer.textContent.trim().length > 0) {
            messageContainer.style.display = "block";
        } else {
            messageContainer.style.display = "none";
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>