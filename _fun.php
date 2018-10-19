<?php 
// CRIANDO TRY PARA VERIFICAÇÃO E DEBUG

// O TRY É PARA TRATAR A EXCEÇÃO E INDICAR O ERRO SEM OCORRER ERRO FATAL - É UM ERRO NO TEMPOK DE EXECUÇÃO

try {

function db_connect()
{
require_once '_init.php';
$cx = new PDO('mysql:'.SQL_HOST.'='.SQL_USER.';dbname=' .SQL_BENCH , SQL_USER, SQL_PASS);
return $cx;
}
}
catch(PDOexception $e) {
   
    // DEBUG QUE OCORRE DE FORMA ORGANIZADA CASO O TRY NÃO OCORRA
      echo 'ERRO: ' .$e->getCode() . ' Mensagge: ' .$e->getMessage();

}

// DATA DE VENCIMENTO FROM https://www.codigofonte.com.br/codigos/calculando-vencimentos-a-partir-de-uma-data-especifica-em-php
function CalcularVencimento($data,$dias)
{
	$novadata = explode("/",$data);
	$dia = $novadata[0];
	$mes = $novadata[1];
	$ano = $novadata[2];
	//PARA DESCOBRIR QUAL DATA SERÁ DAQUI A 5 DIAS
	//echo date('d/m/Y',mktime(0,0,0,$mes,$dia+5,$ano));
	//PARA DESCOBRIR QUAL SERÁ O DIA AMANHÃ
	//echo date('d/m/Y',mktime(0,0,0,$mes,$dia+1,$ano));
	//PARA MÊS QUE VEM
	//echo date('d/m/Y',mktime(0,0,0,$mes + 1,$dia,$ano));
	//PARA ANO QUE VEM
	//echo date('d/m/Y',mktime(0,0,0,$mes,$dia,$ano + 1));
	if ($dias==0)
	{return date('d/m/Y',mktime(0,0,0,$mes,$dia,$ano));}
	else
	{return date('d/m/Y',mktime(0,0,0,$mes,$dia+$dias,$ano));}
}
