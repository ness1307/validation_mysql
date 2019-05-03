<?php require_once './controllers/getOneSupport.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
    <?php require_once './templates/header.html' ?>
    <main>
        <form action="./controllers/updateOneSupport.php" method="POST">
        <input type="hidden" name='id' value="<?= $list['id'] ?>">
        <div>
            <label for="cd">CD</label>
            <input type="text" name='cd' value="<?= $list['cd'] ?>">
        </div>
        <div>
            <label for="dvd">DVD</label>
            <input type="text" name='dvd' value="<?= $list['dvd'] ?>">
        </div>
        <div>
            <label for="cd">CD</label>
            <input type="text" name='cd' value="<?= $list['books'] ?>">
        </div>
        <input type="submit" value="Envoyer">
    </main>
    <form action="" method="post"></form>
</body>
</html>