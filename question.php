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
                    What is the capital of Ethiopia ?
                </p>
                <form action="process.php" method="POST">
                    <ul class="choices">
                        <li><input type="radio" name="choices" value="1"> Addis-Abeba</li>
                        <li><input type="radio" name="choices" value="1"> Nairobi</li>
                        <li><input type="radio" name="choices" value="1"> Kigali</li>
                        <li><input type="radio" name="choices" value="1"> Khartoum</li>
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