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
$GLOBALS['TL_DCA']['tl_module']['palettes'][FormController::TYPE] = '{title_legend},name,headline,type;{include_legend}, form;{template_legend:hide},popup_text,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';


$GLOBALS['TL_DCA']['tl_module']['fields']['popup_text'] = array(
    'label'                   => ["Popup text", "Schreib etwas schönes"],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'textarea',
    'eval'                    => array('allowHtml' => true, 'class' => 'monospace', 'rte' => 'tinyMCE', 'helpwizard' => true),
    'explanation'             => 'insertTags',
    'sql'                     => "varchar(1024) NOT NULL default ''"
);
