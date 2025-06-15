<?php

namespace Nemundo\Share\Application;

use Nemundo\App\Application\Type\AbstractApplication;
use Nemundo\Share\Data\ShareModelCollection;
use Nemundo\Share\Install\ShareInstall;
use Nemundo\Share\Install\ShareUninstall;
use Nemundo\Share\Site\ShareSite;

class ShareApplication extends AbstractApplication
{
    protected function loadApplication()
    {
        $this->application = 'Share';
        $this->applicationId = '0541f74d-4733-4bb4-9ea2-a68814f481a3';
        $this->modelCollectionClass = ShareModelCollection::class;
        $this->installClass = ShareInstall::class;
        $this->uninstallClass = ShareUninstall::class;
        $this->appSiteClass = ShareSite::class;
    }
}