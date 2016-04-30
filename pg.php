<!-- <a href="pg.php">hol</a>  -->
<!-- <br> -->

<?php  

// para activar la redireccion linea 7
$class = new Redirect;





// if(!isset($text)){$text=0;}

// $nombre_fichero = "counter.txt";
// $gestor = fopen($nombre_fichero, "r");
// $contenido = fread($gestor, filesize($nombre_fichero));
// // echo $contenido;
// $cantidadredireccion = 4;
// if ($contenido > $cantidadredireccion) {
// 	echo "mayor que".$cantidadredireccion;
// }
// else {
// fclose($gestor);
// 	$open = fopen("counter.txt","w+"); 
// $text = $contenido + 1;
// fwrite($open, $text); 
// fclose($open); 
// }






// var_dump($sites[0]);




class Redirect 
{
	//modificar para poner los segundos en los cuales durara la redireccion
	// public $segundos= 10;
	// function __construct(argument)
	// {
	// 	# code...
	// }
	public function get_referrer()
	{
		//en caso de no tener sitio anterior usara el valor que esta despues del :
		$routeprivate = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : "www.facebook.com";
		// var_dump($routeprivate);
		return $routeprivate;
	}
	public function Redirect()
	{
		$viene= $this->get_referrer();
		$viene = urlencode($viene);
		
		$sites =  $this->get_ListSites();
		$viene= "/".$viene."/i";

		foreach ($sites as $key => $value) {
				// if (preg_match($viene, $value)) {
			$formatted= "/".$key."/i";
					if (preg_match($formatted, $viene)) {
						$aleatorio = rand(10,50);
			$count = count($value);
			if ($count == 1) {
				$aleatoriositio = $value[0];				
			}
			else
			{
				$count = count($value)-1;
				$aleatoriositio = $value[rand(0, $count)];
			}
					// hacer rediret


			if(!isset($text)){$text=0;}

$nombre_fichero = "counter.txt";
$gestor = fopen($nombre_fichero, "r");
$contenido = fread($gestor, filesize($nombre_fichero));
// echo $contenido;
$cantidadredireccion = 4;
if ($contenido > $cantidadredireccion) {
	echo "mayor que".$cantidadredireccion;
}
else {
fclose($gestor);
	$open = fopen("counter.txt","w+"); 
$text = $contenido + 1;
fwrite($open, $text); 
fclose($open); 
echo "menor vamos a redireccionar";
						header("refresh:$aleatorio;url=http://$aleatoriositio" );
}

			    //finaliza el codigo
			    break;
				} else {
					//retorna nada porque no encontro coincidencia
				} 
		}
				return $viene;
	}

	function get_ListSites()
	{
		//lista de sitios posibles
		//regla para agregar sitios $sites["el sitio de donde viene para evaluarlo"] = array( Lista de sitios los cuales selecionara de manera leatorio eparados por comas y comillas);
		
		$sites= array();
		$sites["www.facebook.com"]= array(
			"www.facebook1.com",
			"www.facebook2.com",
			"www.facebook3.com",
			"www.facebook4.com",
			);
		$sites["www.twitter.com"]= array(
			"www.twitter1.com",
			"www.twitter2.com",
			"www.twitter3.com",
			"www.twitter4.com",
			);
		$sites["www.instagram.com"]= array(
			"www.instagram1.com",
			);
		$sites["www.toshiba.com"]= array(
			"www.toshiba1.com",
			"www.toshiba2.com",
			);
		$sites["www.facebook.com"]= array(
			"www.facebook1.com",
			"www.facebook2.com",
			"www.facebook3.com",
			);
		return $sites;
	}

}
    ?>