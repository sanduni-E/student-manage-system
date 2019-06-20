<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="deleteStudentsstyle.css">
     
</head>
<body>

<div class="container" >

<form class="myform">

	  <div class="form-group">

	    <label class="mylabel">Enter Student ID</label>
	    <input type="text" class="form-control" placeholder="Student ID" name="studentid">
	    
	  </div>

	  <button type="submit" class="btn btn-warning">Search</button>

	  <div class="form-group">

	  	<div class="row">

	  		<div class="col-md-4">

	  			<label class="mylabel2top">Student Name</label>
	    		<input type="text" class="form-control" name="studentname">
	  			
	  		</div>  	
	  		
	  	</div>

	  	<div class="row">

	  		<div class="col-md-4">

	  			<label class="mylabel2">Faculty</label>
	    		<input type="text" class="form-control" name="faculty">
	  			
	  		</div>  	  		
	  		
	  	</div>

	  	<div class="row">

	  		<div class="col-md-4">

	  			<label class="mylabel2">Department</label>
	    		<input type="text" class="form-control" name="department">
	  			
	  		</div>	
	  		
	  	</div>    
	    
	  </div>

	  <button type="submit" class="btn btn-warning">Delete</button>

</form>

 

    
</div>

</body>
</html>

 