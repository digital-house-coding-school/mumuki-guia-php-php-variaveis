public function testResultado(): void {
  /*...content...*/
  $solucaoAluno = '/*...content...*/';
  $this->assertTrue(isset($minhaArray), 'A váriavel $minhaArray não está definida!');
  $this->assertTrue(is_array($minhaArray), 'A váriavel $minhaArray não é um array!');
  $this->assertTrue(count($minhaArray) == 3, 'A array $minhaArray não contem 3 elementos!');
  
  $definidoVacio = strpos($sol, '[]');
  $agregado = strpos($sol, '$miArray[]');
  $condicionFinal = $definidoVacio !== false && $agregado !== false;
  
  $this->assertTrue($condicionFinal, "Lembre-se você deve agregar valores na array!");
}