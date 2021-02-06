@extends('layouts.master')
@section('content')
    <div class="sl-mainpanel">


    <div class="sl-pagebody">

        <div class="sl-page-title">
            <h5>Ajouter Client</h5>

        </div><!-- sl-page-title -->


        <div class="card pd-10 pd-sm-0">


            <div class="row row-sm mg-t-20">
                <div class="col-xl-6">




                    <form class="card pd-20 pd-sm-40 form-layout form-layout-4"  method="POST" action="{{route('client.store')}}">
                        @csrf
                        <div class="row">
                            <label class="col-sm-4 form-control-label">Agent de saisie: <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="agent_de_saisie" class="form-control" placeholder="Enter firstname">
                            </div>
                        </div><!-- row -->
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">N client: <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text"  name="N_client" class="form-control" placeholder="Enter lastname">
                            </div>
                        </div>
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Prénom du contact: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text"  name="Prénom_du_contact" class="form-control" placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Poste du contact: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <textarea rows="2" class="form-control"  name="Poste_du_contact" placeholder="Enter your address"></textarea>
                            </div>
                        </div>
                        <div class="form-layout-footer mg-t-30">
                            <button  type="submit" class="btn btn-info mg-r-5">Ajouter</button>
                            <button class="btn btn-secondary">Anuller</button>
                        </div><!-- form-layout-footer -->

                    </form>
                    </div><!-- card -->

                </div>

            </div>
        </div></div>
@endsection
