<?php
session_start();

require_once "config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to check if the user exists
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, set session variable and redirect
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location: pannel.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }

    $conn->close();
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Record System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
  </style>

</head>

<body class="bg-dark-subtle">
  <div class="container col justify-content-center">

    <div class="row text-center mb-5 mt-4">
     <h1>Admin Login</h1>
    </div>

    <form class="row">
      <div class="row w-60 m-2">
        <label for="validationCustom01" class="form-label">User Name</label>
        <input type="text" class="form-control" id="validationCustom01" name="username" required>
      </div>
      <div class="row w-60 m-2">
        <label for="validationCustom02" class="form-label">Password</label>
        <input type="password" class="form-control" id="validationCustom02" name="password" required>
      </div>
      <div class="row-12 m-3">
        <button class="btn btn-primary" type="submit">Log in</button>
      </div>
    </form>

    <?php
        if (isset($error)) {
            echo "<p style='color: red;'>$error</p>";
        }
    ?>


    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
  integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>