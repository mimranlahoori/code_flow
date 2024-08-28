<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php require ('../../../../includes/links.php') ?>
</head>

<body>
    <?php require ('../../../../components/header.php') ?>
    <?php require ('../../../../components/navbar.php') ?>
    <main class="flex justify-center">
        <form class="flex flex-col gap-4 my-6 w-64 p-4 bg-gray-200 rounded-md shadow-lg" action="./logic.php"
            method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login" name="login"
                class="block px-4 py-2 rounded-md bg-purple-500 hover:bg-purple-800 text-white cursor-pointer">
        </form>
    </main>
    <?php require ('../../../../components/footer.php') ?>
</body>

</html>