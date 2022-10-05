

function getBtc() { // Funcion GET de la llamada a la API
    const url = 'https://api.coinbase.com/v2/exchange-rates?currency=BTC'
        axios.get(url)        
        .then(function(response){
            let datos = response.data.data
            //console.log(response)
            //console.log(response.data.data)
            let currency = document.getElementById("currency");
            //console.log(currency.innerHTML);
            currency.innerHTML = "<h1>" + datos['currency']+ "</h1>"

            let rate = document.getElementById("rates")
            //console.log(rate.innerHTML);
            let formatoDolar = Intl.NumberFormat('en-US',{ //Metodo utilizado para dar el formato del USD
                style: "currency",
                currency: "USD",
                useGrouping: true,
            })
            rate.innerHTML = "<h1>" + formatoDolar.format(datos['rates']['USD'],)+ "</h1>"
            saveBtc(datos['currency'],datos['rates']['USD']);
            //console.log(datos['currency']);
            //console.warn(datos['rates']['USD'] );
        })
        .catch(function (error) {
            console.log(error);
        });
}

function saveBtc(currency, rates) {
    var laravelToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    axios.post('/btc',{
        currency: currency,
        rates: rates,
    })
    .then(function (response) {
        console.log(response)
    })
    .catch(function (error) {
        console.log(error);
    });
}

getBtc();
setInterval(() => {getBtc()}, 10000);