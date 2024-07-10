<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>ANA Login</title>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
    <div class="amit">
        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password =  "";
        $dbname = "xcispcjl_ANA";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve values from form
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Query to check user credentials
            $sql = "SELECT * FROM ana_admin WHERE username = '$username' AND password = '$password'";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                // Valid credentials, set session and redirect to homepage
                session_start();
                $_SESSION["username"] = $username;
                header("Location: /ana/dashboard.php");
                exit();
            } else {
                // Invalid credentials, show specific message
                echo "<p style='color:red; text-align:center'>";
                if ($result->num_rows == 0) {
                    echo "Username not found.";
                } else {
                    echo "Incorrect password.";
                }
                echo "</p>";
            }
        }

        // Close the database connection
        $conn->close();
        ?>
        <form action="" method="POST">
            <div class="logo">
                <img src="img/ana-logo.jpg" alt="aa">
            </div>
            <!--<h1> Log in</h1>-->
            <div class="form-group">
                <label for="">Username :</label>
                <input type="text" name="username" class="anuj" required>
            </div>
            <div class="form-group">
                <label for="">Password :</label>
                <input type="password" name="password" class="anuj" required>
                <div class="forget">
                    <label> <input type="checkbox" name="keeploggedin">Keep me logged in</label>
                    <a href="#">Forget Password</a>
                </div>
            </div>
            <input type="submit" class="btn" value="Login">
        </form>
    </div>
</body>

</html>
