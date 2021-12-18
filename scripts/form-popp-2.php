<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Google Ad fruited: ',
    'email_message' => 'Following are the deatils of your new target. ',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'noreply@mrsoftwares.in',
    'to' => 'aaditya.goenka@mrsoftwares.in'
    ),
    'fields' => array(
    'school' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'school',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'school\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name\' is required.'
    )
    ),
    'designation' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'designation',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'designation\' is required.'
    )
    ),
    'phone' => array(
    'order' => 4,
    'type' => 'tel',
    'label' => 'phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'phone\' is required.'
    )
    ),
    'email' => array(
    'order' => 5,
    'type' => 'email',
    'label' => 'email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'email\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>