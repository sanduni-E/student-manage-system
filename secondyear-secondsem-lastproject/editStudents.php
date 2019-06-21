<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="registerstudentsstyle.css">
    <link rel="stylesheet" href="fontstyleall.css">
    <link rel="stylesheet" href="editStudents.css">
</head>
<body>

<div class="container">

    <form class="regform" action = "editStudents.php" method="post" >

        <div class="row">

        <div class="col-md-3">

        <label class="txtlabel">Enter StudentID</label>
        <input type="text" class="form-control"  placeholder="Student ID" name="searchtxt">

        </div>
        </div>
        <br>

        <div class="row">

        <div class="col-md-3 text-center  uprow">
        <button type="submit" class="btn btn-success" name="searchsubmit" id = "serch">Search</button>
        </div>

        </div>        <br><br>

        <?php

        if (isset($_POST['searchsubmit']))
        {
            $conn = mysqli_connect('localhost','root','','studentinformation');

            $result = $_POST['searchtxt'];

            $query = "SELECT * FROM students WHERE indexno = '$result' ";

            $endresult = mysqli_query($conn,$query);

            $data = mysqli_fetch_all($endresult,MYSQLI_ASSOC);
            
            foreach ($data as $post) {

            $name = $post['firstname']." ".$post['lastname'];
            $faculty = $post['faculty'];
            $department = $post['department'];
            }  

                echo "<br><br>" ;
                echo "<h2>Full Name  : $name</h2>";
                echo "<h2>Faculty  : $faculty</h2>";
                echo "<h2>Department  : $department</h2>";


            mysqli_free_result($endresult);            
        }         
    ?> 	 
</form>

    <form action="editStudents.php" method="post">
        
    </form>
    <br><br><br><br>
    

</div>
</body>
</html>

 