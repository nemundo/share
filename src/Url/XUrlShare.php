<?php

namespace Nemundo\Share\Url;

class XUrlShare extends AbstractUrlShare
{

    public function getUrl()
    {

        //$url = 'https://twitter.com/intent/tweet?text=' . rawurlencode($this->text) . '%0A' . rawurlencode($this->url);
        $url = 'https://x.com/intent/tweet?text=' . rawurlencode($this->getText()) . '%0A' . rawurlencode($this->url);
        return $url;

    }

}