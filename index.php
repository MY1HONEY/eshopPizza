<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, intial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="queries.css" />
    <link rel="stylesheet" type="text/css" href="grid.css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
    <link rel="shortcut icon" href="pizza_icon.png" />
    <title>AvroPizza</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="main.js"></script>

</head>

<body>
    <header>

        <nav class="clearfix">

            <label class="logo">Avro <span>Pizza</span></label>

            <div class="menu-btn">
                <div class="menu-btn__burger"></div>
            </div>

            <div class="shopping_cart">
                <a href="#"><img src="cart-57-128.png" alt="" /></a>
            </div>

            <ul>
                <li><a href="#" class="jq_scroll_to_pizzas"> Pizzas</a></li>
                <li><a href="#" class="jq_scroll_to_burgers"> Burgers</a></li>
                <li><a href="#" class="jq_scroll_to_sides"> Sides</a></li>
                <li><a href="#" class="jq_scroll_to_drinks"> Drinks</a></li>
                <li><a href="#" class="jq_scroll_to_aboutus"> About us</a></li>
                <li><a href="#" class="jq_scroll_to_feedback"> Feedback</a></li>
            </ul>

            


        </nav>

        <div class="background_text">
            <p>Taste our pizzas<br> right now <br><a href="#" class="button jq_scroll_to_pizzas">Order</a></p>
        </div>

    </header>

    <main>


        <section class="pizzas row jq_to_pizzas">

            <div class="heading_main">
                <h2>Pizzas</h2>

                <div class="items">
                    <div class="item_list">

                        <h3>Ham pizza</h3>

                        <img src="Items/ham_salami.jpg" alt="" />

                        <p>Extra-quality natural cooked ham,<br> fresh tomatoes and crunky.<br><spam>19.99£</spam></p>

                        <a href="#" class="button_order">Order</a>

                    </div>

                    <div class="item_list">

                        <h3>Mozzarella pizza</h3>

                        <img src="Items/mozzarela_pizza.jpg" alt="" />

                        <p>Traditional italian mozzarella,<br> fresh tomatoes and basil.<br><spam>15.99£</spam></p>

                        <a href="#" class="button_order">Order</a>

                    </div>

                    <div class="item_list">

                        <h3>Mushroom pizza</h3>

                        <img src="Items/mushrom_pizza.jpg" alt="" />

                        <p>Fresh champignoms from local farm,<br> cream and green pepper.<br><spam>17.99£</spam></p>

                        <a href="#" class="button_order">Order</a>

                    </div>

                    <div class="item_list">

                        <h3>Salami pizza</h3>

                        <img src="Items/salami_pizza.jpg" alt="" />

                        <p>Spicy sausage,<br>thick layer of cedar.<br><spam>21.99£</spam></p>

                        <a href="#" class="button_order">Order</a>

                    </div>

                    <div class="item_list">

                        <h3>Spinate pizza</h3>

                        <img src="Items/spinate_pizza.jpg" alt="" />

                        <p>Fresh young spinate,<br> cream and extra cheese.<br><spam>17.99£</spam></p>

                        <a href="#" class="button_order">Order</a>

                    </div>

                    <div class="item_list">

                        <h3>Olive pizza</h3>

                        <img src="Items/olive_pizza.jpg" alt="" />

                        <p>Large load of olives,<br> green pepper and cheese.<br><spam>18.99£</spam></p>

                        <a href="#" class="button_order">Order</a>

                    </div>
                </div>
            </div>
        </section>

        <section class="burgers row jq_to_burgers">
            <div class="heading_main">
                <h2>Burgers</h2>

                <div class="item_list">

                    <h3>Hamburger</h3>

                    <img src="Items/hamburger.jpg" alt="" />

                    <p>Extra-quality beef, cripsy bacon,<br> onions, salat and home made bun.<br><spam>27.99£</spam></p>

                    <a href="#" class="button_order">Order</a>

                </div>

                <div class="item_list">

                    <h3>Cheeseburger</h3>

                    <img src="Items/cheeseburger.jpg" alt="" />

                    <p>Extra-quality beef, cedar,<br> tomato, salat and home made bun.<br><spam>29.99£</spam></p>

                    <a href="#" class="button_order">Order</a>

                </div>

            </div>
        </section>

        <section class="sides row jq_to_sides">
            <div class="heading_main">
                <h2>Sides</h2>

                <div class="item_list">

                    <h3>French fries</h3>

                    <img src="Items/french_fries.jpg" alt="" />

                    <p>Home made fries from fresh potatoes,<br> lightly salted.<br><spam>9.99£</spam></p>

                    <a href="#" class="button_order">Order</a>

                </div>

            </div>

        </section>

        <section class="drinks row jq_to_drinks">
            <div class="heading_main">
                <h2>Drinks</h2>

                <div class="item_list">

                    <h3>Coke</h3>

                    <img src="Items/coke.jpg" alt="" />

                    <p>Best with ice, always chilled.<br> <spam>4.99£</spam></p>

                    <a href="#" class="button_order">Order</a>

                </div>

            </div>
        </section>

        <section class="reference">

            <div class="heading_main_reference">
                <h2>Our customers reviews</h2>
            </div>

            <div class="customer_reference row">
                <div class="col span-1-of-3">
                    <p>Great food and top service. Nice soft dough with a good crispness where needed. Thanks everybody, much appreciated..</p>

                    <div class="photo_name">
                        <img src="female.png" alt="profile_picture" />
                        <p>Jessie</p>
                    </div>

                </div>

                <div class="col span-1-of-3">
                    <p>The food was excellent and the staff is so welcoming and accommodating. They made our day! Can't wait to go back and try everything on the menu.</p>

                    <div class="photo_name">
                        <img src="female.png" alt="profile_picture" />
                        <p>James</p>
                    </div>

                </div>

                <div class="col span-1-of-3">
                    <p>The best pizza I've ever had, & I eat a lot of pizza. The flavours, the texture, the thought & love that goes in to creating these pizzas is beyond.</p>

                    <div class="photo_name">
                        <img src="female.png" alt="profile_picture" />
                        <p>Ash</p>
                    </div>

                </div>
            </div>

        </section>

        <section class="about_us row jq_to_aboutus">

            <div class="heading_main">
                <h2>About us</h2>

                <p>
                    Established in 2010, Avro has quickly created an enviable reputation for delivering quality authentic Southern Italian food in the heart of London.
                    Many Italians living in London visit Avro for a genuine taste of Italy – what better accolade can we than this!
                </p>

            </div>

        </section>

        <section class="photogalery row">

            <ul>
                <li class="col span-1-of-3"><img src="Gallery/pizza_01.jpg" alt="" /></li>
                <li class="col span-1-of-3"><img src="Gallery/pizza_02.jpg" alt="" /></li>
                <li class="col span-1-of-3"><img src="Gallery/pizza_03.jpg" alt="" /></li>
            </ul>

            <ul>
                <li class="col span-1-of-3"><img src="Gallery/pizza_04.jpg" alt="" /></li>
                <li class="col span-1-of-3"><img src="Gallery/pizza_05.jpg" alt="" /></li>
                <li class="col span-1-of-3"><img src="Gallery/pizza_06.jpg" alt="" /></li>
            </ul>

            <ul>
                <li class="col span-1-of-3"><img src="Gallery/pizza_07.jpg" alt="" /></li>
                <li class="col span-1-of-3"><img src="Gallery/pizza_08.jpg" alt="" /></li>
                <li class="col span-1-of-3"><img src="Gallery/pizza_09.jpg" alt="" /></li>
            </ul>

        </section>

        <section class="about_us row">

            <div class="heading_main">

                <p>
                    Every pizza created at Avro has been lovingly and expertly made by the team with years of experience behind them.
                    All of the pizza chefs are from Napoli, the dough is made from flour especially imported from Italy and then aged in the restaurant to give a wonderfully authentic taste and lightness, the toppings are all chosen for their superior quality and to guarantee the most delicious pizza an Italian wood fired oven bakes the pizza to the perfect crispness.
                </p>

            </div>

        </section>

        <section class="contacts row jq_to_feedback">

            <div class="heading_main">
                <h2>Feedback</h2>

                <form action="mail.php" method="post" class="contact_form">

                    <?php

                    if($_GET["success"] == 1)
                    echo "<div class=\"success\">Message sent.</div>";

                    if($_GET["success"] == -1)
                    echo "<div class=\"error\">Something wrong, try again.</div>";

                    ?>

                    <input type="text" name="name" placeholder="Name"><br>
                    <input type="email" name="email" placeholder="Email">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea><br>
                    <input type="submit" value="Send">
                </form>

            </div>

        </section>
    </main>


    <footer>

        <section class="row">

            <div class="social clearfix">

                <h4>Follow us</h4>

                <div class="facebook clearfix">
                    <a href="#"><img src="facebook.png" alt="Facebook" /></a>
                </div>

                <div class="instagram clearfix">
                    <a href="#"><img src="instagram.png" alt="Instagram" /></a>
                </div>

            </div>

            <div class="open_hours clearfix">
                <h4>Opening hours</h4>

                <ul>
                    <li><pre>Monday    12pm - 9pm</li>
                    <li><pre>Thuesday  12pm - 9pm</li>
                    <li><pre>Wednesday 12pm - 11pm</li>
                    <li><pre>Thursday  12pm - 9pm</li>
                    <li><pre>Friday    12pm - 11pm</li>
                    <li><pre>Satturday 12pm - 11pm</li>
                    <li><pre>Sunday    12pm - 9pm</li>
                </ul>
            </div>

            <div class="footer_text clearfix">
                Copywrite &copy; 2021 Avro Pizza.
            </div>

        </section>

    </footer>

</body>
</html>