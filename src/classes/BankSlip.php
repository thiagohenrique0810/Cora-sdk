<?php


class BankSlip extends Common {

	private $className;
	private $barcode;//required
    private $digitable;//required
    private $url;//required
    private $our_number;//required

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
     * Get the value of our_number
     */ 
    public function getOur_number()
    {
        return $this->our_number;
    }

    /**
     * Set the value of our_number
     *
     * @return  self
     */ 
    public function setOur_number($our_number)
    {
        $this->our_number = $our_number;

        return $this;
    }

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of digitable
     */ 
    public function getDigitable()
    {
        return $this->digitable;
    }

    /**
     * Set the value of digitable
     *
     * @return  self
     */ 
    public function setDigitable($digitable)
    {
        $this->digitable = $digitable;

        return $this;
    }

	/**
	 * Get the value of barcode
	 */ 
	public function getBarcode()
	{
		return $this->barcode;
	}

	/**
	 * Set the value of barcode
	 *
	 * @return  self
	 */ 
	public function setBarcode($barcode)
	{
		$this->barcode = $barcode;

		return $this;
	}
}