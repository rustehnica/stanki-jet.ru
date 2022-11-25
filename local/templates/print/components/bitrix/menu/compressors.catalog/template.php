<?global $APPLICATION;
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<nav class="single_page_menu">
    <ul class="first-level">

<?
$prevLevel = 0;
$i = 0;
foreach ($arResult as $itemKey => $item) {

if($item['DEPTH_LEVEL'] == 1 && strlen($item['LINK']) == 0 || $i == 1){
$i = 1;
    if ($item['DEPTH_LEVEL'] == 1) {
        if ($prevLevel == 1) { ?>
            </li>
        <? } else if ($prevLevel == 2) { ?>
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
            <a href="https://ruteh.ru<?= $item['LINK']; ?>"><?= $item['TEXT']; ?></a>
            <?
    }

        if ($item['DEPTH_LEVEL'] == 2) {
        if ($prevLevel == 1) { ?>
        <div class="popup">
            <ul class="second-level">
                <? } else if ($prevLevel == 2) { ?>
                    </li>
                <? } else if ($prevLevel == 3) { ?>
                </li>
            </ul>
    </li>
    <?}

    if ($item['IS_PARENT']):?>
    <li>
        <a href="https://ruteh.ru<?= $item['LINK']; ?>"><?= $item['TEXT']; ?></a>
        <? else: ?>
    <li class="no-child">
        <a href="https://ruteh.ru<?= $item['LINK']; ?>"><?= $item['TEXT']; ?></a>
        <?endif;
        }

        if ($item['DEPTH_LEVEL'] == 3) {
        if ($prevLevel == 1) { ?>
        <div class="popup">
            <ul class="second-level">
                <li>
                    <ul class="third-level">
                        <? } else if ($prevLevel == 2) { ?>
                        <ul class="third-level">
                            <? } else if ($prevLevel == 3) { ?>
                                </li>
                                <?
                            } ?>

                            <li>
                                <a href="https://ruteh.ru<?= $item['LINK']; ?>"><?= $item['TEXT']; ?></a>
                                <?
                                }

                                $prevLevel = $item['DEPTH_LEVEL'];
                                }else{


                                if ($item['DEPTH_LEVEL'] == 1) {
                                if ($prevLevel == 1) { ?>
                            </li>
                            <? } else if ($prevLevel == 2) { ?>
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
        <a href="<?= $item['LINK']; ?>"><?= $item['TEXT']; ?></a>
        <?
        }

        if ($item['DEPTH_LEVEL'] == 2) {
        if ($prevLevel == 1) { ?>
        <div class="popup">
            <ul class="second-level">
                <? } else if ($prevLevel == 2) { ?>
                    </li>
                <? } else if ($prevLevel == 3) { ?>
                </li>
            </ul>
    </li>
    <?}

    if ($item['IS_PARENT']):?>
    <li>
        <a href="<?= $item['LINK']; ?>"><?= $item['TEXT']; ?></a>
        <? else: ?>
    <li class="no-child">
        <a href="<?= $item['LINK']; ?>"><?= $item['TEXT']; ?></a>
        <?endif;
        }

        if ($item['DEPTH_LEVEL'] == 3) {
        if ($prevLevel == 1) { ?>
        <div class="popup">
            <ul class="second-level">
                <li>
                    <ul class="third-level">
                        <? } else if ($prevLevel == 2) { ?>
                        <ul class="third-level">
                            <? } else if ($prevLevel == 3) { ?>
                                </li>
                                <?
                            } ?>

                            <li>
                                <a href="<?= $item['LINK']; ?>"><?= $item['TEXT']; ?></a>
                                <?
                                }

                                $prevLevel = $item['DEPTH_LEVEL'];

                                }

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