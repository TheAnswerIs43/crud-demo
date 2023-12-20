<form id="my-form" method="POST" action="{{ isset($user) ? route('myuser.update', $user->id) : route('myuser.store')}}">
    @csrf
    @if(isset($user))
        <input type="hidden" name="id" value="{{$user->id}}">
    @endif
    <div class="my-form-row">
        <div class="my-form-elem">
            <label for="name">Nome</label>
            <input name="name" type="text" class="my-input @error('name') is-invalid @enderror" value="{{ $user->name ?? old('name') }}" placeholder="Es. Mario">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="my-form-elem">
            <label for="surname">Cognome</label>
            <input name="surname" type="text" class="my-input @error('surname') is-invalid @enderror" value="{{ $user->surname ?? old('surname') }}" placeholder="Es. Rossi">
            @error('surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="my-form-row">
        <div class="my-form-elem">
            <label for="email">Email</label>
            <input name="email" type="email" class="my-input @error('email') is-invalid @enderror" value="{{ $user->email ?? old('email') }}" placeholder="Es. mario.rossi@gmail.it">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <button type="submit" class="my-btn">
        {{ isset($user) ? 'Aggiorna' : 'Crea'}}
    </button>
</form>