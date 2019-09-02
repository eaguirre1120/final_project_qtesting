<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Billetera Personal | CARP@EA</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Billetera Personal</h1>
        </div>
        <div class="col-md-offset-3 col-md-6">
            <form>
                <div class="form-group">
                    <label for="income">Ingreso</label>
                    <input 
                        id="income" 
                        name="income" 
                        type="number" 
                        class="form-control" 
                        placeholder="Ingreso"
                        value="100">
                </div>
                <div class="form-group">
                    <label for="expense">Egreso</label>
                    <input 
                        id="expense" 
                        name="expense" 
                        type="number" 
                        class="form-control" 
                        placeholder="Egreso"
                        value="0">
                </div>
                <p>
                    <button 
                        id="btnBalance" 
                        name="btnBalance" 
                        type="button" 
                        class="btn btn-primary"
                        onclick="calculateBalance()">
                        Ver Saldo
                    </button>
                </p>
            </form>
        </div>
        <div class="col-md-offset-3 col-md-6">
            <div class="jumbotron">
                <span id="balance"></span>
            </div>
        </div>
    </div>
<script>
function calculateBalance()
{
    let income = parseFloat(document.getElementById('income').value),
        expense = parseFloat(document.getElementById('expense').value)
        balance = income - Math.abs(expense);
        document.getElementById('balance').innerText = "Su saldo es: " + balance;
}
</script>
</div>

</body>
</html>