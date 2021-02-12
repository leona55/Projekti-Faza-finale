<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restaurant</title>
    <?php include('./Partials/header.php') ?> 
</head>

<body>
    <?php include('./Partials/nav.php') ?> 
    <section class="banner" id="banner">
        <div class="content">
            <h2>Art of Cooking</h2>
            <p>Lorem Ipsum</p>
            <a href="#menu" class="btn">Our Menu</a>
        </div>
    </section>

    <section class="about" id="about">
        <div class="row">
            <div class="col50">
                <h2 class="titleText">About Us</h2>
                <p> Restaurant is well known with a substantial gathering of people including families, kids, seniors and business experts. Our benevolent condition is perfect for praising unique events, facilitating a business lunch or assembling for a flavorful
                    dinner with loved ones. Open day by day for lunch and dinner, ’Dinning’ offers a choice of naturally arranged things utilizing just the best fixings accessible. Top picks incorporate Certified Angus Beef®, crisp fish, rotisserie chicken,
                    new prepared pot pie, strength plates of mixed greens, wood-let go pizzas, pasta, sandwiches, burgers and more. </p>
            </div>
            <div class="col50">
                <div class="imgBx">
                    <img src="About-img/001.gif">
                </div>
            </div>
        </div>
    </section>

    <button type="button" class="slick-prev"></i>Previous</button>
    <button type="button" class="slick-next">Next</button>

    <section class="menu" id="menu">
        <h2 class="titleText">Our Menu</h2>
        <div class="title">
            <div class="slider">
                <div class="food-slider">


                    <div class="food-card">
                        <div class="product-image ">
                            <img src="Menu-img/7.jpg">
                        </div>
                        <hr>
                        <div>
                            <h2 class="text-center">Lorem Ipsum</h2>
                            <div class="price text-center">
                                $1.20
                            </div>
                            <a href="#" class="card text-center">Add to cart</a>
                        </div>
                    </div>


                    <div class="food-card">
                        <div class="product-image ">
                            <img src="Menu-img/24.jpg">
                        </div>
                        <hr>
                        <div>
                            <div class="price text-center">
                                $1.20
                            </div>
                            <a href="#" class="card text-center">Add to cart</a>
                        </div>
                    </div>


                    <div class="food-card">
                        <div class="product-image ">
                            <img src="Menu-img/9.jpg">
                        </div>
                        <hr>
                        <div>
                            <div class="price text-center">
                                $1.20
                            </div>
                            <a href="#" class="card text-center">Add to cart</a>
                        </div>
                    </div>

                    <div class="food-card">
                        <div class="product-image ">
                            <img src="Menu-img/10.jpg">
                        </div>
                        <hr>
                        <div>
                            <div class="price text-center">
                                $1.20
                            </div>
                            <a href="#" class="card text-center">Add to cart</a>
                        </div>
                    </div>

                    <div class="food-card">
                        <div class="product-image ">
                            <img src="Menu-img/23.jpeg">
                        </div>
                        <hr>
                        <div>
                            <div class="price text-center">
                                $1.20
                            </div>
                            <a href="#" class="card text-center">Add to cart</a>
                        </div>
                    </div>

                    <div class="food-card">
                        <div class="product-image ">
                            <img src="Menu-img/25.jpg">
                        </div>
                        <hr>
                        <div>
                            <div class="price text-center">
                                $1.20
                            </div>
                            <a href="#" class="card text-center">Add to cart</a>
                        </div>
                    </div>

                    <div class="food-card">
                        <div class="product-image ">
                            <img src="Menu-img/26.jpg">
                        </div>
                        <hr>
                        <div>
                            <div class="price text-center">
                                $1.20
                            </div>
                            <a href="#" class="card text-center">Add to cart</a>
                        </div>
                    </div>

                    <div class="food-card">
                        <div class="product-image ">
                            <img src="Menu-img/27.jpg">
                        </div>
                        <hr>
                        <div>
                            <div class="price text-center">
                                $1.20
                            </div>
                            <a href="#" class="card text-center">Add to cart</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="experts" id="experts">
        <div class="title">
            <h2 class="titleText">Our Kitchen Experts</h2>
            <p>We’re dedicated to our people, our guests, and the American family farmer. Meet the leaders who continue to raise the bar, employee relations, develop our teams, with quarterly meetings to help guide us on human resources, career development,
                and grow the future.</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="Expert-img/chef1.jpg">

                </div>
                <div class="text">
                    <h3>Dawn Vileno</h3>
                </div>

            </div>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="Expert-img/chef2.jpg">
                </div>
                <div class="text">
                    <h3>Joe Goetze</h3>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="Expert-img/chef3.jpg">
                </div>
                <div class="text">
                    <h3>Mike Goral</h3>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="Expert-img/chef4.jpg">
                </div>
                <div class="text">
                    <h3>Keysi Torres</h3>
                </div>
            </div>
        </div>
        <div class="popup-text">
            <a href="#expert" onclick="toggle()">Read More</a>
        </div>
    </section>


    <div id="popup">
        <h2>Dawn Vileno</h2>
        <p>Our food safety and sanitation expert, Keysi manages our quality assurance guidelines, health and sanitation trainings, certifications, and best practices across all of our stores.</p>
        <h2>Joe Goetze</h2>
        <p>Joe Goetze’s official title is managing partner,culinary & bakery, but within the Farmers Restaurant Group family, he’s simply known as Chef Joe.</p>
        <h2>Mike Goral</h2>
        <p>Michael Goral(also affectionately known to our team as “Mike G”) is one of the industry’s most respected restaurant concept developers for his knowledge of every aspect of the business,from brand creation to profitability.</p>
        <h2>Keysi Torres</h2>
        <p>Our food safety and sanitation expert, Keysi manages our quality assurance guidelines, health and sanitation trainings, certifications, and best practices across all of our stores.</p>
        <a href="#expert" onclick="toggle()">Close</a>
    </div>

    <section class="contact" id="contact">
        <div class="content">
            <h2 class="titleText">Contact Us</h2>

        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Fatsa/Ordu,<br>Onur Sk.,<br>52400</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+90 452 423 93 73</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>Dinning@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span class="message">Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="send">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="login" id="logIn">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="Login-reg-img/fb.png">
                <img src="Login-reg-img/tw.png">
                <img src="Login-reg-img/gp.png">
            </div>
            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="User Id" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="chech-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log In</button>
            </form>
            <form id="register" class="input-group">
                <input type="text" class="input-field" placeholder="User Id" required>
                <input type="email" class="input-field" placeholder="Email Id" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="chech-box"><span>Agree to the terms & conditions</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>

    </section>
    <?php include('./Partials/footer.php') ?>


</body>


</html>