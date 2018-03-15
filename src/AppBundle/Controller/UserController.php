<?php
 
namespace AppBundle\Controller;
 
class UsersController
{
/* le indicamos el método http, el nombre de la acción y action para decirle que esto es una acción del controlador */
    public function getUsersAction()
    {
        $data = array("Usuarios" => array(
        array(
            "nombre"   => "Víctor",
            "Apellido" => "Robles"
        ),
        array(
            "nombre"   => "Antonio",
            "Apellido" => "Martinez"
        )));
         
        return $data;
    }
 
}