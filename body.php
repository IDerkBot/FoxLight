<section class="intro">
    <? include_once($_SERVER['DOCUMENT_ROOT'] . '/components/menu.php'); ?>
    <h2 class="intro-title">Akira</h2>
    <div class="intro-time">21:00-21:30</div>
</section>
<section>
    <div class="title-section"><span>Телепрограмма</span></div>
    <div class="day-line">
        <!-- <div id="control-left"><i class="fas fa-chevron-left"></i></div> -->
        <div class="days">
            <?
                $dateNow = date("Y-m-d");
                $date = new DateTime($dateNow);
                $months = ['', 'Января', 'Февраля', 'Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября', 'Декабря'];
                for ($i=1; $i <= 3; $i++) {
                    $date->modify('-1 day');
                    $month = (int) $date->format('m');
                    echo '<a href="#" class="day">' . $date->format('d') . ' ' . $months[$month] . '</a>';
                }
                $date = new DateTime($dateNow);
                $month = (int) $date->format('m');
                echo '<a href="#" class="day now">' . $date->format('d'). ' ' . $months[$month] . '</a>';
                for ($i=1; $i <= 3; $i++) {
                    $date->modify('+1 day');
                    $month = (int) $date->format('m');
                    echo '<a href="#" class="day">' . $date->format('d') . ' ' . $months[$month] . '</a>';
                }
            ?>
        </div>
        <!-- <div id="control-right"><i class="fas fa-chevron-right"></i></div> -->
    </div>
    <div class="programs">
        <div class="program">
            <img src="img/akira.jpg" alt="">
            <div class="time">09 00</div>
            <div class="title">Akira</div>
            <div class="seria">31</div>
        </div>
        <div class="program">
            <img src="img/sao.jpg" alt="">
            <div class="time">09 30</div>
            <div class="title">Sword Art Online</div>
            <div class="type">Фильм</div>
        </div>
    </div>
</section>