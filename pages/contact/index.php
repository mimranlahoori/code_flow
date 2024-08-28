<?php
require('../../layouts/main.php');
title('Contact us');
?>

<body>
    <?php require ('../../components/header.php') ?>
    <?php require ('../../components/navbar.php') ?>
    <main>
        <form class="flex flex-col gap-4 justify-center items-center my-8" action="../admin/inbox/index.php"
            method="post">
            <h1 class="font-bold ">Contact Us</h1>
            <div class="flex flex-col gap-4 bg-gray-200 p-5 rounded-lg">
                <div>
                    <label for="name">Name:</label>
                    <input class="bg-gray-400 text-black" type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input class="bg-gray-400 text-black" type="email" id="email" name="email" required>
                </div>
                <div class="flex items-center">
                    <label for="message">Message:</label>
                    <textarea class="bg-gray-400 text-black"  id="message" name="message" required></textarea>
                </div>
                <div>
                    <input type="submit" value="Submit"
                        class="px-6 py-2 rounded-lg bg-purple-500 hover:bg-purple-900 text-white cursor-pointer">
                </div>
            </div>
        </form>
    </main>
    <?php require ('../../components/footer.php') ?>
</body>

</html>