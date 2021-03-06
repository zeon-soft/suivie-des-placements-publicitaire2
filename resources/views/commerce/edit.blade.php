
@extends('layouts.master')

@section('content')


    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">

            <a class="breadcrumb-item" href="index.html">Commerce</a>
            <span class="breadcrumb-item active">Ajouter Commerce</span>
        </nav>

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Ajouter Commerce</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">


                <form method="POST" action="{{route('commerce.store')}}">
                    @csrf

                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label">Type commerce : <span
                                            class="tx-danger">*</span></label>
                                    <select class="form-control select2" data-placeholder="Choose country" required
                                            name="Type_commerceaaa">
                                        <option label="choisir ici"></option>
                                        <option value="USA">CAFE</option>
                                        <option value="UK">Coiffeur</option>
                                        <option value="China">Salle de sport /hammam</option>
                                        <option value="Japan">SPA/Esthétique</option>
                                        <option value="Japan">Hotel</option>
                                        <option value="Japan">Restaurant</option>
                                        <option value="Japan">Fast food</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label">N° client commerce : <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ old('content', $commerce->num_client_commerce ?? null) }}" name="num_client_commerce" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label">Entreprise : <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ old('content', $commerce->Entreprise ?? null) }}" name="Entreprise" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label">Nom : <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text"value="{{ old('content', $commerce->Nom ?? null) }}" name="Nom" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Prénom : <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text"value="{{ old('content', $commerce->Prenom ?? null) }}" name="Prenom" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Adresse : <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text"value="{{ old('content', $commerce->Adresse ?? null) }}" name="Adresse" required>
                                </div>
                            </div><!-- col-4 -->


                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">GPS : <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text"value="{{ old('content', $commerce->GPS ?? null) }}" name="GPS" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Téléphone : <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text"value="{{ old('content', $commerce->Téléphone ?? null) }}" name="Téléphone" required>
                                </div>
                            </div><!-- col-4 -->


                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Adresse e-mail : <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text"value="{{ old('content', $commerce->Adresse_e_mail ?? null) }}" name="Adresse_e_mail" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Daira : <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text"value="{{ old('content', $commerce->Daira ?? null) }}" name="Daira" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Commune : <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ old('content', $commerce->Commune ?? null) }}" name="Commune" required>
                                </div>
                            </div><!-- col-4 -->


                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Site internet : <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ old('content', $commerce->site_internet ?? null) }}" name="site_internet" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">RC N° : <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ old('content', $commerce->RC_num ?? null) }}" name="RC_num" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">NIF : <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ old('content', $commerce->NIF ?? null) }}" name="NIF" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">NIS : <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ old('content', $commerce->NIS ?? null) }}" name="NIS" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Nombre de face possédées :<span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ old('content', $commerce->nombre_de_face ?? null) }}" name="nombre_de_face" required>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-12">
                                <div class="form-inline">
                                    <div>
                                        <label class="form-control-label">Jours de fermeture  :<span class="tx-danger">  * </span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                               value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">dimanche</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">lundi </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox3">mardi</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox4">mercredi</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox5">jeudi</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox6">vendredi</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox7"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox7">samedi</label>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                            <br><br>

                            <div class="col-lg-12">
                                <div class="form-inline">
                                    <div>
                                        <label class="form-control-label">Mois de fermeture  :<span class="tx-danger">  * </span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox8"
                                               value="option1">
                                        <label class="form-check-label" for="inlineCheckbox8">Janv</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox9"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox9">Fev </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox10"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox10">Mars</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox11"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox11">Avril</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox12"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox12">Mai</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox13"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox13">Juin</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox14"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox14">Juil </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox15"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox15">Aout </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox16"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox16">Sep </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox17"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox17">Oct </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox18"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox18">Nov </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox19"
                                               value="option2">
                                        <label class="form-check-label" for="inlineCheckbox19">Dec </label>
                                    </div>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                   role="tab" aria-controls="nav-home" aria-selected="true">Restaurant ou fast food</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                   role="tab" aria-controls="nav-profile" aria-selected="false">Salon de coiffure</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                   role="tab" aria-controls="nav-contact" aria-selected="false">Hammam ou SPA ou Salle
                                    de Sport ou esthétique</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <br>
                                @include('commerce.components.cafe_restaurant_fast_food')
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                 aria-labelledby="nav-profile-tab">
                                <br>
                                @include('commerce.components.salon_de_coiffure')
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                 aria-labelledby="nav-contact-tab">
                                <br>
                                @include('commerce.components.Hammam_SPA_Salle_sport_esthetique')

                            </div>
                        </div>
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Ajouter</button>
                            <button class="btn btn-secondary">Annuler</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- card -->


        </div><!-- sl-pagebody -->

        @include('layouts.includes.footer')

    </div><!-- sl-mainpanel -->





@endsection

