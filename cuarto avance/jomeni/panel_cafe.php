<?php
include "conexion.php";
$productos = $conexion->query("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel de Cafetería | TecEats</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos/panel_cafe.css">
</head>
<body>

<header class="header">
  <div class="logo">
    <span>TecEats</span>
  </div>

  <div class="header-actions">
    <button class="btn-outline" onclick="location.href='index.html'">Salir</button>
  </div>
</header>

<main class="vendor-panel">

  <section class="panel-header">
    <div>
      <h1>Panel de Cafetería</h1>
      <p>Gestiona tu menú</p>
    </div>
  </section>

  <section class="menu-section">
    <div class="menu-header">
      <h2>Tu Menú</h2>
      <button class="btn-primary" onclick="location.href='formulario_cafe.html'">
        + Agregar Producto
      </button>
    </div>

    <div class="products">

      <?php while($row = $productos->fetch_assoc()) { ?>

      <div class="product-card">
        <img src="menus/<?php echo $row['imagen']; ?>" class="menu">

        <span class="price">$<?php echo $row['precio']; ?></span>

        <div class="product-body">
          <h3><?php echo $row['nombre']; ?></h3>
          <span class="tag"><?php echo $row['categoria']; ?></span>
          <p><?php echo $row['descripcion']; ?></p>

          <div class="product-footer">
            <span class="available">
              <?php echo $row['disponible'] ? "● Disponible" : "● No disponible"; ?>
            </span>
            <a href="eliminar_producto.php?id=<?php echo $row['id']; ?>" class="icon-btn">🗑️</a>
          </div>
        </div>
      </div>

      <?php } ?>

    </div>
  </section>

</main>
</body>
</html>

