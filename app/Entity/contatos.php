<?php

namespace App\Entity;

use \App\Db\Database;

class Contatos {

    /**
        * IDENTIFICADOR UNICO DO CONTATO
        * @var integer
        */
        public $id;
    
    /**
        * IDENTIFICADOR UNICO DO CONTATO
        * @var string
        */ 
        public $nome;
    
    /**
        * IDENTIFICADOR UNICO DO CONTATO
        * @var integer
        */
        public $ddd;

    /**
        * IDENTIFICADOR UNICO DO CONTATO
        * @var integer
        */
        public $numero;
    
    /**
        * IDENTIFICADOR UNICO DO CONTATO
        * @var string
        */
        public $tipo;

    /**
     * Método para cadastrar um novo contato no banco
     * @return boolean
     */
        public function cadastrar(){

            $obDatabase = new Database('contato');
            $this->id = $obDatabase->insert([
                                    'nome'      =>  $this-> nome,
                                    'ddd'       =>  $this-> ddd,
                                    'numero'    =>  $this-> numero,
                                    'tipo'      =>  $this-> tipo
            ]);

           return true;
        }

        public function atualizar(){
            return (new Database('contato')) -> update('id ='. $this->id,[
                                                                    'nome'      =>  $this-> nome,
                                                                    'ddd'       =>  $this-> ddd,
                                                                    'numero'    =>  $this-> numero,
                                                                    'tipo'      =>  $this-> tipo
            ]);
        }

        public function excluir(){
            return (new Database('contato')) -> delete('id ='. $this->id);
        }

        public static function getContatos($where = null, $order = null, $limit = null){
            return (new Database('contato'))    -> select ($where,$order,$limit)
                                                ->fetchAll(PDO::FETCH_CLASS,self::class);
        }

        public static function getCont($id){
            return (new Database('contato'))    -> select ('id ='.$id)
                                                -> fetchObject(self::class);
        }
}