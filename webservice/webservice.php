<?

//caminho absoluto do servidor contratado
$PATH = "/var/www/html/trackorder/hospedagem/tcc/";
include_once($PATH."model/AlunosModel.php");

//recebe os parametros via get do aplicativo
//o comando trim retira os espaços que possa ter antes 
$acao = trim(((($_GET['tipo']))));
$email = trim((strtolower(($_GET['email']))));
$senha = trim(((($_GET['password']))));

//posso ter varias aç~oes como cadastro, login, etc
if($acao == "login")
{
  $objA = new AlunosModel();
  $alunos = new AlunosController();
  //seto os parametros recebidos pelo aplicativo para enviar para o model
  $alunos->setEmail($email);
  $alunos->setSenha($senha);
  $retorno = $objA->loginApp($alunos);

  //monto o json que ser´a retornado pro app

  //$aux = json_encode($retorno);
  if(($retorno == "00-44"))
  {
    $result = '{"success":"false", "cpf":"", "nome":""}';
  }
  else
  {
    $result = '{"success":"true", "cpf":"'.$retorno->getCpf().'", "nome":"'.$retorno->getNome().'"}';
  }

  echo $result;      
}

?>