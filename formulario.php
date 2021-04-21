<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <title>Formulario de Contactenos</title>
</head>
<body>
    <main class="ppal"><!--Representa en contenido ppal del body-->
        <div class="title">
            <h2>Contactenos</h2>
        </div>
        <?php
            if(isset($_GET['status'])){
                echo "<div>Gracias por contactarnos, pronto un asesor se pondrá en contacto con usted</div>";
            }
        ?>
        <div>
            <form action="sendemail.php" method="post" id="formemail">
                <label for="name">Nombre y Apellidos*</label>
                <input type="text" name="name" id="name" required>
                <label for="email">Correo Electronico*</label>
                <input type="email" name="email" id="email" placeholder="@" required>
                <label for="phone">Telefono Celular*</label required>
                <input type="text" name="phone" id="phone">
                <label for="bithday">Fecha de Nacimiento</label>
                <input type="date" name="bithday" id="bithday">
                <label for="obs">Observaciones*</label>
                <textarea name="obs" id="obs" cols="30" rows="10" required></textarea>
                <input type="reset" class="submit" value="Reset">
                <input type="button" class="submit" onclick="validar()" value="Enviar">
            </form>
        </div>
    </main>

    <script>
    //len var const
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const obs = document.getElementById('obs');

    function validar(){
        if(name.value == ""){
            alert('Nombre Vacio');
            return false;
        }
        if(email.value == ""){
            alert('Correo Vacio');
            return false;
        }
        if(phone.value == ""){
            alert('Telefono Vacio');
            return false;
        }
        if(obs.value == ""){
            alert('Observaciones Vacio');
            return false;
        }
        if(confirm('Seguro de Enviar la información')){
            document.getElementById('formemail').submit();
        }
        

    }
    </script>
</body>
</html>