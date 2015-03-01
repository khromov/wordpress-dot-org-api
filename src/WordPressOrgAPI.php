<?php
namespace Khromov;

/**
 * Class WordPressOrgAPI
 * @package Khromov
 */
class WordPressOrgAPI
{
    private $api_base_url;
    private $debug;

    /**
     * @param string $api_base_url
     * @param bool $debug
     */
    function __construct($api_base_url = 'https://api.wordpress.org', $debug = false)
    {
        $this->api_base_url = $api_base_url;
        $this->debug = $debug;
    }

    /**
     * Sets headers in case user wants to echo the output
     */
    function set_headers()
    {
        header("Content-Type: text/plain");
    }

    /**
     * Makes a raw API call
     *
     * @param $api_path
     * @param array $parameters
     * @return string
     */
    function call($api_path, $parameters = array())
    {
        //As long as everything is GET only, this works fine!
        $url =  $this->api_base_url . $api_path . (!empty($parameters) ? ('?' . http_build_query($parameters)) : '');

        if($this->debug)
            echo $url . "\n";

        return file_get_contents($url);
    }
}