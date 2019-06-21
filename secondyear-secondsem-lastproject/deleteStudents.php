<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Students</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="deleteStudentsstyle.css">
    <link rel="stylesheet" href="fontstyleall.css">
     
</head>
<body>

<div class="container" >

<form class="myform" action="deleteStudents.php" method="post">

	  <div class="form-group">

        <label class="mylabel">Enter Student ID</label>
        
        <div class="row">
            
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Student ID" name="studentid" value="<?php if (isset($_POST['studentid'])) echo $_POST['studentid']; ?>">
            </div>

            <div class="col-md-3">
                <button type="submit" class="btn btn-warning" name="submit">Search</button>
            </div>

        </div>        
	    
	  </div>

	  <button type="submit" class="btn btn-warning" name="submit2">Delete</button>

    <?php

        if (isset($_POST['submit']))
        {
            $conn = mysqli_connect('localhost','root','','studentinformation');

            if (mysqli_connect_errno()){
                //connection failed
                echo '<h1>failed to connect</h1> '.mysqli_connect_errno();
            }
            else{
                
            }
            if (mysqli_connect_errno()){
                //connection failed
                echo '<h1>failed to connect</h1> '.mysqli_connect_errno();
            }
            else{
                
            }

            $result = $_POST['studentid'];

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

        if (isset($_POST['submit2']))
        {
            $conn = mysqli_connect('localhost','root','','studentinformation');

            if (mysqli_connect_errno()){
                //connection failed
                echo '<h1>failed to connect</h1> '.mysqli_connect_errno();
            }
            else{
                
            }
            if (mysqli_connect_errno()){
                //connection failed
                echo '<h1>failed to connect</h1> '.mysqli_connect_errno();
            }
            else{                
            }

            $result = $_POST['studentid'];

            $query = "DELETE FROM students WHERE indexno = '$result' ";

            if (mysqli_query($conn, $query)) {
                echo "<h1>Record deleted successfully</h1>";
             } else {
                echo "Error deleting record: " . mysqli_error($conn);
             }

             
            
             
        }  
           

            
         

       

    ?> 	 
	  	 
	  	 

</form>

 

    
</div>

</body>
</html>

 