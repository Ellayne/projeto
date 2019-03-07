<?php
 /**
 * Classe Abstrata responsável por centralizar a conexão
 * com o banco de dados
*/
abstract class Connect
{
    /**
    * Variável responsável por guardar dados da conexão do banco
    * @var resource
    */
    protected $o_db;
      
    function __construct()
    {
        $st_host = 'localhost';
        $st_banco = 'engenharia';
        $st_usuario = 'engenharia';
        $st_senha = '5gGD42gXleJYASgH';      
          
        $st_dsn = "mysql:host=$st_host;dbname=$st_banco";
        $this->o_db = new PDO
        (
            $st_dsn,
            $st_usuario,
            $st_senha
        );
        //Fim de conexão com MySQL
    }
}
?>