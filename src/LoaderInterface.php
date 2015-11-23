<?php namespace Conformity\Config;

interface LoaderInterface
{
    public function load($environment, $group);
}
