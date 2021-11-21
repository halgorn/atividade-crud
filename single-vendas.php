<!DOCTYPE html>
<?php 
     include_once "conf/default.inc.php";
     include_once "style.php";
     include_once "fdata.php";
     require_once "conf/Conexao.php";
     $title = "Vendas";
     $id = isset($_GET['id']) ? $_GET['id'] : "1";
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="style.css" rel="stylesheet" >
</head>
<body style="color:white;margin-left:50px;">
    <div class="container"> 
      <?php $sql1 = "SELECT * FROM venda WHERE id = $id";
        $pdo1 = Conexao::getInstance(); 
        $consulta1 = $pdo1->query($sql1); ?>
        <table>
            <tbody>
                <tr>
                    <td>Código</td><td>Nome</td>
                    <td>Janeiro</td><td>Fevereiro</td>
                    <td>Março</td><td>Abril</td>
                    <td>Maio</td><td>Junho</td>
                    <td>Julho</td><td>Agosto</td>
                    <td>Setembro</td><td>Outubro</td>
                    <td>Novembro</td><td>Dezembro</td>
                    <td>Fixo</td><td>Temo de Empresa</td>
                </tr>                
    <?php
            while ($dados = $consulta1->fetch(PDO::FETCH_BOTH)){
            ?>
            <tr>
            <td><?= $dados['id']?></td>
            <td><?= $dados['nome']?></td>
            <?php if($dados['janeiro']<5000){?>
                <td style="background: red;"><?= $dados['janeiro']?></td>
            <?php }else if($dados['janeiro']>10000){?>
                <td style="background: blue;"><?= $dados['janeiro']?></td>
            <?php } else {?>
                <td><?= $dados['janeiro']?></td><?php } ?>

            <?php if($dados['fevereiro']<5000){?>
                <td style="background: red;"><?= $dados['fevereiro']?></td>
            <?php }else if($dados['fevereiro']>10000){?>
                <td style="background: blue;"><?= $dados['fevereiro']?></td>
            <?php } else {?>
                <td><?= $dados['fevereiro']?></td><?php } ?>

            <?php if($dados['marco']<5000){?>
                <td style="background: red;"><?= $dados['marco']?></td>
            <?php }else if($dados['marco']>10000){?>
                <td style="background: blue;"><?= $dados['marco']?></td>
            <?php }else {?>
                <td><?= $dados['marco']?></td><?php } ?>

            <?php if($dados['abril']<5000){?>
                <td style="background: red;"><?= $dados['abril']?></td>
            <?php }else if($dados['abril']>10000){?>
                <td style="background: blue;"><?= $dados['abril']?></td>
            <?php }else {?>
                <td><?= $dados['abril']?></td><?php } ?>

            <?php if($dados['maio']<5000){?>
                <td style="background: red;"><?= $dados['maio']?></td>
            <?php }else if($dados['maio']>10000){?>
                <td style="background: blue;"><?= $dados['maio']?></td>
            <?php }else {?>
                <td><?= $dados['maio']?></td><?php } ?>

            <?php if($dados['junho']<5000){?>
                <td style="background: red;"><?= $dados['junho']?></td>
            <?php }else if($dados['junho']>10000){?>
                <td style="background: blue;"><?= $dados['junho']?></td>
            <?php }else {?>
                <td><?= $dados['junho']?></td><?php } ?>

            <?php if($dados['julho']<5000){?>
                <td style="background: red;"><?= $dados['julho']?></td>
            <?php }else if($dados['julho']>10000){?>
                <td style="background: blue;"><?= $dados['julho']?></td>
            <?php } else {?>
                <td><?= $dados['julho']?></td><?php } ?>

            <?php if($dados['agosto']<5000){?>
                <td style="background: red;"><?= $dados['agosto']?></td>
            <?php }else if($dados['agosto']>10000){?>
                <td style="background: blue;"><?= $dados['agosto']?></td>
            <?php }else {?>
                <td><?= $dados['agosto']?></td><?php } ?>

            <?php if($dados['setembro']<5000){?>
                <td style="background: red;"><?= $dados['setembro']?></td>
            <?php }else if($dados['setembro']>10000){?>
                <td style="background: blue;"><?= $dados['setembro']?></td>
            <?php }else {?>
                <td><?= $dados['setembro']?></td><?php } ?>

            <?php if($dados['outubro']<5000){?>
                <td style="background: red;"><?= $dados['outubro']?></td>
            <?php }else if($dados['outubro']>10000){?>
                <td style="background: blue;"><?= $dados['outubro']?></td>
            <?php }else {?><td><?= $dados['outubro']?></td><?php } ?>

            <?php if($dados['novembro']<5000){?>
                <td style="background: red;"><?= $dados['novembro']?></td>
            <?php }else if($dados['novembro']>10000){?>
                <td style="background: blue;"><?= $dados['novembro']?></td>
            <?php }else {?>
                <td><?= $dados['novembro']?></td>
            <?php } ?>

            <?php if($dados['dezembro']<5000){?>
                <td style="background: red;"><?= $dados['dezembro']?></td>
            <?php }else if($dados['dezembro']>10000){?>
                <td style="background: blue;"><?= $dados['dezembro']?></td>
            <?php }else {?>
                <td><?= $dados['dezembro']?></td><?php } ?>
            <td><?= $dados['fixo']?></td>           
            <?php
             //Tempo trabalhando na empresa
            $data = date('d/m/Y');
            $dc = $dados['dataContratacao'];
        
            $dt = explode('-', $dc);
            $ano = $dt [0]; 
            $mes = $dt [1];
            $dia = $dt [2];
            $ano2 = $ano;
            $ano1 = date('Y');
            $intervalo = ($ano1-$ano2);
            
            if ($intervalo > 10) {
                    echo "<td style='background: blue; font-weight: bold;'>$intervalo anos</td>";
            } else  {echo "<td >$intervalo anos</td>"; }
            ?> 
            </tr>
            <?php } ?>          
            </tbody>
        </table>
        <div class="inicio">
    <?php    
        $sql = "SELECT * FROM venda WHERE id = $id";
        $pdo = Conexao::getInstance(); 
        $consulta = $pdo->query($sql);?>
        <table>
        <tbody>
            <tr>
        <?php
        while ($dados = $consulta->fetch(PDO::FETCH_BOTH)):
            $totalvendas= ($dados['janeiro']+$dados['fevereiro']+$dados['marco']+$dados['abril']+$dados['maio']+$dados['junho']+$dados['julho']+$dados['agosto']+$dados['setembro']+$dados['outubro']+$dados['novembro']+$dados['dezembro']);
           ?>
            <td>Total de vendas no ano: R$<?=$totalvendas?></td>
            <?php $valor = ($dados['janeiro']*0.03); ?>
            <td>Janeiro: R$"<?=$valor?></td>
            <?php $valor = ($dados['fevereiro']*0.03); ?>
            <td>Fevereiro: R$<?=$valor?></td>
            <?php $valor = ($dados['marco']*0.03); ?>
            <td>Março: R$<?=$valor?></td>
            <?php $valor = ($dados['abril']*0.03); ?>
            <td>Abril: R$<?=$valor?></td>
            <?php $valor = ($dados['maio']*0.03); ?>
            <td>Maio: R$<?=$valor?></td>
            <?php $valor = ($dados['junho']*0.03); ?>
            <td>Junho: R$<?=$valor?></td>
            <?php $valor = ($dados['julho']*0.03); ?>
            <td>Julho: R$<?=$valor?></td>
            <?php  $valor = ($dados['agosto']*0.03); ?>
            <td>Agosto: R$<?=$valor?></td>
            <?php $valor = ($dados['setembro']*0.03); ?>
            <td>Setembro: R$<?=$valor?></td>
            <?php $valor = ($dados['outubro']*0.03); ?>
            <td>Outubro: R$<?=$valor?></td>
            <?php $valor = ($dados['novembro']*0.03); ?>
            <td>Novembro: R$<?=$valor?></td>
            <?php $valor = ($dados['dezembro']*0.03); ?>
            <td>Dezembro: R$<?=$valor?></td>
            <?php
                echo "</br>";    
             $data = date('d/m/Y');
             $dc = $dados['dataContratacao'];
         
             $dt = explode('-', $dc);
             $ano = $dt [0]; 
             $mes = $dt [1];
             $dia = $dt [2];
             $ano2 = $ano;
             $ano1 = date('Y');
             $intervalo = ($ano1-$ano2);
            //Bônus por tempo de empresa
            $bonus= $intervalo * 50;
           ?> <p>Bônus por tempo de empresa: R$<?= $bonus?></p>
        <?php 
        endwhile;  
      ?>        </tr>
            </tbody>
        </table>
      </div>
    </div>
</body>
</html>