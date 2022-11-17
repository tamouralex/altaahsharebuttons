<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['altaahsharebuttons_sharebuttons'] = 'tx_altaahsharebuttons_sharebuttons';
$tempColumns = [
    'tx_altaahsharebuttons_databackendurl' => [
        'config' => [
            'default' => 'null',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_databackendurl',
    ],
    'tx_altaahsharebuttons_databuttonstyle' => [
        'config' => [
            'default' => 'standard',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_databuttonstyle',
    ],
    'tx_altaahsharebuttons_dataflattrcategory' => [
        'config' => [
            'default' => 'null',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_dataflattrcategory',
    ],
    'tx_altaahsharebuttons_dataflattruser' => [
        'config' => [
            'default' => 'null',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_dataflattruser',
    ],
    'tx_altaahsharebuttons_datainfodisplay' => [
        'config' => [
            'default' => 'blank',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_datainfodisplay',
    ],
    'tx_altaahsharebuttons_datainfourl' => [
        'config' => [
            'default' => 'http://ct.de/-2467514',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_datainfourl',
    ],
    'tx_altaahsharebuttons_datalang' => [
        'config' => [
            'default' => 'de',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_datalang',
    ],
    'tx_altaahsharebuttons_datamailbody' => [
        'config' => [
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_datamailbody',
    ],
    'tx_altaahsharebuttons_datamailsubject' => [
        'config' => [
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_datamailsubject',
    ],
    'tx_altaahsharebuttons_datamailurl' => [
        'config' => [
            'default' => '?view=mail',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_datamailurl',
    ],
    'tx_altaahsharebuttons_datamediaurl' => [
        'config' => [
            'default' => 'null',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_datamediaurl',
    ],
    'tx_altaahsharebuttons_dataorientation' => [
        'config' => [
            'default' => 'horizontal',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_dataorientation',
    ],
    'tx_altaahsharebuttons_datareferrertrack' => [
        'config' => [
            'default' => 'null',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_datareferrertrack',
    ],
    'tx_altaahsharebuttons_dataservices' => [
        'config' => [
            'default' => 'twitter, facebook, info',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_dataservices',
    ],
    'tx_altaahsharebuttons_datatheme' => [
        'config' => [
            'default' => 'standard',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_datatheme',
    ],
    'tx_altaahsharebuttons_datatitle' => [
        'config' => [
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_datatitle',
    ],
    'tx_altaahsharebuttons_datatwittervia' => [
        'config' => [
            'default' => 'null',
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_datatwittervia',
    ],
    'tx_altaahsharebuttons_dataurl' => [
        'config' => [
            'type' => 'input',
        ],
        'exclude' => 1,
        'label' => 'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.tx_altaahsharebuttons_dataurl',
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._altaahsharebuttons_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:altaahsharebuttons/Resources/Private/Language/locallang_db.xlf:tt_content.CType.altaahsharebuttons_sharebuttons',
    'altaahsharebuttons_sharebuttons',
    'tx_altaahsharebuttons_sharebuttons',
];
$tempTypes = [
    'altaahsharebuttons_sharebuttons' => [
        'columnsOverrides' => [
            'tx_altaahsharebuttons_dataservices' => [
                'label' => 'data-services',
                'description' => 'An entity-encoded JSON string containing an array of service names to be enabled. Example: data-services="[&quot;facebook&quot;,&quot;twitter&quot;]" Available service names: twitter, facebook, linkedin, pinterest, xing, whatsapp, mail, info, addthis, tumblr, flattr, diaspora, reddit, stumbleupon, threema, weibo, tencent-weibo, qzone, print, telegram, vk, flipboard, pocket, buffer',
            ],
            'tx_altaahsharebuttons_databuttonstyle' => [
                'label' => 'data-button-style',
                'description' => 'ow to display the buttons. Values: standard, icon, icon-count. With icon only the icon is shown, with icon-count icon and counter and with standard icon, text and counter are shown, depending on the display size.',
            ],
            'tx_altaahsharebuttons_datatheme' => [
                'label' => 'data-theme',
                'description' => 'We include 3 color schemes, standard, grey and white.',
            ],
            'tx_altaahsharebuttons_dataorientation' => [
                'label' => 'data-orientation',
                'description' => 'vertical will stack the buttons vertically.',
            ],
            'tx_altaahsharebuttons_databackendurl' => [
                'label' => 'data-backend-url',
                'description' => 'The path to your Shariff backend, see below. Setting the value to null disables the backend feature. No counts will occur.',
            ],
            'tx_altaahsharebuttons_dataflattrcategory' => [
                'label' => 'data-flattr-category',
                'description' => 'Category to be used for Flattr.',
            ],
            'tx_altaahsharebuttons_dataflattruser' => [
                'label' => 'data-flattr-user',
                'description' => 'User that receives Flattr donation.',
            ],
            'tx_altaahsharebuttons_datainfourl' => [
                'label' => 'data-info-url',
                'description' => 'URL of the info page.',
            ],
            'tx_altaahsharebuttons_datainfodisplay' => [
                'label' => 'data-info-display',
                'description' => 'How to display the info page. Values: blank, popup, self.',
            ],
            'tx_altaahsharebuttons_datalang' => [
                'label' => 'data-lang',
                'description' => 'The localisation to use. Available: bg, cs, da, de, en, es, fi, fr, hr, hu, it, ja, ko, nl, no, pl, pt, ro, ru, sk, sl, sr, sv, tr, zh',
            ],
            'tx_altaahsharebuttons_datamailbody' => [
                'label' => 'data-mail-body',
                'description' => 'If a mailto: link is used in data-mail-url, then this value is used as the mail body. The body text should contain the placeholder {url} which will be replaced with the share URL.',
            ],
            'tx_altaahsharebuttons_datamailsubject' => [
                'label' => 'data-mail-subject',
                'description' => 'If a mailto: link is used in data-mail-url, then this value is used as the mail subject.',
            ],
            'tx_altaahsharebuttons_datamailurl' => [
                'label' => 'data-mail-url',
                'description' => 'The url target used for the mail service button',
            ],
            'tx_altaahsharebuttons_datamediaurl' => [
                'label' => 'data-media-url',
                'description' => 'Media url to be shared (pinterest)',
            ],
            'tx_altaahsharebuttons_datareferrertrack' => [
                'label' => 'data-referrer-track',
                'description' => 'A string that will be appended to the share url. Can be disabled using null.',
            ],
            'tx_altaahsharebuttons_datatitle' => [
                'label' => 'data-title',
                'description' => 'Title to be used as share text in Twitter/Whatsapp',
            ],
            'tx_altaahsharebuttons_datatwittervia' => [
                'label' => 'data-twitter-via',
                'description' => 'Screen name of the user to attribute the Tweet to',
            ],
            'tx_altaahsharebuttons_dataurl' => [
                'label' => 'data-url',
                'description' => 'The canonical URL of the page to check',
            ],
        ],
        'showitem' => '
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    tx_altaahsharebuttons_dataservices,tx_altaahsharebuttons_databuttonstyle,
                    tx_altaahsharebuttons_datatheme,
                    tx_altaahsharebuttons_dataorientation,
                    tx_altaahsharebuttons_databackendurl,
                    tx_altaahsharebuttons_dataflattrcategory,
                    tx_altaahsharebuttons_dataflattruser,
                    tx_altaahsharebuttons_datainfourl,
                    tx_altaahsharebuttons_datainfodisplay,
                    tx_altaahsharebuttons_datalang,
                    tx_altaahsharebuttons_datamailbody,
                    tx_altaahsharebuttons_datamailsubject,
                    tx_altaahsharebuttons_datamailurl,
                    tx_altaahsharebuttons_datamediaurl,
                    tx_altaahsharebuttons_datareferrertrack,
                    tx_altaahsharebuttons_datatitle,tx_altaahsharebuttons_datatwittervia,
                    tx_altaahsharebuttons_dataurl,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,
                    categories,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
                ],
];
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'altaahsharebuttons',
    'Configuration/TypoScript/',
    'altaahsharebuttons'
);

});

require(\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName('EXT:backgroundimage4ce/Configuration/TCA/Overrides/tt_content.php'));


