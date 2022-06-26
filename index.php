<?php
    include 'database.php';

    /*
    * Get Total Questions
    */
    $query = "SELECT * FROM questions";
    
    //Get results
    $results = $mysqli->query($query) or die($mysqli->error . __LINE__);
    $total = $results->num_rows;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>African City Quizzer</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <header>
            <h1>African City Quizzer</h1>
            <h2>Test Your African Geography Knowledge</h2>
        </header>
        <main>
            <div class="container">
                <p>Choose the right answer among the list below.</p>
                <ul>
                    <li><strong>Number of Questions:</strong><?php echo $total; ?></li>
                    <li><strong>Type:</strong>Multiple Choice</li>
                    <li><strong>Estimated Time:</strong><?php echo $total * .5 ?> Minutes</li>
                </ul>
                <a href="question.php?n=1" class="start">Start Quiz</a>
            </div>
        </main>
        <footer>
            <div class="container">
               FOOTER To change later
            </div>
        </footer>
    </body>
</html>