<?php 
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>African City Quizzer</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="shortcut icon" href="img/logo-makr.png">
        <!--Fontawesome-->
        <script
        src="https://kit.fontawesome.com/52339f9582.js"
        crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <div class="content">
        <header>
            <h1>African City Quizzer</h1>
            <h2>Test Your African Geography Knowledge</h2>
        </header>
        <main>
            <div class="container">
                <h3>Congratulation!</h3>
                <p>You have completed the Quizz.</p>
                <p>Final score: <strong><?php echo $_SESSION['score']; ?></strong></p>
                <a href="index.php" class="start">Take Again</a>
            </div>
        </main>
        </div>
        <?php include 'footer.php' ?>
    </body>
</html>