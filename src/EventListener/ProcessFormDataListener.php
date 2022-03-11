<?php

namespace Postyou\ContaoFormStatusPopupBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\Form;

/**
 * @Hook("processFormData")
 */
class ProcessFormDataListener
{
    public function __invoke(
        array $submittedData,
        array $formData,
        ?array $files,
        array $labels,
        Form $form
    ): void {
        $session = \System::getContainer()->get("session");
        $session->set('showPopup', true);
    }
}
