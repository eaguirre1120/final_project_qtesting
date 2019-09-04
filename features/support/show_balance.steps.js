const { Given, When, Then } = require('cucumber')
const { expect } = require('chai')
const { Builder, By, Key, until } = require('selenium-webdriver');

Given('Los datos de la billetera INGESO {int} EGRESO {int}', function(income, expense) {
    this.income = income;
    this.expense = expense;
});

When('Navego a la pagina principal', async function() {
    this.chromeDriver = await new Builder().forBrowser('chrome').build();
    await chromeDriver.get(this.appUrl);
});

When('Llenar el campo de Ingreso', async function() {
    await chromeDriver.findElement(By.name('income')).sendKeys(this.income);
});

When('Llenar el campo de Egreso', async function() {
    await chromeDriver.findElement(By.name('expense')).sendKeys(this.expense);
});

When('Hacer click en el boton Ver Saldo', async function() {
    await chromeDriver.findElement(By.name('btnBalance')).click();
});

Then('Se debe mostrar la cadena {string}', async function(expected) {
    await chromeDriver.findElement(By.name('balance'))
        .getText().then(function(text) {
            showText = text;
        });

    expect(showText).to.eql(expected);
    //await chromeDriver.quit();
});