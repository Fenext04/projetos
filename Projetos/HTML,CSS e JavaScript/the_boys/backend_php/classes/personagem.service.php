<?php

    class PersonagemService{

        private $conexao;
        private $personagem;

        public function __construct(Conexao $conexao, Personagem $personagem)
        {
            $this->conexao = $conexao->conectar();
            $this->personagem = $personagem;
        }
        public function inserir(){
            $query = '
        insert into personagens_tabela(nome,idade,interprete,alinhamento,biografia) value(:nome,:idade,:interprete,:alinhamento,:biografia)
    ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':nome', $this->personagem->__get('nome'));
            $stmt->bindValue(':idade', $this->personagem->__get('idade'));
            $stmt->bindValue(':interprete', $this->personagem->__get('interprete'));
            $stmt->bindValue(':alinhamento', $this->personagem->__get('alinhamento'));
            $stmt->bindValue(':biografia', $this->personagem->__get('biografia'));
            $stmt->execute();
            
            
    }

    public function recuperar(){
        $query2 = "select * from personagens_tabela";
        $stmt2 =$this->conexao->query($query2);
         
        return $stmt2->fetchAll(PDO::FETCH_ASSOC);
    }
          }    
?>
