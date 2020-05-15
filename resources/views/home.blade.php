@extends('layouts.app')

@section('content')

<div id="amigos">
    <div class="overflow-auto">
        <div class="list-group">
            <a href="#" class="list-group-item text-center list-group-item-action active">
              Amigos
            </a>
            @foreach ($amigos as $amigo)
        <a href="#" data-idfriend="{{ $amigo['id'] }}" class="list-group-item list-group-item-action showchat">{{ $amigo['name'] }}&nbsp;<span id="numMessageAmigos{{$amigo['id']}}" class="badge badge-pill badge-primary">{{$amigo['mensajesNoVistos']>0?$amigo['mensajesNoVistos']:''}}</span></a> <!--<span class="badge badge-pill badge-success">Line</span></a>-->
            @endforeach
            {{-- <a href="#" class="list-group-item list-group-item-action">Morbi leo risus <span class="badge badge-pill badge-light">Offline</span></a> --}}
        </div>
    </div>
</div>
<div id="chasts" class="d-flex flex-row-reverse bd-highlight">

</div>

@endsection
