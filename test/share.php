<?php

require __DIR__ . '/../config.php';


$x = new \Nemundo\Share\Url\XUrlShare();
$x->subject = 'Test';
$x->url = 'https://test.com';
$x->text = 'Test';

(new \Nemundo\Core\Debug\Debug())->write($x->getUrl());

