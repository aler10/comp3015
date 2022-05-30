<?php

    $username = "";
    $password = "";
    $studentnumber = "";

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $studentnumber = trim($_POST['studentnumber']);


    if (strlen($username) < 2){
        die("<p>Incorrect. Username must be 2 characters or more.</p>");
    }

    if($password != "bcit"){
        die("<p>Incorrect. Password was not correct. </p>");
    } 
    
    if (!preg_match("/^[A0' ]*$/",$studentnumber)) {
    $error = "The studentnumber should be A0nnnnnnn";
    }
3
    if (isset($_POST['gender']) == false){
        die ("<p> You must select a gender. </p>");
    }
    
    
    if (isset($_POST['languages']) == true){
        $arrayOfLanguages = $_POST['languages'];

        foreach ($arrayOfLanguages as $language){
            echo "<br />" . $language;
        }
    } elseif ( isset($_POST['languages']) && $language > 2){
        echo "<p>You are multilingual</p>";
    } elseif ( isset($_POST['languages']) && $language > 5){
        echo "<p>Impressive. You have been studying quite a few computing languages</p>";
    } else {
        die("<p>You are not studying any computer language(s)</p>");
    }

    
    if (isset($_POST['gender']) == "male"){
        echo "<p>Hello, Mr. ".$username." ! You have correctly filled out the form. Congratulations.</p>";
    } else {
        echo "<p>Hello, Ms. ".$username." ! You have correctly filled out the form. Congratulations.</p>";
    }
    
?>
