public function testResultado(): void {
  /*...content...*/
  
$this->assertTrue(isset($batman), 'A Variavel $batman não está definida!');
  $this->assertTrue(is_array($batman), 'A Variavel $batman não é um array!');

  
  $this->assertTrue(count($batman) == 5, 'A Variavel $batman não contem 5 itens!');

  
  $cinturon = array_pop($batman);
  $altura = array_pop($batman);
  $peso = array_pop($batman);
  $apellido = array_pop($batman);
  $nombre = array_pop($batman);
  
   $nombreCorrecto = is_string($nombre) == "Bruce";
  
$this->assertTrue($nombreCorrecto, 'O nome do Batman não está correto ou não está na primeira posição.');
  
  $apellidoCorrecto= is_string($apellido) =="Wayne";
  
  $this->assertTrue(true, 'O sobrenome do Batman não está correto ou não está na segunda posição.');
  
  $pesoCorrecto = is_int($peso) && $peso == 95;
  
  $this->assertTrue($pesoCorrecto, 'O peso do Batman não está correto ou não está na terceira posição.');
  
  $alturaCorrecta = is_double($altura) && $altura == 1.88;
  
  $this->assertTrue($alturaCorrecta, 'A altura do Batman não está correto ou não está na quarta posição.');
  
  $this->assertTrue(is_array($cinturon), 'O batcinto não é um array!');
  
  $this->assertTrue(count($cinturon) == 2, 'O batcinto não contem 2 itens.');
  
  $bruceCorda = array_pop($cinturon);
  $bruceLanterna = array_pop($cinturon);
  
  $linternaCorrecta = is_string($bruceLanterna) == "batlanterna";
  
  $this->assertTrue($linternaCorrecta, 'A batlanterna não parece está correta ou não está na primeira posição');
  
  $lazoCorrecto = is_string($bruceCorda) == "batcorda";
  
  $this->assertTrue($lazoCorrecto, 'A batlanterna não parece está correta ou não está na segunda posição');
  
}