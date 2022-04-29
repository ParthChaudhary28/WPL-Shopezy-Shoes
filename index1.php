<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopezy Shoes</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo">Shopezy Shoes</a>
    <img class="Shopezy" src="images/Shopezy.png">

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="login.html" class="fas fa-user"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="slide-container active">
        <div class="slide">
            <div class="content">
                <span>nike red shoes</span>
                <h3>nike blazing shoes</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat maiores et eos eaque veritatis aut laboriosam earum dolorem iste atque.</p>
                <a href="#" class="btn">add to cart</a>
                
            </div>
            <div class="image">
                <img src="images/home-shoe-1.png" class="shoe" alt="">
                <img src="images/home-text-1.png" class="text" alt="">
            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide">
            <div class="content">
                <span>nike blue shoes</span>
                <h3>nike meteor shoes</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat maiores et eos eaque veritatis aut laboriosam earum dolorem iste atque.</p>
                <a href="#" class="btn">add to cart</a>
            </div>
            <div class="image">
                <img src="images/home-shoe-2.png" class="shoe" alt="">
                <img src="images/home-text-2.png" class="text" alt="">
            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide">
            <div class="content">
                <span>nike yellow shoes</span>
                <h3>nike ultimate shoes</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat maiores et eos eaque veritatis aut laboriosam earum dolorem iste atque.</p>
                <a href="#" class="btn">add to cart</a>
            </div>
            <div class="image">
                <img src="images/home-shoe-3.png" class="shoe" alt="">
                <img src="images/home-text-3.png" class="text" alt="">
            </div>
        </div>
    </div>

    <div id="prev" class="fas fa-chevron-left" onclick="prev()"></div>
    <div id="next" class="fas fa-chevron-right" onclick="next()"></div>

</section>

<!-- home section ends -->

<!-- service section starts  -->

<section class="service">

    <div class="box-container">

        <div class="box">
            <i class="fas fa-shipping-fast"></i>
            <h3>fast delivery</h3>
            
        </div>

        <div class="box">
            <i class="fas fa-undo"></i>
            <h3>10 days replacements</h3>
            
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>24 x 7 support</h3>
            
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> latest <span>products</span> </h1>

    <div class="box-container" id="prds">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-1.png" alt="">
            <div class="content">
                <h3>Nike Grey Glory</h3>
                <div class="price">Rs1200 <span>Rs1500</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-2.png" alt="">
            <div class="content">
                <h3>Nike Jet black </h3>
                <div class="price">Rs1300 <span>Rs1400</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-3.png" alt="">
            <div class="content">
                <h3>Nike White Shine</h3>
                <div class="price">Rs1100 <span>Rs1600</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-4.png" alt="">
            <div class="content">
                <h3>nike Float Max</h3>
                <div class="price">Rs2000 <span>Rs2500</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-5.png" alt="">
            <div class="content">
                <h3>nike star</h3>
                <div class="price">Rs800 <span>Rs 1000</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="images/product-6.png" alt="">
            <div class="content">
                <h3>nike power max</h3>
                <div class="price">Rs 3500 <span>Rs4000</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>

    </div>

</section>

<!-- products section ends -->

<!-- featured section starts  -->

<!-- <section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> products </h1>

    <div class="row">
        <div class="image-container">
            <div class="small-image">
                <img src="images/f-img-1.1.png" class="featured-image-1" alt="">
                <img src="images/f-img-1.2.png" class="featured-image-1" alt="">
                <img src="images/f-img-1.3.png" class="featured-image-1" alt="">
                <img src="images/f-img-1.4.png" class="featured-image-1" alt="">
            </div>
            <div class="big-image">
                <img src="images/f-img-1.1.png" class="big-image-1" alt="">
            </div>
        </div>
        <div class="content">
            <h3>new nike airmax shoes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta facilis praesentium odit voluptas illum iure libero quis fuga commodi. Autem.</p>
            <div class="price">Rs3000 <span>Rs4000</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>
    </div>

    <div class="row">
        <div class="image-container">
            <div class="small-image">
                <img src="images/f-img-2.1.png" class="featured-image-2" alt="">
                <img src="images/f-img-2.2.png" class="featured-image-2" alt="">
                <img src="images/f-img-2.3.png" class="featured-image-2" alt="">
                <img src="images/f-img-2.4.png" class="featured-image-2" alt="">
            </div>
            <div class="big-image">
                <img src="images/f-img-2.1.png" class="big-image-2" alt="">
            </div>
        </div>
        <div class="content">
            <h3>new nike airmax shoes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta facilis praesentium odit voluptas illum iure libero quis fuga commodi. Autem.</p>
            <div class="price">Rs3000 <span>Rs4000</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>
    </div> -->

    <!-- <div class="row">
        <div class="image-container">
            <div class="small-image">
                <img src="images/f-img-3.1.png" class="featured-image-3" alt="">
                <img src="images/f-img-3.2.png" class="featured-image-3" alt="">
                <img src="images/f-img-3.3.png" class="featured-image-3" alt="">
                <img src="images/f-img-3.4.png" class="featured-image-3" alt="">
            </div>
            <div class="big-image">
                <img src="images/f-img-3.1.png" class="big-image-3" alt="">
            </div>
        </div>
        <div class="content">
            <h3>new nike airmax shoes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta facilis praesentium odit voluptas illum iure libero quis fuga commodi. Autem.</p>
            <div class="price">Rs3500 <span>Rs3800</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>
    </div>

</section> -->

<!-- featured section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/Parth Chaudhary.jpeg" alt="">
            <h3>Parth Chaudhary</h3>
            <p>Awesome shoes, excellent customer service would recommend this website to anyone who wants to buy great, reasonable and durable pair of shoes</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/pic2.png" alt="">
            <h3>Om Topale </h3>
            <p>Great shoes, loved the variety and and quality of the shoes</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/pic3.png" alt="">
            <h3>Krish Bhat</h3>
            <p>Really impressed by the dilevery time of the order and the pricing of the products on this website.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">

    <div class="content">
        <h3>monthly newsletter</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum ullam veniam at itaque culpa hic corporis saepe dicta doloremque nihil.</p>
        <form action="">
            <input type="email" placeholder="enter your email" class="box">
            <input type="submit" value="send" class="btn">
        </form>
    </div>

</section>

<!-- newsletter section ends -->

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our stores</h3>
            <a href="#">MUMBAI</a>
            <a href="#">DELHI</a>
            <a href="#">BANGLORE</a>
            <a href="#">HYDERABAD</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">products</a>
            <a href="#">featured</a>
            <a href="#">review</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my favorite</a>
            <a href="#">my orders</a>
            <a href="#">newsletter</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

        <div class="credit">created by <span> PARTH CHAUDHARY </span> | all rights reserved</div>

    </div>

</section>

<!-- custom js file link  -->
<script src="script.js"></script>
    
</body>
</html>
<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    $sql="SELECT * FROM `wpl`.`admin`";
    $res=$con->query($sql);
    $id=array();
    $Name=array();
    $img=array();
    $Price=array();
    $Description=array();
    while($row = $res->fetch_assoc()){
        // array_push($img, $row['Image']);
        array_push($id, $row['Sr.no']);
        array_push($Name, $row['Name']);
        array_push($img, $row['Image']);
        array_push($Price, $row['Price']);
        array_push($Description, $row['Description']);
    }
    // echo count($Price);
    for ($i = 0; $i < count($Price); $i++){
        echo "
        <script type='text/javascript'>
            var table = document.getElementById('prds');
            table.innerHTML+='\
        <div class=box>\
            <div class=icons>\
                <a href=# class=fas fa-heart></a>\
                <a href=# class=fas fa-share></a>\
                <a href=# class=fas fa-eye></a>\
            </div>\
            <img src=$img[$i] style=width:200px>\
            <div class=content>\
                <h3>$Name[$i]</h3>\
                <div class=price>Rs $Price[$i]</div>\
                <div class=stars>\
                    <i class=fas fa-star></i>\
                    <i class=fas fa-star></i>\
                    <i class=fas fa-star></i>\
                    <i class=fas fa-star></i>\
                    <i class=far fa-star></i>\
                </div>\
                <a href=# class=btn>add to cart</a>\
            </div>\
        </div>';
        </script>";
    }
?>