<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cupón</title>
</head>
<body>
    <h2>Crear Cupón</h2>
    <form action="{{ route('cupon.generar') }}" method="POST">
        @csrf
        
        <label for="porcentaje_descuento">Porcentaje de Descuento (%):</label><br>
        <input type="number" id="porcentaje_descuento" name="porcentaje_descuento" required><br><br>
        
        <label for="fecha_caducidad">Fecha de Caducidad:</label><br>
        <input type="date" id="fecha_caducidad" name="fecha_caducidad" required><br><br>
        
        <input type="submit" value="Generar Cupón">
    </form>
</body>
</html>