<?php

class Request
{
	public function dispatch()
	{

	}	
}

$request = new Request();

try {
	request->dispatch();
} catch(\Exception $e) {
	// log this error.
}