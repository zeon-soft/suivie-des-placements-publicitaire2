<div class="form-layout">
    <div class="row mg-b-25">

        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Nombre de poste de travail : <span
                        class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="Nombre_de_poste_travail" >
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Nombre de client par jour : <span
                        class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="num_client_commerce"
                       >
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Nombre de siège d'attente: <span
                        class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="Nombre_de_siège" >
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Etat du salon :  <span
                        class="tx-danger">*</span></label>
                <input class="form-control" type="number" name="Etat_du_salon" >
            </div>
        </div><!-- col-4 -->



        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Coiffeur :  <span
                        class="tx-danger">*</span></label>

                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Coiffeur_genre" id="" value="option1" checked>
                        <label class="form-check-label" for="">
                            Homme
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Coiffeur_genre" id="" value="option2">
                        <label class="form-check-label" for="">
                            Femme
                        </label>
                    </div>
                </div>

            </div>
        </div><!-- col-4 -->

        <div class="col-lg-9">
            <div class="form-group">
                <div id="cbWrapper" class="parsley-checkbox">
                    <label class="ckbox">
                        <input type="checkbox" name="Coiffeur_homme_femme" value="1" data-parsley-mincheck="2" data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" ><span>Glace murale </span>
                    </label>
                    <label class="ckbox">
                        <input type="checkbox" name="Coiffeur_homme_femme" value="Poste séparé"><span>Poste séparé</span>
                    </label>
                </div><!-- form-group -->
                <label for="exampleFormControlTextarea1">Autre (Précisez en commentaire)</label>
                <textarea class="form-control" id="exampleFormControlTextarea1"  name="commentaire" rows="3"></textarea>
            </div>
        </div><!-- col-4 -->


    </div>
</div>
