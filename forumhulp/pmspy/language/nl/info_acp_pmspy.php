<?php
/**
*
* @package PM SPy
* @copyright (c) 2016 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_PM_SPY'			=> 'Privéberichten Spion',
	'AUTHOR_IP'				=> 'Auteur IP',
	'DATE'					=> 'Datum',
	'LAST_ONLINE'			=> 'Laatste online datum:',
	'DELETE_PMS'			=> 'Verwijder Privéberichten',
	'NO_PM_SELECTED'		=> 'Geen Privéberichten geselecteerd',
	'NO_PM_DATA'			=> 'Geen Privéberichten data',
	'PM_BOX'				=> 'Privéberichten box',
	'PM_SPY_READ'			=> 'Privéberichten Spion',
	'PM_SPY_READ_EXPLAIN'	=> 'Hier is een lijst van alle Privéberichten op je forum.',
	'READ_MESSAGE'			=> 'Klik om dit bericht te lezen',
	'TO'					=> 'Naar',
	'TOTAL_USERS'			=> 'Totaal gebruikers',
	'PM_COUNT'				=> 'Privéberichten teller',

	'PM_HOLDBOX'			=> 'Ingehouden',
	'PM_INBOX'				=> 'Inbox',
	'PM_NOBOX'				=> 'Geen box',
	'PM_OUTBOX'				=> 'Postvak uit',
	'PM_SAVED'				=> 'Opgeslagen',
	'PM_SENTBOX'			=> 'Verzonden',

	'SORT_FROM'				=> 'Van',
	'SORT_TO'				=> 'Naar',
	'SORT_BCC'				=> 'BCC',
	'SORT_PM_BOX'			=> 'Privéberichten box',

	'LOG_PM_SPY'			=> '<strong>Privéberichten verwijderd door Privéberichten Spion</strong><br>',

	'FH_HELPER_NOTICE'		=> 'Forumhulp helper applicatie bestaat niet! !<br>Download <a href="https://github.com/ForumHulp/helper" target="_blank">forumhulp/helper</a> en upload de helper folder naar je forumhulp extensie folder.',
	'PMSPY_NOTICE'			=> '<div class="phpinfo"><p class="entry">Deze extensie is gevestigd in %1$s » %2$s » %3$s.</p></div>',
));

// Description of extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Beschrijving',
	'DESCRIPTION_NOTICE'	=> 'Extensie nota',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'		=> 'Sorteerbaar',
			'DESCRIPTION_2'		=> 'Automatisch leegmaken van oude bestanden',
			'DESCRIPTION_3'		=> 'Gegroepeerd op gevonden, en niet op gevonden in post.',
		),
		'note' => array(
			'NOTICE_1'			=> 'phpBB 3.2 klaar'
		)
	)
));
