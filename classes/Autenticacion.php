<?php
class Autenticacion {
    /* verifica las credenciales del usuario y de ser correcto guarda los datos en la seccion */

    public function log_in(string $usuario, string $password){

        /* instanciar la clase usuario */
        $datosUsuario = (new Usuario())->usuario_x_username($usuario);

        //comprobaciones si el usuario existe , comprobar si la contraseña es correcta

        if ($datosUsuario) {

            if(password_verify($password, $datosUsuario->getPassword())){
                $datosLogin['username'] = $datosUsuario->getNombre_usuario();
                $datosLogin['id'] = $datosUsuario->getId();
                $_SESSION['loggedIn'] = $datosLogin;
                return TRUE;
            }else{
                return FALSE;
            }
            
        }else {
            return False;
        }
    }



// Metodo Logout

   public function log_out() {
    if(isset($_SESSION['loggedIn'])){
        unset ($_SESSION['loggedIn']);
    }
}


//verificar si el usuario esta logeado

public function verify() {
    if(isset($_SESSION['loggedIn'])){
        return TRUE;
}else {
    header('location: index.php?sec=login');
}
}

}
?>