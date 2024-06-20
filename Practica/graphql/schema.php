<?php

$alumnos = new alumnos();

$root = [
    'Query' => [
        'idsAlumnos' => function () use ($alumnos) {
            return $alumnos->obtenerIdsAlumnos();
        },
        'infoAlumnos' => function () use ($alumnos) {
            return $alumnos->obtenerInfo();
        }
    ]


];