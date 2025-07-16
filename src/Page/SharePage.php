<?php

namespace Nemundo\Share\Page;

use Nemundo\Admin\Com\Button\AdminSubmitButton;
use Nemundo\Admin\Com\Form\AdminSearchForm;
use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Admin\Com\ListBox\AdminTextBox;
use Nemundo\Admin\Com\Table\AdminLabelValueTable;
use Nemundo\Admin\Com\Title\AdminTitle;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Share\Site\ShareSite;
use Nemundo\Share\Url\EmailUrlShare;
use Nemundo\Share\Url\FacebookUrlShare;
use Nemundo\Share\Url\LinkedinUrlShare;
use Nemundo\Share\Url\TelegramUrlShare;
use Nemundo\Share\Url\XUrlShare;
use Nemundo\Share\Url\WhatsAppUrlShare;

class SharePage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $layout = new AdminFlexboxLayout($this);

        $title = new AdminTitle($layout);
        $title->content = ShareSite::$site->title;

        $search = new AdminSearchForm($layout);

        $subject = new AdminTextBox($search);
        $subject->label = 'Subject';
        $subject->searchMode = true;

        $text = new AdminTextBox($search);
        $text->label = 'Text';
        $text->searchMode = true;

        $url = new AdminTextBox($search);
        $url->label = 'Url';
        $url->searchMode = true;

        new AdminSubmitButton($search);

        if ($text->hasValue() || $url->hasValue()) {


            $facebook = new FacebookUrlShare();
            $facebook->text = $text->getValue();
            $facebook->url = $url->getValue();

            $twitter = new XUrlShare();
            $twitter->text = $text->getValue();
            $twitter->url = $url->getValue();

            $linkedin = new LinkedinUrlShare();
            $linkedin->text = $text->getValue();
            $linkedin->url = $url->getValue();

            $telegram = new TelegramUrlShare();
            $telegram->text = $text->getValue();
            $telegram->url = $url->getValue();

            $whatsapp = new WhatsAppUrlShare();
            $whatsapp->text = $text->getValue();
            $whatsapp->url = $url->getValue();

            $email = new EmailUrlShare();
            $email->subject = $subject->getValue();
            $email->text = $text->getValue();
            $email->url = $url->getValue();

            $table = new AdminLabelValueTable($layout);
            $table->addLabelHyperlink('Facebook', $facebook->getUrl());
            $table->addLabelHyperlink('Twitter', $twitter->getUrl());
            $table->addLabelHyperlink('Linkedin', $linkedin->getUrl());
            $table->addLabelHyperlink('Telegram', $telegram->getUrl());
            $table->addLabelHyperlink('WhatsApp', $whatsapp->getUrl());
            $table->addLabelHyperlink('eMail', $email->getUrl());

        }

        return parent::getContent();
    }
}