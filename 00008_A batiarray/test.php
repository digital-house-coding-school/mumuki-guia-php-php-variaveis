public function testDescriptionExample(): void {
  /*...content...*/
  
  
  
  $this->assertTrue(isset($batman), 'La variable $batman no esta definida');
  $this->assertTrue(is_array($batman), 'La variable $batman no es un array');

  
  $this->assertTrue(count($batman) == 5, 'El array no tiene 5 elementos...');
  
  
  $cinturon = array_pop($batman);
  $altura = array_pop($batman);
  $peso = array_pop($batman);
  $apellido = array_pop($batman);
  $nombre = array_pop($batman);
  
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