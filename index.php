<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = hash('sha256', time() . $_SERVER['REMOTE_ADDR'] . bin2hex(random_bytes(16)));
}
$id = bin2hex(random_bytes(3));
$_SESSION['a'] = $id;

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
    <form id="redirectForm" action="home.php" method="GET">
        <input type="hidden" name="a" value="<?= $id ?>">
    </form>
    <script>
        setTimeout(function() {
            document.getElementById('redirectForm').submit();
        });
    </script>
    <?php exit();
    ?>
    <script src="assets/off.js"></script>
</body>

</html>