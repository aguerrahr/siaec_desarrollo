<?php

/**
 * @author Andrés G. Guerra Hdz.
 * @copyright 2009
 */
/*header("content-type: text/html; charset=utf-8");
header('Cache-Control: no-cache, must-revalidate');*/      
require_once('../util_bd/bd_datos.php');

function mysqli_exec($link, $command){
  $select = '';
  $i2 = 0;
  while (true){
  	$i1 = strpos($command, '@', $i2);      
  	if ($i1 === false)
		break;          
	$field = '';
    $i2 = $i1 + 1;      
 	while ($i2 < strlen($command) && 
         ($command[$i2] >= '0' && $command[$i2] <= '9') ||
         ($command[$i2] >= 'A' && $command[$i2] <= 'Z') ||
         ($command[$i2] >= 'a' && $command[$i2] <= 'z') ||
         ($command[$i2] == '_'))
         $i2++;          
    $field = substr($command, $i1 + 1, $i2 - $i1 - 1);          
    if (strlen($select) == 0)
    	$select = "select @{$field} as $field";
  	else                    
   		$select = $select . ", @{$field} as $field";
  }      
  if (strlen($select) > 0){      
    mysqli_query($link, $command);
    return mysqli_query($link, $select);
  }
  else
  	return mysqli_query($link, $command);
}

function get_Ventana_Permisos($cd_perfil,$cd_pantalla,$opOpcion){
	$link = mysqli_connect(O_DBHOST, DBUSER, DBPASS,'',O_DBPTO) or die ('Error connecting to mysql: '.mysqli_error($link));
	mysqli_select_db($link, 'subastas');	
	$result = mysqli_exec($link, "call sp_get_Ventana_Permisos($cd_pantalla,$cd_perfil,'op_editar', @getPermiso)");
	$row = mysqli_fetch_assoc($result);
	$get_Permiso = $row['getPermiso'];
	$link->Close();
 	return $get_Permiso;
}

echo get_Ventana_Permisos(1,9,'op_editar');
?>


<?php
  /*
   Original
   http://php.net/manual/en/mysqli.query.php 
   function mysqli_exec($link, $command)
  {
      $select = '';
      $i2 = 0;
     
      while (true)
      {
      $i1 = strpos($command, '@', $i2);
     
      if ($i1 === false)
          break;
         
      $field = '';
      $i2 = $i1 + 1;
     
      while ($i2 < strlen($command) &&
          ($command[$i2] >= '0' && $command[$i2] <= '9') ||
          ($command[$i2] >= 'A' && $command[$i2] <= 'Z') ||
          ($command[$i2] >= 'a' && $command[$i2] <= 'z') ||
          ($command[$i2] == '_'))
          $i2++;
         
      $field = substr($command, $i1 + 1, $i2 - $i1 - 1);
         
      if (strlen($select) == 0)
        $select = "select @{$field} as $field";
      else                   
          $select = $select . ", @{$field} as $field";
      }
     
      if (strlen($select) > 0)
      {     
        mysqli_query($link, $command);
        return mysqli_query($link, $select);
      }
      else
        return mysqli_query($link, $command);
  }*/
?>

<!--  an example: -->

<?php
  /*$link = mysqli_connect('localhost', 'myusr', 'mypass') or die ('Error connecting to mysql: ' . mysqli_error($link));
  mysqli_select_db($link, 'clips');
 
  $user_name = 'test';
  $result = mysqli_exec($link, "call do_user_login('$user_name', @session_id, @msg)");
 
  while ($row = mysqli_fetch_assoc($result))
  {
    echo "session_id : {$row['session_id']} <br>";
    echo "msg        : {$row['msg']} <br>";
  }*/
?>


