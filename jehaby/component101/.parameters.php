<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentParameters = array(
    "GROUPS" => array(),
    'PARAMETERS' => array(
        'FILEPATH' => array(
            'PARENT' => 'BASE',
            'NAME' => GetMessage('FILEPATH'),
            'TYPE' => 'STRING',
            'MULTIPLE' => 'N',
            'DEFAULT' => 'file2.csv',
            'REFRESH' => 'Y',
        ),
        'SORT' => array(
            'PARENT' => 'BASE',
            'NAME' => GetMessage('DEFAULT_SORTFIELD'),
            'TYPE' => 'LIST',
            'VALUES' => array(
                GetMessage('FULL_NAME'),
                GetMessage('PHONE'),
                GetMessage('POSITION'),
            ),
            'MULTIPLE' => 'N',
            'REFRESH' => 'Y',
        ),
        'NUMBER_OF_RECORDS' => array(
            'PARENT' => 'BASE',
            'NAME' => GetMessage('NUMBER_OF_RECORDS'),
            'TYPE' => 'STRING',
            'MULTIPLE' => 'N',
            'DEFAULT' => '25',
            'REFRESH' => 'Y',
        ),
    ),
);
?>