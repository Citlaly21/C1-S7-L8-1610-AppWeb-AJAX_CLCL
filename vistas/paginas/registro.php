<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter name" id="name" name="registroNombre" >
            </div>
        </div>

        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="registroEmail">
            </div>
        </div>

        <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="registroPassword">
            </div>
        </div>
        <?php 
            /*
            $registro = new ControladorFormularios();
            $registro->ctrRegistro();
            */

            /*
            FORMA EN QUE SE INSTANCIA L CLASE DE UN METODO ESTATICO
            */

            $registro = ControladorFormularios::ctrRegistro();
            //echo $registro;

            if($registro == "ok"){
                echo '<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href)
                    }
                </script>';
                echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
            }
        ?>
        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
</div>