<?php include("head.php");
?>
    <div class="button">
        <button id="search-btn">
            <i class="fa fa-magnifying-glass"></i>
        </button>
        <button id="cart-btn">
            <i class="fa fa-cart-shopping"></i>
        </button>
        <button id="menu-btn">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <div class="search-form">
        <input type="text" class="search-input" placeholder="Search" 
        id="search-box">
        <i class="fas fa-search"></i>
    </div>
      
      <div class="cart-items-container">
        <div class="cart-item">
          <i class="fas fa-times"></i>
          <img src="images/menu-1.png" alt="menu" />
          <div class="content">
            <h3>cart item 01</h3>
            <div class="price">$15.99/-</div>
          </div>
        </div>
        <div class="cart-item">
          <i class="fas fa-times"></i>
          <img src="images/menu-2.png" alt="menu" />
          <div class="content">
            <h3>cart item 02</h3>
            <div class="price">$15.99/-</div>
          </div>
        </div>
        <div class="cart-item">
          <i class="fas fa-times"></i>
          <img src="images/menu-3.png" alt="menu" />
          <div class="content">
            <h3>cart item 03</h3>
            <div class="price">$15.99/-</div>
          </div>
        </div>
        <div class="cart-item">
          <i class="fas fa-times"></i>
          <img src="images/menu-4.png" alt="menu" />
          <div class="content">
            <h3>cart item 04</h3>
            <div class="price">$15.99/-</div>
          </div>
        </div>
        <a href="#" class="btn">checkout now</a>
      </div>

</header>
    <!--header section end-->
    <section class="products">
        <h1 class="heading">OUR <span>Products</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="box-head">
                    <span class="title">MINI BURGER</span>
                    <a href="#" class="name">Bacon Burger</a>
                </div>
                <div class="image">
                    <img src="images/product-1.png" alt="" >
                </div>
                <div class="box-bottom">
                    <div class="info">
                        <b class="price">$6.00</b>
                        <span class="amount">100gr / 300 Cal</span>
                    </div>
                    <div class="product-btn">
                        <a href="#">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-head">
                    <span class="title">MINI BURGER</span>
                    <a href="#" class="name">Bacon Burger</a>
                </div>
                <div class="image">
                    <img src="images/product-2.png" alt="" >
                </div>
                <div class="box-bottom">
                    <div class="info">
                        <b class="price">$12.00</b>
                        <span class="amount">100gr / 300 Cal</span>
                    </div>
                    <div class="product-btn">
                        <a href="#">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="box dark-bg">
                <div class="box-head">
                    <span class="title">MINI BURGER</span>
                    <a href="#" class="name">Bacon Burger</a>
                </div>
                <div class="image">
                    <img src="images/dark-product.jpg" alt="" >
                </div>
                <div class="box-bottom">
                    <div class="info">
                        <b class="price">$24.00</b>
                        <span class="amount">4400gr / 1200 Cal</span>
                    </div>
                    <div class="product-btn">
                        <a href="#">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section class="footer">
        <div class="search">
            <input type="text" class="search-input" placeholder="Search">
            <button class="btn btn-primary">search</button>
        </div>
        <div class="share">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
        <div class="credit">
            "created by"
            <span>Ayana Şevval Gün</span>
            "|all rights reserved"
        </div>
    </section>
    <!-- footer section end-->

    <script src="js.js"> </script>
</body>

</html>