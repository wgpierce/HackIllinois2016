<?php

/**
 * This file sets up the information needed to test the examples in different environments.
 *
 * PHP version 5.4
 *
 * @author     David Desberg <david@daviddesberg.com>
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2012 The authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */

/**
 * @var array A list of all the credentials to be used by the different services in the examples
 */
 
$config = include 'config.php';

$servicesCredentials = array(
    'deere' => array(
        'key'       => $config['consumer_key'],
        'secret'    => $config['consumer_secret'],
    )
);

/** @var $serviceFactory \OAuth\ServiceFactory An OAuth service factory. */
$serviceFactory = new \OAuth\ServiceFactory();
