<?php
namespace Khromov;

/**
 * Class WordPressOrgAPI
 * @package Khromov
 */
class WordPressOrgAPI
{
    private $api_base_url;

    function __construct($api_base_url = 'https://api.wordpress.org')
    {
        $this->api_base_url = $api_base_url;
    }

    /**
     * Secret Key
     *
     * Secret key generator for wp-config.php.
     *
     * @param string $version
     * @param bool $salt
     * @return string
     */
    function secret_key($salt = false, $version = '1.1')
    {
        return $this->api_call('secret-key', $version, ($salt) ? 'salt' : null);
    }

    /**
     * Stats
     */
    function stats_wordpress($version = '1.0')
    {

    }

    function stats_php($version = '1.0')
    {
    }

    function stats_mysql($version = '1.0')
    {
    }

    function stats_plugin($slug, $version = '1.0')
    {
    }

    function stats_plugin_downloads($slug, $limit, $callback, $version = '1.0')
    {
    }

    /**
     * Makes a raw API call
     *
     * @param $api_path
     * @param $version
     * @param null $trailing_data
     * @return string
     */
    function api_call($api_path, $version, $trailing_data = null)
    {
        //As long as everything is GET only, this works fine!
        $url = $this->trailing_slash_it($this->api_base_url) . $this->trailing_slash_it($version) . $this->trailing_slash_it($trailing_data);
        echo $url;
        return file_get_contents($url);
    }

    private function trailing_slash_it($string)
    {
        return rtrim($string, '/') . '/';
    }
}
