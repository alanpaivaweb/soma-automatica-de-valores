<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soma automática de valores com JavaScript</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>Soma automática de valores com JavaScript</h1>
    <!--    <p>Resize this responsive page to see the effect!</p>-->
</div>

<div class="container p-3">
    <div class="row">
        <div class="col-sm-4">
            <h3>Valor 1</h3>
            <input style="font-size: 1.4em;" type="text" id="ValorUM"
                   placeholder="" required/>
        </div>
        <div class="col-sm-4">
            <h3>Valor 2</h3>
            <input style="font-size: 1.4em;" type="text" id="ValorDOIS"
                   placeholder="" required onblur="calcular()"/>
        </div>
        <div class="col-sm-4">
            <h3>Valor Total</h3>
            <input style="font-size: 1.4em;" type="text" readonly id="ValorTOTAL"/>
        </div>
    </div>
</div>

</body>
</html>

<!--                CALCULA O VALOR TOTAL DO SERVIÇO E EXIBE NO CAMPO 'VALOR TOTAL' -->

<script type="text/javascript">
    function calcular() {
        var valor1 = (document.getElementById('ValorUM').value.replace(/\./g, "").replace(",", "."));
        var valor2 = (document.getElementById('ValorDOIS').value.replace(/\./g, "").replace(",", "."));
        var total = 0;
        total = parseFloat(valor1) + parseFloat(valor2);
        var result = total.toString().replace(".", ",");
        document.getElementById('ValorTOTAL').value = result;
    }
</script>