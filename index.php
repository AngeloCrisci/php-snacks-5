// * Creare una funzione che controlli se una parola (o una frase) sia palindroma, senza usare funzioni built-in, e ritorni true se lo e', false altrimenti. Testarla attraverso una chiamata GET via form.

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP HOTEL</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>

<?php 
    $user_word = isset($_GET["word"]);

    
        function reverse_word($user_word)
        {
            $reverse_word = '';
            for( $i = strlen($user_word) -1; $i >= 0; $i--){
                $reverse_word .= $user_word[$i];
            }

            if($user_word === $reverse_word){
                return true;
            }
        }

?>



<body>
    <h1 class="text-center">
        SCRIVI UNA PAROLA PALINDROMA
    </h1>
    <form action="">
        <div class="container">
            <div>
                <label for="word"></label>
                <input class="form-control form-control-lg mb-3" type="text" id="word" name="word">
            </div>
        
            <button type="submit" class="btn btn-primary" class="">Controlla!!</button>
        </div>
    </form>

</body>
</html>