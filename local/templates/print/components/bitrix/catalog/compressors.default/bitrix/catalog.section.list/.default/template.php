<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

if (count($arResult['SECTIONS']) > 0):?>
    <section class="catalog-sections">
        <?foreach ($arResult['SECTIONS'] as $section):?>
            <div class="item">
                <a href="<?=$section['SECTION_PAGE_URL'];?>" title="<?=$section['NAME'];?>">
                    <div class="image">
                        <img src="<?=$section['PICTURE']['src'];?>" alt="<?=$section['NAME'];?>">
                    </div>
                    <div class="name"><span><?=$section['NAME'];?></span></div>
                </a>
            </div>
        <?endforeach;?>
    </section>
<?endif;?>