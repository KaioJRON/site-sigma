<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET['id'];

echo $id;
?>
<div class ="container">
    <div class = " row " >
        <div class = "col">
            <h1><?php echo $produtos [$id] ['nome']; ?></h1>
            <br><img src="./content/<?php echo $produtos [$id] ['imagem']; ?>" width="400px" height="400px"><br/>
            <p><?php echo $produtos [$id] ['descricao']; ?></p>
            <br><h4><?php echo $produtos [$id] ['preço']; ?></h4><br/>
        </div>
    </div>
    <div class="row">
        <div class="queijo">
            <a href="produtos.php" class="btn btn-outline-dark">VOLTAR</a>
        </div>
        <div class ="kaio">
            <a href="#" class="btn btn-outline-success">COMPRAR</a>
        </div>
    </div>
</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>