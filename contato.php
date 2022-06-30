<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

if (isset($_POST['txtNome'])) {
    $nome = strtoupper ($_POST['txtNome']);
    echo $nome ."<br>";
}
if (isset($_POST['txtEmail'])) {
    $email = strtoupper ($_POST['txtEmail']);
    echo $email ."<br>";
}
if (isset($_POST['txtTel'])) {
    $tele = strtoupper ($_POST['txtTel']);
    echo $tele ."<br>";
}
if (isset($_POST['txtMen'])) {
    $men = strtoupper ($_POST['txtMen']);
    echo $men ."<br>" ;
}

?>

<h1>Contato</h1>

<form action="./contato.php" method="post">
    <ul>
        <li>
          <label for="txtNome">Nome Completo</label>
          <input type="text" name="txtNome" id="txtNome">
        </li>
        <li>
          <label for="txtEmail">E-mail</label>
          <input type="text" name="txtEmail" id="txtEmail">
        </li>
        <li>
         <label for="txtTel">Telefone</label>
         <input type="text" name="txtTel" id="txtTel">  
        </li>
        <li>
         <label for="txtMen">Mensagem</label>
         <textarea name="txtMen" id="txtMen" cols="30" rows="10"></textarea>
        </li>
    </ul>
    <input type="submit" value="Cadastrar">

</form>

<?php
// include do footer
include_once './includes/_footer.php';
?>