<?php

namespace Nemundo\Share\Url;

class EmailUrlShare extends AbstractUrlShare
{

    public function getUrl()
    {

        $url = 'mailto:?subject='.$this->subject.'&body='.rawurlencode($this->text).'%0A'.rawurlencode($this->url);;
        return $url;


    }

}