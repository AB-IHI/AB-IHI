<container>
    <legend>
        <h1>Connectez vous</h1>
    </legend>
    <h2 class="hidetitl">Connectez vous</h2>
    <form action="." method="post" class="signin-form">
        <input type="hidden" name="action" value="login">


        <div class="row g-10">
            <div class="col-12 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label for="pseudo" class="form-label ">pseudo</label>
                <input type="text" name="username" class="form-control btn-lg" id="pseudo" value="<?php echo $username; ?>" placeholder="nick ou email" required="">
                <span class="help-block"><?php echo $username_err; ?></span>
                <!-- <div class="invalid-feedback ">
                    nick is required.
                </div> -->
            </div>

            <div class="col-12 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label for="pw" class="form-label ">mot de passe</label>
                <input type="password" name="password" class="form-control btn-lg " id="pw" placeholder="mot de passe" required="">
                <span class="help-block"><?php echo $password_err; ?></span>
                <!-- <div class="invalid-feedback">
                    Valid mot de passe is required.
                </div> -->
            </div>




        </div>

        <input type="submit" class="cnx-sub btn_dem btn-lg mx-auto btn-outline-dark" value="connexion">


    </form>

    <a class="btn-inscription a_cre" href="?page=register" role="button">creer un compte</a>
</container>
</container>