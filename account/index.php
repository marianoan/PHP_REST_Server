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
                'rooms' => array(
                    array(
                        "fecha" => '12/02/2013',
                        "item" => 'Habitación: $450',
                    )
                ),
                'aabb' => array(
                    array(
                        "fecha" => '12/02/2013',
                        "item" => 'Coca cola: $15',
                    ),
                    array(
                        "fecha" => '12/02/2013',
                        "item" => 'Parrillada: $185',
                    ),
                    array(
                        "fecha" => '12/02/2013',
                        "item" => 'Coca Cola: $15',
                    ),
                    array(
                        "fecha" => '12/02/2013',
                        "item" => 'Brownie porción: $45',
                    ),
                    array(
                        "fecha" => '12/02/2013',
                        "item" => 'Brownie porción: $45',
                    ),
                    array(
                        "fecha" => '12/02/2013',
                        "item" => 'Café: $15',
                    ),
                    array(
                        "fecha" => '12/02/2013',
                        "item" => 'Café: $15',
                    )
                ),
                'spa' => array(
                    array(
                        "fecha" => '14/02/2013',
                        "item" => 'Masaje: $95',
                    )
                ),
                'misc' => array(
                    array(
                        "fecha" => '13/02/2013',
                        "item" => 'Estacionamiento: $35',
                    ),
                    array(
                        "fecha" => '13/02/2013',
                        "item" => 'Guarderia: $35',
                    )
                ),

            ),
            "total" => array(
                'value' => "950",
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