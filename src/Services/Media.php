<?php

namespace ElxDigital\Instagram\Services;
use \ElxDigital\Instagram\Instagram;

class Media extends Instagram
{
    public function __construct(string $acessToken)
    {
        parent::__construct($acessToken);
        $this->setEndPoint('me/media');
    }

    public function getMedia()
    {
        $this->setEndPoint('me/media');
        $this->setParams('fields=id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username&limit=1000');
        $this->get();

        return $this->getCallback()->data;
    }    
}