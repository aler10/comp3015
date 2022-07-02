<?php
    $courses = file_get_contents("./courses.json")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        for ($i=0; $i < count($courses); $i++){
            echo "<li>" . $courses[$i] . "</li>";
        }
    ?>

    <script>
            var checkboxes = document.querySelectorAll();
            for (let index = 0; index < checkboxes.length; index++){
                const element = checkboxes[index];
                element.addEventListener("click", function(){ alert("course completed"); });

            }
    </script>
</body>
</html>