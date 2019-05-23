public function testResultado(): void {
  /*...content...*/
  
  
  
  $this->assertTrue(isset($batman), 'A Variavel $batman não está definida!');
  $this->assertTrue(is_array($batman), 'A Variavel $batman não é um array!');

  
  $this->assertTrue(count($batman) == 5, 'A Variavel $batman não contem 5 itens!');
  
  $this->assertTrue(array_key_exists("nome",$batman), 'A Array $batman não contem a associação nome!');
  $this->assertTrue(array_key_exists("apellido",$batman), 'El array $batman no tiene ninguna posición llamada "apellido"');
  $this->assertTrue(array_key_exists("peso",$batman), 'El array $batman no tiene ninguna posición llamada "peso"');
  $this->assertTrue(array_key_exists("altura",$batman), 'El array $batman no tiene ninguna posición llamada "altura"');
  $this->assertTrue(array_key_exists("baticinturon",$batman), 'El array $batman no tiene ninguna posición llamada "baticinturon"');
  
  $cinturon = $batman["baticinturon"];
  $altura = $batman["altura"];
  $peso = $batman["peso"];
  $apellido = $batman["apellido"];
  $nombre = $batman["nombre"];
  
  $nombreCorrecto = is_string($nombre) && strtolower($nombre) == "bruno";
  
  $this->assertTrue($nombreCorrecto, 'El nombre de Batman pareceria no ser correcto o no estar en la primer posición...');
  
  $apellidoCorrecto = is_string($apellido) && strtolower($apellido) == "diaz";
  
  $this->assertTrue($apellidoCorrecto, 'El apellido de Batman pareceria no ser correcto o no estar en la segunda posición...');
  
  $pesoCorrecto = is_int($peso) && $peso == 95;
  
  $this->assertTrue($pesoCorrecto, 'El peso de Batman pareceria no ser correcto o no estar en la tercera posición...');
  
  $alturaCorrecta = is_double($altura) && $altura == 1.8;
  
  
  $this->assertTrue($alturaCorrecta, 'La altura de Batman pareceria no ser correcta o no estar en la cuarta posición...');
  
  
  $this->assertTrue(is_array($cinturon), 'El cinturón parecería no ser un array...');
  
  $this->assertTrue(count($cinturon) == 3, 'El cinturón no tiene 3 elementos');
  
  $lazo = array_pop($cinturon);
  $dardos = array_pop($cinturon);
  $linterna = array_pop($cinturon);
  
  $linternaCorrecta = is_string($linterna) && strtolower($linterna) == "batilinterna";
  
  $this->assertTrue($linternaCorrecta, 'La Batilinterna de Batman no parecería estar correcta o primera en su cinturón');
  
  $dardosCorrecto = is_string($dardos) && strtolower($dardos) == "batidardos";
  
  $this->assertTrue($dardosCorrecto, 'Los Batidardos de Batman no parecerían estar correctos o segundos en su cinturón');
  
  $lazoCorrecto = is_string($lazo) && strtolower($lazo) == "batilazo";
  
  $this->assertTrue($lazoCorrecto, 'El Batilazo de Batman no parecería estar correcto o tercero en su cinturón');
  
  
}