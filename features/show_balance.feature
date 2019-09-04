Feature: Mostrar saldo de billetera
 Como Usuario Final (humano)
 Quiero ver el dato de mi billetra

 Scenario: Se tiene datos validos y se muestran correctamente
  Given Los datos de la billetera INGESO 100 EGRESO 50
   When Navego a la pagina principal 
     And Llenar el campo de Ingreso
     And Llenar el campo de Egreso
     And Hacer click en el boton Ver Saldo
     Then Se debe mostrar la cadena "Su saldo es: 50"