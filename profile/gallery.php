<?php
session_start();
$username=$_SESSION['username'];
if(empty($username))
{
  header("Location:../index.php");
  exit;
}
?>

<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/profile.js"></script>
<script src="js/edit_photo.js"></script>

<style>
span:focus{
  outline:2px dashed red;
  padding:2px;
  box-shadow:0px 0px 5px gray;
}
</style>

</head>
<body style="background:#FCD0CF">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<a href="#" class="navbar-brand">

<?php
require("../php/database.php");
$email=$_SESSION['username'];
$get_name="SELECT full_name FROM users WHERE username='$email'";
$response=$db->query($get_name);
$name=$response->fetch_assoc();
echo $name['full_name'];

?>

</a>

<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a href="php/logout.php" class="nav-link">
<i class="fa fa-sign-out" style="font-size:18px"></i>Logout
</a>
</li>
</ul>
</nav>
    
  <br>
<div class="container">
<div class="row">
<?php
$table_name=$_SESSION['table_name'];
$get_image_path="SELECT * FROM $table_name";
$response=$db->query($get_image_path);
while($data=$response->fetch_assoc())
{
  $image_name=pathinfo($data['image_name']);
  $image_name=$image_name['filename'];
  $path=str_replace("../","",$data['image_path']);
  echo "<div class='col-md-3'>
  <div class='card'>
  <div class='card-body d-flex justify-content-center align-item-center'>
  <img src='".$path."'width='100' height='100' class='rounded-circle pic'></div>
  <div class='card-footer d-flex justify-content-around align-item-center'>
  <span>".$image_name."</span>
  <i class='fa fa-save save-icon d-none' data-location='".$path."'></i>
  <i class='fa fa-spinner fa-spin loader d-none' data-location='".$path."'></i>
  <i class='fa fa-edit edit-icon' data-location='".$path."'></i>
  <i class='fa fa-download download-icon' data-location='".$path."' file-name='".$image_name."'></i>
  <i class='fa fa-trash' data-location='".$path."'></i>
  </div>
  </div>
  </div>";
}

?>
</div>
 </div> 



<div class="modal animated bounceIn" id="view-modal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">

welcome
</div>
</div>
</div>
</div>

 <script>
 $(document).ready(function(){
$(".pic").each(function(){
  $(this).click(function(){
    $("#view-modal").modal();
  });
});
 });
 
 </script>

</body>
</html>