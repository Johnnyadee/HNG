<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HNG STAGE 2</title>
    <?php
            $firstname = "John";
            $middlename = "Adeoluwa";
            $lastname = "Idoko";
    ?>
</head>
<body>
    <h1>MY NAME</h1>   
        <p>My Name is
            <?php 
                Echo $lastname, "&nbsp", $firstname, "&nbsp", $middlename;
            ?>

        </p>    
    </body>
</html>