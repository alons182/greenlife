<?php 
//defined('_JEXEC') or die;
define( '_JEXEC', 1 );
define('JPATH_BASE', dirname(dirname(__FILE__)));
define( 'DS', DIRECTORY_SEPARATOR );

require_once (JPATH_BASE . DS . 'includes' . DS . 'defines.php');
require_once (JPATH_BASE . DS . 'includes' . DS . 'framework.php');

jimport('joomla.mail.helper');



//notificacion por email de una nueva reservacion o comentario de contacto

$data =  $_POST;



$asunto = "Reservation in Green Life Tours"; 


	$actividades = $data['Activitie'];
	$cuerpo = '

	<h1>Datos de Reservacion:</h1>


	
	<strong>Activities:</strong> '.json_encode($actividades).'<br />
	
	<strong>Pickup Location:</strong> '.$data['pickuplocation'].'<br />
	<strong>Drop Off:</strong> '.$data['dropoff'].'<br />
	<strong>Date:</strong> '.$data['date'].'<br />
	<strong>Full Name:</strong> '.$data['fname'].'<br />
	<strong>Email:</strong> '.  $data['email'].'<br />
	<strong>Adults: </strong>'.  $data['Adults'].'<br />
	<strong>Childrens:</strong> '.  $data['Childrens'].'<br />
	<strong>Important Notes:</strong> '.  $data['notes'];
	
	$emailuser = $data['email'];

/*$config = JFactory::getConfig();
$emailuser= array( 
			$config->getValue( 'config.mailfrom' ),
			$config->getValue( 'config.fromname' )
			 );*/

$destinatario = array('alonso@avotz.com.com',$emailuser); //$email_yokue;





//verificamos los datos con los métodos de JMailHelper
if(!JMailHelper::isEmailAddress($destinatario[0]))return false;
if(!JMailHelper::cleanAddress($destinatario[0])) return false;
if(!JMailHelper::isEmailAddress($destinatario[1]))return false;
if(!JMailHelper::cleanAddress($destinatario[1])) return false;
//limpiamos el asunto de posible código malicioso 
$subject = JMailHelper::cleanSubject($asunto); 
//limpiamos el mensaje (cuerpo del email) de posible código malicioso

$body = JMailHelper::cleanText($cuerpo); 



$mailer = JFactory::getMailer(); 
$mailer->isHtml(true);

$mailer->setSender($emailuser); 
$mailer->addRecipient($destinatario); 
$mailer->setSubject($asunto); 
$mailer->setBody($body); 
if($mailer->send()) 
	echo 'ok';
else
  echo 'error';


		


	
	
	


?>