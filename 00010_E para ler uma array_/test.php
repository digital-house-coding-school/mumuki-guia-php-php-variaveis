public function testResultado(): void {
    /*...content...*/
  $sol = '/*...content...*/';
  
  $nomeOK = isset($nome) && $nome == "Vinicius";

  $this->assertTrue($nomeOK, 'A variavel $nome não foi definda ou está com o valor errado!');
  
  

}