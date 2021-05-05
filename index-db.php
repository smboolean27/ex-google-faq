<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "google";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT domanda, risposta FROM faqs";
    $result = $conn->query($sql);
    $faqs = [];

    if ($result && $result->num_rows > 0) {  
        while($row = $result->fetch_assoc()){
            $faqs[] = $row;
        }
    } 
    $conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Google Faq</title>
</head>
<body>
    
    <header>
        <div class="container">
            <div class="header-top">
                <div class="header-top-image">
                    <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="Google Logo">
                </div>
                <div class="header-top-text">
                    Privacy & Termini
                </div>
            </div>
            <div class="header-bottom">
                <ul>
                    <li>Introduzione</li>
                    <li>Norme sulla privacy</li>
                    <li>Termini di servizio</li>
                    <li>Tecnologie</li>
                    <li class="active">Domande frequenti</li>
                </ul>
            </div>
        </div>
    </header>

    <section>
        <div class="question-container">
        <?php foreach($faqs as $faq): ?>
            <div>
                <h3><?php echo $faq['domanda']; ?></h3>
                <div><?php echo $faq['risposta']; ?></div>
            </div>
        <?php endforeach; ?>
        </div>
    </section>

    <footer>

    </footer>

</body>
</html>