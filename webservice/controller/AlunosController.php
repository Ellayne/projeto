<?

class AlunosController {
    private $CPF;
    private $NOME;
    private $ENDERECO;
    private $ESTADO;
    private $MUNICIPIO;
    private $TELEFONE;
    private $EMAIL;
    private $SENHA;

    public function getCpf()
    {
        return $this->Cpf;
    }
    
    public function setCpf($Cpf)
    {
        return $this->Cpf = $Cpf;
    }

    public function getNome()
    {
        return $this->Nome;
    }
    
    public function setNome($Nome)
    {
        return $this->Nome = $Nome;
    }

    public function getEndereco()
    {
        return $this->Endereco;
    }
    
    public function setEndereco($Endereco)
    {
        return $this->Endereco = $Endereco;
    }

    public function getEstado()
    {
        return $this->Estado;
    }
    
    public function setEstado($Estado)
    {
        return $this->Estado = $Estado;
    }

    public function getMunicipio()
    {
        return $this->Municipio;
    }
    
    public function setMunicipio($Municipio)
    {
        return $this->Municipio = $Municipio;
    }

    public function getTelefone()
    {
        return $this->Telefone;
    }
    
    public function setTelefone($Telefone)
    {
        return $this->Telefone = $Telefone;
    }

    public function getEmail()
    {
        return $this->Email;
    }
    
    public function setEmail($Email)
    {
        return $this->Email = $Email;
    }

    public function getSenha()
    {
        return $this->Senha;
    }
    
    public function setSenha($Senha)
    {
        return $this->Senha = $Senha;
    }
}

?>