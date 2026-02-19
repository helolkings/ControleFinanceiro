   <?php


    if (isset($_POST['btnExecutar'])) {
        $num_tabuada = trim($_POST['num_tabuada']);
        $num_limite = trim($_POST['num_limite']);


        if ($num_tabuada == '' || $num_limite == '') {
            $msgWarning = '';
        } else if (!is_numeric($num_limite) || !is_numeric($num_tabuada)) {
            $msgWarning = '';
        } else {


            for ($i = 0; $i <= $num_limite; $i++) {
                $resultado = $num_tabuada * $i;
                echo $num_tabuada . ' X ' . $i . ' = ' . $resultado . '<br>';
            }
            echo '<hr>';
        }
    }
    ?>


   <!DOCTYPE html>
   <html lang="pt-br">


   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>2° Atividade</title>
   </head>


   <body style="font-family: Tahoma;">
       <h2>Tabuada Peronalizada:</h2>


       <?= isset($msgWarning) ? $msgWarning : '' ?>


       <form action="ex1.1_tabuada.php" method="POST">
           <p>
               <label>Digite o Número da Tabuada desejada:</label>
               <input type="number" name="num_tabuada" value="<?= isset($num_tabuada) ? $num_tabuada : ''  ?>" placeholder="Digite aqui...">
           </p>
           <p>
               <label>Digite o Número Limite:</label>
               <input type="number" name="num_limite" value="<?= isset($num_limite) ? $num_limite : ''  ?>" placeholder="Digite aqui...">
           </p>
           <p>
               <button type="submit" name="btnExecutar">EXECUTAR</button>
           </p>
       </form>


   </body>


   </html>

