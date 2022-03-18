<?php
    $request = new HttpRequest();
    $request->setUrl('https://rest.cryptoapis.io/v2/blockchain-data/{blockchain}/{network}/addresses/{address}/transactions');
    $request->setMethod(HTTP_METH_GET);
    
    $request->setHeaders(array(
        'Content-Type' => 'application/json',
        'X-API-Key' => 'my-api-key'
    ));
    
    try {
        $response = $request->send();
    
        echo $response->getBody();
    } catch (HttpException $ex) {
        echo $ex;
    }

?>