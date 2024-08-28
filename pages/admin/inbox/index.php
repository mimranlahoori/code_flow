<?php

if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // send email
mail("imranklahoori@gmail.com",$name,$message);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conatct US</title>
    <?php require ('../../../includes/links.php') ?>
</head>

<body>
    <?php require ('../../../components/header.php') ?>
    <?php require ('../../../components/navbar.php') ?>
    <main>
        <table class="p-4 border-4 border-purple-500">
            <thead class="border-4 border-purple-500">
                <tr>
                    <th class="p-2" >Name</th>
                    <th class="p-2">Email</th>
                    <th class="p-2">Message</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-2"><?php echo $name ?></td>
                    <td class="p-2"><?php echo $email ?></td>
                    <td class="p-2"><?php echo $message ?></td>
                    <td class="p-2">
                        <a class="px-4 py-2 bg-purple-500 text-white hover:bg-purple-800 cursor-pointer rounded-md shadow-md" href="./show.php">Show</a>
                        <a class="px-4 py-2 bg-purple-500 text-white hover:bg-purple-800 cursor-pointer rounded-md shadow-md" href="./edit.php">Reply</a>
                        <a class="px-4 py-2 bg-purple-500 text-white hover:bg-purple-800 cursor-pointer rounded-md shadow-md" href="./delete.php">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    <?php require ('../../../components/footer.php') ?>
</body>

</html>




