<?php 

// class contohStatic  {
// 	public static $angka  = 10;

// 	public static function halo() {
// 		return "Hello " . self::$angka . " Kali";
// 	}
// }

// echo contohStatic::$angka;
// echo  "<br>";
// echo contohStatic::halo();
// echo "<hr>";
// echo contohStatic::halo();


class contoh{
	public static $angka = 1;

	public function halo(){
		return "Hello " . self::$angka++ . " Kali. <br>";
	}
}

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";
$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();


















 ?>