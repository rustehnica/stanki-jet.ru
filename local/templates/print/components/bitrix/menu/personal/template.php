<?global $APPLICATION;
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<ul>
    <?foreach ($arResult as $item):?>
        <?if ($item['SELECTED']):?>
            <li><span class="active"><?=$item['TEXT'];?></span></li>
        <?else:?>
            <li><a href="<?=$item['LINK'];?>"><?=$item['TEXT'];?></a></li>
        <?endif;?>
    <?endforeach;?>
</ul>