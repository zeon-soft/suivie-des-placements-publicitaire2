@extends('layouts.master')

@section('content')


    <div class="sl-mainpanel">


        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Liste Des Clients</h5>

            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">

                <h6 class="card-body-title">Basic Responsive DataTable</h6>
                <div>
                    <a href="{{route('client.create')}}" class="btn btn-primary " role="button" aria-pressed="true">Ajouter
                        Client</a>
                </div>


                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">agent_de_saisie</th>
                            <th class="wd-15p">N_client</th>
                            <th class="wd-20p">Prénom_du_contact</th>
                            <th class="wd-15p">Poste_du_contact</th>
                            <th class="wd-15p">actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($clients as $client)
                            <tr>
                                <td>{{$client->agent_de_saisie}}</td>
                                <td>{{$client->N_client}}</td>
                                <td>{{$client->Prénom_du_contact}}</td>
                                <td>{{$client->Poste_du_contact}}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div>
@endsection
