<?php
    require 'headers.php';
    
    require_once 'token.php';

    $value = $_POST['token'];

    if(isset($_POST['token'])){
        if(token::check_token($value, $_COOKIE['csrfCookie'])){
            echo '
            <div class=outer_div>

                <h1 class=welcome align=center>Cookie Accepted!</h1>
                <p class=congrats align=center>Congratulations!</p>

            </div>
            
            ';
        }
        else{
            echo '
            <div class=outer_div>

                <h1 class=welcome align=center>Cookie Rejected!</h1>
                <p class=congrats align=center>You Cheater!</p>

            </div>
            
            ';
        }
    }

?>