@extends('layouts.app')

@section('content')
    <div class="form-group">
        @php

                        echo Form::open(array('route' => 'edit.customer'));
                        echo '<div class="form-control">';
                        echo Form::label('first_name', '✏️ ️Име: ');
                        echo '&emsp;&emsp;&emsp;&emsp;';
                        echo Form::text('first_name', $customer->first_name);
                        echo '</div>';

                        echo '<div class="form-control">';
                        echo Form::label('last_name', '✏️️ Фамилия:');
                        echo '&emsp;&ensp;';
                        echo Form::text('last_name', $customer->last_name);
                        echo '</div>';

                        echo '<div class="form-control">';
                        echo Form::label('gender', '⚤  Пол: ');
                        echo '&emsp;&emsp;&emsp;&emsp;';
                        echo Form::text('gender', $customer->gender);
                       echo '</div>';

                        echo '<div class="form-control">';
                        echo Form::label('telephone', '📞 Телефон:');
                        echo '&emsp;&ensp;&ensp;';
                        echo Form::text('telephone', $customer->telephone);
                        echo '</div>';

                        echo '<div class="form-control">';
                        echo Form::label('email', '✉️ Имейл: ');
                        echo '&emsp;&ensp;&ensp;&ensp;';
                        echo Form::text('email', $customer->email);
                        echo '</div>';

        echo Form::hidden('customer_id', $customer->id) ;
        @endphp
        @php
            echo Form::submit('💾  Запази', ['class'=>'btn btn-primary']);
        echo Form::close();
        @endphp

    </div>
@endsection