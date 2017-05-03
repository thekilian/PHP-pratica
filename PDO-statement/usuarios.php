<?php
class Usuarios {
  private $db;
  
  public function __construct() {
    try {
      $this->db = new PDO("mysql:dbname=blog;host=localhost", "root", "");
    } catch(PDOException $e) {
      echo "FALHA: ".$e->getMessage();
    }
  }
  
  public function selecionar($id) {
    //aqui vamos utilizar a classe do PDO Statement para ajudar na criação dessa query q vamos fazer
    //$sql = "SELECT * FROM usuasrios WHERE id = '$id'"; //query padrão, q já sabemos criar
    $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id"); //PDO Statement - já sabemos qual é a tabela e o campo (id) - torna requisição + segura e + fácil de montar. No 'id =', tem duas formas de fazer esse processo: 1. especificar apelido p/ o q vai entrar aqui, precedido de dois pontos(:) - id = :id(coincidiu nome do campo, pois a info q vai entrar é um id, mas não precisa ser). Não vai executar ainda. O prepare (nome oficial: prepare statement) vai começar a montar a minha query. Depois de montar query, vou dar um $sql->execute(); daí ele vai executar minha query. Depois de inserir esse apelido, criei template/estrutura para minha query. Agora preciso dizer o que o :id representa. P/ isso, tem duas formas: 1.$sql->bindValue(":id", $id); os parâmetros são: qual apelido vou transformar, e o segundo é o que ele representa
 //Feito isto, vou dizer para ele que, no meu template/layout da query que, onde tiver meu :id, ele vai substituir pelo valor oficial ($id) - id q qro fazer a busca
    $sql->bindValue(":id", $id);
  //depois disto, ele executa:
    $sql->execute();
    
    //tb posso colocar mais campos - qtos eu quiser, ex: 
    //$sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id AND email = :email");
    //$sql->bindValue(":id", $id);
    //$sql->bindValue(":email", $email);
    //$sql->execute();
    
    //uma vez q executei a minha query, tá na hora de pegar os results dela - já que é um select, ele tem resultados. Posso guardar ou retonar os results. Neste caso, vamos retornar, mas 1°, vamos ver se houve results e depois retorná-los
    $array = array(); //criar array, inicialmente vazio. Depois da criação do array, fazer a verificação:
    if($sql->rowCount() > 0){ //se for maior q zero, ou seja, se houve retorno de algum result, vou preencher o array com fetch
      $array = $sql->fetch(); //fetch apenas pois é somente um item que estou pesquisando - fetch retorna só os dados daquele item específico
    } 
    //depois do if retorno meu array
    return $array;
    
    //explicando a lógica: eu tô: 1. preparando e executando minha query - //$sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
//$sql->bindValue(":id", $id);
//$sql->execute();
    //2. depois eu crio um array vazio - $array = array(); - qeu vou retornar ele no final - return $array; //3. mas, se essa minha query - ("SELECT * FROM usuarios WHERE id = :id"); - retornou alguma coisa, aí eu preencho - $array = $sql->fetch() - caso contrário, eu não vou preencher e ele vai retornar vazio
    //agora vai lá pro index.php ára executar
    
    //a outra forma de fazer o prepare - vamos criar na próxima fç, q vai ser um inserir p/ inserir novo usuário
  }
  
  public function inserir($nome, $email, $senha) { //vou receber os parâmetros aqui: nome, email e senha
    $sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha"); //query - ':' na frente pois é o apelido q to montando
//uma vez q montei o template a outra forma de fazer. Antes usei o bindValue. Aora vamos usar o bindParam():
    $sql->bindParam(":nome", $nome); //apelido :nome vai receber a var $nome
    $sql->bindParam(":email", $email);
    $sql->bindValue(":senha", md5($senha)); //md5 é valor já gerado, não é var. Por isto, neste caso, tem q ser bindValue pois é o valor que terá q associar, não a var
    $sql->execute();
    //bindParam vai pegar var $nome, p/ ex e associar com :nome. Se alterar var depois, ele pega a var 'nova', q foi alterada - ele usa o valor da variável - se trocar, ele vai trocar junto. O bindValue não - ele permanece com a var q foi definida inicialmente
  }
  
  public function atualizar($nome, $email, $senha, $id) {
    $sql = $this->db->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?"); //coloco '?' e mando as var lá no execute e não dou bindValue e bindParam (pode, mas normalmente, qdo usa '?', não usa, faz assim:)
    $sql->execute(array($nome, $email, md5($senha), $id)); //vai substituir cada item do array pela respectiva interrogação
  }
  
  public function excluir($id) {
    $sql = $this->db->prepare("DELETE FROM usuarios WHERE id = ?"); //outra forma de fazer a '?' é usando os bind tb
    $sql->bindValue(1, $id); //não botei nenhum apelido, então não vai '?' no 1° parâmetro, vai '1', é o $id - se eu tivesse mais de uma '?' (como, p/ex na fç update), eu colocaria mais valores no bindValue - o 1, depois o 2, depois o 3, etc - como só tenho um, coloco bindValue(1) q ele vai pegar  1° '?' e substituir pelo id
    //depois dou execute sem nenhum parâmetro nele pois já especifiquei aqui - $sql->bindValue(1, $id);
    $sql->execute();
  }
}

/*
  Created on : 22/03/2017, 13:07:32
  Author     : Renata Kilian
 */
?>