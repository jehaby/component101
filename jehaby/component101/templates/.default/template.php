<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div>
    <table id="jehaby">
        <thead>
        <tr>
            <th> <? echo GetMessage('FULL_NAME') ?> </th>
            <th> <? echo GetMessage('PHONE') ?> </th>
            <th> <? echo GetMessage('POSITION') ?> </th>
        </tr>
        </thead>
        <tbody>
        <? foreach($arResult['ITEMS'] as $person): ?>
            <tr>
                <td> <?= $person[0] ?> </td>
                <td> <?= $person[1] ?> </td>
                <td> <?= $person[2] ?> </td>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>
</div>

<!--better place those in footer, i think-->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.js"></script>

<script>
    $(document).ready( function () {
        $('#jehaby').DataTable( {
            'order': [[ <?= $arParams['SORT']?>, 'asc']],
            'language': <?= file_get_contents(getMessage('DATATABLES_PLUGIN')) ?>,
            'pageLength': <?= $arParams['NUMBER_OF_RECORDS'] ?>
        } );
    } );
</script>




