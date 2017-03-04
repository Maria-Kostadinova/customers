@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><img src="https://1001freedownloads.s3.amazonaws.com/icon/thumb/343953/Apps-preferences-contact-list-icon.png" height="30px" width="30px"/> Списък с информация за клиентите</div>

                <div class="panel-body">
                    <h4>
                    <center>
                    Добре дошли! <br/>
                    Вие влязохте в системата на My Customer. Това са вашите клиенти.<br/><br/>
                    </center>
                    </h4>
                    @php
                    /*
    echo $key1.'<br/>';
    echo $key2.'<br/>';
    echo $key3;
                    var_dump($fruits);
                    echo 'Аз обичам ' . $fruits[0] . ' '.  $fruits[1] .  ' и '  . $fruits[2];
                    */
                    /*
                    var_dump($user);
                    foreach($user as $user_data) {
  echo 'id: ' . $user_data -> id . '<br/>';
  echo 'name: ' . $user_data -> name . '<br/>';
  echo 'email: ' . $user_data -> email . '<br/>';
  echo 'password: ' . $user_data -> password . '<br/>';
  echo 'remember_token: ' . $user_data -> remember_token . '<br/>';
  echo 'created_at: ' . $user_data -> created_at . '<br/>';
  echo 'updated_at: ' . $user_data -> updated_at . '<br/>';
  }
  */

// var_dump($customer);
                    @endphp


                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal"><img src="http://freevector.co/wp-content/uploads/2013/05/23160-male-user-close-up-black-silhouette-with-add-button1.png" height="30px" width="30px"/><strong>    Добави нов клиент</strong> </a>
                    <br/><br/>
                    <table class="table-bordered">
                        <tr>
                            <th height=1px; width="150px"><center><img src="http://www.clipartkid.com/images/736/student-and-staff-id-cards-36sJLR-clipart.png" height="30px" width="30px"/>  ИД</center></th>
                            <th height=1px; width="150px"><center><img src="http://www.axialis.com/objects/ip_icon_03_FolderPictures.png" height="30px" width="30px"/>  Име</center></th>
                            <th height=1px; width="150px"><center><img src="https://cdn3.iconfinder.com/data/icons/Iconshock_Folders/png/NORMAL/512/text_512.png" height="30px" width="30px"/>  Фамилия</center></th>
                            <th height=1px; width="150px"><center><img src="https://openclipart.org/image/2400px/svg_to_png/245232/3d-Isometric-Intertwined-Gender-Hearts.png&disposition=attachment" height="30px" width="30px"/>  Пол</center></th>
                            <th height=1px; width="150px"><center><img src="http://www.kramos.ru/images/callkeeper_l_0.png" height="30px" width="30px"/> ️ Телефон</center></th>
                            <th height=1px; width="150px"><center><img src="http://files.softicons.com/download/web-icons/standard-portfolio-icons-by-aha-soft/png/256x256/write%20email.png" height="30px" width="30px"/> Имейл</center></th>
                            <th height=1px; width="380px"><center>Изберете действие <img src="http://pictures.dealer.com/f/familydodgecllc/0281/6975fca73c3c66c83dc8e2ad37a6f355x.jpg" height="30px" width="30px"/></center></th>
                        </tr>


                    @php
foreach ($customer as $customer_data) {
echo '<tr>';
    echo '<td>';
        echo $customer_data -> id;
    echo '</td>';
    echo '<td>';
         echo $customer_data -> first_name;
    echo '</td>';
    echo '<td>';
        echo $customer_data -> last_name;
    echo '</td>';
    echo '<td>';
        echo $customer_data -> gender;
    echo '</td>';
    echo '<td>';
        echo $customer_data -> telephone;
    echo '</td>';
    echo '<td>';
        echo $customer_data -> email;
    echo '</td>';
    echo '<td>';
        echo '<a href="" class="btn btn-info"><img src="http://www.somuca.es/dms/ICONOS/Edit_Yes.png" height="30px" width="30px"/>  Редактирай</a>';
        echo '       ';
        echo '<a href="/delete/customer/'.$customer_data -> id.'" class="btn btn-danger"><img src="http://images.easyfreeclipart.com/1633/delete-button-png-images-amp-pictures-becuo-1633633.png" height="30px" width="30px"/>   Изтрий</a>';
    echo '</td>';
echo '</tr>';
}
        @endphp
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> 🔖 Информация за нов клиент</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
@php

                echo Form::open(array('route' => 'add.customer'));
                echo '<div class="form-control">';
                echo Form::label('first_name', '✏️ ️Име: ');
                echo '&emsp;&emsp;&emsp;&emsp;';
                echo Form::text('first_name');
                echo '</div>';

                echo '<div class="form-control">';
                echo Form::label('last_name', '✏️️ Фамилия:');
                echo '&emsp;&ensp;';
                echo Form::text('last_name');
                echo '</div>';

                echo '<div class="form-control">';
                echo Form::label('gender', '⚤  Пол: ');
                echo '&emsp;&emsp;&emsp;&emsp;';
                echo Form::text('gender');
               echo '</div>';

                echo '<div class="form-control">';
                echo Form::label('telephone', '📞 Телефон:');
                echo '&emsp;&ensp;&ensp;';
                echo Form::text('telephone');
                echo '</div>';

                echo '<div class="form-control">';
                echo Form::label('email', '✉️ Имейл: ');
                echo '&emsp;&ensp;&ensp;&ensp;';
                echo Form::text('email');
                echo '</div>';



                @endphp
                </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">🚪  Затвори</button>
               @php
                echo Form::submit('💾  Запази', ['class'=>'btn btn-primary']);
                @endphp
                {{--<button type="button" class="btn btn-primary">Запази</button>--}}
            </div>
            @php
            echo Form::close();
            @endphp
        </div>
    </div>
</div>
@endsection
