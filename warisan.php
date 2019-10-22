<?php
class Bapak
{
	var $nama="Bapak";
	function Bapak($n)
	{
		$this->nama=$n;
	}
	function Hallo()
	{
		echo " ============CONTOH SINGLE INHERITANCE============<br>";
		echo " Halo,saya anita putri " , " $this->nama <br> ";
		echo " Halo,saya anfredo anak ke 2 " , " $this->nama <br> ";
	}
}
class Anak extends Bapak{}
	$test = new Anak("Dari Bapak Joko");
	$test->Hallo();


?>