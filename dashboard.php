<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location: index.php');
    exit();
}



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex justify-content-start">
            <div class="collapse navbar-collapse m-2" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="navbar-brand m-1" href="#">
                        <img src="assets\school-svgrepo-com.svg" alt="SRC" width="30" height="30" class="">
                    </a>
                    <a class="nav-link" aria-current="page" href="#"><button class="btn btn-outline-secondary" type="button">Dashboard</button></a>
                    <a class="nav-link" href="#"><button class="btn btn-outline-secondary" type="button">Courses</button></a>
                    <a class="nav-link" href="#"><button class="btn btn-outline-secondary" type="button">Subjects</button></a>
                    <a class="nav-link" aria-disabled="true"><button class="btn  btn-outline-secondary" type="button">Students</button></a>
                    <a class="nav-link" aria-disabled="true"><button class="btn  btn-outline-secondary" type="button">Session</button></a>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets\settings-svgrepo-com.svg" alt="Bootstrap" width="30" height="24">
                </a>
            </div>
        </div>

    </nav>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>