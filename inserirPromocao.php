<?php 
include 'conexao.php';
include 'resize-class.php';


try{
$recebe_tipo = $_POST['tipo'];
$recebe_link = $_POST['link'];
$recebe_desconto = $_POST['desconto'];
$recebe_banner = $_FILES['banner']['name'];
$recebe_tmp1 = $_FILES['banner']['tmp_name'];

// Pega extensão da imagem
preg_match("/\.(jpg|jpeg|png){1}$/i",$recebe_banner,$ext);

// Gera um nome único para a imagem
$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

$caminho_imagem = "img/" . $nome_imagem;

//Faz o upload da imagem para seu respectivo caminho
move_uploaded_file($recebe_tmp1, $caminho_imagem);
$resizeObj = new resize($caminho_imagem);
$resizeObj -> resizeImage(1550, 240, 'crop');
$resizeObj -> saveImage($caminho_imagem, 100);

$inserir = $pdo->prepare("INSERT INTO promocao (tipo, desconto, link, banner) VALUES 
(:stipo, :sdesconto,  :slink, :sbanner)");

   
$inserir->bindValue(':stipo',$recebe_tipo);
$inserir->bindValue(':sdesconto',$recebe_desconto);
$inserir->bindValue(':slink',$recebe_link);
$inserir->bindValue(':sbanner',$nome_imagem);

$inserir->execute();

echo "Produto inserido!";

} catch(PDOException $e) {

echo "Erro!";
echo $e->getMessage();
}
?>