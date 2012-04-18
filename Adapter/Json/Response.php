<?php

namespace FP\WHMCS\Adapter\Json;
use FP\WHMCS\Adapter\Response as BaseResponse;

class Response extends BaseResponse
{
  public function setup()
  {
    $response = json_decode($this->response);

    if (is_null($response))
    {
      switch (json_last_error())
      {
        case JSON_ERROR_DEPTH :
          throw new Exception('Maximum stack depth exceeded');
          break;
        case JSON_ERROR_STATE_MISMATCH :
          throw new Exception('Underflow or the modes mismatch');
          break;
        case JSON_ERROR_CTRL_CHAR :
          throw new Exception('Unexpected control character found');
          break;
        case JSON_ERROR_SYNTAX :
          throw new Exception('Syntax error, malformed JSON');
          break;
        case JSON_ERROR_UTF8 :
          throw new Exception('Malformed UTF-8 characters, possibly incorrectly encoded');
          break;
        default :
          throw new Exception('Unknown error');
          break;
      }
    }
    
    if($response->result == 'error')
      throw new Exception($response->message);

    $this->response = $response;
  }
  
  public function getValue($name)
  {
    if(isset($this->response->$name))
      return $this->response->$name;
    
    return null;
  }
}
