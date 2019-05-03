<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un support</title>
</head>
<body>
    <?php require_once './templates/header.html' ?>
    <main>
        <form action="./controllers/addOneSupport.php" method="POST">
            <div>
                <label for="cd">CD</label>
                <input type="text" name='cd'>
            </div>
            <div>
                <label for="dvd">DVD</label>
                <input type="text" name='dvd'>
            </div>
            <div>
                <label for="books">Livres</label>
                <input type="text" name='books'>
            </div>
        <input type="submit"  value="Envoyer">
    </main>
    <form action="" method="post"></form>
</body>
</html>