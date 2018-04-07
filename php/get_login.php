<?php
include 'connect.php';
    class login{   

        private $db;
        function __contruct(){
            $this->db = new connection();
        }

        function getLogin($login){
            $sql = "select * from usuario where login_usuario = ?";
            $stm = $this->db->getInstance()->prepare($sql);
            $stm->execute(array($login));
            return $stm->fetchAll();
        }
    }
    ?>