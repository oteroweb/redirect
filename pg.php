<a href="pg.php">hol</a> 
<br>

<?php  

// para activar la redireccion linea 7
// $class = new Redirect;

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
		//en caso de no tener sitio anterior usara el valor que esta despues del :
		$routeprivate = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : "https://www.facebook.com/groups/1586299554930109/reported/";
		return $routeprivate;
	}
	function Redirect()
	{
		$viene= $this->get_referrer();
		$viene = urlencode($viene);
		
		$sites =  $this->get_ListSites();
		$viene= "/".$viene."/i";

		foreach ($sites as $key => $value) {
				// if (preg_match($viene, $value)) {
			$formatted= "/".$value."/i";
					if (preg_match($formatted, $viene)) {
						echo "se encontro coincidencia redirigiendo a http://".$value." en ".$this->segundos;
				// hacer rediret
						header("refresh:$this->segundos;url=http://$value" );

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