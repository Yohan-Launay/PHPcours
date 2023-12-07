<?php

// config/bundles.php
// in older Symfony apps, enable the bundle in app/AppKernel.php
return [
    // ...
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
];