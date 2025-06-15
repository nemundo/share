<?php

namespace Nemundo\Share\Install;

use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\Share\Usergroup\ShareUsergroup;
use Nemundo\User\Setup\UsergroupSetup;

class ShareInstall extends AbstractInstall
{
    public function install()
    {
        (new UsergroupSetup())->addUsergroup(new ShareUsergroup());
    }
}