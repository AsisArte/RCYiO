@extends('layouts/pipec')

@section('title')
Личный кабинет
@endsection

@section('label-css')
<link rel="stylesheet" href="css/filter_form.css">
@endsection

@section('main')
<div class="content">

<div class="lk">
    <h2>Личный кабинет</h2>
    <div class="lk-block">
            <div class="container"> 
              <input type="checkbox" id="blue" name="color" checked />
              <label for="blue">+ Новое обращение</label>
            
                  <form method="POST" enctype="multipart/form-data" action="/dashboard/submit" class="tile blue">
                  @csrf
                      <input type="text" placeholder="ФИО*" id="fio" name="fio">
                      <input type="text" placeholder="E-mail*" id="email" name="email">
                      <input type="text" placeholder="Организация*" id="org" name="org">
                      <textarea name="obr" id="obr" cols="30" rows="10" placeholder="Обращение*"></textarea>
                      <button>Отправить обращение</button>
                  </form>
            </div>
            
            @foreach($data as $el)
            <div class="userroom-card">
                <div class="text-column text-wide">
                    <h4>Организация: {{$el->org}}</h4>
                    <h4 class="smal">ФИО: {{$el->fio}}</h4>
                    <h4 class="smal">E-mail: {{$el->email}}</h4>
                    <p class="thin">{{$el->obr}}</p>
                    <p class="thin"> {{$el->created_at}}</p>
                    <a href="{{route('delete', $el->id)}}"><button>Удалить</button></a>
                </div>
            </div>
            @endforeach
                
    </div>
</div>
</div>
@endsection
