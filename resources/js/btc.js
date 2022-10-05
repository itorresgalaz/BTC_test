function getBtc() { // Funcion GET de la llamada a la API
    const url = 'https://api.coinbase.com/v2/exchange-rates?currency=BTC'
      axios.get(url)
      .then(function(response){
          //console.log(response)
          //console.log(response.data.data)
          let currency = response.data.data
          console.log(currency['currency']);
          console.warn(currency['rates']['USD']);
      })
      .catch(function (error) {
        console.log(error);
      });
  }
  getBtc();
  setInterval(() => {getBtc()}, 3000);