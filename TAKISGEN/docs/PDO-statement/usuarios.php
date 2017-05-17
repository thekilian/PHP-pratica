<?php
class Usuarios {
  private $db;
  
  //contrutor - conexão com DB:
  public function __construct() {
    try {
      $this->db = new PDO("mysql:dbname=blog;host=localhost", "root", "");
    } catch(PDOException $e) {
      echo "FALHA: ".$e->getMessage();
    }
  }
  
  public function selecionar($id) {
    //aqui vamos utilizar a classe do PDO Statement para ajudar na criação dessa query
    //$sql = "SELECT * FROM usuasrios WHERE id = '$id'"; //query padrão
    
    $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
    /*
    PDO Statement - já sabemos qual é a tabela e o campo (id) - torna requisição mais segura e mais fácil de montar.
    No 'id =', especificar apelido para o que vai entrar aqui, precedido de dois pontos(:) - id = :id(coincidiu nome do campo,
   pois a info que vai entrar é um id, mas não precisa ser). Não vai executar ainda. O prepare (nome oficial: prepare statement)
   vai começar a montar a minha query. Depois de montar query, vou dar um $sql->execute(); daí ele vai executar minha query.
   Depois de inserir esse apelido, criei template/estrutura para minha query. Agora preciso dizer o que o :id representa.
   Para isso usar $sql->bindValue(":id", $id); os parâmetros são: qual apelido vou transformar, e o que ele representa.
   Feito isto, vou dizer para ele que, no meu template/layout da query que, onde tiver meu :id, ele vai substituir pelo
   valor oficial ($id) - id que quero fazer a busca:
    */
    $sql->bindValue(":id", $id);
    //depois disto, ele executa:
    $sql->execute();
    
    //também posso colocar mais campos - quantos eu quiser, por exemplo: 
    //$sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id AND email = :email");
    //$sql->bindValue(":id", $id);
    //$sql->bindValue(":email", $email);
    //$sql->execute();
    
    /*
    Uma vez que executei a minha query, está na hora de pegar os resultados dela - já que é um select, ele tem resultados.
    Posso guardar ou retonar os resultados. Neste caso, vamos retornar, mas primeiro, vamos ver se houve resultados e depois, então,
    retorná-los:
    */
    $array = array(); //criar array, inicialmente vazio. Depois da criação do array, fazer a verificação:
    if($sql->rowCount() > 0){ //se for maior que zero, ou seja, se houve retorno de algum resultado, vou preencher o array com fetch
      $array = $sql->fetch(); //fetch apenas pois é somente um item que estou pesquisando (fetch retorna só os dados daquele item específico)
    } 
    //depois do if retorno meu array:
    return $array;
    
    /*
    Explicando a lógica - eu estou:
    1. preparando e executando minha query
      $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
      $sql->bindValue(":id", $id);
      $sql->execute();
    2. depois eu crio um array vazio:
        $array = array();
      - vou retornar ele no final:
        return $array;
    3. mas, se essa minha query ("SELECT * FROM usuarios WHERE id = :id"); retornou alguma coisa, aí eu preencho:
        $array = $sql->fetch();
       - caso contrário, eu não vou preencher e ele vai retornar vazio
    4. agora ir para index.php para executar
    */
  }
  
  //a outra forma de fazer o prepare - função inserir para podermos adicionar um novo usuário:
  public function inserir($nome, $email, $senha) { //vou receber os parâmetros aqui: nome, email e senha
    $sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha");
    //na linha anterior, colocamos ':' na frente dos itens da query pois é o apelido que estou montando
    //uma vez que montei o template a outra forma de fazer é usar o bindParam() (antes usei o bindValue):
    $sql->bindParam(":nome", $nome); //apelido :nome vai receber a variável $nome
    $sql->bindParam(":email", $email); //apelido :email vai receber a variável $email
    $sql->bindValue(":senha", md5($senha)); //apelido :senha vai receber a variável senha
    /*
    md5 é valor já gerado, não é variável.
    Por isto, neste caso, tem que ser bindValue pois é o valor que terá que associar, não a variável.
    */
    $sql->execute();
    /*
    bindParam vai pegar variável $nome, por exemplo e associar com :nome. Se alterar variável depois, ele pega a variável 'nova',
    que foi alterada - ele usa o valor da variável - se trocar, ele vai trocar junto. O bindValue não - ele permanece com a variável
    que foi definida inicialmente.
    */
  }
  
  public function atualizar($nome, $email, $senha, $id) {
    $sql = $this->db->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?");
    /*
    coloco '?' e mando as variáveis lá no execute e não dou bindValue e bindParam
    (pode, mas normalmente, quando usa '?', não se usa usa bindValue e bindParam, se faz assim:)
    */
    $sql->execute(array($nome, $email, md5($senha), $id)); //vai substituir cada item do array pela respectiva interrogação
  }
  
  public function excluir($id) {
    $sql = $this->db->prepare("DELETE FROM usuarios WHERE id = ?"); //outra forma de fazer a '?' é usando os bind também
    $sql->bindValue(1, $id);
    /*
    não botei nenhum apelido, então não vai '?' no 1° parâmetro, vai '1', é o $id - se eu tivesse mais de uma '?'
    (como, por exemplo na função update), eu colocaria mais valores no bindValue - o 1, depois o 2, depois o 3, etc -
    como só tenho um, coloco bindValue(1) q ele vai pegar  1° '?' e substituir pelo id.
    Depois dou execute sem nenhum parâmetro nele pois já especifiquei aqui - $sql->bindValue(1, $id);
    */
    $sql->execute();
  }
}
