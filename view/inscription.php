<container>
    <legend>
        <h1>creer compte</h1>
    </legend>
    <h2 class="hidetitl">Créer un compte</h2>



    <form action="." method="post" class="signin-form">
        <input type="hidden" name="action" value="add">
        <div class="row g-10">

            <div class="col-12">
                <input type="text" class="form-control btn-lg" id="nom" placeholder="nom" required="">
                <div class="invalid-feedback ">
                    nom is required.
                </div>
            </div>

            <div class="col-12 ">

                <input type="text" class="form-control btn-lg" id="prenom" placeholder="prenom" required="">
                <div class="invalid-feedback ">
                    prenom is required.
                </div>
                <!-- </div>

            <div class="col-12 "> -->

                <input type="text" class="form-control btn-lg" id="nick" placeholder="pseudo" required="">
                <div class="invalid-feedback ">
                    nick is required.
                </div>
                <!-- </div>

            <div class="col-12 "> -->

                <input type="text" class="form-control btn-lg" id="email" placeholder="email" required="">
                <div class="invalid-feedback">
                    Please enter a email address.
                </div>
                <!-- </div>

            <div class="col-12 "> -->

                <input type="password" class="form-control btn-lg" id="pw" placeholder="mot de passe" required="">
                <div class="invalid-feedback">
                    Valid mot de passe is required.
                </div>
            </div>


        </div>



        <input type="submit" class=" cnx-sub btn_dem btn-lg mx-auto btn-outline-dark" value="creer">
    </form>
    <!-- <a href="#" class="btn-inscription">test</a> -->

</container>
</container>