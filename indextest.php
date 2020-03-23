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
//        class Post {
//            private $titulo;
//            private $data;
//            private $corpo;
//            private $comentarios;
//            private $qtComentarios;


//            public function __construct($t) {
//                $this->setTitulo($t);
//                $this->setCorpo($c);
//            }


//            public function getTitulo() {
//                return $this->titulo;
//                
//            }
//            
//            public function setTitulo($t) {
//                if(is_string($t)) {
//                    $this->titulo = $t;                    
//                }
//            }
//            public function setCorpo($c) {
//                $this->corpo = $c;
//            }
//            public function addComentario($msg) {
//                $this->comentarios[] = $msg;
//                $this->contarComentarios();
//            }
//            
//            public function getQuantosComentarios() {
//                return $this->qtComentarios;
//                
//            }
//            
//            private function contarComentarios() {
//                $this->qtComentarios = count($this->comentarios);
//            }
//        }
//        
//        $post = new Post();
//        
//        $post->addComentario("TEste");
//        $post->addComentario("TEste 2");
//        $post->addComentario("TEste 3");
//        $post->addComentario("TEste 4");
//        echo "Quantidade de Comentários: ".$post->getQuantosComentarios();
        
// ABSTRACT        
        
//        abstract class Animal {
//            private $nome;
//            private $idade;
//            
//            abstract protected function andar();
//            
//            public function setNome($n) {
//                $this->nome = $n;
//            }
//            public function getNome() {
//                $this->nome;
//            } 
//            
//        }
//        
//        class Cavalo extends Animal {
//            private $quantidade_de_patas;
//            private $tipo_de_pelo;
//            
//            public function andar() {
//                
//            }
//        }
//        
//        class Gato extends Animal {
//            private $quantidade_de_patas;
//            private $miado;
//        }
        
//        $cavalo = new Cavalo();
//        $cavalo->setNome("Cavalo Teste");
//        
//        echo "O meu cavalo é: ".$cavalo->getNome();
        
        
// POLIMORFISMO   
//      
//        class Animal {
//            public function getNome() {
//                echo 'getNome da classe Animal';
//            }
//            public function testar() {
//                echo 'Testado!';
//            }
//        }
//        
//        class Cachorro extends Animal {
//            public function getNome() {
//                //echo 'getNome da classe Cachorro';
//                $this->testar();
//            }
//        }
        //$animal = new Animal();
//        $cachorro = new Cachorro();
//        $cachorro->getNome();
        
        //NAMESPACE
        
        require 'sobre.php';
        require 'sobre2.php';
        
        $sobre = new \aplicacao\v1\Sobre();
        
        echo "Versão : ".$sobre->getVersao();
        
        
        ?>
    </body>
</html>
