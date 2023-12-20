@extends('layouts.app')

@section('content')
<div class="container">
    <a class="link-go-back" href="{{ route('myuser.list') }}">Torna indietro</a>
    <div class="page-header">
        <div class="my-title">Crea utente</div>
    </div>
    <div class="my-form-container">
        @include('partials.user-form', [
        
        ])
    </div>
</div>
@endsection