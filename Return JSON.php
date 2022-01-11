<?php
error_reporting(1);
$string = json_decode(file_get_contents('php://input'));
    
    function objectToArray( $object )
    {
        if( !is_object( $object ) && !is_array( $object ) )
        {
            return $object;
        }
        if( is_object( $object ) )
        {
            $object = get_object_vars( $object );
        }
        return array_map( 'objectToArray', $object );
    }
	$token = ''; ' Enter yor token robot
	$result = objectToArray($string);
	$user_id = $result['message']['from']['id'];

// JSON Return   ---------------------------------------
$json_string = json_encode($result, JSON_PRETTY_PRINT);

	$url = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$user_id;
	$url .= '&text='.urlencode($json_string);
	$RES =file_get_contents($url);
	
 ?>
