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

use Postyou\ContaoFormStatusPopupBundle\Controller\FrontendModule\FormController;

/**
 * Frontend modules
 */
$GLOBALS['TL_LANG']['FMD']['form_modules'] = 'Formular Send Status Pop-up';
$GLOBALS['TL_LANG']['FMD'][FormController::TYPE] = ['Popup nach Form abschicken', 'Popup nach Form abschicken'];
