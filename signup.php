

<?php

$conn = mysqli_connect('localhost','root');
if($conn){
    // echo "Connection sucessfull";
}
else{
    echo "No Connection estabished";
}

mysqli_select_db($conn,'wt');

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $department = $_POST['department'];
    $block = $_POST['block'];
    $gender = "Enter Gender";
    $age = "20";
    $address = "Alandi , Pune";
    $mobile = "Enter Mobile No";

    $query1 = "select * from profile where username = '$username' && password = '$password'";

    $result = mysqli_query($conn, $query1);
    
    $num = mysqli_num_rows($result);

    if($num == 1){
        
        echo "Duplicate Entry";
    
    }else{
        
    // $query2 = "INSERT INTO profile (username , password , name , email , role , department , block) VALUES('$username','$password','$name','$email','$role','$department','$block)";

    $query2 = "INSERT INTO profile (username , password , name , email , role , department , block , gender , age , address , mobile) VALUES('$username','$password','$name','$email','$role','$department','$block','$gender','$age','$address','$mobile')";
    // assigned

    mysqli_query($conn , $query2);

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
    background-image: url("aleksandra-wantuch-ZqKYkwSfsJQ-unsplash.jpg");
    background-position: center;
    background-size: cover;
    min-height: 100%;
    z-index: 1;
    font-family: "Varela Round", sans-serif;    

}

.main {

    /* border: 1px solid black;  */
    width: 800px;
    margin-top: 3%;
    margin-left: 10%;
    margin-right: 10%;
    background-attachment: fixed;
    background-position: center;
    transition: 2s;
    font-family: "Varela Round", sans-serif;    
}

.main:hover{
    box-shadow: 0 25px 60px rgba(0,0,0,.8);
}

.btn:hover{
    box-shadow: 0 10px 10px #00ff00;

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
    border: 3px solid lightgreen;
    background-color:#F8F8F8;
    border-radius: 20px;
    transition: 1s;
    font-family: "Varela Round", sans-serif;    
}



select{
    width: 527px;
    height: 60px;
    margin: 10px;
    padding:10px;
    font-size: 20px;
    background-color:#F8F8F8;
    border: 0px;
    font-family: "Varela Round", sans-serif;    
    
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

    <br>
    <span>Signup</span>
    <br>
    <form action="signup.php" method="POST">
        <br>
        <input type="text" class="sub" name="username" placeholder="Enter Username">
        <br>
        <input type="password" class="sub" name="password" placeholder="Enter Password">
        <br>
        <hr style="background-color:#00D000; border:1px; width:300px; height:3px;">
        <br>
        <br>
        <br>
        <input type="text" class="sub" name="name" placeholder="Enter name">
        <br>
        <input type="text" class="sub" name="email" placeholder="Enter Email">
        <br>
        <div class="list">
            <select name="role" class="list" id="mySelect" onchange="myFunction()">
                
                <option name="student"  class="list" value="Student">Student</option>                
                    
                <option name="teacher"  class="list" value="Teacher">Teacher</option>
            
            </select>
        </div>
        <br>
            <input type="text" class="sub" name="department" id="dept" placeholder="Enter Department">
            <br>
            <input type="text" class="sub" name="block" id="block" placeholder="Enter Block">
            <br>
            <button type="submit" class="btn" name="submit">submit</button>
            <br><br>
    </form>

</div>

</center>

<script>

function myFunction() {
    var x = document.getElementById("mySelect").value;
    if(x == "teacher"){
        document.getElementById("dept").style.display="None";
        document.getElementById("block").style.display="None";
    }
    else{
        document.getElementById("dept").style.display="block";
        document.getElementById("block").style.display="block";
    }
}
</script>

</body>
</html>

