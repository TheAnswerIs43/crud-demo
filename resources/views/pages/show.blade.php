@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="link-go-back" href="{{ route('myuser.list') }}">Torna indietro</a>
        <div class="page-header">
            <div class="my-title">Dettaglio utente</div>
        </div>
        <div class="my-info-container">
            <div>Nome: <span class="my-info">{{$user->name}}</span></div>
            <div>Cognome: <span class="my-info">{{$user->surname}}</span></div>
            <div>Email: <strong>{{$user->email}}</strong></div>
        </div>
        <div class="my-btn-options-container">
            <a href="{{route('myuser.edit', $user->id)}}" class="my-btn">Modifica</a>
            <form action="{{route('myuser.delete', $user->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" href="{{route('myuser.delete', $user->id)}}" class="my-btn-reverse">Elimina</a>
            </form>
        </div>
    </div>
@endsection