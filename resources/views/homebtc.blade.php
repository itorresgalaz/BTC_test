<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <div class="container py-4 px-3 mx-auto">
      <h1>Hello, Bootstrap and Vite!</h1>
      <button class="btn btn-primary" >Primary button</button>
    </div>

    {{-- <script>
      function getBtc() { // Funcion GET de la llamada a la API
          const url = 'https://api.coinbase.com/v2/exchange-rates?currency=BTC'
            axios.get(url)
            .then(function(response){
                //console.log(response)
                //console.log(response.data.data)
                currency = response.data.data
                console.log(currency['currency']);
                console.warn(currency['rates']['USD']);
            })
            .catch(function (error) {
              console.log(error);
            });
        }
        setInterval(() => {getBtc()}, 10000);
    </script> --}}
  </body>
</html>
