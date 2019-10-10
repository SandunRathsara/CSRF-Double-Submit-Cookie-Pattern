<?php
    require 'headers.php';
?>

    <body>
        <div class="outer_div">
            <h2 class=welcome align=center>CSRF prevention - Double Submit Cookie Pattern</h3>
            <p class= welcome align=center>Login credentials<br>Username : admin<br>Password : csrf</p>
            <form action="msg.php" method="post">
                <div class=inner_div>
                    <label class=welcome >Username :</label><br><input type="text" class=input_text id="uname" name="uname"><br><br>
                    <label class=welcome >Password :</label><br><input type="text" class=input_text id="pword" name="pword">
                    <div class=btn_holder><input type="submit" class=btn name="login" value="login"></div>
                </div>
            </form>
        </div>
    </body>

</html>