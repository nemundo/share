<?php

namespace Nemundo\Share\Url;

class EmailUrlShare extends AbstractUrlShare
{

    public function getUrl()
    {

        $url = 'mailto:?subject='.$this->subject.'&body='.rawurlencode($this->getText()).'%0A'.rawurlencode($this->url);;
        return $url;


    }

}