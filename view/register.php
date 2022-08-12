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
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

                <input type="password" name="password" class="form-control btn-lg" id="pw" value="<?php echo $password; ?>" placeholder=" mot de passe" required="">
                <span class="help-block"><?php echo $password_err; ?></span>
                <!-- <div class="invalid-feedback">
                        Valid mot de passe is required.-->
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">

                <input type="password" name="confirm_password" class="form-control btn-lg" id="confirm_pw" value="<?php echo $confirm_password; ?>" placeholder="mot de passe" required="">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
        </div>



        <!-- <div class="col-12 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <input type="text" class="form-control btn-lg" id="nom" value="<?php echo $nom; ?>" placeholder=" nom" required="">
                    <span class="help-block"><?php echo $username_err; ?></span>
                     <div class="invalid-feedback ">
                        nom is required.
                    </div> 

                    <input type="text" class="form-control btn-lg" id="prenom" placeholder="prenom" required="">
                     <div class="invalid-feedback ">
                        prenom is required.
                    </div> -->
        <!-- </div>

            <div class="col-12 "> 


                     </div>

            <div class="col-12 "> 

                    <input type="text" class="form-control btn-lg" id="email" placeholder="email" required="">
                     <div class="invalid-feedback">
                        Please enter a email address.
                    </div> 
                     </div>

            <div class="col-12 "> 


                </div> -->




        <input type="submit" class=" cnx-sub btn_dem btn-lg mx-auto btn-outline-dark" value="creer">
        <p>Already have an account? <a href=".?page=login">Login here</a>.</p>
    </form>
    <!-- <a href="#" class="btn-inscription">test</a> -->

</container>
</container>