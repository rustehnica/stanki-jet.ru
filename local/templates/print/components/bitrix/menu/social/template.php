<?global $APPLICATION;
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<div class="caption">Мы в социальных сетях:</div>
<div class="social-menu">
    <ul>
        <?foreach ($arResult as $item):?>
            <li class="<?=$item['TEXT'];?>"><a href="<?=$item['LINK'];?>"></a></li>
        <?endforeach;?>
    </ul>
</div>