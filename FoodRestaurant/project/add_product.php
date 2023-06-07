<?php 

session_start();

if ( $_SESSION['ROLE'] ){
require_once '../connect.php';


if ( isset($_POST['addProduct']) ){

$productTitle = $_POST['productTitle'];
$productDescription = $_POST['productDescription'];
$productPrice = $_POST['productPrice'];

$AddProduct = mysqli_query($conn,"INSERT INTO `products`(`title`, `description`, `price`) VALUES ('$productTitle','$productDescription','$productPrice')");

if( $AddProduct ){
    
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["productImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$check = getimagesize($_FILES["productImage"]["tmp_name"]);
if($check !== false) {
$uploadOk = 1;
} else {
$ERRORS[] = "File is not an image.";
$uploadOk = 0;
}

// Check file size
if ($_FILES["productImage"]["size"] > 500000) {
  $ERRORS[] = "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
  $ERRORS[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
  $randomImageName = bin2hex(random_bytes(10)) . '.' . $imageFileType;
  $target_fileNew = $target_dir . $randomImageName;
  if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_fileNew)) {
    $lastProductID = mysqli_insert_id($conn);
    mysqli_query($conn,"UPDATE products SET image = '$randomImageName' WHERE id = '$lastProductID' ");
    $_SESSION['success'] = 'Proudct Has Been Added';
  } else {
    $ERRORS[] = "Sorry, there was an error uploading your file.";
  }
}

}
}

}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Add Product</h2>
  </div>
	
  <form method="post" action="add_product.php" enctype="multipart/form-data">
  	<?php include('errors.php'); ?>
 	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
 	<?php if ( $_SESSION['ROLE'] ){?>
  	<div class="input-group">
  	  <label>Product Name</label>
  	  <input type="text" name="productTitle" required>
  	</div>
  	<div class="input-group">
  	  <label>Product Description</label>
  	  <textarea style="width:100%;height:55px;" name="productDescription" required></textarea>
  	</div>
  	<div class="input-group">
  	  <label>Price</label>
  	  <input type="number" name="productPrice" required>
  	</div>
  	<div class="input-group">
  	  <label>Product Image</label>
  	  <input type="file" accept="image/*" name="productImage" id="productImage" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="addProduct">Add Product</button>
  	</div>
    <?php }else{ ?>
      <div class="error error" >
      	<h3>
          Please Login With Right User
        <span>
  		Already a member? <a href="logout.php">Logout</a>
    	</span>          
      	</h3>
      </div>
    <?php } ?>
          <span>
  		 <a href="../menu.php">Go To Menu</a>
    	</span>   
  </form>

</body>
</html>