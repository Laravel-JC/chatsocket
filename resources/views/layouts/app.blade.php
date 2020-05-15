<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        #amigos{
            position: fixed;
            right: 0;
            top: 55px;
        }
        #amigos div{
            width: 20vw;
            height: 93vh;
            background-color: #6c757d1f;
        }
        #chasts{
            /* border: solid #000; */
            position: fixed;
            bottom: 0;
            left: 0;
            right: 20vw;
        }
        #chasts .form-control:focus {
            box-shadow: 0;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <style>
        .container .badge {
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 90%;
            font-weight: 700;
            line-height: 1;
            text-align: left;
            white-space: normal;
            word-wrap: break-word;
            vertical-align: baseline;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .container .badge-primary{
            border-radius: 0 0.25rem 0.25rem 0.25rem;
        }
        .container .badge-secondary{
            border-radius: 0.25rem 0 0.25rem 0.25rem; 
        }
        #chasts .card-body{
            padding: 0;
        }
    </style>
    {{-- scripst --}}
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    <script
        src="https://code.jquery.com/jquery-3.5.1.slim.js"
        integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
        crossorigin="anonymous"></script>
    
    <script>
        let token = $('meta[name="csrf-token"]').attr('content');
        $( document ).ready( () => {

            Echo.channel(`channel{!! auth()->check() ? auth()->user()->id : null; !!}`).listen('SendMessaggeEvent', (e) =>{
                let chat = $(`#${e.remitente}`).find('.container');
                let numMessageChat=$(`#numMessageChat${e.remitente}`);
                let numMessageAmigos=$(`#numMessageAmigos${e.remitente}`);
                if(chat){
                    let num= numMessageAmigos.text();
                    if(num==''){
                        numMessageAmigos.text('1');
                        numMessageChat.text('1');
                    }else{
                        numMessageAmigos.text(parseInt(num)+1);
                        numMessageChat.text(parseInt(num)+1);
                    }
                    chat.append(`<div class="row">
                                <div class="col-md-10 p-0">
                                    <div class="my-1 float-left">
                                        <span class="badge badge-pill badge-primary ml-2">${e.message}</span>
                                    </div>
                                </div>
                            </div>`);
                }                
            });

            let chatsArea = $('#chasts');

            // $('div .chat-header-content').click((e) =>{
            //     let idfriend = $(e.target).data('idfriend');
            //     $(`div#${idfriend} .card-body`).toggle();
            //     $(`div#${idfriend} .card-footer`).toggle();
            // });

            $('.showchat').click((e) =>{
                e.preventDefault();
                let idfriend = $(e.target).data('idfriend');
                //Validar que cuandoya exista este chat abierto en la vista no se consulte
                $.ajax({
                    type: "POST",
                    headers: {'X-CSRF-TOKEN': token},
                    url: `/chat/show`,
                    data: { idfriend: idfriend },
                    dataType: "html",
                }).done((response) => {
                    //Validar que la respuesta si sea un html
                    chatsArea.append(response);
                    $(`#numMessageChat${idfriend}`).text($(`#numMessageAmigos${idfriend}`).text());
                    

                }).fail((error) => {
                    console.log(error);
                });
                
            });
        });

        function toggleChat(element){
            let idfriend = $(element).parents('.card').prop('id');
            $(`div#${idfriend} .card-body`).toggle();
            $(`div#${idfriend} .card-footer`).toggle();
        }

        function closeChat(element){
            let idfriend = $(element).parents('.card').prop('id');
            $(`div#${idfriend}`).remove();
        }

        function marcarMessageEnVisto(idfriend){
            $.ajax({
                type: "GET",
                url: `/chat/marcarMensajesVisto/${idfriend}`,
                dataType: "json"
            }).done((response) => {
                $(`#numMessageChat${idfriend}`).text('');
                $(`#numMessageAmigos${idfriend}`).text('');
                console.log(response);
                //...
            })
        }

        function sendMessaggeFriend(element){
            let idfriend = $(element).parents('.card').prop('id');
            let chat = $(element).parents('.card').find('.container');
            let messagge = $(element).parents('.input-group').find('input[type=text]').val();
            $.ajax({
                type: "POST",
                headers: {'X-CSRF-TOKEN': token},
                url: `/chat/sendMessagge`,
                data: { 
                        idfriend: idfriend,
                        messagge: messagge
                      },
                dataType: "json",
                beforeSend: () => {
                    chat.append(`<div class="row">
                                <div class="col-md-2 p-0"></div>
                                <div class="col-md-10 p-0 d-flex flex-row-reverse bd-highlight">
                                    <div class="my-1">
                                        <span class="badge badge-pill badge-secondary mr-2">${messagge}</span>
                                    </div>
                                </div>
                            </div>`);
                }
            }).done((response) => {
                //Validar que la respuesta si sea un html
                console.log(response);
                //...
            }).fail((error) => {
                console.log(error);
            });
        }
    </script>

</body>
</html>
