<?php
namespace Nemundo\Share\Install;
use Nemundo\App\Application\Type\Install\AbstractUninstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Share\Data\ShareModelCollection;
use Nemundo\Share\Application\ShareApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class ShareUninstall extends AbstractUninstall {
public function uninstall() {
(new ModelCollectionSetup())->removeCollection(new ShareModelCollection());
}
}