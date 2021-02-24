<div class="form-layout">
    <div class="row mg-b-25">

        <div class="col-lg-12">
            <div class="form-inline">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="type_sallon" value="Hammam">
                    <label class="form-check-label" for="inlineCheckbox1">Hammam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="type_sallon" value="SPA">
                    <label class="form-check-label" for="inlineCheckbox2">SPA</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="type_sallon" value="Salle de sport">
                    <label class="form-check-label" for="inlineCheckbox3">Salle de sport</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="type_sallon" value="Esthétique">
                    <label class="form-check-label" for="inlineCheckbox4">Esthétique</label>
                </div>
            </div>
        </div><!-- col-4 -->
        <br><br>
        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Nombre de place : <span
                        class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="Nombre_de_place" >
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
                <label class="form-control-label">Nombre de toilette : <span
                        class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="Nombre_de_toilette1" >
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
                <label class="form-control-label">Vestiaire <span
                        class="tx-danger">*</span></label>

                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Vestiaire" id="" value="option1" checked>
                        <label class="form-check-label" for="">
                            Non
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Vestiaire" id="" value="option2">
                        <label class="form-check-label" for="">
                            Oui
                        </label>
                    </div>
                </div>

            </div>
        </div><!-- col-4 -->

        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Catégorie :  <span class="tx-danger">*</span></label>
                <div id="cbWrapper" class="parsley-checkbox">
                    <label class="ckbox">
                        <input type="checkbox" name="browser[]" value="1" data-parsley-mincheck="2" data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" ><span>Populaire</span>
                    </label>
                    <label class="ckbox">
                        <input type="checkbox" name="browser[]" value="2"><span>Moyen</span>
                    </label>
                    <label class="ckbox">
                        <input type="checkbox" name="browser[]" value="2"><span>Luxe</span>
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
                        <input type="checkbox" name="browser[]" value="1" data-parsley-mincheck="2" data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" ><span>OUI</span>
                    </label>
                    <label class="ckbox">
                        <input type="checkbox" name="browser[]" value="2"><span>NON</span>
                    </label>
                </div><!-- form-group -->

            </div>
        </div><!-- col-4 -->
        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label">Toilette Femme : <span class="tx-danger">*</span></label>

                <div id="cbWrapper" class="parsley-checkbox">
                    <label class="ckbox">
                        <input type="checkbox" name="browser[]" value="1" data-parsley-mincheck="2" data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" ><span>OUI</span>
                    </label>
                    <label class="ckbox">
                        <input type="checkbox" name="browser[]" value="2"><span>NON</span>
                    </label>
                </div><!-- form-group -->

            </div>
        </div><!-- col-4 -->
    </div>
</div>
