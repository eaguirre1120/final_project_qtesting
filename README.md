# Proyecto Final del Módulo 3 (QTesting)

# Instalación aplicacion web (PHP)
 - Instalar aplicación xampp en windows.
 - Copiar carpeta appweb a htdocs de xampp
# Cómo correr los test unitarios
 - Dirigirse desde la consola/termimal hasta la carpeta ~/htdocs/appweb/test/
 - Ejecutar el siguiente comando:
   - Alertnativa 1: Proporcionando el path completo del ejecutable de php:
      - C:\xampp\php\php .\phpunit-7.0.phar .\WalletTest.php
      - C:\xampp\php\php .\phpunit-7.0.phar .\WalletTest.php --filter 'WalletTest::testWalletExpenseNegative()' //(Testeo individual)
   - Alternativa 2: Incluyendo en el PATH el ejecuble de php: 
     - php .\phpunit-7.0.phar .\WalletTest
     - php .\phpunit-7.0.phar .\WalletTest.php --filter 'WalletTest::testWalletExpenseNegative()' //(Testeo individual)
  

# Consideraciones
 - URL dela API: http://localhost/appweb/src/api/wallet
 - URL de la APP(con el formulario): http://localhost/appweb/src/index
