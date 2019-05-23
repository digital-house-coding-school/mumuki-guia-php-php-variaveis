public function testResultado(): void {
 
  /*...content...*/
  $sol = '/*...content...*/';
  $this->assertTrue(isset($soma) && $soma === 125, 'A variavel $soma não foi criada ou não contem o valor correto!');
  $this->assertTrue(isset($subtração) && $subtração === 75, 'A variavel $subtração não foi criada ou não contem o valor correto!');
  $this->assertTrue(isset($multiplicação) && $multiplicação === 2500, 'A variavel $multiplicação não foi criada ou não contem o valor correto!');
  $this->assertTrue(isset($divisão) && $divisão === 4, 'A variavel $multiplicação não foi criada ou não contem o valor correto!');
  $this->assertTrue(isset($resto) && $resto === 0, 'A variavel $resto não foi criada ou não contem o valor correto!');
}