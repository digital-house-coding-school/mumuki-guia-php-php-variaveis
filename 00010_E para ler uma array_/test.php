public function testResultado(): void {
    /*...content...*/
    $sol = '/*...content...*/';
  
  $erros = [
      'nome'=> (isset($nome) && $nome == "Vinicius"),
      'sobrenome' => (isset($sobrenome)&&$sobrenome == $pessoa['sobrenome']),
      'idade' => (isset($idade)&&$idade == $pessoa['idade'])
  ];


foreach($erros as $key=>$value){
   $this->assertTrue($value,"A variavel $key não está definida ou o valor está incorreto!");
  }
  

}