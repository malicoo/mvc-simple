<?php 

/**
 * Check for Current Language
 * @return String
 */
function checkLanguage()
{
    $_SESSION['lang'] = $_REQUEST['lang'] ?? $_SESSION['lang'];
    return $_SESSION['lang'];
}

/**
 * Check if Language is supported and then return language
 * @param  String $lang
 * @return array
 */
function fetchLang($lang)
{
    if (file_exists('../lang/'.$lang.".json")) {
        return json_decode(file_get_contents('../lang/'.$lang.".json"), true);
    } else {
        return json_decode(file_get_contents('../lang/en.json'), true);
    }
}

/**
 * Get Keyword
 * @param  string $name
 * @return string
 */
function lang($name)
{
    $lang = fetchLang(checkLanguage());

    return $lang[$name];
}

/**
 * Get supported languages
 * @return Array
 */
function supported_lang()
{
    return config('supported_lang');
}