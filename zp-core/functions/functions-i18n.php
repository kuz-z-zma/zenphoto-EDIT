<?php
if(!defined('SITE_LOCALE')) {
	if(function_exists('getOptionFromDB')) {
		define('SITE_LOCALE', getOptionFromDB('locale'));
	} else {
		define('SITE_LOCALE', 'en_US');
	}
}


$tz = getOption('time_zone');
if (!empty($tz)) {
	$err = error_reporting(0);
	date_default_timezone_set($tz);
	@ini_set('date.timezone', $tz);
	error_reporting($err);
}
unset($tz);

/**
 * functions-i18n.php -- support functions for internationalization
 * @package zpcore\functions\i18n
 */
// force UTF-8 Ø
function getLanguageArray() {
	return array(
					'af'		 => gettext('Afrikaans'),
					'sq_AL'	 => gettext('Albanian'),
					'ar_AE'	 => gettext('Arabic (United Arab Emirates)'),
					'ar_BH'	 => gettext('Arabic (Bahrain)'),
					'ar_DZ'	 => gettext('Arabic (Algeria)'),
					'ar_EG'	 => gettext('Arabic (Egypt)'),
					'ar_IN'	 => gettext('Arabic (Iran)'),
					'ar_IQ'	 => gettext('Arabic (Iraq)'),
					'ar_JO'	 => gettext('Arabic (Jordan)'),
					'ar_KW'	 => gettext('Arabic (Kuwait)'),
					'ar_LB'	 => gettext('Arabic (Lebanon)'),
					'ar_LY'	 => gettext('Arabic (Libya)'),
					'ar_MA'	 => gettext('Arabic (Morocco)'),
					'ar_OM'	 => gettext('Arabic (Oman)'),
					'ar_QA'	 => gettext('Arabic (Qatar)'),
					'ar_SA'	 => gettext('Arabic (Saudi Arabia)'),
					'ar_SD'	 => gettext('Arabic (Sudan)'),
					'ar_SY'	 => gettext('Arabic (Syria)'),
					'ar_TN'	 => gettext('Arabic (Tunisia)'),
					'ar_YE'	 => gettext('Arabic (Yemen)'),
					'eu_ES'	 => gettext('Basque (Basque)'),
					'be_BY'	 => gettext('Belarusian'),
					'bn_BD'	 => gettext('Bengali'),
					'bg_BG'	 => gettext('Bulgarian'),
					'ca_ES'	 => gettext('Catalan'),
					'zh_CN'	 => gettext('Chinese (Simplified)'),
					'zh_Hans_CN'	 => gettext('Chinese (People’s Republic of China)'),
					'zh_Hans_HK'	 => gettext('Chinese (Hong Kong)'),
					'zh_Hant_TW'	 => gettext('Chinese (Taiwan)'),
					'hr_HR'	 => gettext('Croatian'),
					'cs_CZ'	 => gettext('Czech'),
					'km_KH'	 => gettext('Cambodian'),
					'da_DK'	 => gettext('Danish'),
					'nl_BE'	 => gettext('Dutch (Belgium)'),
					'nl_NL'	 => gettext('Dutch (The Netherlands)'),
					'en_AU'	 => gettext('English (Australia)'),
					'en_CA'	 => gettext('English (Canada)'),
					'en_GB'	 => gettext('English (United Kingdom)'),
					'en_IN'	 => gettext('English (India)'),
					'en_NZ'	 => gettext('English (New Zealand)'),
					'en_PH'	 => gettext('English (Philippines)'),
					'en_US'	 => gettext('English (United States)'),
					'en_ZA'	 => gettext('English (South Africa)'),
					'en_ZW'	 => gettext('English (Zimbabwe)'),
					'eo'		 => gettext('Esperanto'),
					'et_EE'	 => gettext('Estonian'),
					'fi_FI'	 => gettext('Finnish'),
					'fo_FO'	 => gettext('Faroese'),
					'fr_BE'	 => gettext('French (Belgium)'),
					'fr_CA'	 => gettext('French (Canada)'),
					'fr_CH'	 => gettext('French (Switzerland)'),
					'fr_FR'	 => gettext('French (France)'),
					'fr_LU'	 => gettext('French (Luxembourg)'),
					'gl_ES'	 => gettext('Galician'),
					'gu_IN'	 => gettext('Gujarati'),
					'el'		 => gettext('Greek'),
					'de_AT'	 => gettext('German (Austria)'),
					'de_BE'	 => gettext('German (Belgium)'),
					'de_CH'	 => gettext('German (Switzerland)'),
					'de_DE'	 => gettext('German (Germany)'),
					'de_LU'	 => gettext('German (Luxembourg)'),
					'he_IL'	 => gettext('Hebrew'),
					'hi_IN'	 => gettext('Hindi'),
					'hu_HU'	 => gettext('Hungarian'),
					'id_ID'	 => gettext('Indonesian'),
					'is_IS'	 => gettext('Icelandic'),
					'it_CH'	 => gettext('Italian (Switzerland)'),
					'it_IT'	 => gettext('Italian (Italy)'),
					'ja_JP'	 => gettext('Japanese'),
					'ko_KR'	 => gettext('Korean'),
					'lt_LT'	 => gettext('Lithuanian'),
					'lv_LV'	 => gettext('Latvian'),
					'mk_MK'	 => gettext('Macedonian'),
					'mn_MN'	 => gettext('Mongolian'),
					'ms_MY'	 => gettext('Malay'),
					'mg_MG'	 => gettext('Malagasy'),
					'nb_NO'	 => gettext('Norwegian (Bokmål)'),
					'no_NO'	 => gettext('Norwegian'),
					'ni_ID'	 => gettext('Nias'),
					'fa_IR'	 => gettext('Persian'),
					'pl_PL'	 => gettext('Polish'),
					'pt_BR'	 => gettext('Portuguese (Brazil)'),
					'pt_PT'	 => gettext('Portuguese (Portugal)'),
					'ro_RO'	 => gettext('Romanian'),
					'ru_RU'	 => gettext('Russian (Russia)'),
					'ru_UA'	 => gettext('Russian (Ukraine)'),
					'si_LK'	 => gettext('Sinhala'),
					'sk_SK'	 => gettext('Slovak'),
					'sl_SI'	 => gettext('Slovenian'),
					'es_AR'	 => gettext('Spanish (Argentina)'),
					'es_BO'	 => gettext('Spanish (Bolivia)'),
					'es_CL'	 => gettext('Spanish (Chile)'),
					'es_CO'	 => gettext('Spanish (Columbia)'),
					'es_CR'	 => gettext('Spanish (Costa Rica)'),
					'es_DO'	 => gettext('Spanish (Dominican Republic)'),
					'es_EC'	 => gettext('Spanish (Ecuador)'),
					'es_ES'	 => gettext('Spanish (Spain)'),
					'es_GT'	 => gettext('Spanish (Guatemala)'),
					'es_HN'	 => gettext('Spanish (Honduras)'),
					'es_MX'	 => gettext('Spanish (Mexico)'),
					'es_NI'	 => gettext('Spanish (Nicaragua)'),
					'es_PA'	 => gettext('Spanish (Panama)'),
					'es_PE'	 => gettext('Spanish (Peru)'),
					'es_PR'	 => gettext('Spanish (Puerto Rico)'),
					'es_PY'	 => gettext('Spanish (Paraguay)'),
					'es_SV'	 => gettext('Spanish (El Salvador)'),
					'es_US'	 => gettext('Spanish (United States)'),
					'es_UY'	 => gettext('Spanish (Uruguay)'),
					'es_VE'	 => gettext('Spanish (Venezuela)'),
					'es_LA'	 => gettext('Spanish (Latin America)'),
					'sr_YU'	 => gettext('Serbian'),
					'sr_RS'	 => gettext('Serbian'),
					'sv_FI'	 => gettext('Swedish (Finland)'),
					'sv_SE'	 => gettext('Swedish (Sweden)'),
					'ta_IN'	 => gettext('Tamil'),
					'te_IN'	 => gettext('Telugu'),
					'th_TH'	 => gettext('Thai'),
					'tr_TR'	 => gettext('Turkish'),
					'uk_UA'	 => gettext('Ukrainian'),
					'uz_UZ'	 => gettext('Uzbek'),
					'ur_PK'	 => gettext('Urdu (Pakistan)'),
					'vi_VN'	 => gettext('Vietnamese'),
					'cy'		 => gettext('Welsh')
	);
}

/**
 * Returns an array of available language locales.
 *
 * @return array
 *
 */
function generateLanguageList($all = false) {
	global $_zp_active_languages, $_zp_all_languages;
	if (is_null($_zp_all_languages)) {
		$zp_languages = getLanguageArray();
		$dir = @opendir(SERVERPATH . "/" . ZENFOLDER . "/locale/");
		$_zp_active_languages = $_zp_all_languages = array();
		if ($dir !== false) {
			while ($dirname = readdir($dir)) {
				if (is_dir(SERVERPATH . "/" . ZENFOLDER . "/locale/" . $dirname) && (substr($dirname, 0, 1) != '.')) {
					if (isset($zp_languages[$dirname])) {
						$language = $zp_languages[$dirname];
						if (empty($language)) {
							$language = $dirname;
						}
					} else {
						$language = $dirname;
					}
					$_zp_all_languages[$language] = $dirname;
					if (!getOption('disallow_' . $dirname)) {
						$_zp_active_languages[$language] = $dirname;
					}
				}
			}
			closedir($dir);
		}
		ksort($_zp_all_languages);
		ksort($_zp_active_languages);
	}
	if ($all) {
		return $_zp_all_languages;
	} else {
		return $_zp_active_languages;
	}
}

/**
 * Sets the locale, etc. to the zenphoto domain details.
 * Returns the result of setupCurrentLocale()
 *
 */
function setMainDomain() {
	$locale = getUserLocale();
	return setupCurrentLocale($locale);
}

/**
 * Gettext replacement function for separate translations of third party themes.
 * 
 * @param string $string The string to be translated
 * @param string $theme The name of the plugin. Only required for strings on the 'theme_description.php' file like the general theme description. If the theme is the current theme the function sets it automatically.
 * @return string
 */
function gettext_th($string, $theme = Null) {
	global $_zp_gallery;
	if (empty($theme)) {
		$theme = $_zp_gallery->getCurrentTheme();
	}
	setupDomain($theme, 'theme');
	return dgettext($theme, $string);
}

/**
 * ngettext replacement function for separate translations of third party themes.
 * 
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @param string $theme
 * @return string
 */
function ngettext_th($msgid1, $msgid2, $n, $theme = NULL) {
	global $_zp_gallery;
	if (empty($theme)) {
		$theme = $_zp_gallery->getCurrentTheme();
	}
	setupDomain($theme, 'theme');
	return dngettext($theme, $msgid1, $msgid2, $n);
}

/**
 * Gettext replacement function for separate translations of third party plugins within the root plugins folder.
 * 
 * @param string $string The string to be translated
 * @param string $plugin The name of the plugin. Required.
 * @return string
 */
function gettext_pl($string, $plugin) {
	setupDomain($plugin, 'plugin');
	return dgettext($plugin, $string);
}

/**
 * ngettext replacement function for separate translations of third party plugins within the root plugins folder.
 * 
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @param string $plugin
 * @return string
 */
function ngettext_pl($msgid1, $msgid2, $n, $plugin) {
	setupDomain($plugin, 'plugin');
	return dngettext($plugin, $msgid1, $msgid2, $n);
}

/**
 * Wrapper function for setLocale() so that all the proper permutations are used
 * Returns the result from the setLocale call
 * @param $locale the local desired
 * @return string
 */
function i18nSetLocale($locale) {
	global $_zp_rtl_css;
	$en1 = LOCAL_CHARSET;
	$en2 = str_replace('ISO-', 'ISO', $en1);
	$locale_hyphen = str_replace('_', '-', $locale);
	$simple = explode('-', $locale_hyphen);
	$try[$locale . '.UTF8'] = $locale . '.UTF8';
	$try[$locale . '.UTF-8'] = $locale . '.UTF-8';
	$try[$locale . '.@euro'] = $locale . '.@euro';
	$try[$locale . '.' . $en2] = $locale . '.' . $en2;
	$try[$locale . '.' . $en1] = $locale . '.' . $en1;
	$try[$locale] = $locale;
	$try[$simple[0]] = $simple[0];
	$try['NULL'] = NULL;
	$rslt = setlocale(LC_ALL, $try);
	$_zp_rtl_css = in_array(substr($rslt, 0, 2), array('fa', 'ar', 'he', 'hi', 'ur'));
	if (DEBUG_LOCALE) {
		debugLog("setlocale(" . implode(',', $try) . ") returned: $rslt");
	}
	return $rslt;
}

/**
 * Sets the translation domain and type for optional theme or plugin based translations
 * @param $domaine If $type "plugin" or "theme" the file/folder name of the theme or plugin
 * @param $type NULL (Zenphoto main translation), "theme" or "plugin"
 */
function setupDomain($domain = NULL, $type = NULL) {
	global $_zp_active_languages, $_zp_all_languages;
	$set_maindomain = true;
	switch ($type) {
		case "plugin":
			$domainpath = getPlugin($domain . "/locale/");
			$set_maindomain = false;
			break;
		case "theme":
			$domainpath = SERVERPATH . "/" . THEMEFOLDER . "/" . $domain . "/locale/";
			$set_maindomain = false;
			break;
		default:
			$domain = 'zenphoto';
			$domainpath = SERVERPATH . "/" . ZENFOLDER . "/locale/";
			break;
	}
	bindtextdomain($domain, $domainpath);
	bind_textdomain_codeset($domain, 'UTF-8');
	if ($set_maindomain) {
		// this is the main zenphoto domain only and must not be set for plugins/themes!
		textdomain($domain);
	}
	//invalidate because the locale was not setup until now
	$_zp_active_languages = $_zp_all_languages = NULL;
}

/**
 * Setup code for gettext translation
 * Returns the result of the setlocale call
 *
 * @param string $override force locale to this
 * @return mixed
 */
function setupCurrentLocale($override = NULL) {
	if (is_null($override)) {
		$locale = getOption('locale');
	} else {
		$locale = $override;
	}
	if (getOption('disallow_' . $locale)) {
		if (DEBUG_LOCALE)
			debugLogBacktrace("setupCurrentLocale($override): $locale denied by option.");
		$locale = getOption('locale');
		if (empty($locale) || getOption('disallow_' . $locale)) {
			$languages = generateLanguageList();
			$locale = array_shift($languages);
		}
	}
	// gettext setup
	@putenv("LANG=$locale"); // Windows ???
	@putenv("LANGUAGE=$locale"); // Windows ???
	$result = i18nSetLocale($locale);
	if (!$result) {
		if (isset($_REQUEST['locale']) || is_null($override)) { // and it was chosen via locale
			if (isset($_REQUEST['oldlocale'])) {
				$locale = sanitize($_REQUEST['oldlocale'], 3);
				setOption('locale', $locale, false);
				zp_clearCookie('zpcms_locale');
			}
		}
	}
	if (DEBUG_LOCALE)
		debugLogBacktrace("setupCurrentLocale($override): locale=$locale, \$result=$result");
	setupDomain();
	return $result;
}

/**
 * Converts underscore locales like "en_US" to valid IANA/BCP 47 hyphen locales like "en-US"
 * Needed for example in JS or HTML "lang" attributes.
 * 
 * @since 1.5.7
 * 
 * @param string $locale a locale like "en_US", if empty the current locale is used
 * @return string
 */
function getLangAttributeLocale($locale = NULL) {
	if(empty($locale)) {
		$locale = getUserLocale();
	}
	return str_replace('_', '-', $locale);
}

/**
 * This function will parse a given HTTP Accepted language instruction
 * (or retrieve it from $_SERVER if not provided) and will return a sorted
 * array. For example, it will parse fr;en-us;q=0.8
 *
 * Thanks to Fredbird.org for this code.
 *
 * @param string $str optional language string
 * @return array
 */
function parseHttpAcceptLanguage($str = NULL) {
	// getting http instruction if not provided
	if (!$str) {
		$str = @$_SERVER['HTTP_ACCEPT_LANGUAGE'];
	}
	if (!is_string($str)) {
		return array();
	}
	$langs = explode(',', $str);
	// creating output list
	$accepted = array();
	foreach ($langs as $lang) {
		// parsing language preference instructions
		// 2_digit_code[-longer_code][;q=coefficient]
		if (preg_match('/([A-Za-z]{1,2})(-([A-Za-z0-9]+))?(;q=([0-9\.]+))?/', $lang, $found)) {
			// 2 digit lang code
			$code = $found[1];
			// lang code complement
			$morecode = array_key_exists(3, $found) ? $found[3] : false;
			// full lang code
			$fullcode = $morecode ? $code . '_' . $morecode : $code;
			// coefficient (preference value, will be used in sorting the list)
			$coef = sprintf('%3.1f', array_key_exists(5, $found) ? $found[5] : '1');
			// for sorting by coefficient
			if ($coef) { //	q=0 means do not supply this language
				// adding
				$accepted[$coef . '-' . $code] = array('code' => $code, 'coef' => $coef, 'morecode' => $morecode, 'fullcode' => $fullcode);
			}
		}
	}

	// sorting the list by coefficient desc
	krsort($accepted);
	if (DEBUG_LOCALE) {
		debugLog("parseHttpAcceptLanguage($str)");
		debugLogVar('parseHttpAcceptLanguage::$accepted', $accepted);
	}
	return $accepted;
}

/**
 * checks a "supplied" locale against the valid locales.
 * Returns a valid locale if one exists else returns NULL
 * @param string $userlocale
 */
function validateLocale($userlocale, $source) {
	if (DEBUG_LOCALE)
		debugLog("validateLocale($userlocale,$source)");
	$userlocale = strtoupper(str_replace('-', '_', $userlocale));
	$languageSupport = generateLanguageList();
	$locale = NULL;
	if (!empty($userlocale)) {
		foreach ($languageSupport as $key => $value) {
			if (strtoupper($value) == $userlocale) { // we got a match
				$locale = $value;
				if (DEBUG_LOCALE)
					debugLog("locale set from $source: " . $locale);
				break;
			} else if (@preg_match('/^' . $userlocale . '/', strtoupper($value))) { // we got a partial match
				$locale = $value;
				if (DEBUG_LOCALE)
					debugLog("locale set from $source (partial match): " . $locale);
				break;
			}
		}
	}
	return $locale;
}

/**
 * Returns a saved (or posted) locale. Posted locales are stored as a cookie.
 *
 * Sets the 'locale' option to the result (non-persistent)
 */
function getUserLocale() {
	global $_zp_current_admin_obj, $_zp_current_locale;
	if (!$_zp_current_locale) {
		if (DEBUG_LOCALE) {
			debugLogBackTrace("getUserLocale()");
		}
		if (isset($_REQUEST['locale'])) {
			if (isset($_POST['locale'])) {
				$_zp_current_locale = validateLocale(sanitize($_POST['locale']), 'POST');
			} else {
				$_zp_current_locale = validateLocale(sanitize($_GET['locale']), 'URI string');
			}
			if ($_zp_current_locale) {
				zp_setCookie('zpcms_locale', $_zp_current_locale);
			}
			if (DEBUG_LOCALE) {
				debugLog("dynamic_locale from URL: " . sanitize($_REQUEST['locale']) . "=>$_zp_current_locale");
			}
		} else {
			$matches = explode('.', @$_SERVER['HTTP_HOST']);
			if ($_zp_current_locale = validateLocale($matches[0], 'HTTP_HOST')) {
				zp_clearCookie('zpcms_locale');
			}
		}

		if (!$_zp_current_locale && is_object($_zp_current_admin_obj)) {
			$_zp_current_locale = $_zp_current_admin_obj->getLanguage();
			if (DEBUG_LOCALE) {
				debugLog("locale from user: " . $_zp_current_locale);
			}
		}

		if (!$_zp_current_locale) {
			$localeOption = getOption('locale');
			$_zp_current_locale = zp_getCookie('zpcms_locale');
			if (DEBUG_LOCALE) {
				debugLog("locale from option: " . $localeOption . '; dynamic locale=' . $_zp_current_locale);
			}
			if (empty($localeOption) && empty($_zp_current_locale)) { // if one is not set, see if there is a match from 'HTTP_ACCEPT_LANGUAGE'
				$languageSupport = generateLanguageList();
				$userLang = parseHttpAcceptLanguage();
				foreach ($userLang as $lang) {
					$l = strtoupper($lang['fullcode']);
					$_zp_current_locale = validateLocale($l, 'HTTP Accept Language');
					if ($_zp_current_locale) {
						break;
					}
				}
			} else {
				if (empty($_zp_current_locale)) {
					$_zp_current_locale = $localeOption;
				}
			}
		}

		if (empty($_zp_current_locale)) {
			// return "default" language, English if allowed, otherwise whatever is the "first" allowed language
			$languageSupport = generateLanguageList();
			if (in_array('en_US', $languageSupport)) {
				$_zp_current_locale = 'en_US';
			} else {
				$_zp_current_locale = array_shift($languageSupport);
			}
		} else {
			setOption('locale', $_zp_current_locale, false);
		}
		if (DEBUG_LOCALE) {
			debugLog("getUserLocale Returning locale: " . $_zp_current_locale);
		}
	}
	return $_zp_current_locale;
}

/**
 * Returns the sring for the current language from a serialized set of language strings
 * Defaults to the string for the current locale, the en_US string, or the first string which ever is present
 *
 * @param string $dbstring either a serialized languag string array or a single string
 * @param string $locale optional locale of the translation desired
 * @return string
 */
function get_language_string($dbstring, $locale = NULL) {
	$strings = getSerializedArray($dbstring);
	$actual_local = getOption('locale');
	if (is_null($locale))
		$locale = $actual_local;
	if (isset($strings[$locale])) {
		return $strings[$locale];
	}
	if (isset($strings[$actual_local])) {
		return $strings[$actual_local];
	}
	if (isset($strings['en_US'])) {
		return $strings['en_US'];
	}
	return array_shift($strings);
}

/**
 * Returns a list of timezones
 *
 * @return unknown
 */
function getTimezones() {
	$cities = array();
	if (function_exists('timezone_abbreviations_list')) {
		$timezones = timezone_abbreviations_list();
		foreach ($timezones as $key => $zones) {
			foreach ($zones as $id => $zone) {
				/**
				 * Only get timezones explicitely not part of "Others" except UTC
				 * @see http://www.php.net/manual/en/timezones.others.php
				 */
				$timezone_id = strval($zone['timezone_id']);
				if ($timezone_id == 'UTC' || preg_match('/^(Africa|America|Antarctica|Arctic|Asia|Atlantic|Australia|Europe|Indian|Pacific)\//', $timezone_id)) {
					$cities[] = $timezone_id;
				}
			}
		}
		// Only keep one city (the first and also most important) for each set of possibilities.
		$cities = array_unique($cities);

		// Sort by area/city name.
		ksort($cities, SORT_LOCALE_STRING);
	}
	return $cities;
}

/**
 * Returns the difference between the server timez one and the local (users) time zone
 *
 * @param string $server
 * @param string $local
 * @return int
 */
function timezoneDiff($server, $local) {
	if (function_exists('timezone_abbreviations_list')) {
		$timezones = timezone_abbreviations_list();
		foreach ($timezones as $key => $zones) {
			foreach ($zones as $id => $zone) {
				if (!isset($offset_server) && $zone['timezone_id'] === $server) {
					$offset_server = (int) $zone['offset'];
				}
				if (!isset($offset_local) && $zone['timezone_id'] === $local) {
					$offset_local = (int) $zone['offset'];
				}
				if (isset($offset_server) && isset($offset_local)) {
					return ($offset_server - $offset_local) / 3600;
				}
			}
		}
	}
	return 0;
}

/**
 * Returns a serialized "multilingual array" of translations of the currently active translations and if there is an gettext translation
 * Used for setting static multi-lingual strings in the db if a dynamic gettexted text doesn't work.
 * 
 * @param string $text to be translated
 */
function getAllTranslations($text) {
	$entry_locale = getUserLocale();
	$result = array('en_US' => $text);
	$languages = generateLanguageList();
	foreach ($languages as $language) {
		setupCurrentLocale($language);
		$xlated = gettext($text);
		if ($xlated != $text) { // the string has a translation in this language
			$result[$language] = $xlated;
		}
	}
	setupCurrentLocale($entry_locale);
	if (count($result) == 1) {
		return $text;
	}
	return serialize($result);
}

/**
 * creates an SEO language prefix list
 */
function getLanguageSubdomains() {
	$domains = array();
	$langs = generateLanguageList();
	$domains = array();
	foreach ($langs as $value) {
		$domains[substr($value, 0, 2)][] = $value;
	}
	$langs = array();
	foreach ($domains as $simple => $full) {
		if (count($full) > 1) {
			foreach ($full as $loc) {
				$langs[$loc] = $loc;
			}
		} else {
			$langs[$full[0]] = $simple;
		}
	}
	if (isset($langs[SITE_LOCALE])) {
		$langs[SITE_LOCALE] = '';
	}
	return $langs;
}

/**
 * Returns a canonical language name string for the location
 *
 * @param string $loc the location. If NULL use the current cookie
 * @param string separator will be used between the major and qualifier parts, e.g. en_US
 *
 * @return string
 */
function getLanguageText($loc = NULL, $separator = NULL) {
	global $_zp_locale_subdomains;
	if (is_null($loc)) {
		$text = @$_zp_locale_subdomains[sanitize(zp_getCookie('zpcms_locale'))];
	} else {
		$text = @$_zp_locale_subdomains[$loc];
		//en_US always is always empty here so so urls in dynamic locale or html_meta_tags are wrong (Quickfix)
		if (empty($text)) {
			$text = $loc;
		}
	}
	if (!is_null($separator)) {
		$text = str_replace('_', $separator, $text);
	}
	return $text;
}

/**
 * Gets all locales suppported on the current server as a multidimensional array
 * 
 * @param bool $plainarray Default false for a multidimensial array grouped by locale base. Set to true to generate a single dimensional array with all locales. 
 * 
 * @author Stephen Billard (sbillard), Malte Müller (acrylian) - adapted from the old former unsupported tool `list_locales.php`
 * @since 1.5.2
 * @return array
 */
function getSystemLocales($plainarray = false) {
	if (class_exists('ResourceBundle')) {
		$locales = ResourceBundle::getLocales('');
		$array = array();
		if ($plainarray) {
			return $locales;
		} else {
			foreach ($locales as $locale) {
				$expl = explode('_', $locale);
				$array[$expl[0]][] = $locale;				
			}
			return $array;
		}
	}
	return false;
}

/**
 * Returns the real language name to the locale passed.
 * 
 * If available it will use the native PHP Locale class. It returns the name in the language/locale currently set.
 * Otherwise the far more limited internal Zenphoto catalogue stored in getLanguageArray() will be used.
 * 
 * @since 1.5.2
 * 
 * @param string $locale A vaild locale.
 * @return string
 */
function getLanguageDisplayName($locale) {
	if (class_exists('Locale')) {
		return Locale::getDisplayName($locale);
	} else {
		$languages = getLanguageArray();
		if (array_key_exists($locale, $languages)) {
			return $languages[$locale];
		}
	}
}

/**
 * Prints the lang="" attribute for the main <html> element.
 * 
 * @since 1.5.7
 * 
 * @param string $locale Default null so the current locale is used. Or a locale like "en_US" which will get the underscores replaced by hyphens to be valid
 */
function printLangAttribute($locale = null) {
	echo ' lang="' . sanitize(getLangAttributeLocale($locale)) . '"';
}

/**
 * Returns a locale aware - e.g. translated day and month names -  formatted date. Requires the PHP intl extension to work properly
 * Otherwise returns standard formatted date.
 * 
 * @since 1.6
 * @since 1.6.1 Parameter value requirements changed
 * 
 * @param string $format An ICU dateformat string
 * @param string|int $datetime A date() compatible string or a timestamp. If empty "now" is used
 * @return string
 */
function getFormattedLocaleDate($format = 'Y-m-dd', $datetime = '') {
	global $_zp_server_timezone;
	$locale = getUserLocale();

	// Check if datetime string or timstamp integer (to cover if passed as a string)
	$date = getDatetimeObject($datetime);
	if (DEBUG_LOCALE) {
		debuglog('Datetime object: ' . print_r($date, true));
	}
	$locale_preferred = array(
			'locale_preferreddate_time',
			'locale_preferreddate_notime'
	);
	if (in_array($format, $locale_preferred)) {
		deprecationNotice(gettext("The date format options 'locale_preferreddate_time' and 'locale_preferreddate_notime' are deprecated and will be removed in Zenphoto 1.7. Please set individual date and time formats."));
		switch ($format) {
			case 'locale_preferreddate_time':
				$formatter = new IntlDateFormatter(
								$locale,
								IntlDateFormatter::SHORT,
								IntlDateFormatter::SHORT);
				break;
			case 'locale_preferreddate_notime':
				$formatter = new IntlDateFormatter(
								$locale,
								IntlDateFormatter::SHORT,
								IntlDateFormatter::NONE);
				break;
		}
		$fdate = $formatter->format($date);
	} else {
		$dateformat = new IntlDateFormatter(
						$locale,
						IntlDateFormatter::FULL,
						IntlDateFormatter::FULL,
						null,
						IntlDateFormatter::GREGORIAN,
						$format
		);
		$fdate = $dateformat->format($date);
	}
	//fallback to hopefully always have some kind of date…
	if (!$fdate) {
		$fdate = $date->format('Y-m-d');
	}
	return $fdate;
}

$_zp_locale_subdomains = getLanguageSubdomains();