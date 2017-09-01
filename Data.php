<?php
class Data {
      private $db ;


    public function __construct(){
        $this->db= new pdo('mysql:host=simplon-db;dbname=thomas_ajax_chat;','thomas','thomas');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function SendToData($message , $pseudo){

    try { 
        $query = $this->db->prepare('INSERT INTO message (text , pseudo) VALUES (:message , :pseudo)');
        
      $query->bindParam(':message', $message);
      $query->bindParam(':pseudo', $pseudo);  
      $query->execute();
    }catch(Exeption $exeption){
            echo $exeption->getMessage();


    }


    }

    public function ExitToData(){
         try {
             $query= $this->db->prepare('SELECT * FROM message ');
             $query->execute();
             $tableau = $query->fetchAll();
             return json_encode($tableau);
         }catch(Exeption $exeption){
            echo $exeption->getMessage();


    }

         

    }
}