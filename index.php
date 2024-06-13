<?php

Kirby::plugin('vv/separator-block', [

  'blueprints' => [
    'blocks/separator-block' => __DIR__ . '/blueprints/blocks/separator-block.yml',
  ],

  'snippets' => [
    'blocks/separator-block' => __DIR__ . '/snippets/blocks/separator-block.php',
  ],
]);
