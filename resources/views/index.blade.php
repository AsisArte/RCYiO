@extends('layouts/pipec')

@section('title')
главная
@endsection

@section('main')
<div class="content">

<div class="fon">
    <img src="{{ URL::asset('/img/fon.svg')}}" alt="fon">
    <div class="fon-text">
        <h1>КУ УР РЦУиО</h1>
            <p>Казенное учреждение <br>
                Удмуртской Республики <br>
                "Республиканский центр учета и отчетности"</p>
    </div>
</div>

<div class="ych">
    <h2>Принято учреждений на бухгалтерское обслуживание:</h2>
    <div class="ych-block">
        <div class="block">
            <div class="kryg">
                <p>11</p>
            </div>
            <p>Органы исполнительной <br> власти</p>
        </div>

        <div class="block">
            <div class="kryg">
                <p>55</p>
            </div>
            <p>Государственные <br> учреждения</p>
        </div>

        <div class="block">
            <div class="kryg">
                <p>78</p>
            </div>
            <p>Бюджетные <br> учреждения</p>
        </div>

        <div class="block">
            <div class="kryg">
                <p>36</p>
            </div>
            <p>Автономные <br> учреждения</p>
        </div>
    </div>
</div>

<div class="fon">
    <img src="{{ URL::asset('/img/fon2.svg')}}" alt="fon2">
    <div class="fon-altext">
        <h2>Наша деятельность</h2>
            <div class="text">
                <p> • Бухгалтерский (бюджетный) учет</p>
                <p> • Кадровый и управленческий учет</p>
                <p> • Расчет заработной платы</p>
                <p> • Консолидация бухгалтерских данных организаций бюджетной сферы на территории Удмуртской Республики и формирование на их основе бухгалтерской (бюджетной) и финансовой отчетности </p>
                <p> • Контроль за расходами подведомственных учреждений</p>
                <p> • Контроль за изменениями кредиторской задолженности (дебиторской задолженности)</p>
            </div>
    </div>
</div>

</div>
@endsection