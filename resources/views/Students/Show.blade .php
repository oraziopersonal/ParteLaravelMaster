@extends('students.layout')
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header">Scheda Studente</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nome : {{ $studenti->nome }}</h5>
            <h5 class="card-text">Cognome : {{ $studenti->cognome }}</h5>
            <p class="card-text">Telefono : {{ $studenti->telefono }}</p>
            <p class="card-text">Email : {{ $studenti->email }}</p>
        </div>
        </hr>
    </div>
</div>
@stop
