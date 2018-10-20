<?php 

// CONEXÃO
function db_connect() {

	// TRY DEBUG
	try {
		$cx = new PDO('mysql:'.SQL_HOST.'='.SQL_USER.';dbname=' .SQL_BENCH , SQL_USER, SQL_PASS);
		return $cx;
		}

	// CASO DE ERRO
	catch(PDOexception $e) {
   
    	// DEBUG QUE OCORRE DE FORMA ORGANIZADA CASO O TRY NÃO OCORRA
    	echo 'ERRO: ' .$e->getCode() . ' Mensagge: ' .$e->getMessage();
}
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

//FUNÇÃO DE VALIDAÇÃO -- NÃO USADA
function ValidEmpty($string) {
	if (empty($string)) {
		$out = "Campo vazio";
	} else $out = $string;
	return $out;
}

// FUNÇÃO DE VALIDAÇÃO -- NÃO USADA
function ShowValid($string) {
	if ($string = "Campo vazio") {
		$out = "Campo vazio";
	} else $out = "*";
	return $out;
}

// FUNÇÃO QUE VERIFICA LOGIN PARA DAR PERMISSÃO AO CONTEUDO RESTRITO
function isLoggedIn()
{
    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true)
    {
        return false;
    }
    return true;
}

// EXPORTAR PARA EXCEL
function toxls($file) {
	
	$filename = $file;
	header ("Content-type: application/x-msexcel");
	header ("Content-Disposition: attachment; filename=\"{$filename}\"" );
	header ("Content-Description: PHP Generated Data" );
}
