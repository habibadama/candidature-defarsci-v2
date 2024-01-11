@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12 margin-tb">
                <div class="float-start">
                    <h2>Modules</h2>
                </div>
                <div class="float-end">
                    <a class="btn btn-outline-success" href="{{ route('index') }}"> Ajouter un Module</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Libelé</th>
                <th width="280px">Actions</th>
            </tr>
            @foreach ($module as $module)
            <tr>

                <td>{{ $module->id }}</td>
                <td>{{ $module->libele }}</td>
                <td class="d-flex justify-content-end">
                    <form action="{{ route('delete-module',$module->id ) }}" method="POST"> 
                        <a href="{{route('edit-module',$module->id )}}" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a onclick="return confirm('Souhaitez-vous le supprimer')" href="{{route('delete-module',$module->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        @csrf
                        @method('DELETE')

                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
@endsection
