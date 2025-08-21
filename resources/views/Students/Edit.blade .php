@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Modifica studente</div>
    <div class="card-body">

        <form action="{{ url('studenti/'.$studenti->id) }}" method="post">
            {!! crsf_fiel() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$studenti->id}}" />
            <label>Nome</label>
            <input type="text" name="nome" id="nome" value="{{$studenti->nome}}" class="form-control"><br>
            <label>Cogome</label>
            <input type="text" name="cognome" id="cognome" value="{{$studenti->cognome}}" class="form-control"><br>
            <label>Telefono</label>
            <input type="text" name="telefono" id="telefono" value="{{$studenti->telefono}}" class="form-control"><br>
            <label>Email</label>
            <input type="text" name="email" id="email" value="{{$studenti->email}}" class="form-control"><br>
            <input type="submit" name="Update" class="btn btn-success" ><br>
        </form>
    
    </div>
</div>

@stpo
