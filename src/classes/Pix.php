<?php


class Pix extends Common {

	private $className;
	private $emv;//required

	public function __construct($apiKey) {
		parent::__construct($apiKey);

		$this->className = get_class($this);
	}

	public function textToMany($data)
	{
		$uriRequest = __METHOD__;

		$request = [
			'messageData' => [
				'to' => $data['to'],
				'text' => $data['text']
			]
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
		$uri = $this->getUrl() . strtolower($this->className) . '/' . $this->getKey() . '/' . $func[1];

		return $uri;
	}


	/**
	 * Get the value of emv
	 */ 
	public function getEmv()
	{
		return $this->emv;
	}

	/**
	 * Set the value of emv
	 *
	 * @return  self
	 */ 
	public function setEmv($emv)
	{
		$this->emv = $emv;

		return $this;
	}
}