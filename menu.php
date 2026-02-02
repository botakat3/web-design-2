<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
     <link rel="icon" type="image/x-icon" href="images/mamad-favicon.png">

    <link rel="stylesheet" href="css/bootswatch.css">
    <link rel="stylesheet" href="css/main.css">


</head>
<body>
<?php include 'includes/navigation.php';?>

<div class="container menu">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Menu</li>
        </ol>
    </nav>
    <h2 id="top">Menu</h2>
    <div class="row">
        <div class="menu-buttons">

            <a href="#beverages" ><button type="button" class="btn default-btn">Beverages</button></a>
            <a href="#bakery"><button type="button" class="btn default-btn">Bakery</button></a>
            <a href="#breakfast"><button type="button" class="btn default-btn">Breakfast</button></a>
            <a href="#lunch"><button type="button" class="btn default-btn">Lunch</button></a>
        </div>
    </div>
    <div class="row headers">
        <h3 id="beverages" >Beverages</h3>
        <p>Espresso and non-espresso beverages</p>
    </div>

    <a href="#top"><button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    </a>


    <div class="row row-cols-1 row-cols-md-2 ">
        <div class="col">
            <div class="card">
                <img src="images/card-images/coffee.jpg" class="card-img-top" alt="Coffee in a mug">
                <div class="card-body">
                    <h5 class="card-title">Coffee</h5>
                    <p class="card-text">
                        Proudly serving beans from local roaster, Valentine Coffee
                    </p>
                    <h6>$2.25 - $3.25</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/latte.webp" class="card-img-top" alt="Latte in a mug">
                <div class="card-body">
                    <h5 class="card-title">Latté</h5>
                    <p class="card-text">
                        Espresso with steamed milk
                    </p>
                    <h6>$4.25 - $4.95</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/flavored-latte.jpg" class="card-img-top" alt="Flavored Latte">
                <div class="card-body">
                    <h5 class="card-title">Flavored Latte</h5>
                    <p class="card-text">Espresso, milk, and your choice of flavor</p>
                    <h6>$4.50 - $5.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/breve.jpg" class="card-img-top" alt="Breve">
                <div class="card-body">
                    <h5 class="card-title">Breve</h5>
                    <h6>$4.00 - $5.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/ice-storm.jpg" class="card-img-top" alt="Ice storm drink">
                <div class="card-body">
                    <h5 class="card-title">Ice Storm</h5>
                    <p class="card-text">
                        A blended coffee drink made with espresso, frappe powder (contains dairy), ice, and your choice of milk and flavor
                    </p>
                    <h6>$5.75 - $6.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/hot-cocoa.jpg" class="card-img-top" alt="Hot cocoa">
                <div class="card-body">
                    <h5 class="card-title">Hot Cocoa</h5>
                    <h6>$3.75 - $4.75</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/streamer.jpg" class="card-img-top" alt="Streamer">
                <div class="card-body">
                    <h5 class="card-title">Streamer</h5>
                    <h6>$3.25 - $3.75</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/lemonade-arnoldpalmer.jpg" class="card-img-top" alt="Lemonade Arnold Palmer">
                <div class="card-body">
                    <h5 class="card-title">Lemonade &amp; Arnold Palmer</h5>
                    <h6>$3.00 - $3.75</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/tea.jpg" class="card-img-top" alt="Tea">
                <div class="card-body">
                    <h5 class="card-title">Tea</h5>
                    <h6>$1.00 - $4.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/iced-tea.jpg" class="card-img-top" alt="Iced Tea">
                <div class="card-body">
                    <h5 class="card-title">Iced Tea</h5>
                    <h6>$3.75 - $3.75</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row headers">
        <h3 id="bakery" >Bakery</h3>
    </div>
    <div class="row row-cols-1 row-cols-md-2 ">
        <div class="col">
            <div class="card">
                <img src="images/card-images/muffins.jpg" class="card-img-top" alt="Assortment of muffins">
                <div class="card-body">
                    <h5 class="card-title">Muffins</h5>
                    <h6>$4.00</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/fruit-oatmeal.jpg" class="card-img-top" alt="Fruit oatmeal bar">
                <div class="card-body">
                    <h5 class="card-title">Fruit Oatmeal Bar</h5>

                    <h6>$3.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/rice-krispy.jpg" class="card-img-top" alt="Rice krispy bar with sprinkles">
                <div class="card-body">
                    <h5 class="card-title">Rice Krispy Square</h5>
                    <h6>$4.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/chocolate-chip.jpg" class="card-img-top" alt="Chocolate chip cookie">
                <div class="card-body">
                    <h5 class="card-title">Chocolate Chip Cookie</h5>
                    <h6>$2.75</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row headers">
        <h3 id="breakfast" >Breakfast</h3>
        <p>Proudly serving local eggs from Three Brothers Farms</p>
    </div>
    <div class="row row-cols-1 row-cols-md-2 ">
        <div class="col">
            <div class="card">
                <img src="images/card-images/breakfast-burrito.jpg" class="card-img-top" alt="Breakfast burrito">
                <div class="card-body">
                    <h5 class="card-title">Breakfast Burrito</h5>
                    <p class="card-text">
                        Two scrambled eggs, cheddar cheese, garlic parmesan spread, tomato, onion, and your choice of sausage, bacon, ham, or veggies
                    </p>
                    <h6>$8.75 - $9.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/quiche.jpg" class="card-img-top" alt="Two different quiche">
                <div class="card-body">
                    <h5 class="card-title">Quiche</h5>
                    <p class="card-text">
                        Your choice of Spinach Feta Tomato or Bacon Cheddar
                    </p>
                    <h6>$6.75</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/breakfast-sandwich.jpg" class="card-img-top" alt="Breakfast sandwich">
                <div class="card-body">
                    <h5 class="card-title">Breakfast Sandwich</h5>
                    <p class="card-text">
                        Two scrambled eggs, cheddar cheese, garlic parmesan spread, plus your choice of bacon, sausage, ham, or veggies on a toasted telera roll.

                    </p>
                    <h6>$6.50 - $7.75</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/yogurt-parfait.jpg" class="card-img-top" alt="Yogurt parfait">
                <div class="card-body">
                    <h5 class="card-title">Yogurt Parfait</h5>
                    <p class="card-text">
                        Loaded with fresh fruit and homemade granola
                    </p>
                    <h6>$6.75</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/veggie-egg-bake.jpg" class="card-img-top" alt="Veggie egg bake">
                <div class="card-body">
                    <h5 class="card-title">Veggie Egg Bake</h5>
                    <p class="card-text">
                        Made with spinach, tomato and cheddar cheese
                    </p>
                    <h6>$5.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/sausage-bake.jpg" class="card-img-top" alt="Sausage egg bake">
                <div class="card-body">
                    <h5 class="card-title">Sausage Egg Bake</h5>
                    <p class="card-text">
                        Cheddar cheese, spinach, tomato, & sausage layered & baked in a fluffy egg & milk mixture. Gluten friendly!
                    </p>
                    <h6>$4.25 - $4.95</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/baked-oatmeal.jpg" class="card-img-top" alt="Baked oatmeal">
                <div class="card-body">
                    <h5 class="card-title">Baked Oatmeal</h5>
                    <p class="card-text">
                        A slice of homemade baked oatmeal sprinkled with walnuts & blueberries. Cream & brown sugar served on the side.
                    </p>
                    <h6>$7.75</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/avocado-toast.jpg" class="card-img-top" alt="Avocado Toast">
                <div class="card-body">
                    <h5 class="card-title">Avocado Toast</h5>
                    <p class="card-text">
                        Whole wheat toast topped with avocado, red onion, and tomato. Served with salt and pepper packets on side.
                    </p>
                    <h6>$6.50</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row headers">
        <h3 id="lunch" >Lunch</h3>
        <p>Try one of our signature selections and see what everyone’s talking about</p>
    </div>
    <div class="row row-cols-1 row-cols-md-2 ">
        <div class="col">
            <div class="card">
                <img src="images/card-images/turkey-pesto-panini.jpg" class="card-img-top" alt="Turkey Pesto Panini">
                <div class="card-body">
                    <h5 class="card-title">Turkey Pesto Panini</h5>
                    <p class="card-text">
                        Served with our pesto-cream cheese spread, provolone cheese and choice of fresh tomatoes or roasted red peppers
                    </p>
                    <h6>$9.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/grilled-cheese.jpg" class="card-img-top" alt="Grilled  cheese">
                <div class="card-body">
                    <h5 class="card-title">Ultimate Grilled Cheese</h5>
                    <p class="card-text">
                        Melted cheddar, provolone, and parmesan spread, bacon and fresh tomato
                    </p>
                    <h6>$9.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/ham-cheese-panini.jpg" class="card-img-top" alt="Ham and cheese panini">
                <div class="card-body">
                    <h5 class="card-title">Ham &amp; Cheese Panini</h5>
                    <p class="card-text">
                        Ham and your choice of cheese (cheddar, Swiss, or provolone), tomato, lettuce, mayo, mustard optional.
                    </p>
                    <h6>$9.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/blt-panini.webp" class="card-img-top" alt="Bacon lettuce tomato panini">
                <div class="card-body">
                    <h5 class="card-title">BLT Panini</h5>
                    <p class="card-text">
                        Melted cheddar cheese, bacon, lettuce and tomato with mayo
                    </p>
                    <h6>$9.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/tomato-mozzerella-panini.jpg" class="card-img-top" alt="Tomato mozzarella panini">
                <div class="card-body">
                    <h5 class="card-title">Tomato Mozzarella Panini</h5>
                    <p class="card-text">
                       Melted mozzarella cheese, spinach, tomatoes, with poppyseed dressing
                    </p>
                    <h6>$9.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/spinach-feta-wrap.jpg" class="card-img-top" alt="Spinach feta wrap">
                <div class="card-body">
                    <h5 class="card-title">Spinach-Feta Wrap</h5>
                    <p class="card-text">
                       Served with hard-boiled egg, scallions, radishes, cucumber, currants, and our feta cheese spread
                    </p>
                    <h6>$9.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/turkey-sandwich.jpg" class="card-img-top" alt="Turkey sandwich">
                <div class="card-body">
                    <h5 class="card-title">Signature Turkey Sandwich</h5>
                    <p class="card-text">
                        Toasted telera roll with turkey, cranberry chutney, blue cheese, walnuts, leaf lettuce, and mayo
                    </p>
                    <h6>$9.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/turkey-caesar-wrap.jpg" class="card-img-top" alt="Turkey caesar wrap">
                <div class="card-body">
                    <h5 class="card-title">Turkey Caesar Wrap</h5>
                    <h6>$9.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/beet-salad.jpg" class="card-img-top" alt="Spinach, beet and goat cheese salad">
                <div class="card-body">
                    <h5 class="card-title">Spinach, Beet &amp; Goat Cheese Salad</h5>
                    <p class="card-text">
                        Tossed with sliced pickled beets, red onion, goat cheese and served with poppyseed or raspberry vinaigrette dressing
                    </p>
                    <h6>$9.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/spinach-feta-salad.jpg" class="card-img-top" alt="Spinach and feta salad">
                <div class="card-body">
                    <h5 class="card-title">Spinach &amp; Feta Salad</h5>
                    <p class="card-text">
                        Tossed with scallions, radishes, cucumbers, currants, hard-boiled egg, feta cheese and served with poppyseed or raspberry vinaigrette dressing
                    </p>
                    <h6>$9.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/soup-sandwich.jpg" class="card-img-top" alt="Sandwich next to soup">
                <div class="card-body">
                    <h5 class="card-title">Soup &amp; Mini Sandwich</h5>
                    <p class="card-text">
                        Please contact us to inquire about the soup of the day and customize your sandwich order. Proudly serving local selection from the Soup Market.
                    </p>
                    <h6>$9.25</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/soup-of-the-day.jpg" class="card-img-top" alt="Multiple soups">
                <div class="card-body">
                    <h5 class="card-title">Soup of the Day</h5>
                    <p class="card-text">
                        Please contact us to inquire about the soup of the day. Proudly serving local selection from the Soup Market.

                    </p>
                    <h6>$4.75 - $16.75</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/pb-j.jpg" class="card-img-top" alt="Peanut butter and jelly sandwich">
                <div class="card-body">
                    <h5 class="card-title">Kid's PB &amp; J</h5>
                    <p class="card-text">
                        Served on whole wheat bread
                    </p>
                    <h6>$6.75</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/chicken-salad-sandwich.jpg" class="card-img-top" alt="Chicken salad sandwich">
                <div class="card-body">
                    <h5 class="card-title">Chicken Salad Sandwich</h5>
                    <h6>$9.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/egg-salad-sandwich.jpg" class="card-img-top" alt="Egg salad sandwich">
                <div class="card-body">
                    <h5 class="card-title">Egg Salad Sandwich</h5>
                    <h6>$9.50</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/card-images/kids-grilled-cheese.jpg" class="card-img-top" alt="Kids grilled cheese">
                <div class="card-body">
                    <h5 class="card-title">Kid's Grilled Cheese</h5>
                    <p class="card-text">
                        Melted cheddar and provolone and garlic parmesan spread on telera roll
                    </p>
                    <h6>$7.75</h6>
                </div>
            </div>
        </div>
    </div>





</div>





<?php include 'includes/footer.php';?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>