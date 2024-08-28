<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regitsration Page</title>
    <?php require('../../../../includes/links.php') ?>
</head>

<body>
    <?php require('../../../../components/header.php') ?>
    <?php require('../../../../components/navbar.php') ?>
    <main class="flex justify-center">
        <h1>Regitsration</h1>
        <form class="flex flex-col gap-4 my-6 w-64 p-4 bg-gray-200 rounded-md shadow-lg" action="./logic.php"
            method="post">

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <div class="flex">
                <label for="brother">Brother</label>
                <input type="radio" name="gender" id="brother" value="brother">
            </div>
            <div class="flex">
                <label for="sister">Sister</label>
                <input type="radio" name="gender" id="sister" value="sister">
            </div>
            
            <div class="flex flex-col">
                <label for="access">Access</label>
                <label for="create">Create</label>
                <input type="checkbox" name="create" id="create" value="Create">
                <label for="edit">Edit</label>
                <input type="checkbox" name="edit" id="edit" value="Edit">
                <label for="delete">Delete</label>
                <input type="checkbox" name="delete" id="delete" value="Delete">
            </div>
            
            <div class="flex">
                <label for="user">User Type</label>
                <select name="users" id="user">
                    <option selected disabled >Choose Type</option>
                    <option value="admin" >Admin</option>
                    <option value="user">User</option>
                    <option value="guest" >Guest</option>
                </select>
                
                <label for="date">Date of Birth</label>
                <input type="date" id="date" name="date" required>
            </div>


            <input type="submit" value="Register" name="register"
                class="block px-4 py-2 rounded-md bg-purple-500 hover:bg-purple-800 text-white cursor-pointer">
        </form>
    </main>
    <?php require('../../../../components/footer.php') ?>
</body>

</html>