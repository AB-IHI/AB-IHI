<container>
    <legend>
        <h1>Connectez vous</h1>
    </legend>
    <h2>Connectez vous</h2>
    <form action="index.php" method="post" class="signin-form">
        <input type="hidden" name="action" value="connexion">


        <div class="row g-10">
            <div class="col-12">
                <label for="pseudo" class="form-label ">pseudo</label>
                <input type="text" class="form-control" id="pseudo" placeholder="nick ou email" required="">
                <div class="invalid-feedback ">
                    nick is required.
                </div>
            </div>

            <div class="col-12">
                <label for="pw" class="form-label">mot de passess</label>
                <input type="password" class="form-control " id="pw" placeholder="mot de passe" required="">
                <div class="invalid-feedback">
                    Valid mot de passe is required.
                </div>
            </div>




        </div>

        <input type="submit" class="cnx-sub" value="connexion">


    </form>

    <a class="btn-inscription" href="?page=inscription&view=view_dem" role="button">creer un compte</a>
</container>
</container>