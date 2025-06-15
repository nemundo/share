<?php

namespace Nemundo\Share\Url;

class LinkedinUrlShare extends AbstractUrlShare
{

    public function getUrl()
    {

        $url = 'https://www.linkedin.com/shareArticle?mini=true&url='.rawurlencode($this->url);
        return $url;

    }

}