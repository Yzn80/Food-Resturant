<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Food Restaurant</title>
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
        <form action="search.php">
            <input name="search_name" placeholder="Product Name">
            <button type="submit">Search</button>
        </form>    

            <a href="menu.php" class="logo">Menu</a>
            <a href="order.php" class="logo">Order</a>
            <?php if(!empty($_SESSION['ROLE']) && $_SESSION['ROLE']): ?>
            <a href="project/add_product.php" class="logo">Add Product</a>
            <?php endif; ?>
            
        </nav>
    </header>

    <!-- Main Page -->
    <section class="main">
        <div>
            <h2>Welcome to<br><span>Food <br>Restaurant</span></h2>
            <h3>Our Restaurant Where You Will <br> The Best Food In The World</h3>
            <a href="#dishes" class="main_btn">Best dishes</a>
        </div>
    </section>

    <!-- Best Dishes Page  -->
    <section class="Best_Dishes" id=dishes>
        <h2 class="title">Best dishes</h2>
        <div class="content">
            <div class="Best_Dishes_card">
                <div class="dishes-image">
                    <img src="images/p-1.jpg" height="220px" width="270px">
                </div>
                <div class="Best_Dishes_info">
                    <h3>Beef Burger</h3>
                    <p>Burger with two meat slices,
                        tomatoes, lettuce and cheese
                        with barbuque sauce and grilled cheese</p>
                </div>
            </div>
            <div class="Best_Dishes_card">
                <div class="dishes-image">
                    <img src="images/Chicken-burger.jpg" height="220px" width="270px">
                </div>
                <div class="Best_Dishes_info">
                    <h3>Chicken Burger</h3>
                    <p>Delicious chicken burger with special sauce,
                        tomatoes, lettuce and two pieces of soft
                        bread for perfecte taste you will never forgot</p>
                </div>
            </div>
            <div class="Best_Dishes_card">
                <div class="dishes-image">
                    <img src="images/Pepsi.png" height="220px" width="270px">
                </div>
                <div class="Best_Dishes_info">
                    <h3>Cold drinks</h3>
                    <p>Choice your favorite drinks to
                        enjoy your meal</p>
                </div>
            </div>
            <div class="Best_Dishes_card">
                <div class="dishes-image">
                    <img src="images/coockies.jpg" height="220px" width="270px">
                </div>
                <div class="Best_Dishes_info">
                    <h3>tasty sweets</h3>
                    <p>We have different dessert dishes to continue with
                        the perfect taste journey</p>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>