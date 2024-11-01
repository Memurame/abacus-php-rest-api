<?php

/**
 * @package Abacus PHP REST API
 * @author Thomas Hirter <memurame@tekomail.ch>
 */

namespace AbacusAPIClient\Resource;

abstract class AbstractResource{

    private $client;

    public function __construct( \AbacusAPIClient\AbacusClient $client )
    {
        $this->client = $client;
    }

    protected function getClient()
    {
        return $this->client;
    }

    protected function getURL( $method_name, array $placeholder_values = [] )
    {
        if ( !array_key_exists( $method_name, $this::URLS ) ) {
            throw new \RuntimeException(
                "Method '$method_name' is not supported for "
                . get_class($this)
                . ' resource'
            );
        }

        $url = $this::URLS[$method_name];
        foreach ( $placeholder_values as $placeholder => $value ) {
            $url = preg_replace( "/\{$placeholder\}/", "$value", $url );
        }

        return $url;
    }
}