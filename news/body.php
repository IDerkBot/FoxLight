<section>
    <div class="title-section"><span>Новости</span></div>
    <div class="news">
    <?
        $news = $conn->query("SELECT * FROM `news` ORDER BY `date`");
        while($row = $news->fetch_assoc()){
            $authorID = $row['author'];
            $authorData = $conn->query("SELECT login, nickname FROM `user` WHERE `id` = '$authorID'")->fetch_assoc();
            $authorLogin = $authorData['login'];
            $authorNickName = $authorData['nickname'];
    ?>
        <a class="tiding" href="index.html">
            <img src="<?=$row['img']?>" alt="">
            <div class="title"><?=$row['title']?></div>
            <div class="description"><?=$row['text']?></div>
            <div class="author"><?(empty($authorLogin))?print($authorLogin):print($authorNickName);?></div>
            <div class="date"><?=$row['date']?></div>
        </a>
    <? } ?>
    </div>
</section>