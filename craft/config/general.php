<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  'localhost' => array(
    'devMode' => true,
    'siteUrl' => 'http://localhost:8888/',
    'environmentVariables' => array(
      'baseUrl'  => 'http://localhost:8888/',
    ),
    'testToEmailAddress' => 'jakewelchert@gmail.com',
  ),

  // Use IP address of your droplet below
  '104.131.188.200' => array(
    'siteUrl' => 'http://omahahealthykids.org/',
    'environmentVariables' => array(
      'basePath' => '/var/www/html/',
      'baseUrl'  => 'http://omahahealthykids.org/',
    )
  )
);