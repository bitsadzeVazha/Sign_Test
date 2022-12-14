<?php
namespace Sign\Test\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\HTTP\Client\Curl;

class Inventory extends AbstractHelper
{

    /**
    * @var Curl
    */
    protected $curl;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
    Curl $curl
    ) {
    parent::__construct($context);
    $this->curl = $curl;
    }

    public function makeACurlRequest() {

    $URL = 'https://api.whatdoestrumpthink.com/api/v1/quotes/random';
    // $username = 'username';
    // $password = 'password';

//    //set curl options
////    $this->curl->setOption(CURLOPT_USERPWD, $username . ":" . $password);
//    $this->curl->setOption(CURLOPT_HEADER, 0);
//    $this->curl->setOption(CURLOPT_TIMEOUT, 60);
//    $this->curl->setOption(CURLOPT_RETURNTRANSFER, true);
//    $this->curl->setOption(CURLOPT_CUSTOMREQUEST, 'GET');
    //set curl header
    $this->curl->addHeader("Content-Type", "application/json");
    //get request with url
    $this->curl->get($URL);
    //read response
    $response = $this->curl->getBody();
    return $response;
    }
}
