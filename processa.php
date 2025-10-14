<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        header('Location: index.html');
        exit();
    }else{
        $nota1 = strtoupper(trim($_POST['nota_01']));
        $nota2 = strtoupper(trim($_POST['nota_02']));
        $nota3 = strtoupper(trim($_POST['nota_03']));
        $nota4 = strtoupper(trim($_POST['nota_04']));
        $cor;

        $total = 0;
        for($i = 1; $i < 5; $i++){
            $total = $total + ${'nota'. strval($i)};
        }
        $total = $total / 4;
        if($total >= 7){
            $mensagem = "Aprovado";
            $cor = "green";
        }else if($total >= 5 && $total <= 6.99){
            $mensagem = "Recuperação";
            $cor = "orange";
        }else{
            $mensagem = "Reprovado";
            $cor = "red";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Processamento</title>
        <style>
        body {
            font-family: Arial;
            background: #eef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .resultado {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 350px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        p {
            margin: 10px 0;
            font-size: 16px;
        }

        span {
            font-weight: bold;
        }
        button{
            margin-top: 10px;
                background: rgb(109, 109, 255);
                color: white;
                cursor: pointer;
                font-weight: bolder;
                width: 100%;
                color: white;
                display: flex;
                justify-content: center;
                border-radius: 5px;
                padding: 4px;
                height: 35px;
                align-items: center;   
                font-size: 16px;
                border: none;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
                transition: 0.3s, color 0.3s;
                text-decoration: none;
        }
        button:hover{
            background: rgb(255,255,255);
            color: rgb(109, 109, 255);
            font-weight: bolder;
        }
        a:hover{
            color: rgb(109, 109, 255); 
        }

        a{ padding-left: 152px;
            padding-right: 152px;
            padding-top: 6px;
            padding-bottom: 6px;
            text-decoration: none;
            color: white;
        }
        .cor{
            color: <?php echo $cor; ?>;
        }
        </style>
    </head>

    <body>
        <div class="resultado">
            <h2 class="cor"><?php echo htmlspecialchars($mensagem); ?></h2>
            <p style="text-align: center; font-weight: 700;"><?php echo htmlspecialchars($total); ?></p>
            <br><button ><a href="index.html">Voltar</a></button>
        </div>
    </body>
</html>