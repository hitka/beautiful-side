<?php
if(isset($_GET['query']))
{
    $strQuery = strtolower(trim(urldecode($_GET['query'])));
    switch($strQuery)
    {
        case 'random':
			echo rand(1, 100);
		break;
		
		default:
		case 'greet':
			echo 'Hello';
		break;
	}
}
