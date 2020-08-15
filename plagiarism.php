<?php
include('nav.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Plagarism</title>
<link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">
<script src="node_modules/animejs/lib/anime.min.js"></script>

<style>  

</style>

</head>
<body>

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

<!-- <div data-sal="fade-in" data-sal-delay="100" data-sal-easing="ease-out-bounce" data-sal-duration="900" class="container-fluid mycontainer1 div1 label1"> <h3 class="tcreated"> Assignments Created By &nbsp;<?php $_SESSION['username'];?> </h3> </div> -->

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
      <h5 class="card-title"><?php echo"<a href='example_synchronous.php?id={$row['id']}'> {$row['name']}</a></br>\n";?></h5>
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
    
<script src="./node_modules/sal.js/dist/sal.js"></script>
<script>
  sal({
  threshold: 1,
  once: false,
});
</script>

</body>
</html>