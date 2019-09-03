Feature: Solicita del estado de la billetera
   Como un cliente de API WEB (no humano)
   Requiero visualizar el estado de la billetera

  Scenario: Solicitud de billetera
   Given El recurso de API RESOURCE "wallet"
    When Preparo el JSON de request
    Then Hago un request GET hacia el recurso API wallet
    Then Recibo una respuesta con http status 200