<?php

class DataAccess{
    private $pdo;

    public function __construct($db){
        $this->pdo = new PDO("{$db['type']}:host={$db['host']};port={$db['port']};dbname={$db['name']}", $db['user'], $db['pass']);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function getTemas(){

        $sql = "select * from temas;";
        $res = $this->pdo->query($sql);
        return $res->fetchAll();
    }

    public function getTema($id){

        $sql = "select * from temas WHERE id = '".$id."';";
        $res = $this->pdo->query($sql);
        return $res->fetch();
    }

    public function getPregunta($id){

        $sql = "SELECT * FROM preguntas WHERE tema = '".$id."';";
        $res = $this->pdo->query($sql);
        return $res->fetchAll();
    }

    public function getRespostes($id){

        $sql = "SELECT * FROM respuestas WHERE pregunta = '".$id."';";
        $res = $this->pdo->query($sql);
        return $res->fetchAll();
    }

}
?>
