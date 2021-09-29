<?php

namespace App\Db;

use \PDO;

class Database{
    const HOST = 'localhost';

    const NAME = 'agenda_telefonica';

    const USR = 'root';


    private $table;
    private $connection;

    public function _construct($table = null){
        $this ->table = $table;
        $this -> setConnection();
    }

    private function setConnection(){
        try{
            $this -> connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER);
            $this -> connection ->setAtribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR:'.$e->getMessage());
        }
    }

    public function execute($query, $params = []) {
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e){
            die('ERROR:'.$e->getMessage());
        }
    }
    /**
     * Método responsáverl por inserir dados no banco
     * @param array $values [field => value]
     * return integer
     */
    public function insert($values){
        //Dados da query

        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');

        //Monta a query
        $query = 'INSERT INTO' .$this->table.'('.implode(',',$fields).') VALUES ('.implode(',',$binds).')'; 
        echo $query;
        exit;

        //Executa o insert
        $this->execute($query,array_values($values));

        return $this->connection-> lastInsertId();
    }

    public function select ($where = null, $order = null, $limit = null){
        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';

        $query = 'SELECT '.$fields.' FROM ' . $this->table. '' .$where.''.$order.''.$limit;

        return $this-> execute($query);
    }

    public function update($where, $values){
        $fields = array_keys($values);
        $query = 'UPDATE' .$this->table. 'SET'.implode('=?,' , $fields). '=? WHERE '.$where;
        $this->execute($query,array_values,($values));

        return true;
    }

    public function delete($where){
        $query = 'DELETE FROM'.$this->table. 'WHERE'. $where;

        $this->execute($query);
        return true;
    }
}