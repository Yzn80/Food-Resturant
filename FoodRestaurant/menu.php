<?php 
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Food menu</title>
</head>

<body>

    <!-- Navigation Bar -->
    <header>
        <a href="index.php" class="logo">Home</a>
    <?php 
if( !isset($_SESSION['LOGGED_IN']) || !$_SESSION['LOGGED_IN'] ){
    ?>
        <a href="project/register.php" class="logo">Login</a>
        <?php 
            }else {
        ?>
        <a href="project/logout.php" class="logo">Logout</a>
        <?php } ?>
            <a href="menu.php" class="logo">Menu</a>
            <a href="order.php" class="logo">Order</a>
            <?php if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']): ?>
            <a href="project/add_product.php" class="logo">Add Product</a>
            <?php endif; ?>
        </nav>
    </header>
 <!-- Menu Page -->
 <section class="product" id="menu">
    <br><br>
    <h2 class="title">Our Menu</h2>
    <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
    <div class="product-container">
        <?php 
        $sql = "SELECT * FROM `products`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {?>
            
                <div class="product-card">
                    <div class="product-image">
                        <span class="price"><?php echo $row['price']; ?> SR</span>
                        <img src="images/<?php echo $row['image']; ?>" class="product-thumb" alt="">
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand"><?php echo $row['title']; ?></h2>
                        <p class="product-short-description"><?php echo $row['description']; ?></p>
                    </div>
                </div>            
             
             
            <?php }
        }
    
        ?>        

    </div>
</section>
<script src="script.js"></script>
</body>

</html>