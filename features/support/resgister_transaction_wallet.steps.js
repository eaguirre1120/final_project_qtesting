const { Given, When, Then } = require('cucumber')
const { expect } = require('chai')
const httpClient = require('request-promise')

Given('EL dato de entrada INGRESO {int}', function(income) {
    this.transaction = {
        income: income
    };
    this.resource = 'wallet';
});

When('Preparo el JSON request con los datos', function() {
    this.httpOptions = {
        method: 'POST',
        uri: this.endpoint + this.resource,
        json: true,
        body: this.transaction,
        resolveWithFullResponse: true
    };
});

Then('Hago un request POST hacia el recurso API wallet con los datos', async function() {
    //await this.sendRequest();
    await httpClient(this.httpOptions)
        .then(function(response) {
            this.walletResponse = response;
        })
        .catch(function(error) {
            this.walletResponse = error;
        });
});

Then('Recibo una respuesta a la solicitud con http status {int}', function(httpStatus) {
    expect(this.walletResponse.statusCode).to.eql(httpStatus);
});