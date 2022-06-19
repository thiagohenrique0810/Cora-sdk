<?php


class InvoiceSchedules extends Common {

	private $className;
	private $rule;//required
    private $status;//required
    private $scheduledTo;//required
    private $active;//required

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
     * Get the value of active
     */ 
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set the value of active
     *
     * @return  self
     */ 
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get the value of scheduledTo
     */ 
    public function getScheduledTo()
    {
        return $this->scheduledTo;
    }

    /**
     * Set the value of scheduledTo
     *
     * @return  self
     */ 
    public function setScheduledTo($scheduledTo)
    {
        $this->scheduledTo = $scheduledTo;

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
	 * Get the value of rule
	 */ 
	public function getRule()
	{
		return $this->rule;
	}

	/**
	 * Set the value of rule
	 *
	 * @return  self
	 */ 
	public function setRule($rule)
	{
		$this->rule = $rule;

		return $this;
	}
}