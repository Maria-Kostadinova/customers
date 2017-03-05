@extends('layouts.app')

@section('content')
    <div class="container">
        <h3><u>Relation One to Many - One customer can have many buys</u></h3>
        <table class="table-bordered" width="600px">
            <tr>
                <th class="text-center">Име на клиент: </th>
                <th class="text-center">Сума на направените продажби:</th>
            </tr>
            @php
                foreach ($sale as $sale_data) {
                echo '<tr>';
                    echo '<td>';
                        echo $sale_data -> customer -> first_name.' ';
                        echo $sale_data -> customer -> last_name;
                    echo '</td>';
                    echo '<td align="center">';
                         echo $sale_data -> cost.' лв'.'.';
                    echo '</td>';
                echo '</tr>';
                }
            @endphp
        </table>
    </div>
@endsection