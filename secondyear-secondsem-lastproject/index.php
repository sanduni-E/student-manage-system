<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="main-page-style.css">
</head>
<body>

<div class="container" >

    <div class="row top-row">
        <div class="col-md-6">
            <a href="registerStudents.php">
                <button type="button" class="btn btn-warning">Register Students</button>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <a href="">
                <button type="button" class="btn btn-warning">Search Students</button>
            </a>
        </div>
    </div>

    <div class = "row">
        <div class="col-md-6">
            <a href="">
                <button type="button" class="btn btn-warning">Edit Students</button>
            </a>
        </div>
    </div>

    <div class = "row">
        <div class="col-md-6">
            <a href="">
                <button type="button" class="btn btn-warning">Delete Students</button>
            </a>
        </div>
    </div>

</div>

</body>
</html>

<?php
//create connnection
$conn = mysqli_connect('localhost','root','','studentinformation');
//check connection
if (mysqli_connect_errno()){
    //connection failed
    echo 'failed to connect '.mysqli_connect_errno();
}
else{
    echo 'connection sucess';
}