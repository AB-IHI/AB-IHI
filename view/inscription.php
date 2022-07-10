<container>
    <legend>
        <h1 class="hidetitl">Créer un compte</h1>
    </legend>
    <form action="." method="post" class="signin-form">
        <input type="hidden" name="action" value="add">
        <h2>Créer un compte</h2>
        <div class="row g-10">
            <div class="form-label ">
                <label for="nom" class="form-label">nom</label>
                <input type="text" class="form-control" id="nom" placeholder="nom" required="">
                <div class="invalid-feedback ">
                    nom is required.
                </div>
            </div>

            <div class="form-label ">
                <label for="prenom" class="form-label">prenom</label>
                <input type="text" class="form-control" id="prenom" placeholder="prenom" required="">
                <div class="invalid-feedback ">
                    prenom is required.
                </div>
            </div>

            <div class="form-label ">
                <label for="nick" class="form-label">pseudo</label>
                <input type="text" class="form-control" id="nick" placeholder="pseudo" required="">
                <div class="invalid-feedback ">
                    nick is required.
                </div>
            </div>

            <div class="form-label ">
                <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" required="">
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
            </div>

            <div class="form-label ">
                <label for="pw" class="form-label">mot de passe</label>
                <input type="password" class="form-control" id="pw" placeholder="mot de passe" required="">
                <div class="invalid-feedback">
                    Valid mot de passe is required.
                </div>
            </div>


        </div>



        <input type="submit" class="cnx-sub" value="creer">
    </form>
</container>
<container class="grows">
    
</container>