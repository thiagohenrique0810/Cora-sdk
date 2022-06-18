<?php

class BankStatement extends Common {

	private $className;

	public function __construct($options) {
		parent::__construct($options);

		$this->className = get_class($this);
	}

	public function statement()
	{
		$uriRequest = __METHOD__;

		$response = $this->sendGet($request, $this->montaUri($uriRequest));

		return $response;
	}


	/**
	* metodo para montar a uri
	*/
	public function montaUri($uriRequest) {
		//montando uri
		$func = explode('::',$uriRequest);
		$uri = $this->getUrl() . strtolower('bank-statement') . '/' . $func[1];

		return $uri;
	}
}