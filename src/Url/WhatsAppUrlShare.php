<?php

namespace Nemundo\Share\Url;

class WhatsAppUrlShare extends AbstractUrlShare
{

    public function getUrl()
    {

        $url = 'https://wa.me/?text='.rawurlencode($this->text).'%0A'.rawurlencode($this->url);
        return $url;

    }

}