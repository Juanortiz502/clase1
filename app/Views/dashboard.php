
<h1>Esto es un Dashboard</h1>

<?php
echo $_SESSION['name'] . ' ' . $_SESSION['lastName'];
?>
<br>
<a href="/index/closeSessions" class="btn btn-danger">Cerrar Sesion</a>