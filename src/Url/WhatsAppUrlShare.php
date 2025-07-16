<?php

namespace Nemundo\Share\Url;

use Nemundo\Core\Language\Translation;

class WhatsAppUrlShare extends AbstractUrlShare
{

    public function getUrl()
    {

        $url = 'https://wa.me/?text='.rawurlencode((new Translation())->getText($this->getText())).'%0A'.rawurlencode($this->url);
        return $url;

    }

}