<?php
include('nav.php');

if(isset($_POST['submit']))
{ 
    
    $id = $_POST['id'];
    $username = $_SESSION['username'];
    $url = $_POST['url'];

    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_temp_loc = $_FILES['file']['tmp_name'];
    $file_store = "upload/".$file_name;

    move_uploaded_file($file_temp_loc,$file_store);
    
    $query15 = "SELECT * FROM upload WHERE a_id = '$id' and user = '$username'";

    $result = mysqli_query($conn, $query15);
    
    $num = mysqli_num_rows($result);

    if($num == 1){
        
        $query14 = "UPDATE upload SET name='$file_name' ,type='$file_type' , size='$file_size' ,a_id='$id' ,user='$username' WHERE a_id = '$id' and user = '$username'";
    
        mysqli_query($conn , $query14);

        header("location:home.php");

    }else{

        $query13 = "INSERT INTO upload (name, type, size, a_id, user, url) VALUES ('$file_name','$file_type','$file_size','$id','$username','$url')";

        mysqli_query($conn , $query13);

        header("location:home.php");
    }

}

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query12 = "select * from assignment where id = '$id' ";

    $result = mysqli_query($conn, $query12);

    $num = mysqli_num_rows($result);

    if($num > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload</title>

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
.mylabel{
    border: 1px solid black;
    /* transition: 0.5s; */
    font-size: 25px;    

}
.mylabel:hover{
    border: 1px solid black;
    font-size: 25px;    
    box-shadow: 0 10px 15px black;
}
.submit{
    margin-top : 5%;
    background-color:silver;
    color: black;
    border: 1px solid black;
}
.submit:hover{
    background-color:silver;
    color: black;
}

    
</style>
</head>
<body> 

<form action="upload.php" method="POST" enctype="multipart/form-data">

<div class="main container ">

    <div class="form-group">

        <label data-sal="slide-down" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-12 col-form-label-lg  mylabel "> <?php echo $row['name']; ?> </label><br><br>
    
    </div>
    <div>
    <input type="hidden" name="id" value=" <?php echo $row['id']; ?>">
    </div>
    <div class="form-group">

        <label data-sal="slide-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-12 col-form-label-lg mylabel"><?php echo $row['description']; ?></label><br><br>

    </div>
    <div class="form-group">

        <label data-sal="slide-left" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-12 col-form-label-lg mylabel "><?php echo $row['duedate']; ?></label><br><br>
      
    </div>
    <div class="form-group">

        <label data-sal="fade-in" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-12 col-form-label-lg mylabel"><?php echo $row['status']; ?></label><br><br>

    </div>   

    <div class="form-group row">
        <div class="col">
            <input data-sal="slide-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" type="text" class="form-control form-control-lg mylabel" name="url" placeholder="Enter File URl"><br><br>
        </div>
    </div>
    <!-- <div class="custom-file "> -->
        <input type="file" name="file" class="" id="customFile">
        <!-- <label class="custom-file-label mylabel" for="customFile" style=" height: 54px;">Choose file</label><br><br> -->
    <!-- </div> -->

    <div class="row justify-content-md-center">
            <button type="submit" name="submit" data-sal="slide-up" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class=" btn btn-primary btn-lg col-4 submit " style="height:50px;">Upload Assignment</button>
    </div>

</div>
</form>



<?php
        }
    }
}

?>

<script src="./node_modules/sal.js/dist/sal.js"></script>
<script>
  sal({
  threshold: 1,
  once: false,
});
</script>


</body>
</html>  