<?php

class token {
    public static function check_token($token, $cookie_token){
        if($cookie_token == $token){
            return true;
        }
    }
}

?>