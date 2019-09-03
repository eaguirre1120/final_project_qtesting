const { setWorldConstructor } = require("cucumber");
const httpClient = require('request-promise')

class WalletWorld {
    constructor() {
        this.endpoint = 'http://localhost:8080/appweb/src/api/';
        this.resource = '';
        this.httpOptions = {};
        this.walletResponse = undefined;
    }

    /*sendRequest() {
        httpClient(this.httpOptions)
            .then(function(response) {
                this.walletResponse = response;
            })
            .catch(function(error) {
                this.walletResponse = error;
            });
    }*/
}

setWorldConstructor(WalletWorld);