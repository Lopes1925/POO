<pre>
<?php

function ola($nome){
    echo "Olá $nome";
}

//ola("Bruno");

$idade = 20;

$ola = function($nome) use ($idade){
    echo "Que legal $nome";
    $idade = 35;
};

$ola("Bruno");
echo $idade;

//var_dump($ola);

//var_dump($ola("Bruno"));

function teste($param){
    $param('Bruno');
}

teste($ola);

/**
 * Função Anônima
 */
teste(function(){
    
});