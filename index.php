<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="flaxen">
        <h1>Welcome to flaxen <br> <span>Infosoft.</span></h1>
    </div>
    <form action="login.php" method="POST">
        <h2 class="red">Login</h2>

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'] ?></p><?php } ?>

        <label for="">user Name</label>
        <input type="text" name="uname" placeholder="Enter User Name"><br>

        <label for="">user Password</label>
        <input type="password" name="password" placeholder=" Enter Password"><br>

        <button type="submit">Login</button>
    </form>
</body>

</html>