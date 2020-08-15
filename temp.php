<?php
include('nav.php');
?>


<?php

if(isset($_GET['id'])){

	$id = $_GET['id'];
	
	echo $id;

    $query100 = "select * from upload where a_id = $id ";
   
    $result = mysqli_query($conn, $query100);

    $num = mysqli_num_rows($result);

    if($num > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
			echo $row['url'];

		}
	}
}

?>

"https://pdpatilall.000webhostapp.com/prasss2/index.html"