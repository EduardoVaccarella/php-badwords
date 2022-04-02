<?php
    	$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tempora!';

        $text_length = strlen($text);

        if( isset( $_GET['badword'])) {
            $text_censored = str_replace($badword, '***', $text);

            $badword = $_GET['badword'];
        } else {
            $text_censored = $text;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph PHP</title>
</head>
<body>
    
    <h1>
        Testo:
    </h1>

    <p>
        <?php 
            echo $text;
        ?>
    </p>

    <h1>
        Lunghezza testo:
    </h1>

    <p>
        <?php 
            echo $text_length;
        ?>
    </p>

    <p>
        <?php 
            echo 'La parola censurata é ' . $badword;
        ?>
    </p>

    <h1>
        Testo censurato:
    </h1>

    <p>
        <?php 
            echo $text_censored;
        ?>
    </p>

</body>
</html>