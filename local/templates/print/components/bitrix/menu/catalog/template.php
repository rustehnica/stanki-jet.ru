<?global $APPLICATION;
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<?if($arParams['NONE'] == "Y"):?><div href="/full-catalog/" class="all-products-link">Каталог</div><?endif;?>
<nav class="<?if($arParams['NONE'] == "Y"):?>catalog-menu none<?else:?>single_page_menu<?endif;?>">
    <ul class="first-level">

<?
$prevLevel = 0;
$i = 0;
foreach ($arResult as $itemKey => $item) {

    if($i >= 1 && $item['DEPTH_LEVEL'] == 1){$i = 0;}
    if($item['TEXT'] == "Компрессорная техника" || $i == 1) {
        $url = "https://kompressory.ruteh.ru";
        $i = 1;
    }elseif($item['TEXT'] == "Станки" || $i == 2){

        $url = "https://stanki.ruteh.ru";
        $i = 2;

    }else{

        $url = "";
        $i = 0;

    }

    if ($item['DEPTH_LEVEL'] == 1) {
        if ($prevLevel == 1) {?>
            </li>
        <?} else if ($prevLevel == 2) {?>
                        </li>
                    </ul>
                </div>
            </li>
        <?} else if ($prevLevel == 3) {?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
        <?}?>

        <li>
            <a href="<?=$url.$item['LINK'];?>"><?=$item['TEXT'];?></a>
    <?}

    if ($item['DEPTH_LEVEL'] == 2) {
        if ($prevLevel == 1) {?>
            <div class="popup">
                <ul class="second-level">
        <?} else if ($prevLevel == 2) {?>
            </li>
        <?} else if ($prevLevel == 3) {?>
                    </li>
                </ul>
            </li>
        <?}

        if ($item['IS_PARENT']):?>
            <li>
                <a href="<?=$url.$item['LINK'];?>"><?=$item['TEXT'];?></a>
        <?else:?>
            <li class="no-child">
                <a href="<?=$url.$item['LINK'];?>"><?=$item['TEXT'];?></a>
        <?endif;
    }

    if ($item['DEPTH_LEVEL'] == 3) {
        if ($prevLevel == 1) {?>
            <div class="popup">
                <ul class="second-level">
                    <li>
                        <ul class="third-level">
        <?} else if ($prevLevel == 2) {?>
                        <ul class="third-level">
        <?} else if ($prevLevel == 3) {?>
            </li>
        <?}?>

        <li>
            <a href="<?=$url.$item['LINK'];?>"><?=$item['TEXT'];?></a>
    <?}

    $prevLevel = $item['DEPTH_LEVEL'];

}

if ($prevLevel == 1) {?>
    </li>
<?} else if ($prevLevel == 2) {?>
                </li>
            </ul>
        </div>
    </li>
<?} else if ($prevLevel == 2) {?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </li>
<?}

?>
</ul>
</nav>