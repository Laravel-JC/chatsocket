@extends('layouts.app')

@section('content')

<div id="amigos">
    <div class="overflow-auto">
        <div class="list-group">
            <a href="#" class="list-group-item text-center list-group-item-action active">
              Amigos
            </a>
            <a href="#" class="list-group-item list-group-item-action">Juan Camilo Muñoz <span class="badge badge-pill badge-success">Line</span></a>
            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus <span class="badge badge-pill badge-light">Offline</span></a>
            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
        </div>
    </div>
</div>
<div id="chasts" class="d-flex flex-row-reverse bd-highlight">
    <div class="card" style="width: 18rem;" id="1">
        <div class="card-header">
          <div class="chat-header-content">
            Juan Camilo Muñoz&nbsp;<span class="badge badge-pill badge-primary">1</span>
            <a href="#"><span class="float-right">&times;</span></a>
          </div>
        </div>
        <div class="card-body">
            <div class="overflow-auto">
                <div class="chat-content" style="height: 15rem;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 p-0">
                                <div class="my-1 float-left">
                                    <span class="badge badge-pill badge-primary ml-2">Hola mijo como esta todo? adsad asda sdasda asdasd</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 p-0"></div>
                            <div class="col-md-10 p-0 d-flex flex-row-reverse bd-highlight">
                                <div class="my-1">
                                    <span class="badge badge-pill badge-secondary mr-2">Hola mijo como esta todo? adsad asda sdasda asdasd</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 p-0">
                                <div class="my-1 float-left">
                                    <span class="badge badge-pill badge-primary ml-2">Todo bien</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 p-0"></div>
                            <div class="col-md-10 p-0 d-flex flex-row-reverse bd-highlight">
                                <div class="my-1">
                                    <span class="badge badge-pill badge-secondary mr-2">Excelente</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 p-0"></div>
                            <div class="col-md-10 p-0 d-flex flex-row-reverse bd-highlight">
                                <div class="my-1">
                                    <span class="badge badge-pill badge-secondary mr-2">khaghfajdjasdhasda</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 p-0"></div>
                            <div class="col-md-10 p-0 d-flex flex-row-reverse bd-highlight">
                                <div class="my-1">
                                    <span class="badge badge-pill badge-secondary mr-2">Hola mijo como esta todo? adsad asda sdasda asdasd</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 p-0"></div>
                            <div class="col-md-10 p-0 d-flex flex-row-reverse bd-highlight">
                                <div class="my-1">
                                    <span class="badge badge-pill badge-secondary mr-2">Hola mijo como esta todo? adsad asda sdasda asdasd</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted p-0">
            <div class="input-group">
                <input type="text" class="form-control border-0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                <div class="input-group-prepend">
                    <a href="#" class="text-decoration-none"><span class="input-group-text border-0" id="inputGroup-sizing-default">Send</span></a>
                </div>
            </div>
        </div>
    </div>
    {{-- Amigo 2 --}}
    <div class="card" style="width: 18rem;" id="2">
        <div class="card-header">
          <div class="chat-header-content">
            Juan Camilo Muñoz&nbsp;<span class="badge badge-pill badge-primary">1</span>
            <a href="#"><span class="float-right">&times;</span></a>
          </div>
        </div>
        <div class="card-body">
            <div class="overflow-auto">
                <div class="chat-content" style="height: 15rem;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 p-0">
                                <div class="my-1 float-left">
                                    <span class="badge badge-pill badge-primary ml-2">Hola mijo como esta todo? adsad asda sdasda asdasd</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 p-0"></div>
                            <div class="col-md-10 p-0 d-flex flex-row-reverse bd-highlight">
                                <div class="my-1">
                                    <span class="badge badge-pill badge-secondary mr-2">Hola mijo como esta todo? adsad asda sdasda asdasd</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 p-0">
                                <div class="my-1 float-left">
                                    <span class="badge badge-pill badge-primary ml-2">Todo bien</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 p-0"></div>
                            <div class="col-md-10 p-0 d-flex flex-row-reverse bd-highlight">
                                <div class="my-1">
                                    <span class="badge badge-pill badge-secondary mr-2">Excelente</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 p-0"></div>
                            <div class="col-md-10 p-0 d-flex flex-row-reverse bd-highlight">
                                <div class="my-1">
                                    <span class="badge badge-pill badge-secondary mr-2">khaghfajdjasdhasda</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 p-0"></div>
                            <div class="col-md-10 p-0 d-flex flex-row-reverse bd-highlight">
                                <div class="my-1">
                                    <span class="badge badge-pill badge-secondary mr-2">Hola mijo como esta todo? adsad asda sdasda asdasd</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 p-0"></div>
                            <div class="col-md-10 p-0 d-flex flex-row-reverse bd-highlight">
                                <div class="my-1">
                                    <span class="badge badge-pill badge-secondary mr-2">Hola mijo como esta todo? adsad asda sdasda asdasd</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted p-0">
            <div class="input-group">
                <input type="text" class="form-control border-0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                <div class="input-group-prepend">
                    <a href="#" class="text-decoration-none"><span class="input-group-text border-0" id="inputGroup-sizing-default">Send</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
