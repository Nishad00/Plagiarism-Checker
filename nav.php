<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:index.php');
}

$conn = mysqli_connect('localhost','root');
if($conn){
    // echo "Connection sucessfull";
}
else{
    echo "No Connection estabished";
}

mysqli_select_db($conn, 'wt');

?>



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




<style>
body{
    background-image: url("260170.png");
    background-size: cover;
    background-attachment:fixed;
    overflow-x:hidden;
}
    
@import url("https://fonts.googleapis.com/css?family=Varela+Round");
html {
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
  padding: 0;
  margin: 0;
  letter-spacing: 1.1px;
}

body,
html {
  width: 100%;
  height: 100%;
  /* background: silver; */
  font-family: "Varela Round", sans-serif;

}

.menu {
  display: flex;
  justify-content: center;
  /* align-items: right; */
  max-width: 720px;
  margin: 0 auto;
  /* height: 100vh; */
  list-style: none;
}

.menu li {
  width: 125px;
  height: 50px;
  transition: background-position-x 0.9s linear;
  text-align: center;
    
}

.menu li a {
    font-size: 22px;
    color: black;
    text-decoration: none;
    transition: all 0.45s;
  }

.menu li:hover {
    background: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB2ZXJzaW9uPSIxLjEi%0D%0AIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhs%0D%0AaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0%0D%0AaD0iMzkwcHgiIGhlaWdodD0iNTBweCIgdmlld0JveD0iMCAwIDM5MCA1MCIgZW5hYmxlLWJhY2tn%0D%0Acm91bmQ9Im5ldyAwIDAgMzkwIDUwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPHBhdGggZmlsbD0i%0D%0Abm9uZSIgc3Ryb2tlPSIjZDk0ZjVjIiBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLW1pdGVybGlt%0D%0AaXQ9IjEwIiBkPSJNMCw0Ny41ODVjMCwwLDk3LjUsMCwxMzAsMAoJYzEzLjc1LDAsMjguNzQtMzgu%0D%0ANzc4LDQ2LjE2OC0xOS40MTZDMTkyLjY2OSw0Ni41LDI0My42MDMsNDcuNTg1LDI2MCw0Ny41ODVj%0D%0AMzEuODIxLDAsMTMwLDAsMTMwLDAiLz4KPC9zdmc+Cg==");
    animation: line 1.8s;
}

.menu li:hover a {
    color: crimson;
  }

.menu li:not(:last-child) {
    margin-right: 30px;
  }

@keyframes line {
  0% {
    background-position-x: 390px;
  }
}

.n {
    /* border: 1px solid red; */
    margin: 10px;
    padding: 10px;
    padding-top: 23px;
    transition: 2s;
}
.n:hover{
  box-shadow: 0 10px 20px gray; 

}

</style>

</head>
<body>
  
  </body>
  </html>
  
  <div class="n">
    <nav>
      <ul class="menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <?php
          if($_SESSION['role']=="Teacher"){ 
        ?>
            <li><a href="assignment.php">Assignment</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li><a href="plagiarism.php">Plagiarism</a></li>
        <?php 
          }
        ?>
        
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
</div>