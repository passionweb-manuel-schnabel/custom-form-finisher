<?php

namespace Passionweb\CustomFormFinisher\Domain\Finishers;


use TYPO3\CMS\Form\Domain\Finishers\AbstractFinisher;

class StripContentFinisher extends AbstractFinisher
{
    protected function executeInternal()
    {
        // strip all tags from message content
        $enteredMessage = $this->finisherContext
            ->getFormRuntime()
            ->getRequest()
            ->getArgument('message');
        $strippedMessage = strip_tags($enteredMessage);
        $this->finisherContext
            ->getFormRuntime()
            ->getFormState()
            ->setFormValue('message', $strippedMessage);

        // add further logic here like API requests or something else ...
    }
}
