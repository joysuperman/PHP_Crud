<?php
require_once 'functions.php';
head();
?>
    <main style="margin-top: 50px;">

        <h1 style="text-align: center;">LOGIN</h1>
        <div class="row">
            <div class="column column-33 column-offset-33">
                <form method="post">
                    <fieldset>
                        <input type="email" placeholder="Email" name="userEmail" id="emailField">
                        <input type="password" placeholder="password" name="password" id="passwordField">
                        <button class="btn" type="submit">Sumbit</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>


<?php footer(); ?>