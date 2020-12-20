<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EatClean</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <div class="col-1"><a href="index.php"><img src="images/0.png" alt="logo"
                            style="width: 5em; height: 5em;margin-left: 20px;"></a> </div>
                <div class="col-11">
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                        <i class="fas fa-bars"></i>
                    </label>
                    <a href="index.php"></a>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a class="active" href="menu.php">Menu</a></li>
                        <li><a href="reservation.php">Reservation</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <div id="behind">
        </div>



        
        <div class="page-title">
            <h1>Food and Drink Menu</h1>
        </div>

        <div id="menu">
            <h3>Special menu</h3>
            <p>You can view and choose food and drink you like</p>
            <div class="row menu">
                <ul class="col-3">
                    <li><a class="menu-tab active" id="all">All</a></li>
                    <li><a class="menu-tab" id="drink">Drink</a></li>
                    <li><a class="menu-tab" id="lunch">Lunch</a></li>
                    <li><a class="menu-tab" id="dinner">Dinner</a></li>
                    <li class="search-form"><form>
                        <input type="text" id="search" placeholder="Search.....">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    </li>
                </ul>
                <div class="col-9">
                    <div class="row">
                    <!--Drink menu-->
                        <div class="col-3 item-menu drink" style="background-image: url(images/drink1.jpg);">
                                <div class="item-content">
                                    <h1>Drink1</h1>
                                    <p>Some decrible</p>
                                    <b>$x.xx</b>
                                </div>
                                
                        </div>
                        <div class="col-3 item-menu drink" style="background-image: url(images/img-02.jpg);">
                                <div class="item-content">
                                    <h1>Drink2</h1>
                                    <p>Some decrible</p>
                                    <b>$x.xx</b>
                                </div>  
                        </div>
                        
                        <div class="col-3 item-menu drink" style="background-image: url(images/drink3.jpg);">
                                <div class="item-content">
                                    <h1>Drink3</h1>
                                    <p>Some decrible</p>
                                    <b>$x.xx</b>
                                </div>    
                        </div>
                        <!--Lunch menu-->
                        <div class="col-3 item-menu lunch" style="background-image: url(images/menu\ 1.jpg);">
                            <div class="item-content">
                                <h1>Lunch 1</h1>
                                <p>Some decrible</p>
                                <b>$x.xx</b>
                            </div>    
                        </div>
                        <div class="col-3 item-menu lunch" style="background-image: url(images/menu\ 2.jpg);">
                            <div class="item-content">
                                <h1>Lunch 2</h1>
                                <p>Some decrible</p>
                                <b>$x.xx</b>
                            </div>    
                        </div>
                        <div class="col-3 item-menu lunch" style="background-image: url(images/menu\ 4.jpg);">
                            <div class="item-content">
                                <h1>Lunch 2</h1>
                                <p>Some decrible</p>
                                <b>$x.xx</b>
                            </div>    
                        </div>
                        <!-- dinner menu-->
                        <div class="col-3 item-menu dinner" style="background-image: url(images/combo1.jpeg);">
                            <div class="item-content">
                                <h1>Dinner 1</h1>
                                <p>Some decrible</p>
                                <b>$x.xx</b>
                            </div>    
                        </div>
                        <div class="col-3 item-menu dinner" style="background-image: url(images/img-08.jpg);">
                            <div class="item-content">
                                <h1>Dinner 2</h1>
                                <p>Some decrible</p>
                                <b>$x.xx</b>
                            </div>    
                        </div>
                        <div class="col-3 item-menu dinner" style="background-image: url(images/combo2.jpg);">
                            <div class="item-content">
                                <h1>Dinner 3</h1>
                                <p>Some decrible</p>
                                <b>$x.xx</b>
                            </div>    
                        </div>
                        </div>
                </div>
            </div>
        </div>


        <div id="qt">
            <h3>" If you're not the one cooking, stay out of the way and compliment the chef. "</h3>
            <h4>Michael Strahan</h4>
        </div>
        <div id="review">
            <h1>Customer Review</h1>
            <div class="view active" id="review1">
                <i class="fa fa-commenting-o" class="col-12"></i>
                <h3>STEVE FONSI</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p> 
            </div>
            <div class="view" id="review1">
                <i class="fa fa-commenting-o" class="col-12"></i>
                <h3>STEVE FONSI</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p> 
            </div> 
            <div class="view" id="review1">
                <i class="fa fa-commenting-o" class="col-12"></i>
                <h3>STEVE FONSI</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p> 
            </div>
            <div id="control" class="row">
                <div class="col-6" id="prev-btn-div">
                    <button id="prev-btn"><i class="fa fa-arrow-left"></i></button>
                </div>
                <div class="col-6" id="next-btn-div">
                    <button id="next-btn"><i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div class="footer-content">
            <div class="row">
                <div class="col-4">
                    <h3>Opening hours</h3>
                    <p>Monday: Closed</br></br>
                        Tue-Wed : 9:Am - 10PM</br></br>
                        Thu-Fri : 9:Am - 10PM
                    </p>
                </div>
    
                <div class="col-4">
                    <h3>Contact Information</h3>
                    <p>
                        <i class="fa fa-phone"></i> 0123 456 789<br /><br />
                        <i class="fa fa-envelope"></i> eatclean@hcmut.edu.vn<br /><br />
                        <i class="fa fa-map-marker"></i> 5/6/11 Ly Thuong Kiet street, 10 Distince
                    </p>
                </div>
    
                <div class="col-4">
                    <h3>About us</h3>
                    <p>The EatClean is a restaurant situated in the heart of a small village between three national forests and close to the horse ́s capital city, Chantilly. It is the favourite hangout place for people from the polo, horse races, and golf world.</p>
                </div>
    
            </div>
            <div id="social">
                <h3 style="color: white;">Following us on</h3>
                <i class="fa fa-facebook-square"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
            </div>
        </div>
    </footer>
    <script src="js/menuTab.js"></script>
    <script src="js/controlView.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</html>