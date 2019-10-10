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
        setcookie('sessionCookie', $session_id, time() + 60*60*24*365, '/', "localhost", false, false);
        setcookie('csrfCookie', $_SESSION['token'], time() + 60*60*24*365, '/', "localhost", false, false);
        echo '<script>alert("Login Success!");';
    }
    else{
        echo '<script>alert("invalid Credentials!");
        location.href = "index.php";</script>';
    }
}
?>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            var cookie_value = "";
            var cookie_decoded = decodeURIComponent(document.cookie);
            var cookie = cookie_decoded.split(';');
            var csrf = cookie_decoded.split(';')[2]
            if(csrf.split('=')[0] = "csrfCookie"){
            
                cookie_value = csrf.split('csrfCookie=')[1];
                document.getElementById("hidden_token").setAttribute("value",cookie_value);
            }
        });
    </script>
    
    <body>
        <div class="outer_div">
            <h1 class=welcome align=center>Wellcome!</h1>
            <h2 class=welcome align=center>CSRF prevention - Double Submit Cookie Pattern</h3>
            <form action="verify.php" method="post">
                <div class=inner_div>
                    <label class=welcome >Write message :</label><br><br><input type="text" class=input_text id="uname" name="uname"><br><br><br>
                    
                    <div id=div_hidden>
                        <input type="hidden" name="token" value="" id="hidden_token"/>
                    </div>

                    <div class=btn_holder><input type="submit" class=btn name="msg" value="Send Message"></div>
                </div>
            </form>
        </div>
    </body>

</html>