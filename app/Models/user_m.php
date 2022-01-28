<?php
    class User extends CI_Model
    {
        public funcion getlist()
        {
            $sql = "select * from lseed_real_db.dbo.user";
            return $sql;
        }
    }
?>
