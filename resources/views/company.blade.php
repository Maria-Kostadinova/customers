@extends('layouts.app')

@section('content')

    <div class="container">
        <h3><u>Relation One to One - One customer can have one company</u></h3>
        @php

            echo 'Компанията на клиент <b>'.$customer->first_name .' '.$customer->last_name .'</b> е <b>'.$customer->company->company_name.'</b>!'

        @endphp
    </div>
@endsection