<?php

namespace Nemundo\Share\Site;

use Nemundo\Share\Page\SharePage;
use Nemundo\Share\Usergroup\ShareUsergroup;
use Nemundo\Web\Site\AbstractSite;

class ShareSite extends AbstractSite
{

    /**
     * @var ShareSite
     */
    public static $site;

    protected function loadSite()
    {
        $this->title = 'Share (Social Media)';
        $this->url = 'share';
        $this->restricted = true;
        $this->addRestrictedUsergroup(new ShareUsergroup());

        ShareSite::$site = $this;

    }

    public function loadContent()
    {
        (new SharePage())->render();
    }
}