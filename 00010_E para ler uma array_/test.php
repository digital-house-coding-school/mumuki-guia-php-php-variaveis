public function testResultado(): void {
 /*...content...*/
  $sol = '/*...content...*/';
  
  $solNome=isset($nome) && $nome == $pessoa['nome'];
  $solSobrenome = isset($sobrenome) && $sobrenome == $pessoa['sobrenome'];
  $idade = isset($idade) && $idade == $pessoa['idade'];
  
  $this->assertTrue($solNome, 'A variavel $nome não está definida ou o valor está incorreto!');
  
 
    
   
}