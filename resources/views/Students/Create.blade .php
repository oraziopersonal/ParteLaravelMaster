@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Students</div>
        <div class="card-body">
            
            <form action="{{ url('studenti') }}" method="post">
                {!! csrf_field() !!}
                <label>Nome</label><br>
                <input type="text" name="nome" id="nome" class="form-control"></br>
                <label>Cognome</label><br>
                <input type="text" name="cognome" id="cognome" class="form-control"></br>
                <label>Telefono</label><br>
                <input type="text" name="telefono" id="telefono" class="form-control"></br>
                <label>Email</label><br>
                <input type="text" name="email" id="email" class="form-control"></br>
                <input type="text" name="nome" id="nome" class="btn btn-success"></br>
            </form>
        </div>
</div>

@stop
