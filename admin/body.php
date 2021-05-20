<section>
    <div class="title-section">Панель управления</div>
    <ul class="admin-menu">
        <li class="item-admin"><a href="#" class="link-admin">Новости</a></li>
        <li class="item-admin"><a href="#" class="link-admin">Телепрограмма</a></li>
        <li class="item-admin"><a href="#" class="link-admin">Реклама</a></li>
    </ul>
    <div class="admin-news">
        <div class="news">
        <?
            $news = $conn->query("SELECT * FROM `news` ORDER BY `date`");
            while($row = $news->fetch_assoc()){
                $id = $row['id'];
                $authorID = $row['author'];
                $authorData = $conn->query("SELECT login, nickname FROM `user` WHERE `id` = '$authorID'")->fetch_assoc();
                $authorLogin = $authorData['login'];
                $authorNickName = $authorData['nickname'];
        ?>
            <div class="tiding" href="index.html">
                <img src="/news/<?=$row['img']?>">
                <div class="title"><?=$row['title']?></div>
                <div class="description"><?=$row['text']?></div>
                <div class="author"><?(empty($authorLogin))?print($authorLogin):print($authorNickName);?></div>
                <div class="date"><?=$row['date']?></div>
                <form class="btns" action="/lib/delete_tiding.php" method="post">
                    <a href="/news/tiding?id=<?=$id?>" class="btn success">Перейти</a>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" class="btn danger" value="Удалить">
                </form>
            </div>
        <? } ?>
    </div>
    </div>
    <div class="admin-tv">

    </div>
    <div class="admin-ads">
        
    </div>
</section>