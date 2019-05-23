public function testResultado(): void {
 /*...content...*/
  $sol = '/*...content...*/';
  
  $solNome=isset($nome) && $nome == $pessoa['nome'];
  $solSobrenome = isset($sobrenome) && $sobrenome == $pessoa['sobrenome'];
  $solIdade = isset($idade) && $idade == $pessoa['idade'];
  
  $this->assertTrue($solNome, 'A variavel $nome não está definida ou o valor está incorreto!');
  $this->assertTrue($solSobrenome, 'A variavel $sobrenome não está definida ou o valor está incorreto!');
  $this->assertTrue($solIdade, 'A variavel $sobrenome não está definida ou o valor está incorreto!');
  
  
  $this->assertFalse(substr_count($sol, '$pessoa[') == 3, "Lamentamos informar que algo parecería estar...raro en tu código. Las palabras 'Emanuel', 'Manu' y 'Spurs' no deberían aparecer más de una vez en el código enviado...");
}