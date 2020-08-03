<?php 
#Dados para conexão com banco
$servidor = 'localhost'; #Pegar ip do servidor http
$porta = '5432';
$usuario = 'root';
$senha = '@2Nashua';
$banco = 'angelab';

#Executando conexão com o PostgreSQL
$link = pg_connect("host=$servidor port=$porta dbname=$banco user=$usuario password=$senha");

#Verificação de chamada a partir de formulário
if($action  == "adicionar")
{
    #Criando a expressão SQL de inserção
    $sql = "INSERT INTO ANGELAB (ID, NOME, CPF, DATA_NASCIMENTO, 
    EMAIL, TELEFONE, ENDEREÇO, CEP, BAIRRO, CIDADE, UF) VALUES(";
    $sql .= "'$clientname',";
    $sql .= "'$cpfnumber',";
    $sql .= "'$birthday',";
    $sql .= "'$clientemail',";
    $sql .= "'$phonenumber',";
    $sql .= "'$clientaddress',";
    $sql .= "'$Cep',";
    $sql .= "'$streetname',";
    $sql .= "'$city',";
    $sql .= "'$clientuf',";
    $sql .= ")";
}

#Executando expressão SQL no server e armazenando resultados

$result = pg_query($sql);

#Verificando sucesso da operação
if (!$result)
{die ('Erro:'.pg_last_error($link)); }

#Se realizada com sucesso
else
     { echo 'A operação foi realizada com sucesso.';}
