@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="text-center">All Owners</h1>
            </div>
                @if(count($owner)!=0)
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th><b>#id</b></th>
                            <th><b>First Name</b></th>
                            <th><b>control</b></th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach($owner as $own)
                          <tr>
                            <td>{{$own->id}}</td>
                            <td>{{$own->first_name}}</td>
                            <td>
                                <a href="/owner/edit/{{$own->id}}" class="btn btn-success">Edit</a>
                                <a href="/owner/delete/{{$own->id}}" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                         @endforeach

                        </tbody>
                    </table>
                @else
                    <div class="alert alert-danger"><h3>No Data</h3> </div>
                @endif
        </div>
    </div>
</div>

@endsection