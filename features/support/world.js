const { setWorldConstructor } = require("cucumber");
const httpClient = require('request-promise')

class WalletWorld {
    constructor() {
        this.endpoint = 'http://localhost/appweb/src/api/';
        this.appUrl = 'http://localhost/appweb/src/index';
        this.resource = '';
        this.httpOptions = {};
        this.walletResponse;
        this.transaction = {};
        this.income = 0;
        this.expense = 0;
        this.chromeDriver = undefined;
    }

    sendRequest() {
        httpClient(this.httpOptions)
            .then(function(response) {
                this.walletResponse = response;
            })
            .catch(function(error) {
                this.walletResponse = error;
            });
    }
}

setWorldConstructor(WalletWorld);