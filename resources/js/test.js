var result = (getBtc) =>{
    const url = 'https://api.coinbase.com/v2/exchange-rates?currency=BTC'
    setTimeout(() => {
      axios.get(url)
      .then(function(response){
          console.log(response)
          console.log(response.data.data)
          currency = response.data.data


        console.log(currency['currency']);
        console.warn(currency['rates']['USD']);
      })
      .catch(function (error) {
      // handle error
      console.log(error);
      });
    }, 500);
}

result