<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

error_reporting(E_ALL);


if ($this->startResultCache(3600)) {

    $filename = $arParams['FILEPATH'];

    if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($line = fgets($handle)) !== FALSE) {
            $arResult['ITEMS'][] = explode(',', $line);
        }
        fclose($handle);
    }

    $this->IncludeComponentTemplate();

}

?>