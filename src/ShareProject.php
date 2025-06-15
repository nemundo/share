<?php

namespace Nemundo\Share;

use Nemundo\Core\Path\Path;
use Nemundo\Project\AbstractProject;

class ShareProject extends AbstractProject
{
    public function loadProject()
    {
        $this->project = 'Share';
        $this->projectName = 'share';
        $this->path = __DIR__;
        $this->namespace = __NAMESPACE__;
        $this->modelPath = (new Path())
            ->addPath(__DIR__)
            ->addParentPath()
            ->addPath('model')
            ->getPath();
    }
}