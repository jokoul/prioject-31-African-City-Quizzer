<?php
include 'database.php';

//Set question number
$number = (int) $_GET['n'];
/*
 *Get Question 
 */
$query = "SELECT * FROM `questions` WHERE `question_number`=$number";
//Get Result
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);

$question = $results->fetch_assoc();//to get an associative array
// print_r($question)

/*
 *Get Choices 
 */
$query = "SELECT * FROM choices WHERE question_number=$number";
//Get results
$choices = $mysqli->query($query) or die($mysqli->error . __LINE__);

// print_r($rows);

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
                <div class="current">Question 1 of 12</div>
                <p class="question">
                    <?php echo $question['text'] ?>
                </p>
                <form action="process.php" method="POST">
                    <ul class="choices">
                        <?php while($row = $choices->fetch_assoc()): ?>
                            <li><input type="radio" name="choices" value="<?php echo $row['id']; ?>"> <?php echo $row['text']; ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </main>
        <footer>
            <div class="container">
               FOOTER To change later
            </div>
        </footer>
    </body>
</html>