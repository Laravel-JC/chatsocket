<div class="card" style="width: 18rem;" id="{{ $idfriend }}">
    <div class="card-header d-flex justify-content-between">
      <div class="chat-header-content" onclick="toggleChat(this);">
        {{ $name }}&nbsp;<span class="badge badge-pill badge-primary">1</span>
      </div>
      <div class="close-chat">
        <a href="#" onclick="closeChat(this)"><span class="float-right">&times;</span></a>
      </div>
    </div>
    <div class="card-body">
        <div class="overflow-auto">
            <div class="chat-content" style="height: 15rem;">
                <div class="container">
                    @foreach ($mensajes as $mensaje)
                        @if ($mensaje->idusuario == $idfriend)
                            <div class="row">
                                <div class="col-md-2 p-0"></div>
                                <div class="col-md-10 p-0 d-flex flex-row-reverse bd-highlight">
                                    <div class="my-1">
                                        <span class="badge badge-pill badge-secondary mr-2">{{ $mensaje->mensaje }}</span>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-md-10 p-0">
                                    <div class="my-1 float-left">
                                        <span class="badge badge-pill badge-primary ml-2">{{ $mensaje->mensaje }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted p-0">
        <div class="input-group">
            <input type="text" class="form-control border-0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <div class="input-group-prepend">
                <a href="#" onclick="sendMessaggeFriend(this);" class="text-decoration-none"><span class="input-group-text border-0" id="inputGroup-sizing-default">Send</span></a>
            </div>
        </div>
    </div>
</div>