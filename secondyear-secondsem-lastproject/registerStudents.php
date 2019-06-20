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

    <form class="regform">

        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="inputEmail4">First Name</label>
                <input type="text" class="form-control"  placeholder="FirstName">
            </div>

            <div class="form-group col-md-4">
                <label for="inputPassword4">Last Name</label>
                <input type="text" class="form-control"  placeholder="LastName">
            </div>



        </div>

        <div class="form-group">

            <label for="inputAddress">Index No</label>
            <input type="text" class="form-control" placeholder="Index No">

        </div>

        <div class="form-group">

            <label for="inputAddress">Faculty</label>

            <select id="inputState" class="form-control">
                
                <option selected>Agricultural Sciences</option>
                <option>Management Studies</option>
                <option>Geomatics</option>
                <option>Applied Science</option>
                <option>Social Sciences and Languages</option>

            </select>

        </div>

        <div class="form-group">

            <label for="inputAddress">Department</label>
            <input type="text" class="form-control" placeholder="Faculty">

        </div>

        <button type="submit" class="btn btn-danger">Sign in</button>
    </form>

</div>



</body>
</html>