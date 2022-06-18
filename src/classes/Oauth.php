<?php

class Oauth extends Common {

	private $className;

	public function __construct($options) {
		parent::__construct($options);

		$this->className = get_class($this);
	}

	public function token()
	{
		$uriRequest = __METHOD__;

		$request = [
			'grant_type=client_credentials'
		];

		$response = $this->sendPost($request, $this->montaUri($uriRequest));

		return $response;
	}


	/**
	* metodo para montar a uri
	*/
	public function montaUri($uriRequest) {
		//montando uri
		$func = explode('::',$uriRequest);
		$uri = $this->getUrl() . strtolower($this->className) . '/' . $func[1];

		return $uri;
	}
}