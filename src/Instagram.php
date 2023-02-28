<?php

namespace ElxDigital\Instagram;

class Instagram
{
    private $url;
    private $version;
    private $acessToken;   
    private $params; 
    private $endPoint;
    private $callback;

    public function __construct(string $acessToken)
    {
        $this->url = 'graph.instagram.com';
        $this->acessToken = $acessToken;
        $this->version = 'v16.0';
    }

    /**
     * Set the value of params
     *
     * @return  self
     */
    protected function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * Set the value of endPoint
     *
     * @return  self
     */
    protected function setEndPoint(string $endPoint)
    {
        $this->endPoint = (string) $endPoint;
        return $this;
    }

    /**
     * Get the value of callback
     */
    protected function getCallback()
    {
        return $this->callback;
    }

    /**
     * ########################
     * ### METODO PROTEGIDO ###
     * ########################
     */

    //Faz uma requisição do tipo GET
    protected function get()
    {
        $url = "https://{$this->url}/{$this->version}/{$this->endPoint}?{$this->params}&access_token={$this->acessToken}";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            $this->callback = curl_error($ch);
        } else {
            $this->callback = json_decode($result);
        }
        curl_close($ch);
        return;
    }
}