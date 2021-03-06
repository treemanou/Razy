<?php
return [
  'module_code' => 'example',
  'author' => 'Ray Fung',
  'version' => '1.0.0',
  'remap' => '/admin/$1', // Put $1 as a module_code
  'route' => array(
    // (:any)					Pass all arguments to 'any' method if there is no route was matched
    '(:any)' => 'example.main',
    'reroute' => 'example.reroute',
    'custom' => 'example.custom'
  ),
  'callable' => array(
    'method' => 'example.method',
    'onMessage' => 'example.onMessage'
  ),
  'cli' => array(
    'example' => array(
      'callback' => 'example.cli',
      'description' => 'Just a command example description....',
      'help' => array(
        'v' => 'Return example CLI version',
        'm' => 'Say Hello World'
      )
    )
  )
];
?>
