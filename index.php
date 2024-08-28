<?php require('./components/index.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Flow</title>
    <?php require ('./includes/links.php') ?>
</head>

<body>
    <?php require ('./components/header.php') ?>
    <?php require ('./components/navbar.php') ?>
    <main>
        <button id="btn" class="btn px-4 py-2 m-2 bg-slate-500 hover:bg-slate-600 rounded-xl text-white" onclick="dateDisplay()">Click Me</button>
        <!-- <img id="ptext" class="p-10" onmouseover="this.src='./assets/images/A.jpeg';" onmouseout="this.src='./assets/images/B.jpg';"> -->
        <p class="p-10" onmouseover="this.innerText='this is me'" onmouseout="this.innerText='this is you askjdhfkjasfkjashljf'">


        <!-- <section>
            <h2>Code Flow</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec lobortis, dolor non scelerisque fermentum, mauris urna semper neque, non volutpat dui nisi vel justo. Proin euismod, libero non efficitur commodo, quam velit consectetur nunc, vel volutpat orci velit id massa. Sed in justo vel erat semper malesuada. Donec sit amet urna ac neque congue malesuada.</p>
        </section> -->

        <?php

        // foreach ($users as $user) {
        //     Card($user['name'], $user['age'], $user['city']);
        // }

        ?>


        
    </main>
    <?php require ('./components/footer.php') ?>
    <!-- <script> document.write('hello World')</script> -->
     
</body>

</html>