<?php


class Invoices extends Common {

	private $className;
	private $channels;
	private $destination;
	private $rules;

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
	 * Get the value of rules
	 */ 
	public function getRules()
	{
		return $this->rules;
	}

	/**
	 * Set the value of rules
	 *
	 * @return  self
	 */ 
	public function setRules($rules)
	{
		$this->rules = $rules;

		return $this;
	}

	/**
	 * Get the value of destination
	 */ 
	public function getDestination()
	{
		return $this->destination;
	}

	/**
	 * Set the value of destination
	 *
	 * @return  self
	 */ 
	public function setDestination($destination)
	{
		$this->destination = $destination;

		return $this;
	}

	/**
	 * Get the value of channels
	 */ 
	public function getChannels()
	{
		return $this->channels;
	}

	/**
	 * Set the value of channels
	 *
	 * @return  self
	 */ 
	public function setChannels($channels)
	{
		$this->channels = $channels;

		return $this;
	}
}