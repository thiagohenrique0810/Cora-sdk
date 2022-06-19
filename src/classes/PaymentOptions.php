<?php


class PaymentOptions extends Common {

	private $className;
	private $bank_slip;//required

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
	 * Get the value of bank_slip
	 */ 
	public function getBankSlip()
	{
		return $this->bank_slip;
	}

	/**
	 * Set the value of bank_slip
	 *
	 * @return  self
	 */ 
	public function setBankSlip($bank_slip)
	{
		$this->bank_slip = $bank_slip;

		return $this;
	}
}