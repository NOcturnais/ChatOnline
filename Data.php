<?php
class Data {
      private $db ;


    public function __construct(){
        $this->db= new pdo('mysql:host=localhost;dbname=Ajax_chat;','ajax-chat-user','ajax');
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
}