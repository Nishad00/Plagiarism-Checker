
<?php

session_start();

// header('location:login.php');

$conn = mysqli_connect('localhost','root');
if($conn){
    // echo "Connection sucessfull";
}
else{
    echo "No Connection estabished";
}

if(isset($_POST['submit']))
{

    mysqli_select_db($conn, 'wt');
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query1 = "select * from profile where username = '$username' && password = '$password'";
    
    $result = mysqli_query($conn, $query1);
    
    $num = mysqli_num_rows($result);
    
    $row = mysqli_fetch_array($result);

    if($num == 1){
        
        $_SESSION['username'] = $username;

        $_SESSION['role'] = $row['role'];

        header('location:home.php');
        
    }
    else{
        
        header('location:login.php');
        
    }
}
    
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign-up</title>
<style>

body{
    background-image: url("ms-jemini-photos-jHGyhD2NU_w-unsplash.jpg");
    background-size: cover;
    background-attachment:fixed;
    font-family: "Varela Round", sans-serif;
}

.main {

    /* border: 1px solid black;  */
    width: 800px;
    margin-top: 5%;
    margin-left: 10%;
    margin-right: 10%;
    background-attachment: fixed;
    background-position: center;
    transition: 2s;
}

.main:hover {
    box-shadow: 0 25px 60px #d4af37
}

.btn:hover{
    box-shadow: 0 10px 20px  #d4af37 
}

.main:hover ~ body{
    filter: blur(10px);
}

.sub {
    width: 500px;
    height: 40px;
    margin: 10px;
    padding:10px;
    font-size: 20px;
    font-family: "Varela Round", sans-serif;

}

.btn{
    width: 527px;
    height: 60px;
    margin: 10px;
    padding:10px;
    font-size: 20px;
    font-family: "Varela Round", sans-serif;    
    border: 3px solid pink;
    background-color:#F8F8F8;
    border-radius: 20px;
    transition: 1s;

}


span {
    font-family: "Varela Round", sans-serif;        
    font-size: 45px;
}


</style>


</head>
<body>

<center>

<div class="main">

    <br><br><br>
    <span>Login</span>
    <br><br><br>
    <form action="login.php" method="POST">
        <br>
        <input type="text" class="sub" name="username" placeholder="Enter Username">
        <br>
        <input type="password" class="sub" name="password" placeholder="Enter Password">
        <br>
        <br>
        <hr style="background-color:pink; border:0px; width:300px; height:5px;">
        <br>
        <br>
        <br>
        <button type="submit" class="btn" name="submit">submit</button>
        <br><br>
    </form>

</div>

</center>


</body>
</html>

