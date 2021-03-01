<?php

class MessageService
{
	// reusable styled succes and fail messages
	function displaySuccess( $type )
	{
		$displaySuccess  = '<div class="row">';
		$displaySuccess .= '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-check-circle my-5 text-muted" viewBox="0 0 16 16">';
		$displaySuccess .= '<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>';
		$displaySuccess .= '<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>';
		$displaySuccess .= '</svg>';
		$displaySuccess .= '';
		$displaySuccess .= '</div>';
		$displaySuccess .= '<div class="row">';
		$displaySuccess .= '<h1 class="text-center text-muted mt-3 mb-5">' . $type . '</h1></div>';

		return $displaySuccess;
	}


	function displayFail( $type )
	{
		$displayFail  = '<div class="row">';
		$displayFail .= '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-x-circle my-5 text-muted" viewBox="0 0 16 16">';
		$displayFail .= '<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>';
		$displayFail .= '<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>';
		$displayFail .= '</svg>';
		$displayFail .= '</div>';
		$displayFail .= '<div class="row">';
		$displayFail .= '<h1 class="text-center text-muted mt-3 mb-5">' . $type . '</h1></div>';
		
		return $displayFail;
	}
}


function displaySuccess( $type )
{
	return (new MessageService)->displaySuccess( $type );
}

function displayFail( $type )
{
	return (new MessageService)->displayFail( $type );
}

?>