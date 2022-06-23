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
            <img src="./content/<?php echo $produtos [$id] ['imagem']; ?>">
            <p><?php echo $produtos [$id] ['descricao']; ?></p>
            <h4><?php echo $produtos [$id] ['preço']; ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col">Voltar</div>
        <div class="col">Comprar</div>
    </div>
</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>