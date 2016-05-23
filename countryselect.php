<?php
include("geoiploc.php"); 
    
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

//linea de prueba para ip simulado descomentar si ests en local host este es ip de venezuela
$user_ip = "200.82.177.181";
 $country = getCountryFromIP($user_ip, " NamE");

$paises1= array(
  'Andorra', 
  'United Arab Emirates', 
  'Afghanistan', 
  'Antigua and Barbuda', 
  'Anguilla', 
   'Albania', 
   'Armenia', 
   'Angola', 
   'Non-spec Asia Pas Location', 
   'Argentina'  , 
   'American Samoa', 
   'Austria', 
   'Australia', 
   'Aruba', 
   'Azerbaijan', 
   'Bosnia and Herzegowina', 
   'Barbados', 
   'Bangladesh', 
   'Belgium', 
   'Burkina Faso', 
   'Bulgaria', 
   'Bahrain', 
   'Burundi', 
   'Benin', 
   'Bermuda', 
   'Brunei Darussalam', 
   'Bolivia', 
   'Bonaire; Sint Eustatius; Saba', 
   'Brazil', 
   'Bahamas', 
   'Bhutan', 
   'Botswana', 
   'Belarus', 
   'Belize', 
   'Canada', 
   'Congo The Democratic Republic of The', 
   'Central African Republic', 
   'Congo', 
   'Switzerland', 
   'Cote D\'ivoire', 
   'Cook Islands', 
   'Chile', 
   'Cameroon', 
   'China', 
   'Colombia'  , 
   'Costa Rica', 
   'Cuba', 
   'Cape Verde', 
   'Curacao', 
   'Cyprus'  , 
   'Czech Republic', 
   'Germany', 
   'Djibouti', 
   'Denmark', 
   'Dominica'   , 
   'Dominican Republic', 
   'Algeria', 
   'Ecuador', 
   'Estonia', 
   'Egypt'  , 
   'Eritrea', 
   'Spain', 
   'Ethiopia', 
   'European Union', 
   'Finland'   , 
   'Fiji', 
   'Micronesia Federated States of', 
   'Faroe Islands', 
   'France', 
   'Gabon'  , 
   'United Kingdom', 
   'Grenada', 
   'Georgia', 
   'French Guiana', 
   'Guernsey'   , 
   'Ghana', 
   'Gibraltar', 
   'Greenland', 
   'Gambia', 
   'Guinea'  , 
   'Guadeloupe', 
   'Equatorial Guinea', 
   'Greece', 
   'Guatemala', 
   'Guam'  , 
   'Guinea-bissau', 
   'Guyana', 
   'Hong Kong', 
   'Honduras', 
   'Croatia (LOCAL Name: Hrvatska)'   , 
   'Haiti', 
   'Hungary', 
   'Indonesia', 
   'Ireland', 
   'Israel'  , 
   'Isle of Man', 
   'India', 
   'British Indian Ocean Territory', 
   'Iraq', 
   'Iran (ISLAMIC Republic Of)'  , 
   'Iceland', 
   'Italy', 
   'Jersey', 
   'Jamaica', 
   'Jordan'  , 
   'Japan', 
   'Kenya', 
   'Kyrgyzstan', 
   'Cambodia', 
   'Kiribati'   , 
   'Comoros', 
   'Saint Kitts and Nevis', 
   'Korea Democratic People\'s Republic of', 
   'Korea Republic of', 
   'Kuwait'  , 
   'Cayman Islands', 
   'Kazakhstan', 
   'Lao People\'s Democratic Republic', 
   'Lebanon', 
   'Saint Lucia'   , 
   'Liechtenstein', 
   'Sri Lanka', 
   'Liberia', 
   'Lesotho', 
   'Lithuania'  , 
   'Luxembourg', 
   'Latvia', 
   'Libyan Arab Jamahiriya', 
   'Morocco', 
   'Monaco'  , 
   'Moldova Republic of', 
   'Montenegro', 
   'Saint Martin', 
   'Madagascar', 
   'Marshall Islands'  , 
   'Macedonia', 
   'Mali', 
   'Myanmar', 
   'Mongolia', 
   'Macau'  , 
   'Northern Mariana Islands', 
   'Martinique', 
   'Mauritania', 
   'Montserrat', 
   'Malta'  , 
   'Mauritius', 
   'Maldives', 
   'Malawi', 
   'Mexico', 
   'Malaysia'  , 
   'Mozambique', 
   'Namibia', 
   'New Caledonia', 
   'Niger', 
   'Norfolk Island'  , 
   'Nigeria', 
   'Nicaragua', 
   'Netherlands', 
   'Norway', 
   'Nepal'  , 
   'Nauru', 
   'Niue', 
   'New Zealand', 
   'Oman', 
   'Panama'  , 
   'Peru', 
   'French Polynesia', 
   'Papua New Guinea', 
   'Philippines', 
   'Pakistan'  , 
   'Poland', 
   'St. Pierre and Miquelon', 
   'Puerto Rico', 
   'Palestinian Territory Occupied', 
   'Portugal'  , 
   'Palau', 
   'Paraguay', 
   'Qatar', 
   'Reunion', 
   'Romania'  , 
   'Serbia', 
   'Russian Federation', 
   'Rwanda', 
   'Saudi Arabia', 
   'Solomon Islands'  , 
   'Seychelles', 
   'Sudan', 
   'Sweden', 
   'Singapore', 
   'Slovenia'  , 
   'Slovakia (SLOVAK Republic)', 
   'Sierra Leone', 
   'San Marino', 
   'Senegal', 
   'Somalia'  , 
   'Suriname', 
   'South Sudan', 
   'Sao Tome and Principe', 
   'El Salvador', 
   'Sint Maarten'  , 
   'Syrian Arab Republic', 
   'Swaziland', 
   'Turks and Caicos Islands', 
   'Chad', 
   'Togo'  , 
   'Thailand', 
   'Tajikistan', 
   'Tokelau', 
   'Timor-leste', 
   'Turkmenistan'  , 
   'Tunisia', 
   'Tonga', 
   'Turkey', 
   'Trinidad and Tobago', 
   'Tuvalu'  , 
   'Taiwan; Republic of China (ROC)', 
   'Tanzania United Republic of', 
   'Ukraine', 
   'Uganda', 
   'United States'  , 
   'Uruguay', 
   'Uzbekistan', 
   'Holy See (VATICAN City State)', 
   'Saint Vincent and The Grenadines', 
   'Virgin Islands (U.S.)', 
   'Viet Nam', 
   'Vanuatu', 
   'Wallis and Futuna Islands'  , 
   'Samoa', 
   'Yemen', 
   'Mayotte', 
   'South Africa', 
   'Zambia'  , 
   'Zimbabwe', 
   'Reserved', 
   );


$segundos=5;
$paises2= array (
   'Venezuela'  , 
   'Virgin Islands (BRITISH)', 

  );

if (in_array($country, $paises1)) {
    echo "comportamiento lista de paises 1";
    // header("refresh:$segundos;url=http://www.prueba.com" );
} 
elseif (in_array($country, $paises2)) {
      echo "comportamiento lista de paises 2";
      // header("refresh:$segundos;url=http://www.prueba.com" );


} 
else {
echo "comportamiento de pais desconocido";
//para redireccion eliminar el echo y descomentar header
// header("refresh:$segundos;url=http://www.prueba.com" );
}


 ?>
