<a href="pg.php">hol</a> 
<br>

<?php  

$class = new Redirect;
// $routeprivate = is_null(1);

// echo $routeprivate;

// $dedondeviene = $class->get_referrer();

// var_dump($sites);


class Redirect 
{
	//modificar para poner los segundos en los cuales durara la redireccion
	public $segundos= 10;
	// function __construct(argument)
	// {
	// 	# code...
	// }
	function get_referrer()
	{
		$routeprivate = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'Viene directo';
		// return $this->routeprivate;
		return $routeprivate;
		// $this->getRoute;
	}
	function redirect()
	{
		$viene= $this->get_referrer();
		//si no viene de ningun sitio direccion de prueba
		// $viene = "https://www.facebook.com/groups/1586299554930109/reported/";
		$viene = urlencode("https://www.twitter.com/groups/1586299554930109/reported/");
		// substr_compare(	"hola", "hol", 3);
		// $viene = "www.facebook.com";
		$sites =  $this->get_ListSites();
		$viene= "/".$viene."/i";

		foreach ($sites as $key => $value) {
				// if (preg_match($viene, $value)) {
			$formatted= "/".$value."/i";
					if (preg_match($formatted, $viene)) {
						echo "se encontro coincidencia redirigiendo a http://".$value." en ".$this->segundos;
				// hacer rediret
						header("refresh:$this->segundos;url=http://$value" );

			    // echo $value
			    //finaliza el codigo
			    break;
				} else {
					//retorna nada porque no encontro coincidencia
			    	// echo "No se ha encontrado una coincidencia.";
				} 
		}
				return $viene;
	}

	function get_ListSites()
	{
		//lista de sitios posibles
		$sites= array();
		$sites[]= "www.instagram.com";
		$sites[]= "www.facebook.com";
		$sites[]= "www.twitter.com";
		return $sites;
	}

}
    ?>