<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
 
    <h1>Scrivi il testo che ti viene in mente e le parole da censurare</h1>

    <form action="./pagina-di-atterraggio.php" method="POST">
        <input type="text" name="paragrafo" placeholder="scrivi un paragrafo" /> <br>
        <input type="text" name="censura" placeholder="scrivi la parola da censurare" />
        <button type="submit">invia</button>
    </form>
</body>
</html>