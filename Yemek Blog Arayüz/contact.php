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
    <section class="contact">
        <h1 class="heading">contact<span> us</span> </h1>
        <div class="row">
            <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d394987.5017359626!2d29.423618855848257!3d39.337213663209155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c946c124460f71%3A0x292659bf8d0625b4!2sK%C3%BCtahya%20Dumlup%C4%B1nar%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1689058809481!5m2!1str!2str"
             loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
            <form >
                <h3>Get in touch</h3>
                <div class="inputBox">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="e-mail">
                </div>
                <div class="inputBox">
                    <i class="fas fa-phone"></i>
                    <input type="number" placeholder="phone number">
                </div>
                <input type="submit" class="btn" value="contact now">
    
            </form>  
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