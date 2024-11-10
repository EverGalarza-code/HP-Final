<!DOCTYPE html>
<html>
<head>
    <title>Holopets | Home</title>
    <link rel="icon" type="image/x-icon" href="images/Logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styless.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header class="header">
        <a href="#" class ="logo"> <img src="images/Logo.png" alt="Holopets Logo">HoloPets</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#features">features</a>
            <a href="#products">products</a>
            <a href="#categories">categories</a>
            <a href="#reviews">reviews</a>
            <a href="#faq">FAQ</a>
        </nav>

        <div class="icons">

            <div class="fa fa-bars" id="menu-btn"></div>
            <div class="fa fa-shopping-cart" id="cart-btn"></div>
            <?php
            if(!isset($_SESSION['userId'])){
                echo '<div class="fa fa-user" id="login-btn"></div>';} else { 
                 echo'<div class="fa fa-user"></div>';
                 }
            ?>
        </div>

        <div class="shopping-cart">
            <div class="box">
                <i class="fa fa-trash"></i>
                <img src="images/Logo.png">
                <div class="content">
                    <h3>HoloPets</h3>
                    <span class="price">$299.99</span>
                    <span class="quantity">Qty : 1/-</span>
                </div>
            </div>

            <div class="box">
                <i class="fa fa-trash"></i>
                <img src="images/Logo.png">
                <div class="content">
                    <h3>HoloPets</h3>
                    <span class="price">$299.99</span>
                    <span class="quantity">Qty : 1/-</span>
                </div>
            </div>

            <div class="box">
                <i class="fa fa-trash"></i>
                <img src="images/Logo.png">
                <div class="content">
                    <h3>HoloPets</h3>
                    <span class="price">$299.99</span>
                    <span class="quantity">Qty : 1/-</span>
                </div>
            </div>

            <div class="total"> total : $999.99 </div>
            <a href="#" class="btn">Checkout</a>
        </div>

        <form action="lncludes/login.inc.php" method="POST" class="login-form">
            <h3>login now</h3>
            <input type="email" name="mailuid" placeholder="your email" class="box">
            <input type="password" name="pwd" placeholder="your password" class="box">

            <p>Forget Your Password <a href="#"> Click Here</a></p>
            <p>Don't Have An Account <a href="index.php" class="login-link"> Create Now</a></p>

            <input type="submit" name="login-submit" value="Login Now" class="btn">
        </form>
    </header>

    <section class="home" id="home">
        <div class="content">
            <h3>Thrilling And <span>Futuristic</span> Products For You</h3>
            <p>At HoloPets, we're redefining companionship with cutting-edge holographic technology. Our goal is simple: to give you the experience of having any pet—real or imagined—right at your fingertips. With a sleek, interactive hologram that responds to your touch, HoloPets brings your perfect pet to life without the mess or responsibility. It's the future of pet ownership, designed to fit seamlessly into your modern lifestyle.</p>

            <a href="#products" class="btn">shop now</a>
        </div>
    </section>


    <section class="features" id="features">
        <h1 class="heading"> our <span>features</span></h1>

        <div class="box-container">
            <div class="box">
                <img src="images/Designer4.png">
                <h1>Beyond Imagination</h1>

                <p>HoloPets is more than just a projection; it's an interactive adventure. Your holographic pet responds to touch, sound, and movement, creating a lifelike experience. Whether you're playing, training, or simply spending time together, HoloPets brings your perfect pet to life in a way that's never been done before.</p>

                <a href="#faq" class="btn">Have Questions?</a>
            </div>

            <div class="box">
                <img src="images/Designer3.png">
                <h1>Form Meets Function</h1>

                <p>With its minimalist, ring-shaped design, HoloPets blends seamlessly into any space, adding a modern touch to your home or office. Compact and portable, this elegant device offers stunning visuals while keeping your environment neat, organized, and clutter-free. It's the perfect mix of style, innovation, and functionality.</p>
                
                <a href="#products" class="btn">Shop Now!</a>
            </div>

            <div class="box">
                <img src="images/Designer5.png">
                <h1>Top Quality, Accessible to All</h1>

                <p>At HoloPets, we believe cutting-edge technology should be accessible to all. Our products are priced to offer unbeatable value, with fast shipping so you can start enjoying your holographic pet as soon as possible.</p>
                <br><br><br>
                <a href="#reviews" class="btn">Our Reviews!</a>
            </div>
        </div>
    </section>


    <section class="products" id="products">
        <h1 class="heading"> our <span>products</span></h1>

        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/Logo.png">
                    <h1>HoloPets</h1>
                    <div class="price"> $299.99</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn">add to cart</a>
                </div>


                <div class="swiper-slide box">
                    <img src="images/Logo.png">
                    <h1>HoloPets</h1>
                    <div class="price"> $299.99</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn">add to cart</a>
                </div>


                <div class="swiper-slide box">
                    <img src="images/Logo.png">
                    <h1>HoloPets</h1>
                    <div class="price"> $299.99</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn">add to cart</a>
                </div>


                <div class="swiper-slide box">
                    <img src="images/Logo.png">
                    <h1>HoloPets</h1>
                    <div class="price"> $299.99</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn">add to cart</a>
                </div>
            </div>
        </div>


        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/Logo.png">
                    <h1>HoloPets</h1>
                    <div class="price"> $299.99</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn">add to cart</a>
                </div>


                <div class="swiper-slide box">
                    <img src="images/Logo.png">
                    <h1>HoloPets</h1>
                    <div class="price"> $299.99</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn">add to cart</a>
                </div>


                <div class="swiper-slide box">
                    <img src="images/Logo.png">
                    <h1>HoloPets</h1>
                    <div class="price"> $299.99</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn">add to cart</a>
                </div>


                <div class="swiper-slide box">
                    <img src="images/Logo.png">
                    <h1>HoloPets</h1>
                    <div class="price"> $299.99</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </section>


    <section class="categories" id="categories">
    <h1 class="heading"> product <span>categories</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="images/Logo.png">
            <h3>HoloPets</h3>
            <p>Desc</p>
            <a href="#" class="btn">filter now</a>
        </div>

        <div class="box">
            <img src="images/Logo.png">
            <h3>HoloPets</h3>
            <p>Desc</p>
            <a href="#" class="btn">filter now</a>
        </div>

        <div class="box">
            <img src="images/Logo.png">
            <h3>HoloPets</h3>
            <p>Desc</p>
            <a href="#" class="btn">filter now</a>
        </div>

        <div class="box">
            <img src="images/Logo.png">
            <h3>HoloPets</h3>
            <p>Desc</p>
            <a href="#" class="btn">filter now</a>
        </div>
    </div>
    </section>


    <section class="review" id="reviews">
    <h1 class="heading"> Customer's <span>Reviews</span></h1>

    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="images/Logo.png">
                <p>review desc</p>
                <h3>John Doe</h3>
                <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                </div>
            </div>


            <div class="swiper-slide box">
                <img src="images/Logo.png">
                <p>review desc</p>
                <h3>John Doe</h3>
                <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                </div>
            </div>


            <div class="swiper-slide box">
                <img src="images/Logo.png">
                <p>review desc</p>
                <h3>John Doe</h3>
                <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                </div>
            </div>


            <div class="swiper-slide box">
                <img src="images/Logo.png">
                <p>review desc</p>
                <h3>John Doe</h3>
                <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                </div>
            </div>
        </div>
    </div>
    </section>


    <section class="faq" id="faq">
    <h1 class="heading"> Our <span>FAQ</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="images/Logo.png">
            <div class="content">
                <div class="icons">
                    <a href="#"><i class="fa fa-user"></i> By User</a>
                    <a href="#"><i class="fa fa-calender"></i> 11th November, 2024</a>
                </div>
                <h3>question blah blah blah blah blah blah</h3>
                <h1>Response blah blah blah blah blah blah blah blah</h1>
                <h2>Question Not Answered?</h2>
                <a href="#" class="btn">contact us</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Logo.png">
            <div class="content">
                <div class="icons">
                    <a href="#"><i class="fa fa-user"></i> By User</a>
                    <a href="#"><i class="fa fa-calender"></i> 11th November, 2024</a>
                </div>
                <h3>question blah blah blah blah blah blah</h3>
                <h1>Response blah blah blah blah blah blah blah blah</h1>
                <h2>Question Not Answered?</h2>
                <a href="#" class="btn">contact us</a>
            </div>
        </div>

        <div class="box">
            <img src="images/Logo.png">
            <div class="content">
                <div class="icons">
                    <a href="#"><i class="fa fa-user"></i> By User</a>
                    <a href="#"><i class="fa fa-calender"></i> 11th November, 2024</a>
                </div>
                <h3>question blah blah blah blah blah blah</h3>
                <h1>Response blah blah blah blah blah blah blah blah </h1>
                <h2>Question Not Answered?</h2> <a href="#" class="btn">contact us</a>
                
            </div>
        </div>

    </div>
    </section>


    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3> Socials </h3>
                <p>Feel Free To Follow Us On Any Of Our Social Media <br>All The Links Are Given Below.</p>

                <div class="share">
                    <a href="#" class='fa fa-linkedin'></a>
                    <a href="#" class='fa fa-github'></a>
                    <a href="#" class='fa fa-instagram'></a>
                    <a href="#" class='fa fa-twitter'></a>
                    <a href="#" class='fa fa-facebook'></a>
                </div>
            </div>


            <div class="box">
                <h3> Contact Info </h3>
                <a href="#" class="links"> <i class="fa fa-phone"> 123-456-7890</i></a>
                <a href="#" class="links"> <i class="fa fa-phone"> 098-765-4321</i></a>
                <a href="#" class="links"> <i class="fa fa-envelope"> HoloPets@gmail.com</i></a>
                <a href="#" class="links"> <i class="fa fa-map-marker"> 123 Holo Road, Holo City, 0000</i></a>
            </div>

            <div class="box">
                <h3> Quick Links </h3>
                <a href="#" class="links"> <i class="fa fa-arrow-right"> Home</i></a>
                <a href="#" class="links"> <i class="fa fa-arrow-right"> Features</i></a>
                <a href="#" class="links"> <i class="fa fa-arrow-right"> Products</i></a>
                <a href="#" class="links"> <i class="fa fa-arrow-right"> Categories</i></a>
                <a href="#" class="links"> <i class="fa fa-arrow-right"> Reviews</i></a>
                <a href="#" class="links"> <i class="fa fa-arrow-right"> FAQ</i></a>
                <a href="#" class="links"> <i class="fa fa-arrow-right"> Contact Us</i></a>
            </div>
        </div>



        <div class="credit">Created By <span>HoloPets</span> | All Rights Reserved</div>
    
    </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="scripts.js"></script>
</body>
</html>