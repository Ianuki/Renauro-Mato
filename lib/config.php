<?php

$config = array(

    'TITULO' => 'Países',

    'MENU' => array (

        'Consultas' => array (
            'Países por Idioma' => 'PaisesPorIdioma.php',
            'Paises por Continente' => 'PaisesPorContinente.php',
            'Cidades por Pais' => 'CidadesPorPais.php',
            'Elisabeth' => 'Elizabeth.php',
            'Capital' => 'Capital.php',
            'Dados' => 'countryData.php',
            "PIB" => 'PIB.php',
            "Expectativa de Vida" => 'LifeExpectancy.php',
            'Área de Superficie' => 'SurfaceArea.php'
        )
    
    ),

    // Ajuste aqui as configurações do seu banco de dados.

	'HOST' => "localhost",
	'USUARIO' => "root",
	'SENHA' => "",
	'BANCO' => "world"

);
