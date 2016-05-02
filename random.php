



<?php 
//zona de registro de anuncios entre comillas poner el codigo html
$anuncios=array();
$anuncios[]="<div style='background:blue' > 	anuncio 1 </div>";
$anuncios[]="<div style='background:red'>	anuncio2</div>";
$anuncios[]="<div style='background:green'>	anuncio3</div>";

 ?>


 <?php  
 //codigo para en este orden para mostrar el anuncio y eliminarlo esta funcion debe repetire tantas veces como exista el anuncio en este caso tres veces
 shuffle($anuncios); 
//instruccion especifica que muestr el anuncio
echo end($anuncios);
  array_pop($anuncios);
 ?>


 <?php 
shuffle($anuncios); 
 //instruccion especifica que muestr el anuncio
 echo end($anuncios);
  array_pop($anuncios);
  ?>

 <?php  
 shuffle($anuncios); 
 //instruccion especifica que muestr el anuncio
 echo end($anuncios);
  array_pop($anuncios);
  ?>