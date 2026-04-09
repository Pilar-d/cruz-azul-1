<?php session_start(); include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Admin</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="admin-page">
    <?php if (!isset($_SESSION['admin_logged'])): ?>
        <form action="login.php" method="POST">
            <input type="text" name="user" placeholder="Usuario">
            <input type="password" name="pass" placeholder="Contraseña">
            <button type="submit">Entrar</button>
        </form>
    <?php else: ?>
        <form action="insertar.php" method="POST">
            <input type="text" name="nombre" placeholder="Producto" required>
            <input type="number" name="precio" placeholder="Precio Unitario" required>
            <input type="number" name="stock" placeholder="Cantidad" required>
            <button type="submit">Registrar Producto</button>
        </form>
        <table>
            <?php
            $res = mysqli_query($conn, "SELECT * FROM productos");
            while($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
                        <td>{$row['nombre']}</td>
                        <td><a href='editar.php?id={$row['id']}'>Editar</a></td>
                        <td><a href='eliminar.php?id={$row['id']}'>Eliminar</a></td>
                      </tr>";
            }
            ?>
        </table>
    <?php endif; ?>
</body>
</html>