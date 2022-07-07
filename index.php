<?php
// include do footer
include_once './includes/_Banco.php';
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>


<div class="container">
<h2 class="clear">Promoção Semanal</h2>
    <div class="row">


<?php
for ($i=0; $i < 3; $i++) {
?>


    <div class="card" style="width: 18rem;">
  <img src="./content/<?php echo $produtos [$i] ['imagem'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produtos [$i] ['nome'];?></h5>
    <p class="card-text"><?php echo $produtos [$i] ['descricao'];?></p>
    <p class="card-text"><?php echo $produtos [$i] ['preço'];?></p>

    <a href="produto-detalhe.php?id=<?php echo $i?>&tipo=promocao" class="btn btn-outline-dark">DESTALHES</a>
  </div>


</div>

<?php
}
?>


    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>