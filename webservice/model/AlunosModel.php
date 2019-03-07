<?
$PATH = "/var/www/html/trackorder/hospedagem/tcc/";
require_once $PATH.'controller/AlunosController.php';
require_once $PATH.'database/connect.php';

class AlunosModel extends Connect{

    //m´etodo que verifica no banco de dados se login e senha conferem
    public function loginApp(AlunosController $alunos)
    {
        //metodo retorna a quantidade de registros para a combinaç~ao login e senha e tras o nome do aluno
        $st_query = "SELECT nome, cpf, count(cpf) as total FROM alunos WHERE senha = '".$alunos->getSenha()."' AND email = '".$alunos->getEmail()."'";
        
        try
        {
            $o_data = $this->o_db->query($st_query);
            $o_ret = $o_data->fetchObject();

            //se o total de registros retornados for maior que um significa que o email/ senha ´e valido
            if($o_ret->total > 0)
            {
                //retorno os dados do aluno
                $alunos  = new AlunosController();
                $alunos->setNome($o_ret->nome);
                $alunos->setCpf($o_ret->cpf);
                return $alunos;
            }
            else
            {
                //caso contrario retorno um codigo de erro que ira dizer pro app que estava errado
                return "00-44";
            }
        }
        catch (PDOException $e)
        {
            throw $e;
        }
    }
}
?>