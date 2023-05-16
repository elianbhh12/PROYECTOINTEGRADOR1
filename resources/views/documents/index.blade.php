@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>documents</h2>
            </div>
            <div class="pull-right">
                @can('documents-create')
                <a class="btn btn-success" href="{{ route('documents.create') }}"> Create New Product</a>
                @endcan
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
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($documents as $documents)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $documents->name }}</td>
            <td>{{ $documents->archivo }}</td>
            <td>
                <form action="{{ route('documents.destroy',$document->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('documents.show',$documents->id) }}">Show</a>
                    @can('documents-edit')
                    <a class="btn btn-primary" href="{{ route('documents.edit',$documents->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('documents-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>


    {!! $documents->links() !!}


<p class="text-center text-primary"><small>Tutorial by Mywebtuts.com</small></p>
@endsection