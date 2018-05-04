<?php
$inicio = [
    'titulo' => 'Inicio',
    'contenido' => 'Contenido 001',
    'imagen' => 'http://lorempixel.com/400/200/',
    ];
$shop = [
    'titulo' => 'Tienda',
    'contenido' => 'Contenido 002',
    'imagen' => 'http://lorempixel.com/400/200/',
    ];
$contacto = [
    'titulo' => 'Contacto',
    'contenido' => 'Contenido 003',
    'imagen' => 'http://lorempixel.com/400/200/',
    ];
$about = [
    'titulo' => 'Acerca de',
    'contenido' => 'Contenido 004',
    'imagen' => 'http://lorempixel.com/400/200/',
    ];

$secciones = [
    'p1' => $inicio,
    'p2' => $shop,
    'p3' => $contacto,
    'p4' => $about,
];  

if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
}

if (!isset($_GET['seccion'])) {
    $seccion = 'p1';
}

$titulo = $secciones[$seccion]['titulo'];
$contenido = $secciones[$seccion]['contenido'];
$imagen = $secciones[$seccion]['imagen'];

?>
