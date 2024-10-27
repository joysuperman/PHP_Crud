<?php
    require_once 'functions.php';
    head();
    include_once ('classes/Register.php');
    $reg = new Register();

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $register = $reg->addRegister($_POST, $_FILES);
    }
?>
    <main style="margin-top: 50px;">

        <h1 style="text-align: center;">REGISTRATION </h1>
        <div class="row">
            <div class="column column-33 column-offset-33">
                <?php
                    if (isset($register)){
                        echo "<blockquote>$register</blockquote>";
                    }
                ?>
                <form method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" name="photo" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                </div>
                            </div>
                        </div>
                        <input type="text" placeholder="Full Name" name="fullName" id="nameField">
                        <input type="email" placeholder="Email" name="userEmail" id="emailField">
                        <input type="tel" placeholder="phone" name="phoneNumber" id="phoneNumberField">
                        <input type="password" placeholder="password" name="password" id="passwordField">
                        <input type="password" placeholder="confirmPassword" name="confirmPassword" id="confirmPasswordField">
                        <button class="btn" type="submit">Sumbit</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>


<?php footer(); ?>