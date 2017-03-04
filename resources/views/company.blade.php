@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Relation One to One - One customer can have one company</h3>
@php
 echo 'Компанията на клиент <b>'.$company -> customer -> first_name.'</b> е <b>'.$company -> company_name.'</b>!'
@endphp
    </div>
@endsection