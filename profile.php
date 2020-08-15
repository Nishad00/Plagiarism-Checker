<?php
include('nav.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
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
  /* color: white; */

}
.b{
  background-color:silver;
  color: black;
  border: 1px solid black;
}
.b:hover{
  background-color:silver;
  color: black;
}
</style>

</head>
<body>

<?php

$user1 = $_SESSION['username'];

$query4 = "select * from profile where username = '$user1'";

$result = mysqli_query($conn, $query4);

$num = mysqli_num_rows($result);

if($num > 0){

    while ($row = mysqli_fetch_array($result)){
      
?>

<div class="main container ">
    <div class="row d-flex justify-content-end">
        <a data-sal="slide-down" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="btn btn-outline-primary col-2 b" href="editprofile.php" role="button" style="margin-right:2%; border: 1px solid black; color:black;">Edit</a>
    </div>
    <div class="row justify-content-md-center image">
        <img src="1u.jpeg" data-sal="slide-down" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="rounded-circle" >
    </div>
    <div class="row justify-content-md-center name">
        <div data-sal="slide-up" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-6 text-center justify-self-md-center align-self-center named"> <?php echo $row['name']; ?> </div> 
    </div>
    <div class="row justify-content-md-around gender-age">
        <div data-sal="slide-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-6 text-center align-self-center gender "> <?php echo $row['gender']; ?> </div>
        <div data-sal="slide-left" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-6 text-center align-self-center age "> <?php echo $row['age']; ?> &nbsp;y/o </div>
    </div>
    
    <div class="row role-dept-block">
        <div data-sal="slide-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-4 text-center align-self-center role "> <?php echo $row['role']; ?> </div>
        <div data-sal="slide-down" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-4 text-center align-self-center dept "> <?php echo $row['department']; ?> </div>
        <div data-sal="slide-left" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col-4 text-center align-self-center block "> <?php echo $row['block']; ?> </div>
     </div>

     <div class="row address-email-mobile">
        <div data-sal="flip-left" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col text-center align-self-center address "><?php echo $row['address']; ?> </div> 
        <div data-sal="flip-up" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col text-center align-self-center email "> <?php echo $row['email']; ?> </div>
        <div data-sal="flip-right" data-sal-delay="1000" data-sal-easing="ease-out-bounce" data-sal-duration="2000" class="col text-center align-self-center mobile "> <?php echo $row['mobile']; ?> </div>
    </div>
</div>

<?php
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






<script>
$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
console.log("document is ready");
  

  $( ".named" ).hover(
  function() {
    $(this).addClass('shadow-lg p-3 mb-5 bg-white rounded named').css('cursor', 'pointer',); 
  }, function() {
    $(this).removeClass('shadow-lg p-3 mb-5 bg-white rounded');
  }
);
  

$( ".role" ).hover(
  function() {
    $(this).addClass('shadow-lg p-3 mb-5 bg-white rounded role').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow-lg p-3 mb-5 bg-white rounded');
  }
);
  
$( ".dept" ).hover(
  function() {
    $(this).addClass('shadow-lg p-3 mb-5 bg-white rounded dept').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow-lg p-3 mb-5 bg-white rounded');
  }
);
  
$( ".block" ).hover(
  function() {
    $(this).addClass('shadow-lg p-3 mb-5 bg-white rounded block').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow-lg p-3 mb-5 bg-white rounded');
  }
);
  
$( ".address" ).hover(
  function() {
    $(this).addClass('shadow-lg p-3 mb-5 bg-white rounded address').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow-lg p-3 mb-5 bg-white rounded');
  }
);
  
$( ".email" ).hover(
  function() {
    $(this).addClass('shadow-lg p-3 mb-5 bg-white rounded email').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow-lg p-3 mb-5 bg-white rounded');
  }
);
  
$( ".mobile" ).hover(
  function() {
    $(this).addClass('shadow-lg p-3 mb-5 bg-white rounded mobile').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow-lg p-3 mb-5 bg-white rounded');
  }
);
  
$( ".age" ).hover(
  function() {
    $(this).addClass('shadow-lg p-3 mb-5 bg-white rounded age').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow-lg p-3 mb-5 bg-white rounded');
  }
);

$( ".gender" ).hover(
  function() {
    $(this).addClass('shadow-lg p-3 mb-5 bg-white rounded gender').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow-lg p-3 mb-5 bg-white rounded');
  }
);
  
$( ".rounded-circle" ).hover(
  function() {
    $(this).addClass('shadow-lg p-3 mb-5 bg-white rounded rounded-circle').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow-lg p-3 mb-5 bg-white rounded');
  }
);
  // document ready  
});


</script>

</body>
</html>