<?global $APPLICATION;
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<div class="production">
    <ul class="first-level">

<?
$prevLevel = 0;
foreach ($arResult as $itemKey => $item) {
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
            <a href="<?=$item['LINK'];?>"><?=$item['TEXT'];?></a>
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
        <?}?>

        <li>
            <a href="<?=$item['LINK'];?>"><?=$item['TEXT'];?></a>
    <?}

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
            <a href="<?=$item['LINK'];?>"><?=$item['TEXT'];?></a>
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
</div>