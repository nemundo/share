<?php

namespace Nemundo\Share\Url;

class TwitterUrlShare extends AbstractUrlShare
{

    public function getUrl()
    {

        $url = 'https://twitter.com/intent/tweet?text=' . rawurlencode($this->text) . '%0A' . rawurlencode($this->url);
        return $url;

    }

}