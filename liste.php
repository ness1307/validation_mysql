<?php require './controllers/getAllSupport.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste</title>
</head>
<body>
    <?php require './templates/header.html' ?>
    <main>
        <div>
            <table>
                <tr>
                    <th>CD</th>
                    <th>DVD</th>
                    <th>Books</th>
                    <th>Supprimer</th>
                    <th>Update</th>
                </tr>

                <?php foreach($support as $list): ?>
                <tr>
                    <td><?php echo $list ['cd']?></td>
                    <td><?php echo $list ['dvd']?></td>
                    <td><?php echo $list ['books']?></td>
                    <td>
                        <form action="./controllers/deleteOneSupport"  method=POST>
                            <input type="hidden" name="id" value="<?= $list['id'] ?>">
                            <input type="submit" value="X">
                        </form>
                    </td>
                    <td>
                        <form action="./updateSupport.php" method=POST>
                            <input type="hidden" name="id" value="<?= $list['id'] ?>">
                            <input type="submit" value="U">
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
                </table>
            </div>
    </main>
</body>
</html>