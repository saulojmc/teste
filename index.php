<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        require 'banco.php';
        $banco = new Banco("localhost", "blog", "root", "");
        
        //$banco->query("SELECT * FROM posts");
        //echo "NUMERO: ".$banco->numRows();
        //
//        $banco->update("posts", 
//                array("titulo"=>"TITULO TESTE"), 
//                array("id"=>"1", "id2"=>"2"));
        //
        //$banco->query("SELECT * FROM posts");
        //$numero = $banco->numRows();
        //print_r($banco->result());
        //echo 'Quantidade de posts: '.$banco->numRows();
        
//        if($banco->numRows() > 0) {
//            foreach ($banco->result() as $posts) {
//            echo 'Titulo: '.$posts['titulo']."<br/>";
//            echo 'Corpo: '.$posts['corpo']."<br/>";
//            echo '<hr/>';
//            }
//        } else {
//            echo "Não houve resultado";
//        }
//        $banco->insert("posts", array(
//           "titulo" => 'Titulo de teste',
//            "corpo" => 'Corpo de teste'
//        ));
        
//        $banco->query("SELECT * FROM posts WHERE id = '1'");
//        print_r($banco->result());
        
        $banco->query("SELECT * FROM posts LIMIT 3");
        print_r($banco->result());
        ?>
    </body>
</html>
