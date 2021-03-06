<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mariano
 * Date: 23/10/13
 * Time: 23:07
 * To change this template use File | Settings | File Templates.
 */
$method = $_SERVER['REQUEST_METHOD'];

// tendremos que tratar esta variable para obtener el recurso adecuado de nuestro modelo.

$resource = $_SERVER['REQUEST_URI'];

// Dependiendo del método de la petición ejecutaremos la acción correspondiente.

switch ($method) {

    case 'GET':
        $registro = array(
            "valid" => array(
                'value' => "true",
            ),

            "data" => array(
                'name' => $_GET['id'],
                'in' => "2013-09-26",
                'out' => "2013-09-29",
                'nights' => "3",
                'client_id' => "1",
                'reservation_number' => "2345",

            ),
        );
        break;

    case 'POST':
        //$arguments = $_POST;
        // código para método POST
        break;

    case 'PUT':
        //parse_str(file_get_contents('php://input'), $arguments);
        // código para método PUT
        break;

    case 'DELETE':
        // código para método DELETE
        break;
}
echo json_encode($registro); // $response será un array con los datos de nuestra respuesta.
?>