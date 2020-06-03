<?php
/**
 * This file is part of Swoole.
 * 
 * @link     https://github.com/phpredis/phpredis/blob/develop/cluster.markdown#readme
 * @link     https://www.swoole.com
 */

declare(strict_types=1);

namespace yuzl;

class RedisClusterConfig
{
    /** @var array $hosts nodes as seeds */
    protected $hosts = [];

    /** @var float  $read_timeout */
    protected $read_timeout = 0.0;

    /** @var float $write_timeout */
    protected $write_timeout = 0.0;

    /** @var string $clusterName name need config php.ini*/
    protected $clusterName = null;

    /** @var bool $persistent persistent connections to each node. */
    protected $persistent = true;

    /** @var int */
    protected $retry_interval = 0;

    /** @var string $auth_password */
    protected $auth_password = '';
    
    public function getNodes()
    {
        return $this->hosts;
    }

    public function withNodes($hosts): self
    {
        $this->hosts = $hosts;
        return $this;
    }

    public function getTimeout(): float
    {
        return $this->timeout;
    }

    public function withTimeout(float $timeout): self
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function getReadTimeout(): float
    {
        return $this->read_timeout;
    }

    public function withReadTimeout(float $read_timeout): self
    {
        $this->read_timeout = $read_timeout;
        return $this;
    }

    public function getWriteimeout(): float
    {
        return $this->write_timeout;
    }

    public function withWriteimeout(float $write_timeout): self
    {
        $this->write_timeout = $write_timeout;
        return $this;
    }

    public function getAuth(): string
    {
        return $this->auth;
    }

    public function withAuth(string $auth): self
    {
        $this->auth = $auth;
        return $this;
    }
}
