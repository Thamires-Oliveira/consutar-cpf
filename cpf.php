<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="UTF-8"/>
        <tittle>Cliente</tittle>
        <style>
            body{
                background-image:url(bgmodal_novembroazul.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
        </style>
    </head>
    <body>

    <?php 
    // pegado cpf do cliente
    $cpf = $_POST["cpf"];
    //conectando a um API pela url
    $url = "https://swapi.dev/api/people/?page=2";
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
    //usando json para pegar os dados
    // $resultado = json_decode(file_get_contents($url));
    $resultado = json_decode(curl_exec($ch));
    foreach($resultado->results as $ator){
        /*Aqui eu devo pegar a variavel cpf que veio do formulario 
        depois comparar com o json se existe algum cpf equivalente se tiver retornar os dados e se nao tiver passar a menssagem  */
        var_dump($resultado);
    echo "Ator: " . $ator -> name . "<br>";
    echo "CPF: " . $cpf;
    echo "<hr>";
    }
    ?>
    </body>

</html>