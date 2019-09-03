const { Given, When, Then } = require('cucumber')
const { expect } = require('chai')
const httpClient = require('request-promise')

Given('El recurso de API RESOURCE {string}', function(resourceAPI) {
    this.resource = 'wallet';
    console.log(this.endpoint + this.resource);
});

When('Preparo el JSON de request', function() {
    this.httpOptions = {
        method: 'GET',
        uri: 'http://localhost:8080/appweb/src/api/wallet',
        //json: true,
        //body: newUser,
        resolveWithFullResponse: true
    };
});

Then('Hago un request GET hacia el recurso API wallet', async function() {
    //await this.sendRequest();
    await httpClient(this.httpOptions)
        .then(function(response) {
            this.walletResponse = response;
        })
        .catch(function(error) {
            this.walletResponse = error;
        });
});

Then('Recibo una respuesta con http status {int}', function(httpStatus) {
    expect(this.walletResponse.statusCode).to.eql(httpStatus);
});