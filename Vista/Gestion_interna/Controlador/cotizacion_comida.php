<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Calculadora</title>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../Css/resultado.css">
</head>
<body>

  <div class="input-contenedor">
    <center>
      <h1 style="font-family: Arial; color: #EAECEE;">El costo total es de:</h1>

      <form id="calculatorForm">
        <!-- Entradas numéricas para cada protocolo -->
        <div class="contenedor">
          <!-- Puedes agregar input dinámicos o con nombres fijos -->
          <input type="number" name="num1" placeholder="Cantidad del producto 1" required><br>
          <input type="number" name="num2" placeholder="Cantidad del producto 2" required><br>
          <input type="number" name="num3" placeholder="Cantidad del producto 3" required><br>
          <!-- Agrega los 13 inputs como en el PHP -->
          <input type="number" name="num4" placeholder="Cantidad del producto 4" required><br>
          <input type="number" name="num5" placeholder="Cantidad del producto 5" required><br>
          <input type="number" name="num6" placeholder="Cantidad del producto 6" required><br>
          <input type="number" name="num7" placeholder="Cantidad del producto 7" required><br>
          <input type="number" name="num8" placeholder="Cantidad del producto 8" required><br>
          <input type="number" name="num9" placeholder="Cantidad del producto 9" required><br>
          <input type="number" name="num10" placeholder="Cantidad del producto 10" required><br>
          <input type="number" name="num11" placeholder="Cantidad del producto 11" required><br>
          <input type="number" name="num12" placeholder="Cantidad del producto 12" required><br>
          <input type="number" name="num13" placeholder="Cantidad del producto 13" required><br>
        </div>

        <button type="submit">Calcular Total</button>
      </form>

      <h3 id="resultado" style="font-size: 2em; color: #000;"></h3>

      <br><br><br>
      <span class="clientes">
        <a href="../Modelo/Calculadora cientifica.html">
          <font size="6" color="#EEF0F0">Volver</font>
        </a>
      </span>
    </center>
  </div>

  <script>
    const precios = [
      46800, 39000, 31200, 35100, 97500, 85800, 70200,
      66300, 27300, 23400, 19500, 23400, 46800
    ];

    document.getElementById('calculatorForm').addEventListener('submit', function(e) {
      e.preventDefault();

      let total = 0;
      for (let i = 0; i < precios.length; i++) {
        const cantidad = parseFloat(this[`num${i + 1}`].value) || 0;
        total += cantidad * precios[i];
      }

      document.getElementById('resultado').textContent = "$" + total.toLocaleString('es-CO', { minimumFractionDigits: 2 });
    });
  </script>
</body>
</html>
