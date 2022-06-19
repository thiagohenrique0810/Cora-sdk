<?php


class Payments extends Common {

	private $className;
	private $id;//required
    private $status;//required
    private $created_at;//required
    private $finalized_at;//required
    private $total_paid;//required
    private $interest;//required
    private $fine;//required

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
     * Get the value of total_paid
     */ 
    public function getTotal_paid()
    {
        return $this->total_paid;
    }

    /**
     * Set the value of total_paid
     *
     * @return  self
     */ 
    public function setTotal_paid($total_paid)
    {
        $this->total_paid = $total_paid;

        return $this;
    }

    /**
     * Get the value of finalized_at
     */ 
    public function getFinalized_at()
    {
        return $this->finalized_at;
    }

    /**
     * Set the value of finalized_at
     *
     * @return  self
     */ 
    public function setFinalized_at($finalized_at)
    {
        $this->finalized_at = $finalized_at;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

	/**
	 * Get the value of id
	 */ 
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @return  self
	 */ 
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}
}