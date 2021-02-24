<div class="form-layout">
    <div class="row mg-b-25">

        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Nombre de places assises : <span
                        class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="Nombre_de_places_assises" >
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Nombre de client par jour : <span
                        class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="Nombre_de_client_par_jour"
                       >
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Nombre de toilette : <span
                        class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="Nombre_de_toilette" >
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Etat des toilettes :  <span
                        class="tx-danger">*</span></label>
                <input class="form-control" type="number" name="Etat_des_toilettes" >
            </div>
        </div><!-- col-4 -->



        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Mixte : <span
                        class="tx-danger">*</span></label>

                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Mixte" id="" value="Non" checked>
                        <label class="form-check-label" for="">
                            Non
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Mixte" id="" value="Oui">
                        <label class="form-check-label" for="">
                            Oui
                        </label>

                    </div>
                </div>

            </div>
        </div><!-- col-4 -->

        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Catégorie du café : <span class="tx-danger">*</span></label>
                <div id="cbWrapper" class="parsley-checkbox">
                    <label class="ckbox">
                        <input type="checkbox" name="Catégorie_d_cafe" value="50 DZD" data-parsley-mincheck="2" data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" ><span>50 DZD</span>
                    </label>
                    <label class="ckbox">
                        <input type="checkbox" name="Catégorie_d_cafe" value="<100"><span><100</span>
                    </label>
                    <label class="ckbox">
                        <input type="checkbox" name="Catégorie_d_cafe" value="<150"><span><150</span>
                    </label>
                </div><!-- form-group -->
            </div>
        </div><!-- col-4 -->

        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Toilette Homme  <span
                        class="tx-danger">*</span></label>

                <div id="cbWrapper" class="parsley-checkbox">
                    <label class="ckbox">
                        <input type="checkbox" name="Toilette_Homme" value="1" data-parsley-mincheck="2" data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" ><span>OUI</span>
                    </label>
                    <label class="ckbox">
                        <input type="checkbox" name="Toilette_Homme" value="NON"><span>NON</span>
                    </label>
                </div><!-- form-group -->

            </div>
        </div><!-- col-4 -->
        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Toilette Femme : <span class="tx-danger">*</span></label>

                <div id="cbWrapper" class="parsley-checkbox">
                    <label class="ckbox">
                        <input type="checkbox" name="Toilette_Femme" value="OUI" data-parsley-mincheck="2" data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" ><span>OUI</span>
                    </label>
                    <label class="ckbox">
                        <input type="checkbox" name="Toilette_Femme" value="NON"><span>NON</span>
                    </label>
                </div><!-- form-group -->

            </div>
        </div><!-- col-4 -->
    </div>
</div>

