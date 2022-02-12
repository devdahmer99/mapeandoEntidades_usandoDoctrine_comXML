<?php
require_once __DIR__ . '/vendor/autoload.php';

use Filmes\Doctrine\Helper\EntityManagerCreator;

$entityManager = (new EntityManagerCreator())->criaEntityManager();
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);