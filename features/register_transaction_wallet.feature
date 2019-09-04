Feature: Registra transancción de ingreso a la billetera
   Como un cliente de API WEB (no humano)
   Requiero registrar una transacciìn de ingreso a mi billetera

  Scenario: Registro de billetera
   Given EL dato de entrada INGRESO 150
    When Preparo el JSON request con los datos
    Then Hago un request POST hacia el recurso API wallet con los datos
    Then Recibo una respuesta a la solicitud con http status 200