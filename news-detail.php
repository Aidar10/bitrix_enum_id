<? if ($arResult['PROPERTIES']['INTER']) { ?>
    <? foreach ($arResult['PROPERTIES']['INTER']['VALUE_ENUM_ID'] as $arItem) { ?>
        <? if ($arItem == 1) { ?>
            <div class="col-md-6">
                <img src="/local/static/images/two_beds.png" alt=""/>
                <span>Двуспальная кровать</span>
            </div>
        <? } ?>
    <? } ?>
<? } ?>
