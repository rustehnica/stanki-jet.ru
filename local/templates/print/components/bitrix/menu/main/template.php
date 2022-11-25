<?global $APPLICATION;
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<nav class="additional-menu">
    <ul>
        <?foreach ($arResult as $item):?>
            <li><a href="<?=$item['LINK'];?>"><?=$item['TEXT'];?></a></li>
        <?endforeach;?>
    </ul>
</nav>