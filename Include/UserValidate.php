<?php
    class  EmailValidate {
        public static function testarEmail($mail) 
        {
            $Sintaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
            
            if (preg_match($Sintaxe, $mail)){
                return true;
            }
            else {
                return false;
            }
        }
    }
?>

