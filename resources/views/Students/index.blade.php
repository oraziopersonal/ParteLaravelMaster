@extends('students.layout')
@section('content')
<div class="container">
    <div class="row" style="margina:200px">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
    <a href="{{url('/students/create')}}" class="btn btn-success btn-sn" title="aggiungi nuovo studente">Aggiungi  studente</a>
    <a href="#" class="btn btn-primary">Go somewhwer</a>
    <br>
    <br>
    <div class="table-responsive"><head>
        <table class="table">
            <th>
                <th>#</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Azioni</th>
            </th>
            </head>
            <tbody>
                @foreach ($students as $item) 
                <tr>
                    <td>{{$loop->iteration}}</td><!--documentazione Laravel -->
                    <td>{{$item->nome}}</td>
                <td>{{$item->cognome}}</td>
                <td>{{$item->telefono}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->azioni}}</td>
                <td>
                <a href="{{url('/students/'. $item->id . '/show')}}" class="btn btn-info btn-sn" title="aggiungi nuovo studente">Visualizza </a> 
                <a href="{{url('/students/'. $item->id . '/edit')}}" class="btn btn-primary btn-sn" title="aggiungi nuovo studente">Modifica </a> 
                <form method="POST" action="{{url('students/'.$item->id)"}} acept-charset="UTF-8" style="display:inline">
                {{methos_filed ('DELETE')}}
                <button type="submit" class="btn btn-danger btn-sn" title="modifica studente" onclick="return confirm('Sei sicuro di vorer eliminare lo studente')">ELIMINA</button>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
  </div>
</div>

    </div>
</div>
