<?php
// include do footer
include_once './includes/_Banco.php';
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>


<div class="container">
    <h2>Promoção</h2>
    <div class="row mt-5">
        <?php
        // crio uma variavel que contem SQL executado
        $sql = "SELECT * FROM categorias WHERE Ativo = 1";
        // executa o comando SQL
        $exec = mysqli_query($conn,$sql);
        // informar a quantidade de registros de dados 
        $numProdutos = mysqli_num_rows($exec);
        // percorre todos os dados extraidos do banco
        while ( $dados = mysqli_fetch_assoc($exec) ) {
            echo '<h1>'.$dados['Nome'].'</h1>';

        }

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