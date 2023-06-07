<?php 
session_start();

if( !$_SESSION['LOGGED_IN'] ){
    echo '<script>window.location.href= "project/login.php?ref=order"</script>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>ordernow</title>
</head>


<body>

    <!-- Navigation Bar -->
    <header>
        <a href="index.php" class="logo">Home</a>
        <?php 
            if( !$_SESSION['LOGGED_IN'] ){
        ?>
        <a href="project/register.php" class="logo">Login</a>
        <?php 
            }else {
        ?>
        <a href="project/logout.php" class="logo">Logout</a>
        <?php } ?>
        <form action="search.php">
            <input name="search_name" placeholder="Product Name">
            <button type="submit">Search</button>
        </form>    
            <a href="menu.php" class="logo">Menu</a>
            <a href="order.php" class="logo">Order</a>
            <?php if($_SESSION['ROLE']): ?>
            <a href="project/add_product.php" class="logo" >Add Product</a>
            <?php endif; ?>
            
        </nav>
    </header>

    <!-- Order Page -->
    <section class="order" id="order">
        <h1 class="title">Order now</h1>
        <div class="row">

            <form action="connect.php" method="POST">
                <div class="inputBox">
                    <input type="text" name="Name" placeholder="name">
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <input type="Phone" name="Phone" placeholder="Phone">
                    <input type="text" name="food" placeholder="food name">
                </div>
                <textarea placeholder="address" name="address" id="" cols="10" rows="5"></textarea>
                <input type="submit" name="ordernow" value="Order Now" class="btn">
            </form>
        </div>
    </section>

    <script src="script.js"></script>
    
</body>

</html>