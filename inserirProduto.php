<?php

include 'conexao.php';
include 'resize-class.php';

try{
$recebe_produto = $_POST['produto'];
$recebe_tipo = $_POST['tipo'];
$recebe_origem = $_POST['origem'];	
$recebe_preco = $_POST['preco'];
$recebe_estoque = $_POST['estoque'];
$recebe_descricao = $_POST['descricao'];
$recebe_especificacao = $_POST['especificacao'];


$recebe_foto_principal = $_FILES['foto_principal']['name'];
$recebe_tmp1 = $_FILES['foto_principal']['tmp_name'];

$recebe_foto2 = $_FILES['foto2']['name'];
$recebe_tmp2 = $_FILES['foto2']['tmp_name'];

$recebe_foto3 = $_FILES['foto3']['name'];
$recebe_tmp3 = $_FILES['foto3']['tmp_name'];

// Pega extensão da imagem
preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i",$recebe_foto_principal, $ext);
preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i",$recebe_foto2, $ext2);
preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i",$recebe_foto3, $ext3);

// Gera um nome único para a imagem
$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
$nome_imagem2 = md5(uniqid(time())) . "." . $ext2[1];
$nome_imagem3 = md5(uniqid(time())) . "." . $ext3[1];

$caminho_imagem = "img/" . $nome_imagem;
$caminho_imagem2 = "img/" . $nome_imagem2;
$caminho_imagem3 = "img/" . $nome_imagem3;

//Faz o upload da imagem para seu respectivo caminho
move_uploaded_file($recebe_tmp1, $caminho_imagem);
$resizeObj = new resize($caminho_imagem);
$resizeObj -> resizeImage(500, 400, 'crop');
$resizeObj -> saveImage($caminho_imagem, 100);

move_uploaded_file($recebe_tmp2, $caminho_imagem2);
$resizeObj = new resize($caminho_imagem2);
$resizeObj -> resizeImage(500, 400, 'crop');
$resizeObj -> saveImage($caminho_imagem2, 100);

move_uploaded_file($recebe_tmp3, $caminho_imagem3);
$resizeObj = new resize($caminho_imagem3);
$resizeObj -> resizeImage(500, 400, 'crop');
$resizeObj -> saveImage($caminho_imagem3, 100);


$inserir = $pdo->prepare("INSERT INTO produtos (produto,tipo, origem, preco, estoque, especificacao, descricao, foto_principal, foto2, foto3) VALUES 
(:sproduto, :stipo, :sorigem, :spreco, :sestoque, :sdescricao, :sespecificacao, :sfoto_principal, :sfoto2, :sfoto3)");


$inserir->bindValue(':sproduto', $recebe_produto);
$inserir->bindValue(':stipo', $recebe_tipo);
$inserir->bindValue(':sorigem', $recebe_origem);
$inserir->bindValue(':spreco', $recebe_preco);
$inserir->bindValue(':sestoque', $recebe_estoque);
$inserir->bindValue(':sdescricao', $recebe_descricao);
$inserir->bindValue(':sespecificacao', $recebe_especificacao);
$inserir->bindValue(':sfoto_principal', $nome_imagem);
$inserir->bindValue(':sfoto2', $nome_imagem2);
$inserir->bindValue(':sfoto3', $nome_imagem3);

$inserir->execute();

echo "Produto inserido!";

} catch(PDOException $e) {

echo "Erro!";
echo $e->getMessage();
}
?>