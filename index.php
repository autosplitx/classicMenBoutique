<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description" content="Classic Men Boutique" />
  <meta name="keywords" content="Adegoke, Portfolio, Resume" />
  <meta name="author" content="Adegoke Abdulghafar Adewuyi" />

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <link rel="stylesheet" href="./css/utility.min.css" />
  <link rel="stylesheet" href="./css/style.min.css" />

  <title>CMB | Men</title>
</head>

<body>
  <a id="back-to-top"></a>
  <header class="header">
    <div class="header_wrapper">
      <div class="header_nav_wrap">
        <div class="header_nav_content container">
          <div class="flex justify-content-start align-items-center">
            <div class="toggle-bars" onclick="toggleSidebar()">
              <i class=" fa fa-bars"></i>
            </div>
            <a href="./index.php" class="header_nav_center">
              <img src="./images/mainlogo1.png" style="border-radius: 0;" alt="CMB Logo">
            </a>
          </div>
          <div class="header_nav_right">
            <ul class="flex">
              <li class="header_nav_list"><a href="#!"><i class="fa fa-user"></i></a>
                <div class="nav_list_dropdown">
                  <div class="dropdown_content">
                    <h3>Welcome to CMB</h3>
                    <p><span>₵5</span> OFF for new user</p>
                    <a href="./login.php" class="btn btn-dark">Sign in / Register</a>
                    <p class="center">Or sign in:</p>
                    <div class="brand-icon">
                      <a href="#!" class="btn btn-light danger-color"><i class="fab fa-google"></i> GOOGLE</a>
                      <a href="#!" class="btn btn-light primary-color"><i class="fab fa-facebook-square"></i>
                        FACEBOOK</a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="header_nav_list"><a href="#!"><i class="fa fa-heart"></i></a></li>
              <li class="header_nav_list"><a href="#!" class="bag-count"><i class="fa fa-shopping-bag"></i> <span
                    class="">2</span></a>
                <div class="nav_list_dropdown" style="display: none;">
                  <div class="dropdown_content">
                    <h3>Your Shopping Bag is Empty.</h3>
                    <p>
                      <a href="#!"><u>Shop now</u></a> OR
                      <a href="#!"><u>Sign in</u></a> <br> to check your shopping
                      bag
                    </p>
                  </div>
                </div>
                <div class="nav_list_dropdown">
                  <div class="bottom-divider">
                    <div class="dropdown_content shopping-bag">
                      <div class="shopping_bag_container">
                        <div class="shopping_bag_main">
                          <a href="./cart.php"><img src="./images/chic/c-4.png" alt="Product Image"></a>
                          <div class="shopping_bag_head">
                            <p><a href="./cart.php">Solid Color Smile Face Print Shirts</a></p>
                            <div class="flex">
                              <p>White / US L</p>
                              <p>&times; <strong>2</strong></p>
                            </div>
                            <div class="flex">
                              <h2>₵<span>35.68</span></h2>
                              <p>Reduced by <span>₵20.32</span></p>
                            </div>
                            <a href="#!" class="trash"><i class="fa fa-trash"></i></a>
                          </div>
                        </div>
                        <div class="shopping_bag_main">
                          <a href="./cart.php"><img src="./images/chic/c-5.png" alt="Product Image"></a>
                          <div class="shopping_bag_head">
                            <p><a href="./cart.php">Solid Color Smile Face Print Shirts</a></p>
                            <div class="flex">
                              <p>White / US L</p>
                              <p>&times; <strong>2</strong></p>
                            </div>
                            <div class="flex">
                              <h2>₵<span>35.68</span></h2>
                              <p>Reduced by <span>₵20.32</span></p>
                            </div>
                            <a href="#!" class="trash"><i class="fa fa-trash"></i></a>
                          </div>
                        </div>
                        <div class="shopping_bag_main">
                          <a href="./cart.php"><img src="./images/chic/c-6.png" alt="Product Image"></a>
                          <div class="shopping_bag_head">
                            <p><a href="./cart.php">Solid Color Smile Face Print Shirts</a></p>
                            <div class="flex">
                              <p>White / US L</p>
                              <p>&times; <strong>2</strong></p>
                            </div>
                            <div class="flex">
                              <h2>₵<span>35.68</span></h2>
                              <p>Reduced by <span>₵20.32</span></p>
                            </div>
                            <a href="#!" class="trash"><i class="fa fa-trash"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="shopping_bag_subtotal">
                        <div>
                          <p>Order <span>₵35.68</span> get <span>₵20.32</span> OFF</p>
                        </div>
                        <div>Subtotal: <strong>₵35.68</strong></div>
                        <a href="./cart.php" class="btn btn-dark">View Bag/Checkout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="header_nav_list"><a href="#!"><i class="fa fa-headset"></i></a>
                <div class="nav_list_dropdown">
                  <div class="bottom-divider">
                    <div class="dropdown_content">
                      <ul>
                        <li><a href="#!"><i class="fa fa-headset"></i> Live Chart</a></li>
                        <li><a href="#!"><i class="fa fa-comment-dots"></i> Facebook Messenger</a></li>
                        <li><a href="#!"><i class="fa fa-question-circle"></i> Help Center</a></li>
                        <li><a href="#!"><i class="fa fa-envelope"></i> Contact Us</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <nav class="header_mega_nav">
        <div class="container">
          <ul class="flex">
            <li><a href="#!" class="mega-nav-link">New In</a>
              <section class="mega_nav_dropdown">
                <div class="mega_nav_container">
                  <div class="mega_nav_items">
                    <div class="mega_nav_item" id="navNew">
                      <a href="#!"><img src="./images/product/8.jpeg" alt="Category"></a>
                      <p><strong>Brand Sales</strong></p>
                    </div>
                    <div class="mega_nav_item">
                      <div class="mega_nav_content">
                        <ul>
                          <li><a href="#!">WHAT'S NEW</a></li>
                          <li><a href="#!">Casual</a></li>
                          <li><a href="#!">Vacation</a></li>
                          <li><a href="#!">Sexy</a></li>
                          <li><a href="#!">Artistic</a></li>
                          <li><a href="#!">Minimalist</a></li>
                          <li><a href="#!">Homewear</a></li>
                        </ul>
                        <ul>
                          <li><a href="#!">Clothing</a></li>
                          <li><a href="#!">Tops</a></li>
                          <li><a href="#!">Blouses</a></li>
                          <li><a href="#!">Dresses</a></li>
                          <li><a href="#!">Bottoms</a></li>
                          <li><a href="#!">Jumpsuits</a></li>
                          <li><a href="#!">Plus Size</a></li>
                          <li><a href="#!">Pajamas</a></li>
                          <li><a href="#!">Swimwear</a></li>
                        </ul>
                        <ul>
                          <li><a href="#!">Shoes</a></li>
                          <li><a href="#!">Bags</a></li>
                          <li><a href="#!">Accessories</a></li>
                          <li><a href="#!">Beauty</a></li>
                          <li><a href="#!">Jewelry</a></li>
                          <li><a href="#!">Garden</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="mega_nav_item" /product/8.jpeg<u>SHOP BY STYLE</u></h3>
                      <div class="flex">
                        <div class="m-item">
                          <a href="#!">
                            <img src="./images/product/1.jpeg" class="rounded" alt="">
                            <span>Belts</span>
                          </a>
                        </div>
                        <div class="m-item">
                          <a href="#!">
                            <img src="./images/product/12.jpeg" class="rounded" alt="">
                            <span>Shirts</span>
                          </a>
                        </div>
                      </div>
                      <div class="flex">
                        <div class="m-item">
                          <a href="#!">
                            <img src="./images/product/18.jpeg" class="rounded" alt="">
                            <span>Pants</span>
                          </a>
                        </div>
                        <div class="m-item">
                          <a href="#!">
                            <img src="./images/product/20.jpeg" class="rounded" alt="">
                            <span>Long Sleeve</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="mega_nav_item">
                      <a href="#!"><img src="./images/product/9.jpeg" alt="Category"></a>
                      <p><strong>Grab Big Deals</strong></p>
                    </div>
                  </div>
                </div>
              </section>
            </li>
            <li><a href="#!" class="mega-nav-link">Summer Sale</a>
              <section class="mega_nav_dropdown">
                <div class="mega_nav_container">
                  <div class="mega_nav_items">
                    <div class="mega_nav_item" id="navSummer">
                      <h2>Summer Sales</h2>
                    </div>
                  </div>
                </div>
              </section>
            </li>
            <li><a href="#!" class="mega-nav-link">Clothing</a>
              <section class="mega_nav_dropdown">
                <div class="mega_nav_container">
                  <div class="mega_nav_items">
                    <div class="mega_nav_item" id="navClothing">
                      <h2>Clothings</h2>
                    </div>
                  </div>
                </div>
              </section>
            </li>
            <li><a href="#!" class="mega-nav-link">Tops</a>
              <section class="mega_nav_dropdown">
                <div class="mega_nav_container">
                  <div class="mega_nav_items">
                    <div class="mega_nav_item" id="navTop">
                      <h2>Tops</h2>
                    </div>
                  </div>
                </div>
              </section>
            </li>
            <li><a href="#!" class="mega-nav-link">Plus Size</a>
              <section class="mega_nav_dropdown">
                <div class="mega_nav_container">
                  <div class="mega_nav_items">
                    <div class="mega_nav_item" id="navPlus">
                      <h2>Plus Size</h2>
                    </div>
                  </div>
                </div>
              </section>
            </li>
            <li><a href="#!" class="mega-nav-link">Shoes</a>
              <section class="mega_nav_dropdown">
                <div class="mega_nav_container">
                  <div class="mega_nav_items">
                    <div class="mega_nav_item" id="navShoe">
                      <h2>Shoes</h2>
                    </div>
                  </div>
                </div>
              </section>
            </li>
            <li><a href="#!" class="mega-nav-link">Home & Garden</a>
              <section class="mega_nav_dropdown">
                <div class="mega_nav_container">
                  <div class="mega_nav_items">
                    <div class="mega_nav_item" id="navGarden">
                      <h2>Home & Garden</h2>
                    </div>
                  </div>
                </div>
              </section>
            </li>
            <li><a href="#!" class="mega-nav-link">Bags & Beauty</a>
              <section class="mega_nav_dropdown">
                <div class="mega_nav_container">
                  <div class="mega_nav_items">
                    <div class="mega_nav_item" id="navBag">
                      <h2>Bags</h2>
                    </div>
                  </div>
                </div>
              </section>
            </li>
            <li><a href="#!" class="mega-nav-link">Accessories</a>
              <section class="mega_nav_dropdown">
                <div class="mega_nav_container">
                  <div class="mega_nav_items">
                    <div class="mega_nav_item" id="navNew">
                      <h2>Accessories</h2>
                    </div>
                  </div>
                </div>
              </section>
            </li>
            <li><a href="#!" class="mega-nav-link">Sale</a>
              <section class="mega_nav_dropdown">
                <div class="mega_nav_container">
                  <div class="mega_nav_items">
                    <div class="mega_nav_item" id="navSale">
                      <h2>Sale</h2>
                    </div>
                  </div>
                </div>
              </section>
            </li>
          </ul>

          <ul class="flex">
            <li class="search"><input type="search" class="mega_nav_search" /><i class="fa fa-search"></i></li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- <aside> -->
    <div class="backdrop"></div>
    <div class="homesidebar homeside">
      <div class="sidebar-logo">
        <a href="./index.php"><img src="./images/mainlogo1.png" alt="Logo"></a>
      </div>

      <div class="divider"></div>

      <div class="sidebar-tabs effect-homesidebar">
        <!-- <input type="radio" id="tab-m" name="tab-effect-homesidebar" checked="checked">
        <span>Men</span> -->

        <!-- <div class="line ease"></div> -->

        <div class="sidebar-tab-content">
          <section>
            <div class="sidebar-list">
              <ul>
                <li class="sidebar-item">
                  <a href="#!" class="sub-btn"><i class="fa fa-tshirt"></i>Clothings
                    <i class="fa fa-chevron-right dropdown"></i></a>
                  <ul class="sub-menu">
                    <li><a href="./views/category.php" class="sub-menu-item">Hot</a></li>
                    <li><a href="./views/category.php" class="sub-menu-item">Tops</a></li>
                    <li><a href="./views/category.php" class="sub-menu-item">Bottoms</a></li>
                    <li><a href="./views/category.php" class="sub-menu-item">Swimwear</a></li>
                    <li><a href="./views/category.php" class="sub-menu-item">Outerwear</a></li>
                    <li><a href="./views/category.php" class="sub-menu-item">Pajamas &amp; Robes</a></li>
                  </ul>
                </li>
                <li class="sidebar-item">
                  <a href="#!" class="sub-btn"><i class="fa fa-shoe-prints"></i>Shoes
                    <i class="fa fa-chevron-right dropdown"></i></a>
                  <ul class="sub-menu">
                    <li><a href="./views/category.php" class="sub-menu-item">Hot</a></li>
                    <li><a href="./views/category.php" class="sub-menu-item">Boots</a></li>
                    <li><a href="./views/category.php" class="sub-menu-item">Flats</a></li>
                    <li><a href="./views/category.php" class="sub-menu-item">Sandals</a></li>
                  </ul>
                </li>
                <li class="sidebar-item">
                  <a href="#!" class="sub-btn"><i class="fa fa-shopping-bag"></i>Bags
                    <i class="fa fa-chevron-right dropdown"></i></a>
                  <ul class="sub-menu">
                    <li><a href="./views/category.php" class="sub-menu-item">Hot</a></li>
                    <li><a href="./views/category.php" class="sub-menu-item">Printed Bags</a></li>
                    <li><a href="./views/category.php" class="sub-menu-item">CMB Bags</a></li>
                    <li><a href="./views/category.php" class="sub-menu-item">Handbags</a></li>
                    <li><a href="./views/category.php" class="sub-menu-item">Funtional Bags</a></li>
                    <li><a href="./views/category.php" class="sub-menu-item">Walets</a></li>
                  </ul>
                </li>
                <li class="sidebar-item">
                  <a href="#!" class="sub-btn"><i class="fa fa-spa"></i>Accessories
                    <i class="fa fa-chevron-right dropdown"></i></a>
                  <ul class="sub-menu">
                    <li><a href="./views/category.php" class="sub-menu-item">Jewelries</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </section>
        </div>
      </div>
    </div>
    <!-- </aside> -->
  </header>

  <main>
    <div class="active">
      <section class="grid-container">
        <div class="dive">
          <h1 class="titled gradient-text otto">Classic Men's Boutique</h1>
          <button type="button" class="btn btn-primary">
            Explore more >
          </button>
        </div>
        <img src="./images/4.jpg" width="1200" height="675" class="image" alt="Home Banner">
      </section>

      <div class="container">
        <section class="category_section">
          <h1 class="text-center">Shop By Category</h1>
          <div class="categories grid-6">
            <div class="category-card">
              <div class="category-image">
                <a href="./shop.php"><img src="./images/product/1.jpeg" alt="Tops"></a>
              </div>
              <div class="category-info">
                <h2>Belt</h2>
              </div>
            </div>
            <div class="category-card">
              <div class="category-image">
                <a href="./shop.php"><img src="./images/product/20.jpeg" alt="Shirts"></a>
              </div>
              <div class="category-info">
                <h2>Shirts</h2>
              </div>
            </div>
            <div class="category-card">
              <div class="category-image">
                <a href="./shop.php"><img src="./images/product/17.jpeg" alt="Two Pieces"></a>
              </div>
              <div class="category-info">
                <h2>Two Pieces</h2>
              </div>
            </div>
            <div class="category-card">
              <div class="category-image">
                <a href="./shop.php"><img src="./images/product/11.jpeg" alt="Bags"></a>
              </div>
              <div class="category-info">
                <h2>Suit</h2>
              </div>
            </div>
            <div class="category-card">
              <div class="category-image">
                <a href="./shop.php"><img src="./images/product/5.jpeg" alt="Shoes"></a>
              </div>
              <div class="category-info">
                <h2>Shirt</h2>
              </div>
            </div>
            <div class="category-card">
              <div class="category-image">
                <a href="./shop.php"><img src="./images/product/4.jpeg" alt="Accessories"></a>
              </div>
              <div class="category-info">
                <h2>Trousers</h2>
              </div>
            </div>
          </div>
        </section>

        <section class="campaign_section">
          <h1 class="text-center">CMB Campaign</h1>
          <div class="campaign grid">
            <div class="campaign-card">
              <div class="campaign-image">
                <img src="./images/5.jpg" alt="sale">
              </div>
            </div>
            <div class="campaign-card grid">
              <div class="campaign-image">
                <img src="./images/8a.jpg" alt="daily-dresses">
              </div>
              <div class="campaign-image">
                <img src="./images/9a.jpg" alt="statement">
              </div>
              <div class="campaign-image">
                <img src="./images/16a.jpg" alt="comfy">
              </div>
              <div class="campaign-image">
                <img src="./images/10a.jpg" alt="bags and shoes">
              </div>
            </div>
          </div>
        </section>

        <section class="campaign_section">
          <h1 class="text-center">Shop By Deals</h1>
          <div class="categories grid-6">
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/pdt0-img.png" alt="Bags">
                <a href="./detail.php" class="btn btn-light cart-btn">&plus; View More</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Floral Print Straps Jumpsuit</a>
                <h5><span>₵40.43</span> <small><s>₵58.99</s></small></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/pdt1-img.png" alt="Long Sleeve">
                <a href="./detail.php" class="btn btn-light cart-btn">&plus; View More</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Landscape Printed</a>
                <h5><span>₵50.12</span> <small><s>₵58.99</s></small></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/p13.jpg" alt="Blouses">
                <a href="./detail.php" class="btn btn-light cart-btn">&plus; View More</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Geometric Printed</a>
                <h5><span>₵60.45</span> <small><s>₵58.99</s></small></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/p12.jpeg" alt="Printed">
                <button class=" btn btn-light cart-btn">&plus; View More</button>
              </div>
              <div class="product-info text-center">
                <a href="#!">Girl Sunflower</a>
                <h5><span>₵96.47</span> <small><s>₵58.99</s></small></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/p9.jpg" alt="Bags">
                <a href="./detail.php" class="btn btn-light cart-btn">&plus; View More</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Touch Screen Large Capacity</a>
                <h5><span>₵80.54</span> <small><s>₵58.99</s></small></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/p10.jpeg" alt="Cosmetic Cross">
                <a href="./detail.php" class="btn btn-light cart-btn">&plus; View More</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Alligator Multi-Slot Comestic</a>
                <h5><span>₵78.54</span> <small><s>₵58.99</s></small></h5>
              </div>
            </div>
          </div>
        </section>

        <section class="coupon">
          <a href="#!">
            <img src="./images/7.jpg" width="1200" height="675" class="image" alt="Coupon">
          </a>
        </section>

        <section class="arrival grid grid-4">
          <div class="new-arrival grid">
            <div>
              <h1>New Arrival</h1>
              <p>Summer Collection</p>
            </div>
            <div class="side-img">
              <img src="./images/chic/new-arrival-men.jpg" alt="New Arrival">
              <p>₵20</p>
            </div>
          </div>
          <div class="new-arrival grid">
            <div>
              <h1>Best Sellers</h1>
              <p>From only N3.4</p>
            </div>
            <div class="side-img">
              <img src="./images/chic/best-sellers-men.jpg" alt="Best Sellers">
              <p>₵50</p>
            </div>
          </div>
          <div class="new-arrival grid">
            <div>
              <h1>Flash Deals</h1>
              <p>Down to N0.99</p>
            </div>
            <div class="side-img">
              <img src="./images/chic/flash-deals-men.jpg" alt="Flash Deals">
              <p>₵60</p>
            </div>
          </div>
          <div class="new-arrival grid">
            <div>
              <h1>Clearance</h1>
              <p>Up to 40% OFF</p>
            </div>
            <div class="side-img">
              <img src="./images/chic/new-arrival-men.jpg" alt="Clearance">
              <p>₵40</p>
            </div>
          </div>
        </section>

        <section class="coupon">
          <img src="./images/10.jpg" width="100%" alt="Gracila">
        </section>

        <section class="option flex">
          <div><img src="./images/11.jpg" alt="Option"></div>
          <div><img src="./images/23.jpg" alt="Option"></div>
          <div><img src="./images/12.jpg" alt="Option"></div>
        </section>

        <section class="category_section">
          <div class="categories grid-4">
            <div class="category-card card">
              <div class="category-image">
                <img src="./images/product/1.jpeg" alt="Dresses">
              </div>
              <div class="category-info">
                <h2>Cottage</h2>
              </div>
            </div>
            <div class="category-card card">
              <div class="category-image">
                <img src="./images/product/12.jpeg" alt="Tops">
              </div>
              <div class="category-info">
                <h2>Ethnic</h2>
              </div>
            </div>
            <div class="category-card card">
              <div class="category-image">
                <img src="./images/product/18.jpeg" alt="Plus Size">
              </div>
              <div class="category-info">
                <h2>Casual</h2>
              </div>
            </div>
            <div class="category-card card">
              <div class="category-image">
                <img src="./images/product/20.jpeg" alt="Bags">
              </div>
              <div class="category-info">
                <h2>Holiday</h2>
              </div>
            </div>
          </div>
        </section>

        <section class="category_section">
          <div class="categories grid-4">
            <div class="category-card card">
              <div class="category-image">
                <img src="./images/product/21.jpeg" alt="Dresses">
              </div>
              <div class="category-info">
                <h2>Cottage</h2>
              </div>
            </div>
            <div class="category-card card">
              <div class="category-image">
                <img src="./images/product/23.jpeg" alt="Tops">
              </div>
              <div class="category-info">
                <h2>Ethnic</h2>
              </div>
            </div>
            <div class="category-card card">
              <div class="category-image">
                <img src="./images/product/25.jpeg" alt="Plus Size">
              </div>
              <div class="category-info">
                <h2>Casual</h2>
              </div>
            </div>
            <div class="category-card card">
              <div class="category-image">
                <img src="./images/product/24.jpeg" alt="Bags">
              </div>
              <div class="category-info">
                <h2>Holiday</h2>
              </div>
            </div>
          </div>
        </section>

        <section class="category_section">
          <h1>Special Offer</h1>
          <div class="categories grid-3">
            <div class="side-img">
              <img src="./images/product/8.jpeg" alt="Newm Men">
              <p>New Men</p>
            </div>
            <div class="side-img">
              <img src="./images/product/9.jpeg" alt="Sandals">
              <p>Gentle</p>
            </div>
            <div class="side-img">
              <img src="./images/product/10.jpeg" alt="Neck Shirt">
              <p>Suit</p>
            </div>
          </div>
        </section>

      </div>

      <section class="hot_section d-none">
        <div class="container">
          <h1 class="text-center">What's Hot</h1>
          <div class="hots grid">
            <div class="hot-slider hot">
              <h2 class="hot-title">New Products</h3>

                <div class="carousel js-flickity"
                  data-flickity-options='{ "autoPlay": true, "freeScroll": true, "wrapAround": true }'>
                  <div class="carousel-cell"><img src="./images/chic/p9.jpg" alt=""></div>
                  <div class="carousel-cell"><img src="./images/chic/p12.jpeg" alt=""></div>
                  <div class="carousel-cell"><img src="./images/chic/p11.jpg" alt=""></div>

                  <div class="carousel-cell"><img src="./images/chic/p10.jpeg" alt=""></div>
                  <div class="carousel-cell"><img src="./images/chic/p15.jpg" alt=""></div>
                </div>
            </div>

            <div class="hot-category hot">
              <h2 class="hot-title">Hot Categories</h2>
              <div class="grid grid-3">
                <div class="side-img">
                  <img src="./images/chic/p9.jpg" alt="Plus Size">
                  <p>Plus Size</p>
                </div>
                <div class="side-img">
                  <img src="./images/chic/pdt0-img.png" alt="T-shirts">
                  <p>T-Shirts</p>
                </div>
                <div class="side-img">
                  <img src="./images/chic/w-bag1.png" alt="Cross Bag">
                  <p>Cross Bag</p>
                </div>
                <div class="side-img">
                  <img src="./images/chic/sneakers.png" alt="Sneakers">
                  <p>Sneakers</p>
                </div>
                <div class="side-img">
                  <img src="./images/chic/wallet.png" alt="Wallet">
                  <p>Wallet</p>
                </div>
                <div class="side-img">
                  <img src="./images/chic/14.jpg" alt="Shoe">
                  <p>Shoe</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <div class="container">
        <section class="product_section">
          <h1 class="text-center">Recommended For You</h1>
          <div class="products grid-6">
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/p9.jpg" alt="Bags">
                <a href="./detail.php" class="btn btn-light cart-btn"><i class="fa fa-shopping-cart"></i> Quick
                  View</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Large Capacity Multi-Pocket</a>
                <h5><span>₵40.43</span></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/p10.jpeg" alt="Long Sleeve">
                <a href="./detail.php" class="btn btn-light cart-btn"><i class="fa fa-shopping-cart"></i> Quick
                  View</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Landscape Printed</a>
                <h5><span>₵50.12</span></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/p11.jpg" alt="Blouses">
                <a href="./detail.php" class="btn btn-light cart-btn"><i class="fa fa-shopping-cart"></i> Quick
                  View</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Geometric Printed</a>
                <h5><span>₵60.45</span></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/p12.jpeg" alt="Printed">
                <button class=" btn btn-light cart-btn"><i class="fa fa-shopping-cart"></i> Quick View</button>
              </div>
              <div class="product-info text-center">
                <a href="#!">Girl Sunflower</a>
                <h5><span>₵96.47</span></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/p13.jpg" alt="Bags">
                <a href="./detail.php" class="btn btn-light cart-btn"><i class="fa fa-shopping-cart"></i> Quick
                  View</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Touch Screen Large Capacity</a>
                <h5><span>₵80.54</span></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/p14.jpg" alt="Cosmetic Cross">
                <a href="./detail.php" class="btn btn-light cart-btn"><i class="fa fa-shopping-cart"></i> Quick
                  View</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Alligator Multi-Slot Comestic</a>
                <h5><span>₵78.54</span></h5>
              </div>
            </div>

            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/p15.jpg" alt="Bags">
                <a href="./detail.php" class="btn btn-light cart-btn"><i class="fa fa-shopping-cart"></i> Quick
                  View</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Large Capacity Multi-Pocket</a>
                <h5><span>₵40.43</span></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/pdt0-img.png" alt="Long Sleeve">
                <a href="./detail.php" class="btn btn-light cart-btn"><i class="fa fa-shopping-cart"></i> Quick
                  View</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Landscape Printed</a>
                <h5><span>₵50.12</span></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/pdt3-img.png" alt="Blouses">
                <a href="./detail.php" class="btn btn-light cart-btn"><i class="fa fa-shopping-cart"></i> Quick
                  View</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Geometric Printed</a>
                <h5><span>₵60.45</span></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/pdt2-img.png" alt="Printed Patchwork">
                <a href="./detail.php" class="btn btn-light cart-btn"><i class="fa fa-shopping-cart"></i> Quick
                  View</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Girl Sunflower Printed</a>
                <h5><span>₵96.47</span></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/pdt4-img.png" alt="Bags">
                <a href="./detail.php" class="btn btn-light cart-btn"><i class="fa fa-shopping-cart"></i> Quick
                  View</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Touch Screen Large Capacity</a>
                <h5><span>₵80.54</span></h5>
              </div>
            </div>
            <div class="product-card">
              <div class="product-image">
                <img src="./images/chic/pdt6-img.png" alt="Cosmetic Cross">
                <a href="./detail.php" class="btn btn-light cart-btn"><i class="fa fa-shopping-cart"></i> Quick
                  View</a>
              </div>
              <div class="product-info text-center">
                <a href="#!">Alligator Multi-Slot Comestic</a>
                <h5><span>₵78.54</span></h5>
              </div>
            </div>
          </div>

          <div class="text-center my-1">
            <a href="#!" class="btn btn-dark">View More <i class="fa fa-angle-double-down"></i></a>
          </div>
        </section>
      </div>

    </div>
  </main>

  <a href="#back-to-top" class="back-to-top flex"><i class="fa fa-hand-point-up"></i></a>

  <footer>
    <section class="footer_section">
      <div class="container">
        <div class="grid grid-4 bg-light">
          <div class="text-center my-2">
            <i class="fa fa-gem fa-2x"></i>
            <h3 class="text-center">High-quality Goods</h3>
            <p>Enjoy top quality <br> items for less</p>
          </div>
          <div class="text-center my-2">
            <i class="fa fa-headset fa-2x"></i>
            <h3 class="text-center">24/7 Livechat</h3>
            <p>Get instant assistance <br> whenever you need it</p>
          </div>
          <div class="text-center my-2">
            <i class="fa fa-bus fa-2x"></i>
            <h3 class="text-center">Express Shipping</h3>
            <p>Fast & reliable <br> delivery options</p>
          </div>
          <div class="text-center my-2">
            <i class="fa fa-credit-card fa-2x"></i>
            <h3 class="text-center">Secure Payment</h3>
            <p>Multiple safe payment <br> methods</p>
          </div>
        </div>

        <div class="grid grid-3 my-3 text-center">
          <div class="company-info">
            <h1>Company Information</h1>
            <ul>
              <li><a href="#!" class="footer-link">About CMB</a></li>
              <li><a href="#!" class="footer-link">Terms And Conditions</a></li>
            </ul>
          </div>
          <div class="customer-service">
            <h1>Customer Service</h1>
            <ul>
              <li><a href="#!" class="footer-link">Wholesale Program</a></li>
              <li><a href="#!" class="footer-link">Shipping Methods</a></li>
              <li><a href="#!" class="footer-link">Payment Methods</a></li>
            </ul>
          </div>

          <div class="contacts">
            <h1>Contact Us</h1>
            <ul class="social-icon">
              <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> 059 6030 305</li></a>
              <li><i class="fab fa-google error" aria-hidden="true"></i> classicmensboutique@gmail.com</li>
              <li><a href="https://api.whatsapp.com/send?phone=233267268303" class="whatsapp">
                  <i class="fab fa-whatsapp success" aria-hidden="true"></i> WhatsApp</a></li>
              <li><a href="https://web.facebook.com/classicmensboutiqu" class="facebook">
                  <i class="fab fa-facebook primary-color" aria-hidden="true"></i> Facebook</a></li>
              <li><a href="#!" class="instagram"><i class="fab fa-instagram danger" aria-hidden="true"></i>
                  Instagram</a>
              </li>
            </ul>
          </div>
        </div>

        <p class="text-center copyright">Copyright &copy; 2014-2021 classicmenboutique.com All Rights Reserved.</p>
    </section>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="./js/script.min.js"></script>

</body>

</html>