<?php

function httpRequest($url, $sentHeaders = null, $body = null)
{
    try {
        require 'httpful.phar';

        $headers = array(
            'Content-Type' => 'application/json',
        );
        
        //Adiciona algum eventual header recebido ao array de headers
        if (isset($sentHeaders)) {
            $headers = array_merge($headers, $sentHeaders);
        }
        
        $response = \Httpful\Request::get($url)
            ->addHeaders($headers)
            ->body(json_encode($body))
            ->send();

        return $response->body;
    } catch (Exception $ex) {
        die('O seguinte erro ocorreu ao fazer requisição aos servidores: ' . $ex->getMessage());
    }
}
