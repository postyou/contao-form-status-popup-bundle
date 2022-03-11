<?php

declare(strict_types=1);

/*
 * This file is part of Postyou Form Pop-up Bundle.
 * 
 * (c) PostYou - Mateusz 2022 <mateusz.zoldak@postyou.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/postyou/contao-form-status-popup-bundle
 */

namespace Postyou\ContaoFormStatusPopupBundle\Controller\FrontendModule;

use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\CoreBundle\Routing\ScopeMatcher;
use Contao\CoreBundle\ServiceAnnotation\FrontendModule;
use Contao\Date;
use Contao\FrontendUser;
use Contao\ModuleModel;
use Contao\PageModel;
use Contao\Template;
use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Security;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * Class FormController
 *
 * @FrontendModule(FormController::TYPE, category="form_modules", template="mod_popup_form")
 */
class FormController extends AbstractFrontendModuleController
{
    public const TYPE = 'form_popup';

    /**
     * @var PageModel
     */
    protected $page;

    /**
     * Generate the module
     */
    protected function getResponse(Template $template, ModuleModel $model, Request $request): ?Response
    {
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/postyoucontaoformstatuspopup/js/script.js';

        /** @var Session $session */
        $session = $request->getSession();
        $session->get('showPopup');


        if ($session->get('showPopup')) {
            $template->popupText = $model->popup_text;
            $session->set('showPopup', null);
        }

        $template->form = \Contao\Controller::getForm($model->form);

        return $template->getResponse();
    }
}
