<?php

namespace Nemundo\Share\Url;

class FacebookUrlShare extends AbstractUrlShare
{

    // https://developers.facebook.com/docs/workplace/sharing/share-dialog/

    public function getUrl()
    {

        $url = 'https://www.facebook.com/sharer/sharer.php?u='.$this->url;
        return $url;

    }

}