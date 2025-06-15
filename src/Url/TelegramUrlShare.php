<?php

namespace Nemundo\Share\Url;

class TelegramUrlShare extends AbstractUrlShare
{

    public function getUrl()
    {

        $url  = 'https://t.me/share/url?url='.rawurlencode($this->url).'&text='.rawurlencode($this->text);
        return $url;

    }

}