<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoes Online Shopping</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="navbar-center">
            <span class="nav-icon">
                <i class="fas fa-bars"></i>
            </span>
            Buy Shoes Online with us
			
                <div class="" style="color:red; margin-right:1px;"><a href="logout.php" style="text-decoration:none; font-size:20px;">Logout</a></div>
			
            <div class="cart-btn">
                <span class="nav-icon">
                    <i class="fas fa-cart-plus"></i>
                </span>
                <div class="cart-items">0</div>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->
    <!-- hero -->
    <header class="hero">
<div class="banner">
    <h1 class="banner-title">Available Kids Shoes</h1>
    <a class="banner-btn" href="payments.php" style="text-decoration: none;">Pay Now</a>
</form>
</div>
    </header>
    <!--end of hero -->
    <!-- products -->
    <section class="products">
        <div class="section-title">
            <h2>our products</h2>
        </div>
        <div class="products-center">
            
        </div>
    </section>
    <!-- end of products -->    
        <!-- cart -->
            <div class="cart-overlay">
                <div class="cart">
                    <span class="close-cart">
                        <i class="fas fa-window-close"></i>
                    </span>
                    <h2>my cart</h2>
                    <div class="cart-content">
                        <!-- cart item -->
                        <!-- <div class="cart-item">
                            
                        </div> -->
                        <!-- end of cart item -->
                    </div>
                    <div class="cart-footer">
                        <h3>my total : $ <span class="cart-total">0</span> </h3>
                        <button class="clear-cart banner-btn">clear cart</button>
                    </div>
                </div>
            </div>
        <!-- end of cart -->
        <!-- contentful -->
        <script src="https://cdn.jsdelivr.net/npm/contentful@latest/dist/contentful.browser.min.js"></script>
        <!-- app js -->
    <script src="server.js"></script>
</body>

</html>