public function testDescriptionExample(): void {
  /*...content...*/
  

 $this->assertTrue(isset($batman), 'A Variavel $batman não está definida!');
  $this->assertTrue(is_array($batman), 'A Variavel $batman não é um array!');
  
 $this->assertTrue(count($batman) == 5, 'A Variavel $batman não contem 5 itens!');

  $cinturon = array_pop($batman);
  $altura = array_pop($batman);
  $peso = array_pop($batman);
  $apellido = array_pop($batman);
  $nombre = array_pop($batman);
  var_dump($nombre);
  $nombreCorrecto = $nombre == "Bruce";
  
  
  
  
}