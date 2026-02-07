<?php
include "conexion.php";
$productos = $conexion->query("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mercado Estudiantil | TecEats</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos/styles.css">
</head>
<body>

<!-- HEADER -->
<header class="header">
  <div class="logo">
    <div class="logo-icon"></div>
    <span>TecEats</span>
  </div>

  <div class="header-actions">
    <span class="welcome">✅ ¡Bienvenido!</span>
    <button class="btn">Mercado</button>
    <button class="btn-outline" onclick="location.href='index.html'">Salir</button>
  </div>
</header>

<!-- MERCADO -->
<main class="market">

  <!-- HEADER DEL MERCADO -->
  <section class="market-header">
    <h1>Mercado Estudiantil</h1>
    <p>Explora lo que tus compañeros están vendiendo hoy en el Tec.</p>

    <input
      type="text"
      class="search"
      placeholder="🔍 Buscar comida o vendedor..."
    >
  </section>

  <!-- FILTROS -->
  <div class="filters">
    <button class="filter active">🍽️ Todo</button>
    <button class="filter">🍳 Desayunos</button>
    <button class="filter">🌮 Comidas</button>
    <button class="filter">🍿 Botanas</button>
    <button class="filter">🥤 Bebidas</button>
  </div>

  <!-- PRODUCTOS -->
  <section class="products">

    <?php while($p = $productos->fetch_assoc()): ?>
      <div class="product-card">
        <img src="menus/<?php echo $p['imagen']; ?>" alt="">
        <span class="tag"><?php echo $p['categoria']; ?></span>
        <h3><?php echo $p['nombre']; ?></h3>
        <p class="price">$<?php echo $p['precio']; ?></p>
        <small><?php echo $p['descripcion']; ?></small>
        <div class="seller">TecEats · Cafetería</div>
      </div>
    <?php endwhile; ?>

  </section>

</main>

</body>
</html>
