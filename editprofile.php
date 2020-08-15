<?php
include('nav.php');
?>

<?php
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $department = $_POST['department'];
    $block = $_POST['block'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $username = $_SESSION['username'];
  
    $query5 = "UPDATE profile SET name='$name',email='$email',role='$role',department='$department',block='$block',gender='$gender',age='$age',address='$address',mobile='$mobile' WHERE username = '$username'";

    $result1 = mysqli_query($conn , $query5);

    header('location:profile.php');
}
$username = $_SESSION['username'];
    
$query4 = "select * from profile where username = '$username'";

$result = mysqli_query($conn, $query4);

while ($row = mysqli_fetch_array($result)){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit-profile</title>
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">

   
    <style>
body{
    /* background-color:white; */
    /* background-image:None; */
}

* {
    font-family: "Varela Round", sans-serif;
}



.main{
    width: 50%;
    /* border: 1px solid black; */
    padding: 1%;
    margin-top:2%;
    transition: 2s;
}

.main:hover {
    box-shadow: 0 25px 60px black;
}

.image{
    /* background-color:gray; */
    /* border: 1px solid black; */
    height: 200px;
    margin-bottom:2%;
    margin: 3%;

}
img{
    height:200px;   
    width: 200px;
    /* border: 1px solid black; */
}
.name{
    font-size:42px;
    height: 100px;
    /* border: 1px solid black; */
    margin: 3%;
}
.gender-age{
    margin: 3%;
    font-size:30px;
    height: 70px;
    /* border: 1px solid black; */
}
.role-dept-block{
    margin: 3%;
    font-size:26px;
    height: 70px; 
    /* border: 1px solid black; */
}
.address-email-mobile{
    margin: 3%;
    font-size:22px;
    height: 70px; 
    /* border: 1px solid black; */
}


img, .named, .role, .dept, .block, .address, .email, .mobile, .gender, .age{
    -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
}

.rounded-circle, .named:hover, .role:hover, .dept:hover, .block:hover, .address:hover, .email:hover, .mobile:hover, .gender:hover, .age:hover {
  transition: 2s;
  background-color:black;
  color: white;

}
.submit{
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

<form action="editprofile.php" method="POST">
    <div class="main container ">
        <div class="row justify-content-md-center image">
            <img src="1u.jpeg" data-sal="slide-down" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="rounded-circle" >
        </div>
        <div class="row justify-content-md-center name">
            <input type="text" name="name" data-sal="slide-up" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-6 text-center justify-self-md-center align-self-center named" placeholder="Enter Name" value="<?php echo $row['name']; ?>">
        </div>
        <div class="row justify-content-md-around gender-age">
            <input type="text" name="gender" data-sal="slide-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-6 text-center align-self-center gender " placeholder="Enter Gender" value="<?php echo $row['gender']; ?>">
            <input type="text" name="age" data-sal="slide-left" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-6 text-center align-self-center age " placeholder="Enter Age" value="<?php echo $row['age']; ?>">
        </div>
        <div class="row role-dept-block">
            <input type="text" name="role" data-sal="slide-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-4 text-center align-self-center role " placeholder="Enter Role" value="<?php echo $row['role']; ?>">
            <input type="text" name="department"  data-sal="slide-down" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-4 text-center align-self-center dept" placeholder="Enter Department" value="<?php echo $row['department']; ?>">
            <input type="text" name="block" data-sal="slide-left" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-4 text-center align-self-center block" placeholder="Enter Block" value="<?php echo $row['block']; ?>">
        </div>
        <div class="row address-email-mobile">
            <input type="text" name="address" data-sal="flip-left" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-4 text-center align-self-center address " placeholder="Enter Address" value="<?php echo $row['address']; ?>">
            <input type="text" name="email" data-sal="flip-up" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-4 text-center align-self-center email " placeholder="Enter Email" value="<?php echo $row['email']; ?>">
            <input type="text" name="mobile" data-sal="flip-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-4 text-center align-self-center mobile " placeholder="Enter Mobile No" value="<?php echo $row['mobile']; ?>">
        </div>
        <div class="row justify-content-md-center">
            <button type="submit" name="submit" data-sal="slide-up" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class=" btn btn-primary btn-lg col-4 submit " style="height:50px;">Save Profile</button>
        </div>
</form>

<?php
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