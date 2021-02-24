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



@include('clients.component.form')

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
