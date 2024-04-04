<footer>
        <div class="footer__menu__block">
            <div class="info__list">
                <a href="">
                    <img class="fotter__logo" src="<?php echo APP_ASSETS; ?>img/common/f_logo.svg" alt="fish interiorz" class="opacity">
                </a>
                <p class="info__list__txt">
                    株式会社ふぃっしゅいんてりあ<br>
                    〒189-0002　東京都東村山市青葉町1-10-15
                </p>
                <div class="info__list__icon">
                    <img src="<?php echo APP_ASSETS; ?>img/common/ico__footer01.png" alt="">
                    <img src="<?php echo APP_ASSETS; ?>img/common/ico__footer02.png" alt="">
                </div>
            </div>
            <div class="other__page__list">
                <ul class="page__link__list">
                    <li class="page__name">
                        <a href="" class="opacity">ショップ</a>
                        <ul class="child__list">
                            <li class="child__link"><a href="https://www.fishinterior.co.jp/shop/" class="opacity">直売所・直営食堂</a></li>
                            <li class="child__link"><a href="https://osakanafish.com/" target="_blank" class="opacity another__tab">おさかな4次元マーケット</a></li>
                            <li class="child__link"><a href="https://fishinterior.i9.bcart.jp/" target="_blank" class="opacity another__tab">ふぃっしゅいんてりあネット</a></li>
                            <li class="child__link"><a href="https://www.fishinterior.co.jp/yuba/" target="_blank" class="opacity another__tab">大豆工房むさしの庵</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="page__link__list">
                    <li class="page__name"><a href="https://www.fishinterior.co.jp/news/" class="opacity">お知らせ</a></li>
                    <li class="page__name"><a href="https://www.fishinterior.co.jp/recruit/" class="opacity">採用情報</a></li>
                    <li class="page__name"><a href="https://www.fishinterior.co.jp/privacy-policy/" class="opacity">プライバシーポリシー</a></li>
                </ul>
            </div>
        </div>
        <div class="footer_copyright">2024© fish interior Inc.</div>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/modernizr.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/common.min.js"></script>

<?php /* wp_footer(); */ ?>
<script>
    var ua = navigator.userAgent
    var sp = (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)
    if (sp) new ViewportExtra(375)
</script>