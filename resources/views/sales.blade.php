@extends('layouts.app')

@section('content')
<table class="table-bordered">
    @php
        foreach ($sale as $sale_data) {
        echo '<tr>';
            echo '<td>';
                echo $sale_data -> user -> first_name;
            echo '</td>';
            echo '<td>';
                 echo $sale_data -> cost;
            echo '</td>';
        echo '</tr>';
        }
    @endphp
</table>
@endsection