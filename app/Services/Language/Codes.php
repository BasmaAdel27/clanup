<?php

namespace App\Services\Language;

class Codes
{
    protected static $codes = [
        "af" => "Afrikaans",
        "sq" => "shqip",
        "am" => "አማርኛ",
        "ar" => "العربية",
        "an" => "aragonés",
        "hy" => "հայերեն",
        "ast" => "asturianu",
        "az" => "azərbaycan dili",
        "eu" => "euskara",
        "be" => "беларуская",
        "bn" => "বাংলা",
        "bs" => "bosanski",
        "br" => "brezhoneg",
        "bg" => "български",
        "ca" => "català",
        "ckb" => "کوردی (دەستنوسی عەرەبی)",
        "zh" => "中文",
        "zh-HK" => "中文（香港）",
        "zh-CN" => "中文（简体）",
        "zh-TW" => "中文（繁體）",
        "co" => "Corsican",
        "hr" => "hrvatski",
        "cs" => "čeština",
        "da" => "dansk",
        "nl" => "Nederlands",
        "en" => "English",
        "en-AU" => "English (Australia)",
        "en-CA" => "English (Canada)",
        "en-IN" => "English (India)",
        "en-NZ" => "English (New Zealand)",
        "en-ZA" => "English (South Africa)",
        "en-GB" => "English (United Kingdom)",
        "en-US" => "English (United States)",
        "eo" => "esperanto",
        "et" => "eesti",
        "fo" => "føroyskt",
        "fil" => "Filipino",
        "fi" => "suomi",
        "fr" => "français",
        "fr-CA" => "français (Canada)",
        "fr-FR" => "français (France)",
        "fr-CH" => "français (Suisse)",
        "gl" => "galego",
        "ka" => "ქართული",
        "de" => "Deutsch",
        "de-AT" => "Deutsch (Österreich)",
        "de-DE" => "Deutsch (Deutschland)",
        "de-LI" => "Deutsch (Liechtenstein)",
        "de-CH" => "Deutsch (Schweiz)",
        "el" => "Ελληνικά",
        "gn" => "Guarani",
        "gu" => "ગુજરાતી",
        "ha" => "Hausa",
        "haw" => "ʻŌlelo Hawaiʻi",
        "he" => "עברית",
        "hi" => "हिन्दी",
        "hu" => "magyar",
        "is" => "íslenska",
        "id" => "Indonesia",
        "ia" => "Interlingua",
        "ga" => "Gaeilge",
        "it" => "italiano",
        "it-IT" => "italiano (Italia)",
        "it-CH" => "italiano (Svizzera)",
        "ja" => "日本語",
        "kn" => "ಕನ್ನಡ",
        "kk" => "қазақ тілі",
        "km" => "ខ្មែរ",
        "ko" => "한국어",
        "ku" => "Kurdî",
        "ky" => "кыргызча",
        "lo" => "ລາວ",
        "la" => "Latin",
        "lv" => "latviešu",
        "ln" => "lingála",
        "lt" => "lietuvių",
        "mk" => "македонски",
        "ms" => "Bahasa Melayu",
        "ml" => "മലയാളം",
        "mt" => "Malti",
        "mr" => "मराठी",
        "mn" => "монгол",
        "ne" => "नेपाली",
        "no" => "norsk",
        "nb" => "norsk bokmål",
        "nn" => "nynorsk",
        "oc" => "Occitan",
        "or" => "ଓଡ଼ିଆ",
        "om" => "Oromoo",
        "ps" => "پښتو",
        "fa" => "فارسی",
        "pl" => "polski",
        "pt" => "português",
        "pt-BR" => "português (Brasil)",
        "pt-PT" => "português (Portugal)",
        "pa" => "ਪੰਜਾਬੀ",
        "qu" => "Quechua",
        "ro" => "română",
        "mo" => "română (Moldova)",
        "rm" => "rumantsch",
        "ru" => "русский",
        "gd" => "Scottish Gaelic",
        "sr" => "српски",
        "sh" => "Croatian",
        "sn" => "chiShona",
        "sd" => "Sindhi",
        "si" => "සිංහල",
        "sk" => "slovenčina",
        "sl" => "slovenščina",
        "so" => "Soomaali",
        "st" => "Southern Sotho",
        "es" => "Español",
        "es-AR" => "Español (Argentina)",
        "es-419" => "Español (Latinoamérica)",
        "es-MX" => "Español (México)",
        "es-ES" => "Español (España)",
        "es-US" => "Español (Estados Unidos)",
        "su" => "Sundanese",
        "sw" => "Kiswahili",
        "sv" => "svenska",
        "tg" => "тоҷикӣ",
        "ta" => "தமிழ்",
        "tt" => "Tatar",
        "te" => "తెలుగు",
        "th" => "ไทย",
        "ti" => "ትግርኛ",
        "to" => "lea fakatonga",
        "tr" => "Türkçe",
        "tk" => "Turkmen",
        "tw" => "Twi",
        "uk" => "українська",
        "ur" => "اردو",
        "ug" => "Uyghur",
        "uz" => "o‘zbek",
        "vi" => "Tiếng Việt",
        "wa" => "wa",
        "cy" => "Cymraeg",
        "fy" => "Western Frisian",
        "xh" => "Xhosa",
        "yi" => "Yiddish",
        "yo" => "Èdè Yorùbá",
        "zu" => "isiZulu"
    ];

    public static function get_language_name($short_code)
    {
        return self::$codes[strtolower($short_code)] ?? '';
    }

    public static function get_language_codes()
    {
        return self::$codes;
    }
}