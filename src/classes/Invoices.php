<?php


class Invoices extends Common {

	private $className;
	private $code;//required
	private $custumer;//required
	private $services;//required
	private $paymentTerms;//required
	private $notifications;
	private $paymentForms;

	public function __construct($apiKey) {
		parent::__construct($apiKey);

		$this->className = get_class($this);
	}

	public function create($data)
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

	public function update($data)
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

	public function delete($data)
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

	public function show($data)
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
	 * Get the value of notifications
	 */ 
	public function getNotifications()
	{
		return $this->notifications;
	}

	/**
	 * Set the value of notifications
	 *
	 * @return  self
	 */ 
	public function setNotifications($notifications)
	{
		$this->notifications = $notifications;

		return $this;
	}

	/**
	 * Get the value of paymentTerms
	 */ 
	public function getPaymentTerms()
	{
		return $this->paymentTerms;
	}

	/**
	 * Set the value of paymentTerms
	 *
	 * @return  self
	 */ 
	public function setPaymentTerms($paymentTerms)
	{
		$this->paymentTerms = $paymentTerms;

		return $this;
	}

	/**
	 * Get the value of services
	 */ 
	public function getServices()
	{
		return $this->services;
	}

	/**
	 * Set the value of services
	 *
	 * @return  self
	 */ 
	public function setServices($services)
	{
		$this->services = $services;

		return $this;
	}

	/**
	 * Get the value of custumer
	 */ 
	public function getCustumer()
	{
		return $this->custumer;
	}

	/**
	 * Set the value of custumer
	 *
	 * @return  self
	 */ 
	public function setCustumer($custumer)
	{
		$this->custumer = $custumer;

		return $this;
	}

	/**
	 * Get the value of code
	 */ 
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * Set the value of code
	 *
	 * @return  self
	 */ 
	public function setCode($code)
	{
		$this->code = $code;

		return $this;
	}

	/**
	 * Get the value of paymentForms
	 */ 
	public function getPaymentForms()
	{
		return $this->paymentForms;
	}

	/**
	 * Set the value of paymentForms
	 *
	 * @return  self
	 */ 
	public function setPaymentForms($paymentForms)
	{
		$this->paymentForms = $paymentForms;

		return $this;
	}
}