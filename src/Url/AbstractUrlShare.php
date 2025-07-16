<?php

namespace Nemundo\Share\Url;

use Nemundo\Core\Base\AbstractBase;
use Nemundo\Core\Language\Translation;

abstract class AbstractUrlShare extends AbstractBase
{

    public $subject;

    public $text;

    public $url;


    //abstract protected function loadShare();

    abstract public function getUrl();


    protected function getText()
    {

        $text = (new Translation())->getText($this->text);
        return $text;

    }


    public function getIcon()
    {

        //<i class="fa-brands fa-x-twitter"></i>

    }


}