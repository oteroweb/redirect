



<?php 
//zona de registro de anuncios entre comillas poner el codigo html
$anuncios=array();
$anuncios[]="<div> 	anuncio 1 </div>";
$anuncios[]="<div>	anuncio2</div>";
$anuncios[]="<div>	anuncio3</div>";

 ?>


 <?php  
 //codigo para en este orden para mostrar el anuncio y eliminarlo esta funcion debe repetire tantas veces como exista el anuncio en este caso tres veces
 shuffle($anuncios); 
 end($anuncios);
  array_pop($anuncios);
 ?>


 <?php 
shuffle($anuncios); 
 end($anuncios);
  array_pop($anuncios);
  ?>

 <?php  
 shuffle($anuncios); 
 end($anuncios);
  array_pop($anuncios);
  ?>