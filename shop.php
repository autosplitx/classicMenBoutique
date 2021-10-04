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

  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <link rel="stylesheet" href="./css/utility.min.css" />
  <link rel="stylesheet" href="./css/style.min.css" />

  <title>CMB | Shop</title>
</head>

<body>
  <a id="back-to-top"></a>
  <header class="header">
    <div class="header_wrapper">
      <div class="header_nav_wrap">
        <div class="header_nav_content container">
          <div class="header_nav_left d-none">
            <ul class="flex text-center">
              <li onclick="toggleSidebar()">
                <a href="#!">Filter <i class="fa fa-filter"></i></a>
              </li>
            </ul>
          </div>
          <a href="./index.php" class="header_nav_center">
            <img src="./images/mainlogo1.png" alt="CMB Logo">
          </a>
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
                      <a href="#!"><img src="./images/chic/freq1.jpg" alt="Category"></a>
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
                    <div class="mega_nav_item">
                      <h3><u>SHOP BY STYLE</u></h3>
                      <div class="flex">
                        <div class="m-item">
                          <a href="#!">
                            <img src="./images/chic/hoodie.png" alt="">
                            <span>Hoodie</span>
                          </a>
                        </div>
                        <div class="m-item">
                          <a href="#!">
                            <img src="./images/chic/sweater.png" alt="">
                            <span>Sweater</span>
                          </a>
                        </div>
                      </div>
                      <div class="flex">
                        <div class="m-item">
                          <a href="#!">
                            <img src="./images/chic/patchwork.png" alt="">
                            <span>Patchwork</span>
                          </a>
                        </div>
                        <div class="m-item">
                          <a href="#!">
                            <img src="./images/chic/cartoon.png" alt="">
                            <span>Cartoon</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="mega_nav_item">
                      <a href="#!"><img src="./images/chic/freq2.jpg" alt="Category"></a>
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
  </header>

  <section class="container">
    <div class="bread-crumb mt-5">
      <ul class="breadcrumb">
        <li><a href="./index.php">Home</a></li>
        <li><a href="#">New Arrival</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#!">Tops</a></li>
      </ul>
    </div>
  </section>

  <main>
    <section class="container">
      <div class="shops grid">
        <div class="shop-filter-aside">
          <div class="backdrop"></div>
          <div class="homesidebar styleside">
            <div class="sidebar-logo">
              Filters
            </div>

            <div class="divider d-none"></div>

            <div class="sidebar-list style">
              <div class="sidebar-categories">
                <a href="#!" class="sub-btn">Categories</a>
                <ul>
                  <li><a href="#!">Blouses & Shirts</a></li>
                  <li><a href="#!">T-Shirts</a></li>
                  <li><a href="#!">Tank Tops & Camis</a></li>
                  <li><a href="#!">Crop Tops</a></li>
                  <li><a href="#!">Kimonos</a></li>
                </ul>
              </div>

              <div class="d-none">
                <div class="flex">
                  <label for="ship-in">Ship in 24 hours</label>
                  <input type="checkbox" id="ship-in">
                </div>
                <div class="flex">
                  <label for="in-sale">Sale</label>
                  <input type="checkbox" id="in-sale">
                </div>
              </div>

              <ul>
                <li class="sidebar-item">
                  <a href="#!" class="sub-btn">Color <i class="fa fa-chevron-right dropdown"></i></a>
                  <div class="sub-menu color-attributes">
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/brown.png" class="rounded" alt="Brown"><span>Brown</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/blue.png" class="rounded" alt="Blue"><span>Blue</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/khaki.png" class="rounded" alt="Khaki"><span>Khaki</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/red.png" class="rounded" alt="Red"><span>Red</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/green.png" class="rounded" alt="Green"><span>Green</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/black.png" class="rounded" alt="Black"><span>Black</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/gray.png" class="rounded" alt="Gray"><span>Gray</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/beige.png" class="rounded" alt="Beige"><span>Beige</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/pink.png" class="rounded" alt="Pink"><span>Pink</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/silver.png" class="rounded" alt="Silver"><span>Silver</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/white.png" class="rounded" alt="White"><span>White</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/purple.png" class="rounded" alt="Purple"><span>Purple</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/gold.png" class="rounded" alt="Gold"><span>Gold</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/orange.png" class="rounded" alt="Orange"><span>Orange</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/rainbow.png" class="rounded" alt="Rainbow"><span>Rainbow</span>
                    </a>
                    <a href="javascript:void(0)" class="taggable">
                      <img src="../images/chic/yellow.png" class="rounded" alt="Yellow"><span>Yellow</span>
                    </a>


                  </div>
                </li>
                <li class="sidebar-item">
                  <a href="#!" class="sub-btn">Size
                    <i class="fa fa-chevron-right dropdown"></i></a>
                  <div class="sub-menu">
                    <div class="taggable"><input type="checkbox" id="us-4"> <label for="us-4">US 4 (1)</label></div>
                    <div class="taggable"><input type="checkbox" id="us-5"> <label for="us-5">US 5 (3)</label></div>
                    <div class="taggable"><input type="checkbox" id="us-6"> <label for="us-6">US 6 (213)</label></div>
                    <div class="taggable"><input type="checkbox" id="us-7"> <label for="us-7">US 7 (2)</label></div>
                    <div class="taggable"><input type="checkbox" id="us-8"> <label for="us-8">US 8 (3)</label></div>
                    <div class="taggable"><input type="checkbox" id="us-9"> <label for="us-9">US 9 (5)</label></div>
                    <div class="taggable"><input type="checkbox" id="us-10"> <label for="us-10">US 10 (6)</label></div>
                    <div class="taggable"><input type="checkbox" id="us-11"> <label for="us-11">US 11 (12)</label></div>
                    <div class="taggable"><input type="checkbox" id="us-12"> <label for="us-12">US 12 (42)</label></div>
                    <div class="taggable"><input type="checkbox" id="us-14"> <label for="us-14">US 14 (65)</label></div>
                    <div class="taggable"><input type="checkbox" id="us-16"> <label for="us-16">US 16 (22)</label></div>
                    <div class="taggable"><input type="checkbox" id="us-xl"> <label for="us-xl">US XL (43)</label></div>
                    <div class="taggable"><input type="checkbox" id="us-2xl"> <label for="us-2xl">US 2XL (1)</label>
                    </div>
                    <div class="taggable"><input type="checkbox" id="us-3xl"> <label for="us-3xl">US 3XL (9)</label>
                    </div>
                    <div class="taggable"><input type="checkbox" id="us-4xl"> <label for="us-4xl">US 4XL (2)</label>
                    </div>
                    <div class="taggable"><input type="checkbox" id="us-5xl"> <label for="us-5xl">US 5XL (17)</label>
                    </div>
                  </div>
                </li>
                <div class="_m">
                  <li class="sidebar-item">
                    <a href="#!" class="sub-btn"><i class="fa fa-tshirt"></i>Material
                      <i class="fa fa-chevron-right dropdown"></i></a>
                    <div class="sub-menu">
                      <a href="javascript:void(0)" class="taggable">
                        <span>Cotton</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Velvet</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Linen</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Rayon</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Nylon</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Polyester</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Viscose</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Spandex</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Corduroy</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Chiffon</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Blended Cotton</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Silk</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Mesh</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Modal</span>
                      </a>
                    </div>
                  </li>
                  <li class="sidebar-item">
                    <a href="#!" class="sub-btn"><i class="fa fa-atom"></i>Pattern
                      <i class="fa fa-chevron-right dropdown"></i></a>
                    <div class="sub-menu">
                      <a href="javascript:void(0)" class="taggable">
                        <span>Cat</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Cartoon</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Floral</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Striped</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Color Block</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Art Illustration</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Plaid</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Letter</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Leopard</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Stars</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Feather</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Fish</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Plant</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Dot</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Tie-dye</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Galaxy</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Calico</span>
                      </a>
                    </div>
                  </li>
                  <li class="sidebar-item">
                    <a href="#!" class="sub-btn"><i class="fa fa-glass-cheers"></i>Occasion
                      <i class="fa fa-chevron-right dropdown"></i></a>
                    <div class="sub-menu">
                      <a href="javascript:void(0)" class="taggable">
                        <span>Outdoor</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Cosplay</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Sport</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Party</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Shopping</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Formal</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Casual</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Versatile</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Home</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Date</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Daily</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Holiday</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Running</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Beach</span>
                      </a>
                    </div>
                  </li>
                  <li class="sidebar-item">
                    <a href="#!" class="sub-btn"><i class="fa fa-shapes"></i>Style
                      <i class="fa fa-chevron-right dropdown"></i></a>
                    <div class="sub-menu">
                      <a href="javascript:void(0)" class="taggable">
                        <span>Casual</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Vintage</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Elegant</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Fashion</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Young CMB</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Stylish</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Bohemia</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Business</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Formal</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Sexy</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Brief</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Classic</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Sweet/Cute</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Retro</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Hawaiian Style</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Ethnic</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>European Style</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Natural</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Ins</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Country Style</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Lovely</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Funny</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Sport/Active</span>
                      </a>
                    </div>
                  </li>
                  <li class="sidebar-item">
                    <a href="#!" class="sub-btn"><i class="fa fa-slash"></i>Sleeves Length
                      <i class="fa fa-chevron-right dropdown"></i></a>
                    <div class="sub-menu">
                      <a href="javascript:void(0)" class="taggable">
                        <span>Long Sleeve</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Short Sleeve</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>3/4 Length Sleeve</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Half Sleeve</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Sleeveless</span>
                      </a>
                    </div>
                  </li>
                  <li class="sidebar-item">
                    <a href="#!" class="sub-btn"><i class="fa fa-circle"></i>Collar
                      <i class="fa fa-chevron-right dropdown"></i></a>
                    <div class="sub-menu">
                      <a href="javascript:void(0)" class="taggable">
                        <span>O-neck</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>V-neck</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Hooded</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Stand Collar</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Lapel Collar</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Others</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Half Open Collar</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Double-Layer</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Slash Neck</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Ruffled</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Crew Neck</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>High Neck</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Square Collar/span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Half-collar</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Polo</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Off Shoulder</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Asymmetrical</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Turtleneck</span>
                      </a>
                    </div>
                  </li>
                  <li class="sidebar-item">
                    <a href="#!" class="sub-btn"><i class="fa fa-hand-holding-heart"></i>Season
                      <i class="fa fa-chevron-right dropdown"></i></a>
                    <div class="sub-menu">
                      <a href="javascript:void(0)" class="taggable">
                        <span>Winter</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Autumn</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Spring</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Summer</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Fall & Winter</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Spring & Summer</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>Spring & Fall</span>
                      </a>
                      <a href="javascript:void(0)" class="taggable">
                        <span>All Season</span>
                      </a>
                    </div>
                  </li>
                </div>
                <li class="sidebar-item">
                  <a href="#!" class="sub-btn">Price Range
                    <i class="fa fa-chevron-right dropdown"></i></a>
                  <div class="sub-menu price-range">
                    <input type="number" placeholder="Min"> &dash; <input type="number" placeholder="Max">
                    <a href="#!">GO</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="shop-main">
          <div class="shop-main-tags">
            <ul>
              <a href="#" class="faded">Categories:</a>
              <div>
                <li><a href="#!">Women</a></li>
                <li><a href="#!">Men</a></li>
                <li><a href="#!">Bags</a></li>
                <li><a href="#!">Shoes</a></li>
                <li><a href="#!">Beauty</a></li>
                <li><a href="#!">Jewelry & Watch</a></li>
                <li><a href="#!">Home & Garden</a></li>
                <li><a href="#!">Accessories</a></li>
              </div>
            </ul>
          </div>

          <div class="shop-main-filterable">
            <div class="r-filter">
              <div class="r-filter-item hoverable d-inline">
                <a href="#!" class="outlined">Recommend <i class="fa fa-chevron-down"></i></a>
                <ul>
                  <li><a href="#!">New Arrival</a></li>
                  <li><a href="#!">Price High to Low</a></li>
                  <li><a href="#!">Price Low to High</a></li>
                  <li><a href="#!">Recommend</a></li>
                </ul>
              </div>
              <div class="r-filter-item d-inline">
                <a href="#!">
                  <input type="checkbox" name="time" id="timeDuration">
                  <label for="timeDuration">Ship in 24 hours</label>
                </a>
              </div>
              <div class="r-filter-item d-inline">
                <a href="#!">
                  <input type="checkbox" name="sale" id="fSale">
                  <label for="fSale">SALE</label></a>
              </div>
            </div>
            <div class="control-slider">
              <div>
                <i class="fa fa-chevron-left"></i>
                <span>1 / 8</span>
                <i class="fa fa-chevron-right"></i>
              </div>
            </div>
          </div>

          <section class="product_section">
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
    </section>
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