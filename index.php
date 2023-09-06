<?php
require_once "vendor/autoload.php";
use Desafio\Academico\Domain\Aluno;

$aluno = new Aluno();
$aluno->setNome('Gabriel');
$aluno->setIdade(20);
$aluno->setCpf('80021202990');