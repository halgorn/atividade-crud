<!DOCTYPE html>

<?php 
     include_once "conf/default.inc.php";
     include_once "fdata.php";
     require_once "conf/Conexao.php";
     $title = "Vendas";
     $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : "1";
     $procurar = isset($_POST['procurar']) ? $_POST['procurar'] : "";
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="style.css" rel="stylesheet" >
</head>
<body>
<div class="container">
       
            <h1>Formulário Vendedores</h1>
            <div id="container-card" class="col">
            
  
                <form action="index.php"method="post">
                    <input type="text" name="procurar" id="procurar" value="<?php echo $procurar; ?>">
                    <div class="input-form">
                        <input type="radio" class = "btn btn-info" name="tipo" id="tipo" value="1" <?php if ($tipo == 1) { echo "checked"; }?>>Nome<br>  
                        <input type="radio" class = "btn btn-info" name="tipo" id="tipo" value="2" <?php if ($tipo == 2) { echo "checked"; }?>>Fixo<br>
                    </div>
                    <input type="submit" value="filtrar" class = "btn btn-info">
                </form>
                <br>
                <?php
                    $sql = "";
                    if ($tipo == 1){
                        $sql = "SELECT * FROM venda WHERE nome LIKE '$procurar%' ORDER BY nome";
                    }else if($tipo ==2){    
                        $sql = "SELECT * FROM venda WHERE fixo <= '$procurar%' ORDER BY fixo";
                    }
                    
                    $pdo = Conexao::getInstance(); 
                    $consulta = $pdo->query($sql);
                  ?>  <table>
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td>Nome</td>
                                <td>Fixo</td>
                                <td>Detalhes</td>
                            </tr>
                                              
<?php
                    while ($dados = $consulta->fetch(PDO::FETCH_BOTH)){
                    ?>
                    <tr>  
                        <td><?= $dados['id']?></td>
                        <td><?= $dados['nome']?></td>
                        <td><?= $dados['fixo']?></td>
                        <td><?= "<a class='ver-mais' href='single-vendas.php?id={$dados['id']}'>Saiba Mais</a><br/>" ?></td>
                    </tr>          
                    
                    <?php
                       // echo "Nome: {$dados['nome']} - Fixo: {$dados['fixo']} - <a class='ver-mais' href='venda-detalhes.php?id={$dados['id']}'>Detalhes</a><br/>";
                    }  
                ?>      
                    </tbody>
                </table>
            </div>
        
    </div>
    

</body>
</html>