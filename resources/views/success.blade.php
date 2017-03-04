@extends('layouts.app')

@section('content')

    @php
    if($message != null){

    echo ' <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Честито! </strong>'.$message.'
    </div> ';
    }
    @endphp

@endsection