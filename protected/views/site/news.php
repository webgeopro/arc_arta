<table id="tabNews">
    <tr>
        <td class="tdLeft">
            <h1>Новости</h1>
            <?foreach ($news as $n):?>
            <div class="divNews">
                <?=$n['date']?><br />
                <a href="" name="<?=$n['id']?>"><?=$n['short']?> ...</a>
            </div>
            <?endforeach;?>

            <div class="divNews">&nbsp;</div>

            <h2>АРХИВ НОВОСТЕЙ</h2>
            <h2 id="2012">2012</h2>
            <ul>
                <li value="01">Январь</li>
                <li value="02">Февраль</li>
                <li value="03">Март</li>
                <li value="04">Апрель</li>
                <li value="05">Май</li>
                <li value="06">Июнь</li>
                <li value="07">Июль</li>
                <li value="08">Август</li>
                <li value="09">Сентябрь</li>
                <li value="10">Октябрь</li>
                <li value="11">Ноябрь</li>
                <li value="12">Декабрь</li>
            </ul>
        </td>
        <td class="tdRight" rowspan="2">
            <h4><?=$news[0]['date']?></h4>
            <h3><?=$news[0]['title']?></h3>
            <span>
                <?=$news[0]['full']?>
            </span>
        </td>
    </tr>
    <tr>
        <td class="tdLeft">
            &nbsp;
        </td>
    </tr>
</table>
<div id="divMainFooter"></div>