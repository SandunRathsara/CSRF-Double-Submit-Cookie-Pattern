<?php
    require 'headers.php';
?>

    <body>
        <div class="outer_div">
            <h1 class=welcome align=center>Wellcome!</h1>
            <h2 class=welcome align=center>CSRF prevention - Double Submit Cookie Pattern</h3>
            <br>
            <p class= welcome align=center>Login credentials<br>Username : admin<br>Password : csrf</p>
            <br>
            <form action="msg.php">
                <div class=inner_div>
                    <label class=welcome>Username :</label><br><input type="text" class=input_text><br><br>
                    <label class=welcome>Password :</label><br><input type="text" class=input_text>
                </div>
            </form>
        </div>
    </body>

</html>