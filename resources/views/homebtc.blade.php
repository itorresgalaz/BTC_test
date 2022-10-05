<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>BTC</title>
        <!-- <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        @vite(['resources/js/app.js'])
        @vite('resources/js/btc.js')
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
      <div class="container text-center">
        <nav class="navbar navbar-expand-md bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}">Home</a><i class="fa-light fa-house"></i>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/btc')}}">Historial</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div>


          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div id="currency" class="card-body">

                  
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div id="rates" class="card-body">

                </div>
              </div>
            </div>
          </div>
      

          {{-- <script>
            let txt = document.getElementById("currency")
            console.error(txt.innerHTML);

            txt = currency['currency']
            console.warn(txt);

          </script> --}}
    </body>
</html>
