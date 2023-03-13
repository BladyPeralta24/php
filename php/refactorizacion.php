<?php
//Uso del operador ternario
function es_mayor_edad(){
    return $this->edad > 18; 
}

//Tocar variables de entrada
//Extraer el método
function datos_personales($persona) {
    return nombre_y_apellidos($persona) . direccion($persona);
}

function nombre_y_apellidos($persona){
    return "nombre: " . $persona->nombre . "apellidos: " . $persona->apellidos;
}

function direccion($persona)
{
    return "dirección: " . $persona->numero .'º '. $persona->direccion;
}





//consolidar fragmentos duplicados en condicionales
otorgar($permiso + (es_mayor_edad()? 1000 : -1000));



//separar variables temporales
$nombre_persona = $nombre . $apellidos;
echo $nombre_persona;

$direccion_completa = $numero . $direccion;

echo $direccion_completa;



//Simplificar legibilidad de multples if
return ($edad > 18  || tiene_permiso_padres() || se_encuentra_emancipado());

//Condicionales bajo distintas claves
function get_titulo($codigo_modulo)
{
    $modulos = array(
        'ETS' => 'Entornos de Desarrollo'
       ,'PRO' => 'Programación'
       ,'ADE' => 'Administración de Sistemas Gestores de BBDD'
    );


    return $modulos[$codigo_modulo];
}



//Descomponer un condicional
if (listo_para_trabajar($edad,$permiso_conducir,$titulacion))
{
    echo "Listo para el trabajo";
}
else
{
    echo "No está listo para el trabajo";
}


function listo_para_trabajar($edad,$permiso_conducir,$titulacion)
{
    return $edad >= 18 and $permiso_conducir == True and $titulacion == 'FINALIZADA';
}
