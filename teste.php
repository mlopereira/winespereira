<?php
 #atribui para a váriavel $servidor o conteúdo da váriavel de ambiente $_SERVER["SERVER_NAME"], que por sua vez 
 #contém o endereço pelo qual o site foi acessado
 $servidor = &$_SERVER["SERVER_NAME"];
 
switch ($servidor) { #verifica a variavel $servidor

    case "cliente.seudominio.com.br": #se $servidor igual cliente.seudominio.com.br
     unset($servidor);  #apaga a variavel $servidor, para otimizar o uso de memória uma vez que ela não será mais usada
        header("location:http://seudominio.com.br/cliente");  #e faz um redirect para http://seudominio.com.br/cliente
                break;
 
    case "fornecedores.seudominio.com.br":
     unset($servidor);
        header("/fornecedores"); #redireciona para o diretorio fornecedores, dentro da raiz (/) do site
                break; 
 
    case "adm.seudominio.com.br":
     unset($servidor);
        header("location:../adm"); #direciona para a pasta adm, que esta um diretório abaixo (../) do atual
                break;
 
    case "diretoria.seudominio.com.br":
     unset($servidor);
        header("location:diretoria.html"); #direciona para o arquivo diretoria.html dentro do mesmo diretorio do arquivo atual
                break;
 
   default: #caso não seja nenhum dos endereços acima
        header("location:/"); #direciona para a raiz do site
		break;
}
?>