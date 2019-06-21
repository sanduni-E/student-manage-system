<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Students</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">     
    <link rel="stylesheet" href="fontstyleall.css">
    <link rel="stylesheet" href="editStudentsStyle.css">    
</head>
<body>

<div class="container ">
    
<form action="editStudents.php" method="post" class="myform">
<div class="row">
    <div class="col-md-3 text-center">
        <label class="thelabel">Enter Student ID</label>
    </div>

    <div class="col-md-3">
        <input type="text" class="form-control" placeholder="Student ID" name="studentid" value="<?php if (isset($_POST['studentid'])) echo $_POST['studentid']; ?>">
    </div>

    <div class="col-md-3">
        <button type="submit" class="btn btn-warning" name="searchsubmit">Search</button>
    </div>
</div>


<?php

if(isset($_POST['searchsubmit'])){

    $conn = mysqli_connect('localhost','root','','studentinformation');

    if (mysqli_connect_errno()){
       echo '<h1>failed to connect</h1> '.mysqli_connect_errno();
    }
    else{}

    $result = $_POST['studentid'];
    $query = "SELECT * FROM students WHERE indexno = '$result' ";
    $endresult = mysqli_query($conn,$query);
    $data = mysqli_fetch_all($endresult,MYSQLI_ASSOC);
 
    foreach ($data as $post) {

        $firstname = $post['firstname'];
        $lastname = $post['lastname'];
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

 <div class="form-row editingrowset">

    <div class="form-group col-md-3">
      <label class="thelabel">First Name</label>
      <input type="text" class="form-control" value="<?php if(isset($_POST['searchsubmit'])) echo "$firstname"; ?>" >
    </div>

    <div class="form-group col-md-3">
      <label class="thelabel">Last Name</label>
      <input type="text" class="form-control" value="<?php if(isset($_POST['searchsubmit'])) echo "$lastname"; ?>" >
    </div>

  </div>

  <div class="form-group">

    <label class="thelabel">Faculty</label>
        <select class="form-control" name="faculty">

        <option selected>Agricultural Sciences</option>
        <option>Management Studies</option>
        <option>Geomatics</option>
        <option>Applied Science</option>
        <option>Social Sciences and Languages</option>

        </select>

  </div>

  <div class="form-group">
    <label class="thelabel">Department</label>
    <input type="text" class="form-control" value = "<?php if(isset($_POST['searchsubmit'])) echo "$department"; ?>">
  </div>   
     
  <button type="submit" class="btn btn-primary">Edit</button>
 

</form>
</div>

  
 
</body>
</html>

 