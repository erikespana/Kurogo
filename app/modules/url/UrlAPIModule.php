<?php

class UrlAPIModule extends APIModule {
    protected $id = 'url';
    protected $vmin = 1;
    protected $vmax = 1;
  
    public function getPayload() {
        $url = $this->getModuleVar('url');
        $payload = array(
            'url'=>$url
        );
        
        return $payload;
    }

    protected function initializeForCommand() {
        
        switch ($this->command)
        {
            case 'data':
                $url = $this->getModuleVar('url');
                $response = array(
                    'url'=>$url
                );
                $this->setResponse($response);
                $this->setResponseVersion(1);
                break;
            default:
                $this->invalidCommand();                
                break;
        }
    
        
  }
}
