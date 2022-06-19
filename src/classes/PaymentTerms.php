<?php


class PaymentTerms extends Common {

	private $className;
	private $dueDate;//required
	private $fine;
	private $interest;
	private $discount;

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
	 * Get the value of discount
	 */ 
	public function getDiscount()
	{
		return $this->discount;
	}

	/**
	 * Set the value of discount
	 *
	 * @return  self
	 */ 
	public function setDiscount($discount)
	{
		$this->discount = $discount;

		return $this;
	}

	/**
	 * Get the value of interest
	 */ 
	public function getInterest()
	{
		return $this->interest;
	}

	/**
	 * Set the value of interest
	 *
	 * @return  self
	 */ 
	public function setInterest($interest)
	{
		$this->interest = $interest;

		return $this;
	}

	/**
	 * Get the value of fine
	 */ 
	public function getFine()
	{
		return $this->fine;
	}

	/**
	 * Set the value of fine
	 *
	 * @return  self
	 */ 
	public function setFine($fine)
	{
		$this->fine = $fine;

		return $this;
	}

	/**
	 * Get the value of dueDate
	 */ 
	public function getDueDate()
	{
		return $this->dueDate;
	}

	/**
	 * Set the value of dueDate
	 *
	 * @return  self
	 */ 
	public function setDueDate($dueDate)
	{
		$this->dueDate = $dueDate;

		return $this;
	}
}