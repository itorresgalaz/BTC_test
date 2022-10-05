<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BTC</title>
        <!-- <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        @vite(['resources/js/app.js'])
        {{-- @vite('resources/js/btc.js') --}}
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

        {{-- TABLE --}}
        <table class="table">
            <thead>
              <tr>
                <th scope="col">FECHA</th>
                <th scope="col">MONEDA</th>
                <th scope="col">VALOR EN USD</th>
                <th scope="col">% VARIACION</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($btc as $item => $valor )
                    
                    <tr>
                        <th scope="row">{{$valor->created_at}}</th>
                        <td>{{$valor->currency}}</td>
                        <td>{{round($valor->rates,2)}}</td>
                        {{-- <td>{{($btc[$item]['rates'] - $btc[$item]['rates']) / $btc[2]['rates'] * 100}}</td> --}}
                        @if ($item == 0)
                        <td>{{($btc[$item]['rates'] - $btc[$item]['rates']) / $btc[2]['rates'] * 100}}</td>
                        {{-- <td>{{ $item }} -  {{$valor['rates']}} </td> --}}
                        @endif
                        @if ($item != 0) 
                            @if (round(($btc[$item-1]['rates'] - $btc[$item]['rates']) / $btc[$item-1]['rates'] * 100,2) > 0)
                                <td class="table-success">
                                    {{round(($btc[$item-1]['rates'] - $btc[$item]['rates']) / $btc[$item-1]['rates'] * 100,2)}}
                                </td>
                            @else
                                @if (round(($btc[$item-1]['rates'] - $btc[$item]['rates']) / $btc[$item-1]['rates'] * 100,2) < 0)
                                    <td class="table-danger">
                                        {{round(($btc[$item-1]['rates'] - $btc[$item]['rates']) / $btc[$item-1]['rates'] * 100,2)}}
                                    </td> 
                                @else
                                    <td class="table-primary">
                                        {{round(($btc[$item-1]['rates'] - $btc[$item]['rates']) / $btc[$item-1]['rates'] * 100,2)}}
                                    </td> 
                                @endif
                            @endif
                        {{-- <td>{{ $item }} -  {{$valor['rates']}} </td> --}}
                        @endif
                        {{-- <td>{{$btc[$item]['rates']}} / {{$btc[($loop->iteration-1)]['rates']}}</td> --}}   
                    </tr>  
                @endforeach
            </tbody>
          </table>
    </body>
</html>
