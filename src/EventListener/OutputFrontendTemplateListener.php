<?php

namespace Postyou\ContaoFormStatusPopupBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\FormModel;
use Contao\FrontendTemplate;

/**
 * @Hook("outputFrontendTemplate")
 */
class OutputFrontendTemplateListener
{
    public function __invoke(string $buffer, string $template): string
    {

        if ($template === 'fe_page') {

            $session = \System::getContainer()->get("session");
            $popup = $session->get('showPopup');
            $formId = $session->get('formId');

            if ($popup && $formId != null) {
                $session->set('showPopup', null);
                $session->set('formId', null);

                $script = \Contao\Template::generateScriptTag('bundles/postyoucontaoformstatuspopup/js/script.js');

                $popupTemplate = new FrontendTemplate('confirmation_popup');
                $form = FormModel::findById($formId);
                $popupTemplate->popupText = $form->popup_text;
                $buffer = str_replace("</body>", $popupTemplate->parse() . $script . "</body>", $buffer);
            }
        }

        return $buffer;
    }
}
