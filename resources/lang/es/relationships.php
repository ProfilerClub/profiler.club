<?php

$male = [
    // Contact
    'friend'        => 'Amigo',
    'coworker'      => 'Colega',
    'father'        => 'Padre',
    'son'           => 'Hijo',
    'grandfather'   => 'Abuelo',
    'grandchild'    => 'Nieto',
    'uncle'         => 'Tío',
    'nephew'        => 'Sobrino',
    'cousin'        => 'Primo',
    'brother'       => 'Hermano',
    'husband'       => 'Esposo',

    // Club
    'administrator' => 'Administrador',
    'moderator'     => 'Moderador',
    'member'        => 'Miembro',
    'guest'         => 'Invitado',
];

$female = [
    // Contact
    'friend'        => 'Amiga',
    'coworker'      => 'Colega',
    'father'        => 'Madre',
    'son'           => 'Hija',
    'grandfather'   => 'Abuela',
    'grandchild'    => 'Nieta',
    'uncle'         => 'Tía',
    'nephew'        => 'Sobrina',
    'cousin'        => 'Prima',
    'brother'       => 'Hermana',
    'husband'       => 'Esposa',

    // Club
    'administrator' => 'Administradora',
    'moderator'     => 'Moderadora',
    'member'        => 'Miembro',
    'guest'         => 'Invitada',
];


$relationships = [
];

$relationships += compact('male', 'female');


return $relationships + $male; // Establece male como por defecto para global.
