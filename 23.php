<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="login";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['dob'] = $row['dob'];
    $_SESSION['contact_no'] = $row['contact_no'];
    $_SESSION['city'] = $row['city'];
    header("Location: profile.php");
    exit();
    } else {
    $error = "Invalid email or password";
    }
    }
    $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
    <style>
        *,
        *::after,
        *::before {
        padding: 0;
        box-sizing: border-box;
        }
        body {
        font-family: Arial, sans-serif;
        }
        .container {
        width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        }
        .container h2 {
        text-align: center;
        }
        .form-group {
        margin-bottom: 15px;
        }
        .form-group label {
        display: block;
        margin-bottom: 5px;
        }
        .form-group input {
        width: 100%;
        padding: 5px;
        }
        .error {
        background-color: #ffbbc8;
        color: red;
        margin-top: 5px;
        padding-block: 15px;
        }
        .form-group button {
        padding: 5px 10px;
        background-color: #4caf50;
        color: white;
        border: none;
        cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Login</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" required />
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" required />
        </div>
        <div class="form-group">
            <button type="submit">Login</button>
        </div>
        <?php if (isset($error)): ?>
        <div class="form-group error" align="center"><?php echo $error; ?></div>
        <?php endif; ?>
    </form>
    </div>
</body>
</html>
