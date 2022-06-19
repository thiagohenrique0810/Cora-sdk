<?php


class Invoices extends Common {

	private $className;
	private $street;//required
	private $number;//required
	private $district;//required
	private $city;//required
	private $state;//required
	private $country;//required
	private $complement;//required
	private $zip_code;//required

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
	 * Get the value of zip_code
	 */ 
	public function getZip_code()
	{
		return $this->zip_code;
	}

	/**
	 * Set the value of zip_code
	 *
	 * @return  self
	 */ 
	public function setZip_code($zip_code)
	{
		$this->zip_code = $zip_code;

		return $this;
	}

	/**
	 * Get the value of complement
	 */ 
	public function getComplement()
	{
		return $this->complement;
	}

	/**
	 * Set the value of complement
	 *
	 * @return  self
	 */ 
	public function setComplement($complement)
	{
		$this->complement = $complement;

		return $this;
	}

	/**
	 * Get the value of state
	 */ 
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Set the value of state
	 *
	 * @return  self
	 */ 
	public function setState($state)
	{
		$this->state = $state;

		return $this;
	}

	/**
	 * Get the value of city
	 */ 
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * Set the value of city
	 *
	 * @return  self
	 */ 
	public function setCity($city)
	{
		$this->city = $city;

		return $this;
	}

	/**
	 * Get the value of district
	 */ 
	public function getDistrict()
	{
		return $this->district;
	}

	/**
	 * Set the value of district
	 *
	 * @return  self
	 */ 
	public function setDistrict($district)
	{
		$this->district = $district;

		return $this;
	}

	/**
	 * Get the value of number
	 */ 
	public function getNumber()
	{
		return $this->number;
	}

	/**
	 * Set the value of number
	 *
	 * @return  self
	 */ 
	public function setNumber($number)
	{
		$this->number = $number;

		return $this;
	}

	/**
	 * Get the value of street
	 */ 
	public function getStreet()
	{
		return $this->street;
	}

	/**
	 * Set the value of street
	 *
	 * @return  self
	 */ 
	public function setStreet($street)
	{
		$this->street = $street;

		return $this;
	}

	/**
	 * Get the value of country
	 */ 
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * Set the value of country
	 *
	 * @return  self
	 */ 
	public function setCountry($country)
	{
		$this->country = $country;

		return $this;
	}
}