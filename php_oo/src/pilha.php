<?php


function funcao1 ()
{
    echo 'iniciando função1'.PHP_EOL;
    try{
    funcao2();
    }catch(DivisionByZeroError| RuntimeException  $problema)
    {
       echo $problema -> getMessage().PHP_EOL;
       //echo 'numero não divisivel por zero'.PHP_EOL;
    }
    echo 'finalizando funcao1'.PHP_EOL;
    
}

function funcao2()
{
    echo 'iniciando funcao2'.PHP_EOL;
    
    $divisao = intdiv(5,0);
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[4]= 'valor';
    

    for($i = 1; $i <= 5;$i ++)
    {
        echo $i.PHP_EOL;
    }
    echo 'finalizando funcao2'.PHP_EOL;
}





echo 'iniciando o programa  principal'.PHP_EOL;
funcao1();
echo 'finalizando o programa principal'.PHP_EOL;