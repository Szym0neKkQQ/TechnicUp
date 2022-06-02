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