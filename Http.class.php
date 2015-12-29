<?php


namespace wechat;

class Http{
	protected $token;
	protected $cache;
	public function __construct(AccessToken $token = null)
    {
        $this->token = $token;
    }
    public function setToken(AccessToken $token)
    {
        $this->token = $token;
    }
    public function request($url, $method = self::GET, $params = array(), $options = array(), $retry = 1)
    {
    }
}