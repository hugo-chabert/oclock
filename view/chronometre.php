<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/js/chronometre.css" />
    <script type='text/javascript' src='../public/js/chronometre.js'></script>
    <title>Chronomètre</title>
</head>
<body>
    <div id="time"></div>
    <form name="parametre" action="" method="">
        <input type="button" name="lance"  value="Démarrer" onclick="chrono();debut();">
        <input type="button" name="pause"  value="Stop" onclick="arret();" disabled="disabled">
        <input type="button" name="zero"  value="Effacer" onclick="arret();raz();" disabled="disabled">
        <input type="button" name="rappel"  value="Rappel" onclick="rappeler();" disabled="disabled">
    </form>
    <div id="presenter">
        <p>Temps intermediaire : </p>
        <span id="interm"></span>
    </div>
</body>
</html>