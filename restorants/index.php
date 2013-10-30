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
                'restorants' => array(
                    array(
                        "name" => 'La Terraza',
                        "desc" => 'El restaurant La Terraza ofrece un equilibrio de aromas, colores y sabores en sus diversas propuestas gastronomicas,  a la carta, formula Buffet o el muy creativo menu energetico.',
                        "reservable" => "true",
                    ),
                    array(
                        "name" => 'La Bourgogne',
                        "desc" => 'Situado frente al mar, en el tercer nivel, el restaurant de lujo del hotel es unico y distinguido. Un lugar para disfrutar al ritmo de las melodias del piano.',
                        "reservable" => "true",
                    ),
                    array(
                        "name" => 'La Promenade',
                        "desc" => 'Una carta con opciones de modernos y sabrosos sandwiches para un almuerzo rapido.',
                        "reservable" => "false",
                    )
                ),
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