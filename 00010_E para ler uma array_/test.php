public function testResultado(): void {
    /*...content...*/
    $sol = '/*...content...*/';
  
  $tNome = isset($nome) && substr_count($sol, '$nome= $pessoa["nome"]')>0;
  
   $this->assertTrue($tNome, 'A variavel $nome não foi criada ou está com valor diferente da array!');

}