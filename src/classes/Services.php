<?php


class Services extends Common {

	private $className;
	private $name;//required
	private $description;//required
	private $amount;//required
	private $unit;
	private $quantity;
	private $total_amount;

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
	 * Get the value of amount
	 */ 
	public function getAmount()
	{
		return $this->amount;
	}

	/**
	 * Set the value of amount
	 *
	 * @return  self
	 */ 
	public function setAmount($amount)
	{
		$this->amount = $amount;

		return $this;
	}

	/**
	 * Get the value of description
	 */ 
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Set the value of description
	 *
	 * @return  self
	 */ 
	public function setDescription($description)
	{
		$this->description = $description;

		return $this;
	}

	/**
	 * Get the value of name
	 */ 
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set the value of name
	 *
	 * @return  self
	 */ 
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get the value of total_amount
	 */ 
	public function getTotal_amount()
	{
		return $this->total_amount;
	}

	/**
	 * Set the value of total_amount
	 *
	 * @return  self
	 */ 
	public function setTotal_amount($total_amount)
	{
		$this->total_amount = $total_amount;

		return $this;
	}

	/**
	 * Get the value of quantity
	 */ 
	public function getQuantity()
	{
		return $this->quantity;
	}

	/**
	 * Set the value of quantity
	 *
	 * @return  self
	 */ 
	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;

		return $this;
	}

	/**
	 * Get the value of unit
	 */ 
	public function getUnit()
	{
		return $this->unit;
	}

	/**
	 * Set the value of unit
	 *
	 * @return  self
	 */ 
	public function setUnit($unit)
	{
		$this->unit = $unit;

		return $this;
	}
}