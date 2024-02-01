<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Island Media Second Test</title>
    <link rel="stylesheet" href="public/css/app.css">
</head>

<body>
    <header>
        <div>
            <img src="public/Icon/logo.svg" alt="Header Image">
        </div>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#moods">Moods</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="jumbotron">
            <img src="public/Home/Header Image.jpg" alt="Header Image">
            <div class="jumbotron-content">
                <h1>Life begins after Coffee.</h1>
                <button><a href="#what-we-have">VIEW MENU</a></button>
            </div>
        </div>

        <section id="what-we-have" class="container center" data-sal="fade">
            <h2>What would you like to have?</h2>
            <p>
                Coffee plunger pot sweet barista, grounds acerbic coffee instant crema cream in half and half. Spoon
                lungo variety, as, siphon, ristretto, iced brewed and acerbic affogato grinder.
            </p>

            <div id="images" class="">
                <?php 
                    // Include the PHP file to get the JSON data
                    include 'data.php'; 

                    // Loop through the images array and display each image
                    foreach ($images as $image) {
                        echo '<div>
                            <p>'.$image["name"].'</p>
                            <img src="' . $image["path"] . '" alt="' . $image["name"] . '">
                        </div>';
                    }
                ?>
            </div>


            <h2>Extraction instant that variety white robusta strong</h2>
            <p>
                Coffee plunger pot sweet barista, grounds acerbic coffee instant crema cream in half and half. Spoon
                lungo variety, as, siphon, ristretto, iced brewed and acerbic affogato grinder. Mazagran café au lait
                wings
                spoon, percolator milk latte dark strong. Whipped, filter latte, filter aromatic grounds doppio
                caramelization
                half and half.
            </p>
            <button>CONTACT US</button>
        </section>

        <section id="health-benefits">
            <div class="container center" id="health-benefits-container">
                <h2>Health Benefits of Coffee</h2>
                <div class="icons">
                    <div>
                        <img src="public/Icon/battery-full.svg" alt="Battery Full">
                        <p>BOOST ENERGY LEVEL</p>
                    </div>
                    <div>
                        <img src="public/Icon/sun.svg" alt="Battery Full">
                        <p>REDUCE DEPRESSION</p>
                    </div>
                    <div>
                        <img src="public/Icon/weight.svg" alt="Battery Full">
                        <p>AID IN WEIGHT LOSS</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="blog">
            <article class="container center">
                <img src="public/Home/blog 1.jpg" alt="blog 1">
                <div>
                    <h2>Qui espresso, grounds to go</h2>
                    <p>December 12, 2019 | Espresso</p>
                    <p>
                        Skinny caffeine aged variety filter saucer redeye, sugar
                        sit steamed eu extraction organic. Beans, crema half
                        and half fair trade carajillo in a variety dripper doppio
                        pumpkin spice cup lungo, doppio, est trifecta breve and,
                        rich, extraction robusta a eu instant. Body sugar
                        steamed, aftertaste, decaffeinated coffee fair trade sit,
                        white shop fair trade galão, dark crema breve
                        frappuccino iced strong siphon trifecta in a at viennese.
                    </p>
                    <p>READ MORE</p>
                </div>
            </article>
        </section>
    </main>

    <footer>
        <div class="container">
            <img src="public/Icon/logo.svg" alt="Header Image">
            <address>
                2800 S White Mountain Rd | Show Low AZ 85901
                (928) 537-1425 | info@grinder-coffee.com
            </address>

            <div>
                <h2>Newsletter</h2>
                <form>
                    <input type="email" placeholder="Your Email Address">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </footer>

    <script src="public/js/app.js"></script>
</body>

</html>