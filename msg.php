<?php

require 'headers.php';

if(isset($_REQUEST['uname'], $_REQUEST['pword'])){
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];

    if($uname == 'admin' && $pword == 'csrf'){
        echo '<script>alert("Login Success");</script>';
        session_start();
        $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
        $session_id = session_id();
        setcookie('sessionCookie', $session_id, time() + 60*60*24*365, '/');
        setcookie('csrfCookie', $_SESSION['token'], time() + 60*60*24*365, '/');
    }
    else{
        echo '<script>alert("invalid Credentials!");
        location.href = "index.php";</script>';
    }
}
?>

<script>
    $(document).ready(function(){
        var cookie_value = "";
        var cokie_decoded = decodeURIComponent(document.cookie);
        var cookie = cookie_decoded.split(';');
        var csrf = cookie_decoded.split(';')[2];
        alert(cookie_decoded);
        if(csrf.split('=')[0] = "csrfTokenCookie"){
            alert(csrf.split('csrfCookie=')[1]);
            
            cookie_value = csrf.split('csrfCookie=')[1];
            document.getElementById("tokenIn_hidden_field").setAttribute('value',cookie_value);
        }
    });

</script>