<?php
include('nav.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">

<style>

.mycard{
    transition: 2s;
}

.mycard:hover{
    box-shadow: 0 25px 60px black;
}

</style>

</head>
<body>


<?php

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query8 = "select * from assignment where id = '$id' ";
   
    $result = mysqli_query($conn, $query8);

    $num = mysqli_num_rows($result);

    if($num > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
?>
<div class="container-fluid " style="margin-top:2%;">
<div  data-sal="slide-down" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="card  border-primary mb-3 text-center mycard">
<div class="card-header">
  </div>
    <div class="card-body">
    <div class="row">
    <div class="col-6">
      <h1 class="card-title"><?php echo $row['name']; ?></h1>
      </div>
      <div class="col-6">
      <p class="card-text"><?php echo $row['description']; ?></p>
      <p class="card-text text-muted"><?php echo $row['duedate']; ?></p>
    </div>
    </div>
    </div>
    <div class="card-footer">
      <small class="text-muted">Assigned By <?php echo $row['user']; ?></small>
    </div>
</div>
</div>

<?php
        }
    }
}

if(isset($_GET['id'])){

    $id = $_GET['id'];


    
    $query = "SELECT * FROM upload WHERE a_id = $id " ;

    $result = mysqli_query($conn, $query);

    $num = mysqli_num_rows($result);

    if($num > 0)
    {

echo "<div  data-sal='slide-up' data-sal-delay='1000' data-sal-easing='ease-out-bounce' data-sal-duration='2000' class='container ' style='margin-top:5%;'>";
echo "<table class='table table-striped mycard '>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th scope='col'> </th>";
echo "<th scope='col'>Student Name </th>";
echo "<th scope='col'>File Uploaded</th>";
echo "<th scope='col'>Type of File</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

        while ($row = mysqli_fetch_array($result))
        {
?>

    <tr>
      <th scope="row"> </th>
      <td><?php echo $row['user'];  ?></td>
      <td><a href="upload/<?php echo $row['name']; ?>" target="_blank"> <?php echo $row['name'];  ?></a></td>
      <td><?php echo $row['type'];  ?></td>
    </tr>



<?php
        }
    }
}
?>

</tbody>
</table>
</div>




<script src="./node_modules/sal.js/dist/sal.js"></script>
<script>
  sal({
  threshold: 1,
  once: false,
});
</script>

</body>
</html>