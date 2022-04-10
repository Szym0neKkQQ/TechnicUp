<?php

//$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//name of that div referes to "$first"
echo '<>'
//name of that div referes to "$second"
echo '<>'

if(!empty($_POST['first'])){
    if(preg_match('/^[A-zaąćęóżźńłĄĆĘÓŻŹŃŁ]+$/',$_POST['first'])){
        
    }else{
        echo 'Pole Login jest źle wypełnione';
    }
    else{
        echo 'Pole login jest puste'
    }

}

if(!empty($_POST['second'])){
    if(preg_match('/^[A-zaąćęóżźńłĄĆĘÓŻŹŃŁ]+$/',$_POST['second'])){
        
    }else{
        echo 'Pole Login jest źle wypełnione';
    }
    else{
        echo 'Pole login jest puste'
    }

}

?>
