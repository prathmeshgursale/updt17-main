<?php
include('logincode.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quara Aqua</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/My_project.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/8f27d68390.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  <link rel="stylesheet" href="stylecart.css" />
</head>

<body>
  <div class="nav1">
    <header>

      <section id="header">
        <a href="#">
          <img class="logo" src="images/Quara-logo.png" alt="Quara logo">
        </a>
        <div>
          <ul id="navbar">
            <li><a class="active1" href="index.html">Home</a></li>
            <li><a href="brands.html" target="">Brands</a></li>
            <!-- <li><a href="profile.html" target="">Profile</a></li> -->
            <!-- <li><a href="login.html" target="">Login</a></li> -->
            <li><a href="contact.html" target="">Contact Us</a></li>
            <li style="padding-bottom: 100px;padding-left: 0px;">
              <!-- <a href="cart.html" target=""> -->
              <div class="cart-box">
                <div class="cart-icon">
                  <!-- <img id="cartlogo" src="images/add-to-basket.png" alt=""> -->
                  <i class="fas fa-cart-arrow-down fa-2x"></i>
                </div>
                <div class="whole-cart-window hide">
                  <h2>Shopping Bag</h2>
                  <div class="cart-wrapper">
                  </div>
                  <div class="subtotal">Subtotal: ₹ 0.00</div>
                  <a href="buynow.php?userid=<?php echo $_SESSION['auth_userid'] ['user_id'];?>">
                    <div class="checkout">Checkout</div>
                  </a>
                  <div class="view-cart">View Cart</div>
                </div>
              </div>
              <!-- <img id="cartlogo" src="images/add-to-basket.png" alt=""> -->
              </i></a>
            </li>
            <li><div class="action">
              <div class="profile" onclick="menuToggle();">
                  <img src="images/user.png" alt="">
              </div>
      
              <div class="menu">
                  <h3>
                      <!-- User Account -->
                      <?php
                 if(isset( $_SESSION['auth']))
                 {
                  echo $_SESSION['auth_user']['user_name'] ;
                 }
                 ?>

                      <div>
                          Operational Team
                      </div>
                  </h3>
                  <ul>
                      <li class="profile1">
                          <span class="material-icons icons-size">person</span>
                          <a href="profile.html">My Profile</a>
                      </li>
                      <!-- <li class="profile1">
                          <span class="material-icons icons-size">mode</span>
                          <a href="#">Edit Account</a>
                      </li> -->
                      <li class="profile1">
                          <span class="material-icons icons-size">login</span>
                          <a href="login.php">Log In</a>
                      </li>
                      <li class="profile1">
                          <span class="material-icons icons-size">logout</span>

                          <a href="index.php">Log Out
                          <?php
                            unset($_SESSION['auth']);
                           
                          ?>
                          </a>
                          
                          
                      </li>
                      <!-- <li>
                          <span class="material-icons icons-size">account_balance</span>
                          <a href="#">Finance</a>
                      </li>
                      <li>
                          <span class="material-icons icons-size">account_balance_wallet</span>
                          <a href="#">Wallet</a>
                      </li> -->
                  </ul>
              </div>
          </div></li>
          </ul>
        </div>
      </section>
    </header>
  </div>
  <main>
    <!-- partial:index.partial.html -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Neucha' rel='stylesheet' type='text/css'>


    <div id="wrapper">

      <!-- <h1>Simple Image Slider</h1>
      <h2>A Pen by <a href="http://www.andrecortellini.com" target="_blank">André Cortellini</a></h2> -->

      <div id="slider-wrap">
        <ul id="slider">
          <li data-color="#1abc9c">
            <div>
              <!-- <h3>Slide #1</h3>
                    <span>Sub-title #1</span> -->
            </div>
            <a href="#bisleri">
            <img src="images/bisleri (1) (2).jpg" alt="">
          </a>
            <!-- <i class="fa fa-image"></i> -->
          </li>

          <li data-color="#3498db">
            <div>
              <!-- <h3>Slide #2</h3>
                    <span>Sub-title #2</span> -->
            </div>
            <img src="images/aquafina.png" alt="">
            <!-- <i class="fa fa-gears"></i> -->
          </li>

          <li data-color="#9b59b6">
            <div>
              <!-- <h3>Slide #3</h3>
                    <span>Sub-title #3</span> -->
            </div>
            <img src="images/bailley (1) (2).png" alt="">
            <!-- <i class="fa fa-sliders"></i> -->
          </li>

          <li data-color="#34495e">
            <div>
              <!-- <h3>Slide #4</h3>
                    <span>Sub-title #4</span> -->
            </div>
            <img src="images/kinley.jpg" alt="">
            <!-- <i class="fa fa-code"></i> -->
          </li>

          <li data-color="#e74c3c">
            <div>
              <!-- <h3>Slide #5</h3>
                    <span>Sub-title #5</span> -->
            </div>
            <img src="images/vedica_banner (1).jpg" alt="">
            <!-- <i class="fa fa-microphone-slash"></i> -->
          </li>


        </ul>

        <!--controls-->
        <div class="btns" id="next"><i class="fa fa-arrow-right"></i></div>
        <div class="btns" id="previous"><i class="fa fa-arrow-left"></i></div>
        <div id="counter"></div>

        <div id="pagination-wrap">
          <ul>
          </ul>
        </div>
        <!--controls-->

      </div>

    </div>
    <div class="container_of_brandnames">
      <h2 id="bisleri" class="brands_products">Bisleri</h2>
    </div>
    <section id="try1" class="shop-section">
      <div class="card-wrapper">
        <!-- <div class="bisleri-items"> -->
        <div data-id="1" class="card-item">
          <img src="images/bisleri_20ltr.jpg" />
          <div class="details">
            <h3>Bisleri 20 ltr can</h3>
            <p>
              <span>Per Bottle.</span>

              <span class="price">Price: ₹ 90</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <!-- item 2 -->
        <div data-id="2" class="card-item">
          <img src="images/Bisleri_10ltr.jpg" />
          <div class="details">
            <h3>Bisleri 10 Litre Water Can</h3>
            <p>
              <span>
                Per Bottle.
              </span>

              <span class="price">Price: ₹ 110</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.php"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>

        <!-- product 3 -->
        <div data-id="3" class="card-item">
          <img src="images/bisleri_5ltr.jpg" />
          <div class="details">
            <h3>Bisleri 5 Litre Water Can</h3>
            <p>
              <span>Per Bottle.</span>

              <span class="price">Price: ₹ 70</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.php"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>

        <!-- product 4 -->
        <div data-id="4" class="card-item">
          <img src="images/bisleri_2ltr.jpg" />
          <div class="details">
            <h3>Bisleri 2 Litre Water Bottles</h3>
            <p>
              <span>
                Case of 9 bottles.
              </span>

              <span class="price">Price: ₹ 270</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <!-- product 5 -->
        <div data-id="5" class="card-item">
          <img src="images/bisleri_1ltr.jpg" />
          <div class="details">
            <h3>Bisleri 1 Litre Water Bottles</h3>
            <p>
              <span>Case of 12 bottles.</span>
              <span class="price">Price: ₹ 240</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>

        <!-- product 6 -->
        <div data-id="6" class="card-item">
          <img src="images/Bisleri_500ml.jpg" />
          <div class="details">
            <h3>Bisleri 500ml Water Bottles</h3>
            <p>
              <span>
                Case of 24 bottles.
              </span>

              <span class="price">Price: ₹ 240</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>

        <!-- product 7 -->
        <div data-id="7" class="card-item">
          <img src="images/Bisleri_300ml.jpg" />
          <div class="details">
            <h3>Bisleri Rockstar 300ml Water Bottles</h3>
            <p>
              <span>
                Case of 24 bottles.
              </span>

              <span class="price">Price: ₹ 168</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <!-- </div> -->

      </div>
    </section>
    <h2 id="vedica" class="brands_products">Vedica</h2>
    <!-- product 8 -->
    <section id="try2" class="shop-section">
      <div class="card-wrapper">
        <!-- <div class="vedica-items"> -->
        <div data-id="8" class="card-item">
          <img src="images/vedica_1ltr.jpg" />
          <div class="details">
            <h3>Bisleri Vedica 1 Litre Water Bottles</h3>
            <p>
              <span>
                Quantity In Cases, 1 Case = 12 Bottles.
              </span>

              <span class="price">Price: ₹ 720</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <!-- product 9 -->

        <div data-id="9" class="card-item">
          <img src="images/vedica_750ml.jpg" />
          <div class="details">
            <h3>Bisleri Vedica 750ml Glass Water Bottles</h3>
            <p>
              <span>Quantity In Cases, 1 Case = 12 Bottles.</span>

              <span class="price">Price: ₹ 1824</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <div data-id="10" class="card-item">
          <img src="images/vedica-500ml.jpg" />
          <div class="details">
            <h3>Bisleri Vedica 500 ml Water Bottles</h3>
            <p>
              <span>Case of 20 bottles.</span>

              <span class="price">Price: ₹ 800</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <div data-id="11" class="card-item">
          <img src="images/vedica_250ml.jpg" />
          <div class="details">
            <h3>Bisleri Vedica 250 ml Water Bottles</h3>
            <p>
              <span>Case of 24 bottles.</span>

              <span class="price">Price: ₹ 360</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <!-- </div> -->
      </div>
    </section>
    <h2 id="kinley" class="brands_products">Kinley</h2>
    <!-- product 8 -->
    <section id="try2" class="shop-section">
      <div class="card-wrapper">
        <div data-id="12" class="card-item">
          <img src="images/kinley_1ltr (1).jpg" />
          <div class="details">
            <h3>Kinley Mineral Water, 1 Ltr Water Bottles.
            </h3>
            <p>
              <span>
                Quantity In Cases, 1 Case = 15 Bottles.
              </span>

              <span class="price">Price: ₹ 300</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <!-- product 9 -->

        <div data-id="13" class="card-item">
          <img src="images/kinley_500ml (2) (2).jpg" />
          <div class="details">
            <h3>Kinley Drinking Water, 500 ml Water Bottles.</h3>
            <p>
              <span>Quantity In Cases, 1 Case = 12 Bottles.</span>

              <span class="price">Price: ₹ 120</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <div data-id="14" class="card-item">
          <img src="images/kinley_2ltr.jpg" />
          <div class="details">
            <h3>Kinley Drinking Water , 2 Ltr Water Bottles. </h3>
            <p>
              <span>Case of 12 bottles.</span>

              <span class="price">Price: ₹ 420</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <h2 id="aquafina" class="brands_products">Aquafina</h2>
    <!-- product 8 -->
    <section id="try2" class="shop-section">
      <div class="card-wrapper">
        <div data-id="15" class="card-item">
          <img src="images/aquafina_1ltr.jpg" />
          <div class="details">
            <h3>Aquafina Packaged Drinking Water, 1 Ltr Bottle</h3>
            <p>
              <span>
                Quantity In Cases, 1 Case = 12 Bottles.
              </span>

              <span class="price">Price: ₹ 240</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <!-- product 9 -->

        <div data-id="16" class="card-item">
          <img src="images/aquafina_500ml.jpg" />
          <div class="details">
            <h3>Aquafina Packaged Drinking Water, 500 ml .</h3>
            <p>
              <span>Quantity In Cases, 1 Case = 24 Bottles.</span>

              <span class="price">Price: ₹ 240</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <div data-id="17" class="card-item">
          <img src="images/aquafina_2ltr.jpg" />
          <div class="details">
            <h3>Aquafina Packaged Drinking Water, 2 Ltr.</h3>
            <p>
              <span>Case of 12 bottles.</span>

              <span class="price">Price: ₹ 420</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <h2 id="bailey" class="brands_products">Bailey</h2>
    <!-- product 8 -->
    <section id="try2" class="shop-section">
      <div class="card-wrapper">
        <div data-id="18" class="card-item">
          <img src="images/bailey_250ml.jpg" />
          <div class="details">
            <h3>Bailey With Added Minerals Water 250 ML</h3>
            <p>
              <span>
                Quantity In Cases, 1 Case = 48 Bottles.
              </span>

              <span class="price">Price: ₹ 999</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <!-- product 9 -->

        <div data-id="19" class="card-item">
          <img src="images/bailey_500ml.jpg" />
          <div class="details">
            <h3>Bailey With Added Minerals Water 500 ML.</h3>
            <p>
              <span>Quantity In Cases, 1 Case = 24 Bottles.</span>

              <span class="price">Price: ₹ 999</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <div data-id="20" class="card-item">
          <img src="images/bailey_1ltr.jpg" />
          <div class="details">
            <h3>Bottles Bailley Mineral Water 1 Ltr.</h3>
            <p>
              <span>Case of 12 bottles.</span>

              <span class="price">Price: ₹ 120</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <div data-id="21" class="card-item">
          <img src="images/bailey_2ltr.jpg" />
          <div class="details">
            <h3>Bottles 2 Liter Bailley Water Bottle.</h3>
            <p>
              <span>Case of 9 bottles.</span>

              <span class="price">Price: ₹ 195</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <div data-id="22" class="card-item">
          <img src="images/bailey_5ltr.jpg" />
          <div class="details">
            <h3>5 Liter Bailley Mineral Water.</h3>
            <p>
              <span>Per Bottle.</span>

              <span class="price">Price: ₹ 60</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
        <div data-id="23" class="card-item">
          <img src="images/bailey_10ltr.jpg" />
          <div class="details">
            <h3>Jar 10L Bailley Mineral Water</h3>
            <p>
              <span>Per Bottle.</span>

              <span class="price">Price: ₹ 150</span>
              <span class="add-to-cart-btn">Add To Cart</span>
              <a href="buynow.html"><span class="add-to-cart-btn">Buy Now</span></a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- partial -->
    <script src="script.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="./script.js"></script>

  </main>

  <footer class="footer">
    <div class="footer__addr">
      <h1 class="footer__logo"><img src="images/Quara-logo.png" alt="Quara-logo"></h1>

      <h2>Contact</h2>

      <address>
        5534 Somewhere In. The World 22193-10212<br>

        <a class="footer__btn" href="mailto:gursaleprathmesh1234@gmail.com">Email Us</a>
      </address>
    </div>

    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Media</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Online</a>
          </li>

          <li>
            <a href="#">Print</a>
          </li>

          <li>
            <a href="#">Alternative Ads</a>
          </li>
        </ul>
      </li>

      <li class="nav__item nav__item--extra">
        <h2 class="nav__title">Technology</h2>

        <ul class="nav__ul nav__ul--extra">
          <li>
            <a href="#">Hardware Design</a>
          </li>

          <li>
            <a href="#">Software Design</a>
          </li>

          <li>
            <a href="#">Digital Signage</a>
          </li>

          <li>
            <a href="#">Automation</a>
          </li>

          <li>
            <a href="#">Artificial Intelligence</a>
          </li>

          <li>
            <a href="#">IoT</a>
          </li>
        </ul>
      </li>

      <li class="nav__item">
        <h2 class="nav__title">Legal</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Privacy Policy</a>
          </li>

          <li>
            <a href="#">Terms of Use</a>
          </li>

          <li>
            <a href="#">Sitemap</a>
          </li>
        </ul>
      </li>
    </ul>

    <div class="legal">
      <p>&copy; 2019 Quara.All rights reserved.</p>

      <div class="legal__links">
        <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
      </div>
    </div>
  </footer>
  <script src="java.js"></script>
</body>

</html>