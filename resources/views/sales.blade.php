@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Relation One to Many - One customer can have many buys</h3>
        <table class="table-bordered">
            <tr>
                <th>Име на клиент: </th>
                <th>Сума:</th>
            </tr>
            @php
                foreach ($sale as $sale_data) {
                echo '<tr>';
                    echo '<td>';
                        echo $sale_data -> customer -> first_name.' ';
                        echo $sale_data -> customer -> last_name;
                    echo '</td>';
                    echo '<td align="center">';
                         echo $sale_data -> cost;
                    echo '</td>';
                echo '</tr>';
                }
            @endphp
        </table>
    </div>
@endsection