<container>
    <legend>
        <h1>creer compte</h1>
    </legend>
    <h2 class="hidetitl">Créer un compte</h2>



    <form action="." method="post" class="signin-form">
        <input type="hidden" name="action" value="register">
        <div class="col-12">

            <div class="col-12 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

                <input type="text" name="username" class="form-control btn-lg" id="nick" value="<?php echo $username; ?>" placeholder="pseudo" required="">
                <span class="help-block"><?php echo $username_err; ?></span>
                <!-- <div class="invalid-feedback ">
                        nick is required.-->
            </div>

            <div class="col-12 <?php echo (!empty($nom_err)) ? 'has-error' : ''; ?>">

                <input type="text" name="nom" class="form-control btn-lg" id="nom" value="<?php echo $nom; ?>" placeholder="nom" required="">
                <span class="help-block"><?php echo $nom_err; ?></span>
                <!-- <div class="invalid-feedback ">
                        nick is required.-->
            </div>
            <div class="col-12 <?php echo (!empty($prenom_err)) ? 'has-error' : ''; ?>">

                <input type="text" name="prenom" class="form-control btn-lg" id="nick" value="<?php echo $prenom; ?>" placeholder="prenom" required="">
                <span class="help-block"><?php echo $prenom_err; ?></span>
                <!-- <div class="invalid-feedback ">
                        nick is required.-->
            </div>

            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">

                <input type="email" name="email" class="form-control btn-lg" id="pw" value="<?php echo $email; ?>" placeholder=" email" required="">
                <span class="help-block"><?php echo $email_err; ?></span>
                <!-- <div class="invalid-feedback">
        email is required.-->
            </div>

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

                <input type="password" name="password" class="form-control btn-lg" id="pw" value="<?php echo $password; ?>" placeholder=" mot de passe" required="">
                <span class="help-block"><?php echo $password_err; ?></span>
                <!-- <div class="invalid-feedback">
                        Valid mot de passe is required.-->
            </div>
            <!-- <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">

                <input type="password" name="confirm_password" class="form-control btn-lg" id="confirm_pw" value="<?php echo $confirm_password; ?>" placeholder="mot de passe" required="">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div> -->
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="reglement" value="1" id="flexCheckDefault" required="">
            <label class="form-check-label" for="flexCheckDefault1">
                J'ai pris connaissance du <a class="" href="y_storage/Règlement sur les bénévoles.pdf">
                    Reglement sur les benevoles
                </a> et je m'engage à le respecter
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="condition" value="1" id="flexCheckDefault2" required="">
            <label class="form-check-label" for="flexCheckDefault2">
                J'ai pris connaissance des conditions du <a href="#">
                    projet de bienfaisance
                </a> et je m'engage à les respecter
            </label>
        </div>
        <!-- 2eme -->






        <input type="submit" class=" cnx-sub btn_dem btn-lg mx-auto btn-outline-dark" value="creer">
        <p>Vous avez deja un compte? <a href=".?page=login">Connectez vous</a>.</p>
    </form>
    <!-- <a href="#" class="btn-inscription">test</a> -->

</container>
</container>