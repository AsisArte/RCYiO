@extends('layouts/pipec')

@section('title')
Контакты
@endsection

@section('main')
<div class="content">

<div class="inf">
    <h2>Контакты</h2>
    <div class="inf-block">
        <div class="inf-left">
            <h4>Телефон:   +7(3412) 601-300</h4>
            <h4>E-mail:<br>  rcu18@rcu.udmr.ru <br>
                cbmzur1@mail.ru</h4>
            <h4>Почтовый адрес: 426063, Ижевск, ул. Орджоникидзе, 23А</h4>
            <h4>Руководитель: Исламова Лилия Маликовна</h4>
            <h4>Режим работы:<br>   Понедельник – Четверг	    8:00 – 17:00 <br>
                Обед	    12:00 – 12:48 <br>
                Пятница    	8:00 – 16:00</h4>
        </div>
        <div class="inf-right">
            <img src="{{ URL::asset('/img/karta.svg')}}" alt="karta">
        </div>
    </div>
</div>

</div>
@endsection