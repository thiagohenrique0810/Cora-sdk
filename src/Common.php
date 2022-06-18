<?php

include_once('Config.php');

class Common {

	/** CONFIG **/
	private $url;
	private $client_id;
	private $client_secret;

	public function __construct($options) 
	{
		if($options['production']) {
			//url api
			$this->setUrl('https://api.cora.com.br/');
		}else {
			//url api
			$this->setUrl('https://api.stage.cora.com.br/');
		}

		//verificando se foi enviada a chave de integracao
		if(!empty($options['client_id']) && !empty($options['client_secret'])) {
			$this->client_id = $options['client_id'];
			$this->client_secret = $options['client_secret'];
		}else {
			die('missing integration key');
		}
	}

	public function sendGet($data, $uriRequest)
	{
		//die($this->key);
		if(!empty($data)) {
	        return sendRequest([
	        	'url' => $uriRequest,
	        	'method' => 'GET',
	        ]);
    	}
	}

	public function sendPost($data, $uriRequest) 
	{
		//die($this->key);
		if(!empty($data)) {
	        return sendRequest([
	        	'url' => $uriRequest,
	        	'method' => 'POST',
	        	'request' => $data
	        ]);
    	}
	}

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }
}