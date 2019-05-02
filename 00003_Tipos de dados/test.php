public function testDescriptionExample(): void {
  /*...content...*/
  $solucaoAluno = '/*...content...*/';
  
  $vars = get_defined_vars();
  $estaNulo = array_key_exists("miNulo", $vars);
  
  $this->assertTrue(isset($texto), 'A váriavel $texto não está definida.');
  $this->assertTrue(isset($numeroInteiro), 'A váriavel $numeroInteiro não está definida.');
  $this->assertTrue(isset($numeroDecimal), 'A váriavel $numeroDecimal não está definida.');
  $this->assertTrue(isset($verdade), 'A váriavel $verdade não está definida.');
  $this->assertTrue($nulo, 'A váriavel $nulo não está definida.');
  
  $this->assertTrue(gettype($miTexto) == "string", 'La variable $miTexto debe ser un texto');
  $this->assertTrue(gettype($miNumero) == "integer", 'La variable $miNumero debe ser un numero entero');
  $this->assertTrue(gettype($miDecimal) == "double", 'La variable $miDecimal debe ser un número decimal');
  $this->assertTrue(gettype($miVerdad) == "boolean", 'La variable $miVerdad debe ser un valor de verdad');
  $this->assertTrue(is_null($miNulo), 'La variable $miNulo debe ser nula');
}