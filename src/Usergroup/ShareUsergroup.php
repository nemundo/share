<?php

namespace Nemundo\Share\Usergroup;

use Nemundo\User\Usergroup\AbstractUsergroup;

class ShareUsergroup extends AbstractUsergroup
{
    protected function loadUsergroup()
    {
        $this->usergroup = 'Share';
        $this->usergroupId = '2075e1aa-7bb9-48d1-a103-c46aac7e8ba7';
    }
}