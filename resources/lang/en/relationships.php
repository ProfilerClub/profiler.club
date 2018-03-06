<?php

$male = array(
    // Contact
    'male.friend'   => 'Friend',
    'coworker'      => 'Coworker',
    'father'        => 'Father',
    'son'           => 'Son',
    'grandfather'   => 'Grandfather',
    'grandchild'    => 'Grandson',
    'uncle'         => 'Uncle',
    'nephew'        => 'Nephew',
    'cousin'        => 'Cousin',
    'brother'       => 'Brother',
    'husband'       => 'Husband',

    // Club
    'administrator' => 'Administrator',
    'moderator'     => 'Moderator',
    'member'        => 'Member',
    'guest'         => 'Guest',
);

$female = array(
    // Contact
    'female.friend' => 'Friend',
    'coworker'      => 'Coworker',
    'father'        => 'Mother',
    'son'           => 'Daughter',
    'grandfather'   => 'Grandmother',
    'grandchild'    => 'Granddaughter',
    'uncle'         => 'Aunt',
    'nephew'        => 'Niece',
    'cousin'        => 'Cousin',
    'brother'       => 'Sister',
    'husband'       => 'Wife',

    // Club
    'administrator' => 'Administrator',
    'moderator'     => 'Moderator',
    'member'        => 'Member',
    'guest'         => 'Guest',
);


$relationships = array(
    'grandchild' => 'Grandchild'
);

$relationships += compact('male', 'female');


return $relationships + $male; // Establece male como por defecto para global.
