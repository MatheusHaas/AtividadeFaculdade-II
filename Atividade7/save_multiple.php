<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Arquivo</title>
    <style>
        body{
            text-align: center;
            margin: 200px auto;
            font-size: 25px;
            max-width: 500px;
        }
    </style>
</head>
    <body>
        <?php

            //variaveis de localização onde vai ser o upload
            $diretorio = "./gifs/";

            //array de filtro para ser utilizado na verificação.
            $arquivo_server = array_filter($_FILES["Arquivo"]["name"]);

            //Contador de arquivos
            $contador = count($_FILES["Arquivo"]["name"]);

            //Variaveis contadoras para arquivos salvados e nao salvados.
            $salvo = 0;
            $naoSalvo = 0;

            
            //Looping usando o contador
            for ($i = 0; $i < $contador; $i++){

                //Recebe o tipo da imagem do array informado
                $tipoImagem = strtolower(pathinfo($arquivo_server[$i], PATHINFO_EXTENSION));

                //valida se é gif
                if ($tipoImagem != "gif"){
                    $naoSalvo++;
                    continue;
                } else {
                    $salvo++;
                    continue;
                }
            }
            
            //Caso seja 1 arquivo gif ele informa que foi apenas um
            //Caso contrario apresentara a quantidade.
            if ($salvo == 1){
                echo "Foi salvo apenas 1 arquivo GIF.";
            } else {
                echo "Foram salvos: ", $salvo, " arquivos GIF.<br>";
            }
            echo "<br>", $naoSalvo, " arquivos não foram salvos!";
        ?>
    </body>
</html>