<?php

namespace Nemundo\Share\Url;

use Nemundo\Core\Base\AbstractBase;

abstract class AbstractUrlShare extends AbstractBase
{

    public $subject;

    public $text;

    public $url;

    abstract public function getUrl();


    public function getIcon() {

        //<i class="fa-brands fa-x-twitter"></i>

    }


}