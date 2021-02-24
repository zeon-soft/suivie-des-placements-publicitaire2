@extends('layouts.master')

@section('content')


    <div class="sl-mainpanel">


        <div class="sl-pagebody">
            <div class="sl-page-title">


            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">

                <header class="card-header">
                    <div class="float-right">
                        <div class="btn-group mb-1">
                            <a href="{{ route('commerce.create') }}" class="btn btn-success  btn-sm" role="button"
                               aria-disabled="true"><i class="fa fa-plus-square"></i></a>
                        </div>
                    </div>
                    <h2 class="card-title">Liste Des Clients</h2>
                </header>
<br>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">Type_commerce</th>
                            <th class="wd-15p">num_client_commerce</th>
                            <th class="wd-20p">Nom</th>
                            <th class="wd-15p">Prenom</th>
                            <th class="wd-15p">actions</th>
                        </tr>


                        </thead>
                        <tbody>

                        @foreach($commerces as $commerce)
                            <tr>
                                <td>{{$commerce->Type_commerce}}</td>
                                <td>{{$commerce->num_client_commerce}}</td>
                                <td>{{$commerce->Nom}}</td>
                                <td>{{$commerce->Prenom}}</td>

                                <td>
                                    <div class="form-inline">

                                        <form method="POST" action="{{ route('commerce.destroy', $commerce->id) }}">
                                            @csrf
                                            @method('delete')

                                            <a href="{{ route('commerce.show', $commerce->id) }}" class="btn btn-info  btn-sm"
                                               role="button" aria-disabled="true"><i class="fa fa-eye"></i></a>

                                            <a href="{{ route('commerce.edit', $commerce->id) }}" class="btn btn-warning  btn-sm"
                                               role="button" aria-disabled="true"><i class="fa fa-clone"></i></a>

                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="item show_confirm btn btn-secondary btn-sm"
                                                    data-toggle="tooltip" title='Delete'><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            $('.show_confirm').click(function (e) {
                if (!confirm('Are you sure you want to delete this?')) {
                    e.preventDefault();
                }
            });
        </script>
@endsection
