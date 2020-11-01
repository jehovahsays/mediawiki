<?php
/** Hawaiian (Hawai`i)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$namespaceNames = [
	NS_MEDIA            => 'Pāpaho',
	NS_SPECIAL          => 'Papa_nui',
	NS_TALK             => 'Kūkākūkā',
	NS_USER             => 'Mea_hoʻohana',
	NS_USER_TALK        => 'Kūkākūkā_o_mea_hoʻohana',
	NS_PROJECT_TALK     => 'Kūkākūkā_o_Wikipikia',
	NS_FILE             => 'Waihona',
	NS_FILE_TALK        => 'Kūkākūkā_o_waihona',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Kūkākūkā_o_MediaWiki',
	NS_TEMPLATE         => 'Anakuhi',
	NS_TEMPLATE_TALK    => 'Kūkākūkā_o_anakuhi',
	NS_HELP             => 'Kōkua',
	NS_HELP_TALK        => 'Kūkākūkā_o_kōkua',
	NS_CATEGORY         => 'Māhele',
	NS_CATEGORY_TALK    => 'Kūkākūkā_o_māhele',
];

$namespaceAliases = [
	'Kiʻi' => NS_FILE,
	'Kūkākūkā_o_kiʻi' => NS_FILE_TALK,
];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'MeaHoʻohanaNei', 'MeaHoohanaNei' ],
	'Allmessages'               => [ 'PūlonoApau', 'PulonoApau' ],
	'Ancientpages'              => [ 'ʻAoʻaoKahiko', 'AoaoKahiko' ],
	'Blankpage'                 => [ 'ʻAoʻaoHakahaka', 'AoaoHakahaka' ],
	'Categories'                => [ 'Māhele', 'Mahele' ],
	'ChangeEmail'               => [ 'LoliLekauila' ],
	'Confirmemail'              => [ 'HōʻoiaLekauila', 'HōoiaLekauila', 'HoʻoiaLekauila', 'HooiaLekauila' ],
	'Contributions'             => [ 'Haʻawina', 'Haawina' ],
	'CreateAccount'             => [ 'Kāinoa', 'Kainoa' ],
	'Diff'                      => [ 'ʻOkoʻa', 'Okoa' ],
	'Emailuser'                 => [ 'LekaUila' ],
	'Export'                    => [ 'Kāpuka', 'Kapuka' ],
	'Filepath'                  => [ 'AlaWaihona' ],
	'Import'                    => [ 'Kākomo', 'Kakomo' ],
	'LinkSearch'                => [ 'HuliLoulou' ],
	'Listadmins'                => [ 'HeluKahu' ],
	'Listbots'                  => [ 'HeluLōpako', 'HeluLopako' ],
	'Listredirects'             => [ 'HeluKiahou' ],
	'Listusers'                 => [ 'HeluMeaHoʻohana', 'HeluMeaHoohana' ],
	'Log'                       => [ 'Moʻolelo', 'Moolelo' ],
	'Longpages'                 => [ 'ʻAoʻaoLoa', 'AoaoLoa' ],
	'MIMEsearch'                => [ 'HuliMIME' ],
	'Movepage'                  => [ 'HoʻoneʻeʻAoʻao', 'HooneeAoao' ],
	'Mycontributions'           => [ 'KaʻuHaʻawina', 'KauHaawina' ],
	'Mypage'                    => [ 'KaʻuʻAoʻao', 'KauAoao' ],
	'Mytalk'                    => [ 'KaʻuWalaʻau', 'KauWalaau' ],
	'Newpages'                  => [ 'ʻAoʻaoHou', 'AoaoHou' ],
	'Preferences'               => [ 'Makemake' ],
	'Randompage'                => [ 'Kaulele' ],
	'Recentchanges'             => [ 'NāLoliHou', 'NaLoliHou' ],
	'Redirect'                  => [ 'Kiahou' ],
	'Search'                    => [ 'Huli' ],
	'Shortpages'                => [ 'ʻAoʻaoPōkole', 'AoaoPokole' ],
	'Specialpages'              => [ 'PapaNui' ],
	'Statistics'                => [ 'ʻIkehelupili', 'Ikehelupili' ],
	'Tags'                      => [ 'Lepili' ],
	'Upload'                    => [ 'Hoʻouka', 'Hoouka' ],
	'Userlogin'                 => [ 'ʻEʻe', 'Ee' ],
	'Userlogout'                => [ 'Haʻalele', 'Haalele' ],
	'Version'                   => [ 'Mana' ],
	'Watchlist'                 => [ 'PapaKiaʻi', 'PapaKiai' ],
];

$magicWords = [
	'redirect'                  => [ '0', '#KIAHOU', '#REDIRECT' ],
	'currentmonth'              => [ '1', 'KĒIAMAHINA', 'KEIAMAHINA', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonthname'          => [ '1', 'KĒIAINOAMAHINA', 'KEIAINOAMAHINA', 'CURRENTMONTHNAME' ],
	'currentday'                => [ '1', 'KĒIALĀ', 'KEIALA', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'KĒIALĀ2', 'KEIALA2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'KĒIAINOALĀ', 'KEIAINOALA', 'CURRENTDAYNAME' ],
	'currentyear'               => [ '1', 'KĒIAMAKAHIKI', 'KEIAMAKAHIKI', 'CURRENTYEAR' ],
	'currenttime'               => [ '1', 'KĒIAMANAWA', 'KEIAMANAWA', 'CURRENTTIME' ],
	'currenthour'               => [ '1', 'KĒIAHOLA', 'KEIAHOLA', 'CURRENTHOUR' ],
	'numberofpages'             => [ '1', 'HELUʻAOʻAO', 'HELUAOAO', 'NUMBEROFPAGES' ],
	'numberofarticles'          => [ '1', 'HELUMEA', 'NUMBEROFARTICLES' ],
	'numberoffiles'             => [ '1', 'HELUWAIHONA', 'NUMBEROFFILES' ],
	'numberofusers'             => [ '1', 'HELUMEAHOʻOHANA', 'HELUMEAHOOHANA', 'NUMBEROFUSERS' ],
	'numberofactiveusers'       => [ '1', 'HELUMEAHOʻOHANANEI', 'HELUMEAHOOHANANEI', 'NUMBEROFACTIVEUSERS' ],
	'numberofedits'             => [ '1', 'HELULOLI', 'NUMBEROFEDITS' ],
	'pagename'                  => [ '1', 'INOAʻAOʻAO', 'INOAAOAO', 'PAGENAME' ],
	'namespace'                 => [ '1', 'LEWAINOA', 'NAMESPACE' ],
	'namespacenumber'           => [ '1', 'HELULEWAINOA', 'NAMESPACENUMBER' ],
	'img_right'                 => [ '1', 'ʻākau', 'ākau', 'akau', 'right' ],
	'img_left'                  => [ '1', 'hema', 'left' ],
	'img_none'                  => [ '1', 'ʻaʻohe', 'aohe', 'none' ],
	'img_middle'                => [ '1', 'waena', 'middle' ],
	'img_link'                  => [ '1', 'loulou=$1', 'link=$1' ],
	'sitename'                  => [ '1', 'INOAKAHUA', 'SITENAME' ],
	'pageid'                    => [ '0', 'IDʻAOʻAO', 'IDAOAO', 'PAGEID' ],
	'server'                    => [ '0', 'KIKOWAENAPŪNAEWELE', 'KIKOWAENAPUNAEWELE', 'SERVER' ],
	'servername'                => [ '0', 'INOAKIKOWAENAPŪNAEWELE', 'INOAKIKOWAENAPUNAEWELE', 'SERVERNAME' ],
	'grammar'                   => [ '0', 'PILINAʻŌLELO', 'PILINAŌLELO', 'PILINAOLELO', 'GRAMMAR:' ],
	'gender'                    => [ '0', 'KEKA', 'GENDER:' ],
	'currentweek'               => [ '1', 'KĒIAPULE', 'KEIAPULE', 'CURRENTWEEK' ],
	'raw'                       => [ '0', 'MAKA:', 'RAW:' ],
	'language'                  => [ '0', '#ʻŌLELO', '#ŌLELO', '#OLELO', '#LANGUAGE:' ],
	'numberofadmins'            => [ '1', 'HELUKAHU', 'NUMBEROFADMINS' ],
	'special'                   => [ '0', 'kūikawā', 'special' ],
	'filepath'                  => [ '0', 'ALAWAIHONA:', 'FILEPATH:' ],
	'url_query'                 => [ '0', 'NĪNAU', 'NINAU', 'QUERY' ],
	'pagesincategory_all'       => [ '0', 'apau', 'all' ],
	'pagesincategory_pages'     => [ '0', 'ʻaoʻao', 'aoao', 'pages' ],
	'pagesincategory_files'     => [ '0', 'waihona', 'files' ],
];
