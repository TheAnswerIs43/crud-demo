@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <div class="my-title">Lista utenti</div>
        <a href="{{route('myuser.create')}}" class="my-btn">Crea</a>
    </div>
    @if(session()->has('success_message'))
        <div class="my-msg-success">
            {{ session()->get('success_message') }}
        </div>
    @endif
    <div class="my-user-container">
        @if(count($myusers) > 0)
            <div class="my-user-element">
                <span class="my-user-name my-title">Nome</span>
                <span class="my-user-surname my-title">Cognome</span>
                <span class="my-user-email my-title">Email</span>
            </div>
            @foreach($myusers as $myuser)
                <a class="my-user-element" href="{{route('myuser.show', $myuser->id)}}">
                    <span class="my-user-name">{{ $myuser->name }}</span>
                    <span class="my-user-surname">{{ $myuser->surname }}</span>
                    <span class="my-user-email">{{ $myuser->email }}</span>
                </a>
            @endforeach
        @else
            <div class="no-users">
                Nessun utente inserito al momento!
            </div>
        @endif
    </div>
</div>
@endsection