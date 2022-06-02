<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <html lang="pl">
    </head>
    <script>
        function confirmSend(){
            alert("Twoja Oferta Została Wystawiona");
        }
    </script>
    <body>
        <nav>
            <div id="nav_links">
                <a href="index.html">Strona</a>
                <a href="posting.php">Zaoferuj Pracę</a>
                <a href="search.php">Szukaj Pracy</a>
                <a href="contact.html">Kontakt</a>
                <a href="">FAQ</a>
            </div>
        </nav>
        <header class="postform_head">

        </header>
        <article class="longer_article">
            <h1>Szukaj Pracy</h1>
                <div class="textone">
                    <?php
                    $conn = new mysqli('localhost','root','','technicup');
                    if($conn->connect_error){
                        die("connection error:". $conn->connect_error);
                    }

                    $question = "SELECT * FROM jobs"; 
                    $result = $conn->query($question);

                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            echo'
                            <div id="offer">
                                <p class="offer_title">
                                    '.$row["Name"].' '.$row["Surname"].'<br>
                                    '.$row["Corpo"].' - '.$row["Position"].'<br>
                                    Szukam: '.$row["Graduate"].'<br>
                                    '.$row["Email"].'<br>
                                </p><br>
                            </div>
                            <a href="'.$row["Page"].'">
                            <input type="button" value="Obczaj Pracowdawcę">
                            </a>
                            ';
                        }
                    }
                    else {
                        echo "<p>Brak Ofert</p>";
                    }
                    $conn->close();
                    ?>
                </div>
        </article>
        <footer>
            <h3>
                Copyright TechnicUp 2022
            </h3>
        </footer>
    </body>
</html>