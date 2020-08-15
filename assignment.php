<?php
include('nav.php');
?>

<?php

// mysqli_select_db($conn,'wt');

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $description = $_POST['description'];
    $department = $_POST['Department'];
    $block = $_POST['Block'];
    $duedate = $_POST['duedate'];
    // $fname = $_FILES['file']['name'];
    // $type = $_FILES['file']['type'];
    // $file = file_get_contents($_FILES['file']['tmp_name']);
    $status = "assigned";
    $user = $_SESSION['username'];

    // echo $name,$description,$name,$description,$department,$block,$duedate,$fname,$type,$file,$status,$user;

    $query7 = "INSERT INTO assignment (name, description, department, block, duedate, status, user) VALUES('$name','$description','$department','$block','$duedate','$status','$user')";


    mysqli_query($conn , $query7);
    
    header('location:home.php');

}   
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Assignment</title>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment</title>
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">


<style>
    

.main{
    width: 50%;
    /* border: 1px solid black; */
    padding-top: 3%;
    padding-left: 5%;
    padding-right: 5%;
    padding-bottom: 3%;

    margin-top:2%;
    transition: 2s;
}

.main:hover {
    box-shadow: 0 25px 60px black;
}

    
</style>
</head>
<body> 

<form action="assignment.php" method="POST" enctype="multipart/form-data">
<div class="main container ">
    <div class="form-group">
        <input data-sal="slide-down" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" type="text" class="form-control form-control-lg" name="name" placeholder="Assignment Name">
    </div>
    <div class="form-group">
        <textarea data-sal="slide-left" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" name="description" class="form-control form-control-lg" cols="30" rows="10" placeholder=" Assignment Description "></textarea>
    </div>
    <div class="form-group row">
        <div class="col">
            <input data-sal="slide-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" type="text" class="form-control form-control-lg" name="Department" placeholder="Department">
        </div>
        <div class="col">        
            <input data-sal="slide-left" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" type="text" class="form-control form-control-lg" name="Block" placeholder="Block">
        </div>    
    </div>
    <div class="form-group">
        <label data-sal="slide-up" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-form-label-lg"> Due-Date </label>
        <input data-sal="slide-up" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" type="date" class="form-control form-control-lg " name="duedate">
    </div>
    <br>
    <div class="row justify-content-md-center">
        <button data-sal="slide-up" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" type="submit" class="btn btn-primary col-4" name="submit"> Create Assignment</button>
    </div>
</div>
</form>

<script src="./node_modules/sal.js/dist/sal.js"></script>
<script>
  sal({
  threshold: 1,
  once: false,
});
</script>


</body>
</html>  