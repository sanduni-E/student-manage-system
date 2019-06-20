<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="registerstudentsstyle.css">
</head>
<body>

<div class="container">

    <form class="regform" action = "registerStudents.php" method="post" >

        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="inputEmail4" class="txtlabel">First Name</label>
                <input type="text" class="form-control"  placeholder="FirstName" name="fname">
            </div>

            <div class="form-group col-md-4">
                <label for="inputPassword4" class="txtlabel">Last Name</label>
                <input type="text" class="form-control"  placeholder="LastName" name="lname">
            </div>

        </div>

        <div class="form-group">

            <label for="inputAddress" class="txtlabel">Index No</label>
            <input type="text" class="form-control" placeholder="Index No" name="indexno">

        </div>

        <div class="form-group">

            <label for="inputAddress" class="txtlabel">Faculty</label>
            <select class="form-control" name="faculty">

                <option selected>Agricultural Sciences</option>
                <option>Management Studies</option>
                <option>Geomatics</option>
                <option>Applied Science</option>
                <option>Social Sciences and Languages</option>

            </select>

        </div>

        <div class="form-group">

            <label for="inputAddress" class="txtlabel">Department</label>
            <input type="text" class="form-control" placeholder="Department" name="department">

        </div>

        <button type="submit" class="btn btn-success" name="submit">Sign in</button>

        
        <?php

        if (isset($_POST['submit']))
        {
            if ((empty($_POST['fname'])) || (empty($_POST['lname'])) || (empty($_POST['indexno'])) || (empty($_POST['faculty']))|| (empty($_POST['department'])))
            {
                echo '<h1>All fields are required</h1>';
            }

            else{

            $conn = mysqli_connect('localhost','root','','studentinformation');

            if (mysqli_connect_errno()){
                //connection failed
                echo '<h1>failed to connect</h1> '.mysqli_connect_errno();
            }
            else{
                 
            }


            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $indexno = $_POST['indexno'];
            $faculty = $_POST['faculty'];
            $department = $_POST['department'];

           
        $query = "INSERT INTO students (firstname,lastname,indexno,faculty,department) VALUES ('$fname',
                '$lname','$indexno','$faculty','$department')";

            if(mysqli_query($conn, $query)){
                 echo "<br> <h3>Records inserted successfully<h3>";
            } else{
                 echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
        }

        }       

        ?>
    </form>

</div>

</body>
</html>

 