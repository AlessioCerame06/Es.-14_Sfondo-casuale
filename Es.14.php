<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SFONDO CASUALE</title>
    </head>
    <body>
        <?php

            function sfondoCasuale($lar) {
                if ($lar < 150) {
                    return "#7FFFD4";
                } else if ($lar >= 150 && $lar <= 250) {
                        return "#1E90FF";
                } else {
                        return "#0000FF";
                }
            }

            $larghezza = rand(50, 500);
            $altezza = $larghezza * 2;
            $bg = sfondoCasuale($larghezza);

            echo "<div style='background-color: $bg; width: $larghezza" . "px; height: $altezza" ."px '></div>"
        ?>
        
    </body>
</html>