<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="tp4css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Operaciones Basicas.</h1>
    <form action="tp4.1.php" method="post">
        <div class="ingreso">
            <label for="">ingrese el primer numero</label>
            <input type="number" name="num" step="any" required>
            <label for="">Ingrese el segundo numero</label>
            <input type="number" name="num2" step="any" required>
        </div>
        <div class=cuenta>
            <div>
                <input id="suma" type="radio" name="radio" value="1" required>
                <label for="suma">Sumar</label>
            </div>
            <div>
                <input id="resta" type="radio" name="radio" value="2" required>
                <label for="resta">Resta</label>
            </div>
            <div>
                <input id="mul" type="radio" name="radio" value="3" required>
                <label for="mul">Multiplicacion</label>
            </div>
            <div>
                <input id="div" type="radio" name="radio" value="4" required>
                <label for="div">Division</label>
            </div>
        </div>

        <input id="boton" type="submit" name="boto" value="Calcular">
        </div>

    </form>
</body>

</html>