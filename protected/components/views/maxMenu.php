<?if ($innerMenu):$bool=true;?>
<ul id="ulSubMenu">
<?foreach ($menu as $m):
    if (!$bool) echo '<li>|</li>';
    else $bool=false;?>

    <li>
        <a href="/<?=$m['label']?>" name="<?=$m['label']?>">
            <?=$m['name']?>
        </a>
    </li>

<?endforeach;?>
</ul>
<?else: //Вывод основного меню?>
<ul id="ulMenu">
    <li>
        <a href="/">
            <img src="/images/logo2.png">&nbsp;&nbsp;
        </a>
    </li>
<?foreach ($menu as $m):?>
    <li>
        <a href="/<?=$m['label']?>">
            <?if ( $m['label'] == $pageLabel ):?>
            <img src="/images/<?=$m['label']?>_i.png" alt="<?=$m['name']?>">
            <?else:?>
            <img src="/images/<?=$m['label']?>.png" alt="<?=$m['name']?>">
            <?endif;?>
        </a>
    </li>
<?endforeach;?>
</ul>
<?endif?>

