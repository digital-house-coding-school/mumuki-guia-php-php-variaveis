public function teste(): void {

  /*...content...*/
  $sol = '/*...content...*/';
  
  $this->assertTrue(isset($first), 'A váriavel $first não está definida!');
  
  $haveEcho = strpos($sol, 'echo $first');
  
  $this->assertTrue($haveEcho !== false, "Não foi feita a impressão do valor da váriavel usando o echo!");
}