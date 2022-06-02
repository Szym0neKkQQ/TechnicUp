<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="postjob.css">
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
            <h1>Zaoferuj pracę</h1>

                </div>
                <div class="textone">
                    <h2>Szukasz stażystów ? Pomożemy ci w tym !</h2>
                    <p>
                        Wypełnij ten prosty formularz, a my zajmiemy się resztą!
                    </p>
                    
                    <form method="POST">
                        <label for="name">Imię</label><br>
                        <input type="text" class="fname" name="name"><br>
                        <?php
                        $name = $_POST['name']; 
                        ?>
                        <label for="surname">Nazwisko</label><br>
                        <input type="text" class="lname" name="surname"><br>
                        <?php
                        $surname = $_POST['surname'];
                        ?>
                        <label for="corp">Nazwa Firmy</label><br>
                        <input type="text" class="fname" name="corp"><br>
                        <?php
                        $corp = $_POST['corp'];
                        ?>
                        <label for="posit">Stanowisko/Wymagania</label><br>
                        <input type="text" class="lname" name="posit"><br>
                        <?php
                        $posit = $_POST['posit'];
                        ?>
                        <label for="gradu">Dyplom Technika</label><br>
                        <input type="text" class="lname" name="gradu"><br>
                        <?php
                        $gradu = $_POST['gradu'];
                        ?>
                        <label for="email">Email</label><br>
                        <input type="text" class="lname" name="email"><br>
                        <?php
                        $email = $_POST['email'];
                        ?>
                        <label for="page">Twoja strona/Wizytówka</label><br>
                        <input type="text" class="lname" name="page"><br>
                        <?php
                        $page = $_POST['page'];
                        ?>
                        <input type="submit" value="Wyślij Ofertę" class="logbut" onclick='confirmSend()'>
                        <?php
                        $db = mysqli_connect('localhost','root','','technicup');
                        if(!$db){
                            exit("Server Error");
                        }
                        $question = "INSERT INTO jobs (Name, Surname, Corpo, Position, Graduate, Email, Page) VALUES ('".$name."','".$surname."','".$corp."','".$posit."','".$gradu."','".$email."','".$page."')"; 
                        $query = mysqli_query($db,$question);
                        mysqli_close($db);
                        ?>
                        
                    </form>
                </div>
           
        
        </article>
        <footer>
            <h3>
                Copyright TechnicUp 2022
            </h3>
        </footer>
    </body>
</html>