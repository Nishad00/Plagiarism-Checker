<?php
include('nav.php');
?>

<head>

    <title>Home</title>
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">
    <script src="node_modules/animejs/lib/anime.min.js"></script>


<style>

body, html{
    height: 100vh;
    margin: 0;
}

body{
    font-family: 'Montserrat';
}

.div1{
    height: calc(100vh 8em);
    padding: 4em;
    align-item: center;
}

h1{
    /* font-size: 5em; */
    text-transform: uppercase;
    line-height: .9em;
}

h3{
    font-size: 3em;
    text-transform: uppercase;
    margin: 0;
}

.mycontainer{
    /* background: white; */
    height: calc(50 vh - 8em);
    color: #4e5356;
    display: grid;
    grid-template-column: 50% 50%;
    /* margin-left: 600px; */
    
}


.mycontainer1{
    /* background: white; */
    /* height: calc(75vh - 8em); */
    color: #4e5356;
    display: grid;
    grid-template-column: 50% 50%;
    /* border: 1px solid black; */
    /* width: 1500px; */

}

.mycontainer2{
    /* background: white; */
    /* height: calc(75vh - 8em); */
    /* color: #4e5356; */
    /* border: 1px solid black; */
    display: grid;
    grid-template-column: 50% 50%;
    /* margin-top: 10%; */
}

.mycard{
    transition: 2s;
}

.mycard:hover{
    box-shadow: 0 25px 60px black;
}


</style>

</head>
<body>
<br><br>
<div data-sal="flip-right" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="900" class="container mycontainer div1">
<h1 class="welcome">Welcome <?php echo $_SESSION['username']; ?></h1><br>
</div>


<?php

$role = $_SESSION['role'];

if($role == "Teacher" or $role == "teacher")
{
    $username = $_SESSION['username'];

    $query8 = "select * from assignment where user = '$username' ";
   
    $result = mysqli_query($conn, $query8);

    $num = mysqli_num_rows($result);

    if($num > 0)
    {
?>

<div data-sal="fade-in" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="900" class="container-fluid mycontainer1 div1 label1"> <h3 class="tcreated"> Assignments Created By &nbsp;<?php $_SESSION['username'];?> </h3> </div>

<?php
        while($row = mysqli_fetch_array($result))
        {
?>  
<div class="container " style="margin-top:2%;">
<div data-sal="slide-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="card  border-primary mb-3 text-center mycard">
<div class="card-header text-white bg-dark">
<?php echo $row['status']; ?>
  </div>
    <div class="card-body bg-light">
      <h5 class="card-title"><?php echo"<a href='show.php?id={$row['id']}'> {$row['name']}</a></br>\n";?></h5>
      <p class="card-text"><?php echo $row['description']; ?></p>
      <p class="card-text text-muted"><?php echo $row['duedate']; ?></p>
    </div>
    <div class="card-footer ">
      <small class="text-muted ">Assigned By <?php echo $row['user']; ?></small>
    </div>
</div>
</div>


<?php
        }
    }
    else
    {
        echo "Go to Assignment to create an Assignment";
    }
}
?>


<?php

if($role == "Student" or $role == "student" )
{
    
    $username = $_SESSION['username'];
    
    $query9 = "select * from profile where username = '$username'";
    
    $result = mysqli_query($conn, $query9);
    
    $num = mysqli_num_rows($result);
    
    if($num > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {    
            $block = $row['block'];
            
            $dept = $row['department'];
            
            $query10 = "select * from assignment where block = '$block' and department = '$dept' ";
            
            $result1 = mysqli_query($conn, $query10);
            
            $num1 = mysqli_num_rows($result1);
            
            if($num1 > 0)
            { 
?>
<div class='container-fluid mycontainer1 div1 label1'> <h3 class='tcreated'> Assignments You Have</h3> </div>

<?php              
                while ($row1 = mysqli_fetch_array($result1))
                {
                    ?>


<div class="container " style="margin-top:2%;">
<div data-sal="slide-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="card  border-primary mb-3 text-center mycard">
<div class="card-header">
<?php echo $row1['status']; ?>
  </div>
    <div class="card-body">
      <h5 class="card-title"><?php echo"<a href='upload.php?id={$row1['id']}'> {$row1['name']}</a></br>\n";?></h5>
      <p class="card-text"><?php echo $row1['description']; ?></p>
      <p class="card-text text-muted"><?php echo $row1['duedate']; ?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Assigned By <?php echo $row1['user']; ?></small>
    </div>
</div>
</div>

<?php
                }
            }
            else
            {
                echo "No Assignment for your class";
            }
        }
    }
    else{
        echo "please fill your class details in profile";
    }
}
?>



<script>
anime({
    targets: '.welcome',
    translateX: 700,
    scale: 2,
    // rotate: '1turn',
    // backgroundColor: '#FFF',
    delay: 1000,
    duration: 800,
});
anime({
    targets: '.label1',
    translateX: 550,
    // scale: 2,
    // rotate: '1turn',
    // backgroundColor: '#FFF',
    delay: 1000,
    duration: 800,
});
</script>


<script src="./node_modules/sal.js/dist/sal.js"></script>
<script>
  sal({
  threshold: 1,
  once: false,
});
</script>


</body>
</html>
