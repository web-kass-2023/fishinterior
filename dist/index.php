<?php
$thisPageName = 'top';
$path = realpath(dirname(__FILE__) . '') . "/";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link href="<?php echo APP_ASSETS; ?>css/page/top.min.css" rel="stylesheet">
</head>
<body>
    <?php include($path . 'libs/header.php'); ?>
    <main>
        <section class="sec__top__mv">
            <figure class="mv__img">
                <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/top/img_mv_sp.webp" type="image/webp" media="(max-width:767px)">
                    <source srcset="<?php echo APP_ASSETS; ?>img/top/img_mv_sp.jpg" media="(max-width:767px)">
                    <source srcset="<?php echo APP_ASSETS; ?>img/top/img_mv.jpg.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/top/img_mv.jpg" alt="検査風景">
                </picture>
            </figure>
            <div class="main__inner">
                <h1 class="ttl__h1__txt">
                    <span>ふぃっしゅいんてりあ</span><br>
                    <span>細菌検査試験場</span>
                </h1>
                <h2 class="ttl__sub__h1__txt pc">
                    <span>正確な測定・スピーディーな検査結果報告・豊富な経験</span><br>
                    <span>をもとに安全な仕組みのフォローアップもさせて頂きます。</span>
                </h2>
                <h2 class="ttl__sub__h1__txt sp">
                    <span>正確な測定・スピーディーな検査結果報告・豊富な経験をもとに</span><br>
                    <span>安全な仕組みのフォローアップもさせて頂きます。</span>

                </h2>
            </div>
        </section>
        <section class="sec__thought">
            <div class="thought__box">
                <div class="thought__txt__item">
                    <div class="sec__ttl">
                        <h2 class="sec__ttl__txt">わたしたちの想い</h2>
                    </div>
                    <div class="thought__img__item sp">
                    <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/img__thought01.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/top/img__thought01.jpg" alt="想い">
                    </picture>
                    </div>
                    <p class="thought__txt">
                        食の<span class="txtBlue">安心・安全の担保</span>を行う為にお客様の製品を正確に測定を行い、<span class="txtBlue">敏速な結果報告</span>を行います。検査結果報告をもとに、弊社は国際認証FSSC22000の加工場を保有。これまでの<span class="txtBlue">豊富な経験</span>から製造工程・製造工場洗浄度・従業員の教育等のアドバイスをさせて頂きます。必要であれば、御社様の<span class="txtBlue">製造工場のコンサルティング</span>を行う事も可能です。
                    </p>
                </div>
                <div class="thought__img__item pc">
                    <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/img__thought01.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/top/img__thought01.jpg" alt="想い">
                    </picture>
                </div>
            </div>
        </section>
        <section id="s01" class="sec__news">
            <div class="sec__ttl">
                <span class="sec__ttl__en">NEWS</span>
                <h2 class="sec__ttl__txt">お知らせ</h2>
            </div>
            <div class="news__block">
                <a href="" class="news__item">
                    <div class="news__item__left">
                        <div class="news__item__day">2023.12.12</div>
                        <div class="news__item__cate">お知らせ</div>
                        <div class="news__item_ttl">新商品『お刺身新鮮パック』のお知らせ</div>
                    </div>
                    <div class="news__item__right">
                        <span class="ico__circle news__item__circle"></span>
                    </div>
                </a>
                <a href="" class="news__item">
                    <div class="news__item__left">
                        <div class="news__item__day">2023.12.12</div>
                        <div class="news__item__cate">お知らせ</div>
                        <div class="news__item_ttl">新商品『お刺身新鮮パック』のお知らせ</div>
                    </div>
                    <div class="news__item__right">
                        <span class="ico__circle news__item__circle"></span>
                    </div>
                </a>
                <a href="" class="news__item">
                    <div class="news__item__left">
                        <div class="news__item__day">2023.12.12</div>
                        <div class="news__item__cate">お知らせ</div>
                        <div class="news__item_ttl">新商品『お刺身新鮮パック』のお知らせ</div>
                    </div>
                    <div class="news__item__right">
                        <span class="ico__circle news__item__circle"></span>
                    </div>
                </a>
            </div>
        </section>
        <section id="s02" class="sec__service01">
            <div class="sec__service01__left">
                <div class="sec__ttl">
                    <h2 class="sec__ttl__txt">サービス内容</h2>
                </div>
                <p class="sec__news__txt">
                    株式会社ふぃっしゅいんてりあは、飲食店向け活魚・鮮魚・冷凍加工品の営業販売及び個別配送や出荷業務を行っている水産加工会社です。新事業として食品の衛生検査業務を行っています。
                </p>
            </div>
            <div class="sec__service01__right">
            </div>
        </section>
        <section class="sec__service02">
            <div class="service02__block">
                <a href="" class="service02__item">
                    <span class="service02__item__number">service01</span>
                    <img class="service02__item__img" src="<?php echo APP_ASSETS; ?>img/top/ico_service02_item01.svg" alt="">
                    <h3 class="service02__item__ttl">食品加工場の製品衛生検査</h3>
                    <p class="service02__item__txt">食品の品質を評価する検査です。<br>
                        病原菌の有無や微生物の数の<br>
                        検査などを行います。</p>
                </a>
                <a href="" class="service02__item">
                    <span class="service02__item__number">service02</span>
                    <img class="service02__item__img" src="<?php echo APP_ASSETS; ?>img/top/ico_service02_item02.svg" alt="">
                    <h3 class="service02__item__ttl">食品加工場の調理器具衛生検査</h3>
                    <p class="service02__item__txt">設備・調理器具類などに付着している、<br>
                        細菌の拭き取り検査を行います。</p>
                </a>
                <a href="" class="service02__item">
                    <span class="service02__item__number">service03</span>
                    <img class="service02__item__img" src="<?php echo APP_ASSETS; ?>img/top/ico_service02_item03.svg" alt="">
                    <h3 class="service02__item__ttl">加工場従業員の衛生検査</h3>
                    <p class="service02__item__txt">
                        食品を取り扱う従業員の <br>
                        手洗い後の検査や、<br>
                        衛生指導を行います。
                    </p>
                </a>
                <a href="" class="service02__item">
                    <span class="service02__item__number">service04</span>
                    <img class="service02__item__img" src="<?php echo APP_ASSETS; ?>img/top/ico_service02_item01.svg" alt="">
                    <h3 class="service02__item__ttl">食品の栄養成分表示の検査</h3>
                    <p class="service02__item__txt">
                        食品表示に必要な分析を行います。<br>
                        海外輸出先に向け、必要な栄養成分分析も<br>
                        行なっております。
                    </p>
                </a>
                <a href="" class="service02__item">
                    <span class="service02__item__number">service05</span>
                    <img class="service02__item__img" src="<?php echo APP_ASSETS; ?>img/top/ico_service02_item01.svg" alt="">
                    <h3 class="service02__item__ttl">異物検査</h3>
                    <p class="service02__item__txt">
                        食品加工製造時において混入された異物が <br>
                        何かを特定する為の検査を行います。
                    </p>
                </a>
            </div>
        </section>
        <section class="sec__cta">
            <span class="cta__sub">＼ 検査項目入力で<span class="dots">すぐ</span>分かる！ ／</span>
            <a href="" class="cta__btn opacity">
                <span class="cta__btn__txt">料金シミュレーション
                    <span class="cta__btn__circle ico__circle"></span>
                </span>
            </a>
        </section>
        <section class="sec__support">
            <div class="inner">
                <div class="sec__ttl">
                    <h2 class="sec__ttl__txt">こんな場面で私たちが <br>
                        お手伝いします！</h2>
            </div>
            </div>
            <div class="support__block">
                <ul class="support__list">
                    <li class="support__list__item">
                        <span class="txtBlue">原料</span>に問題がないか
                    </li>
                    <li class="support__list__item">
                        製造後の<span class="txtBlue">商品安全性</span>及び確認
                    </li>
                    <li class="support__list__item">
                        <span class="txtBlue">賞味期限・衛生状態</span>の把握及び指導
                    </li>
                    <li class="support__list__item">
                        <span class="txtBlue">従業員</span>の衛生に対する意識向上
                    </li>
                    <li class="support__list__item">
                        商品の<span class="txtBlue">栄養成分</span>の分析
                    </li>
                    <li class="support__list__item">
                        <span class="txtBlue">混入した異物</span>の特定分析
                    </li>
                </ul>
            </div>
        </section>
        <section id="s03" class="sec__feature">
            <div class="sec__ttl">
                <span class="sec__ttl__en">FEATURE</span>
                <h2 class="sec__ttl__txt">特徴</h2>
                <div class="inner">
                    <div class="feature__block">
                        <div class="feature__block__img">
                            <picture>
                                <source srcset="<?php echo APP_ASSETS; ?>img/top/img_feature01.jpg.webp" type="image/webp">
                                <img src="<?php echo APP_ASSETS; ?>img/top/img_feature01.jpg" alt="">
                            </picture>
                        </div>
                        <div class="feature__block__txt">
                            <div class="feature__block__txt__number"><img src="<?php echo APP_ASSETS; ?>img/top/ico_feature_ttl.svg" alt="" class="feature__block__txt__number__ico"><span>FEATURE01</span></div>
                            <h3 class="feature__block__txt__ttl">高品質・高精度</h3>
                            <p class="feature__block__txt__content">
                                厚生労働省の定めた、食品衛生法に基づく検査機関であるため、高品質・高精度の検査結果をお出しすることができます。
                            </p>
                        </div>
                    </div>
                    <div class="feature__block feature__block_reverse">
                        <div class="feature__block__txt">
                            <div class="feature__block__txt__number"><img src="<?php echo APP_ASSETS; ?>img/top/ico_feature_ttl.svg" alt="" class="feature__block__txt__number__ico"><span>FEATURE02</span></div>
                            <h3 class="feature__block__txt__ttl">検査結果が短期間で判明</h3>
                            <p class="feature__block__txt__content">
                            検体にもよりますが検体到着から、最短で翌日で検査結果が判明します。スピーディーな対応はもちろん、基準をみたした品質管理も徹底しております。</p>
                            </div>
                            <div class="feature__block__img">
                                <picture>
                                    <source srcset="<?php echo APP_ASSETS; ?>img/top/img_feature02.jpg.webp" type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/img_feature02.jpg" alt="">
                                </picture>
                            </div>
                    </div>
                    <div class="feature__block">
                        <div class="feature__block__img">
                            <picture>
                                <source srcset="<?php echo APP_ASSETS; ?>img/top/img_feature03.jpg.webp" type="image/webp">
                                <img src="<?php echo APP_ASSETS; ?>img/top/img_feature03.jpg" alt="">
                            </picture>
                        </div>
                        <div class="feature__block__txt">
                            <div class="feature__block__txt__number"><img src="<?php echo APP_ASSETS; ?>img/top/ico_feature_ttl.svg" alt="" class="feature__block__txt__number__ico"><span>FEATURE03</span></div>
                            <h3 class="feature__block__txt__ttl">検査後の安心サポート</h3>
                            <p class="feature__block__txt__content">
                                ふぃっしゅいんてりあ食品衛生検査で、鑑定した検体については、検査結果に伴い簡単なアドバイスが可能です。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec__cta">
            <span class="cta__sub">＼ 検査項目入力で<span class="dots">すぐ</span>分かる！ ／</span>
            <a href="" class="cta__btn opacity">
                <span class="cta__btn__txt">料金シミュレーション
                    <span class="cta__btn__circle ico__circle"></span>
                </span>
            </a>
        </section>
        <section id="s04" class="sec__process">
            <div class="sec__ttl">
                <span class="sec__ttl__en">PROCESS</span>
                <h2 class="sec__ttl__txt">ご利用の流れ</h2>
                <p class="sec__ttl__lead">最短で、検体到着の翌日に<br class="sp">結果を通知致します。</p>
            </div>
            <div class="process__block">
                <div class="process__block__item">
                    <div class="process__block__item__number">01</div>
                    <img src="<?php echo APP_ASSETS; ?>img/top/ico_process01.svg" alt="" class="process__block__item__icon">
                    <div class="process__block__item__ttl">フォームより<br>お申し込み</div>
                </div>
                <div class="process__block__item">
                    <div class="process__block__item__number">02</div>
                    <img src="<?php echo APP_ASSETS; ?>img/top/ico_process02.svg" alt="" class="process__block__item__icon">
                    <div class="process__block__item__ttl">キットによる<br>検体採取</div>
                </div>
                <div class="process__block__item">
                    <div class="process__block__item__number">03</div>
                    <img src="<?php echo APP_ASSETS; ?>img/top/ico_process03.svg" alt="" class="process__block__item__icon">
                    <div class="process__block__item__ttl">採取した検体を<br>試験場へ発送</div>
                </div>
                <div class="process__block__item">
                    <div class="process__block__item__number">04</div>
                    <img src="<?php echo APP_ASSETS; ?>img/top/ico_process04.svg" alt="" class="process__block__item__icon">
                    <div class="process__block__item__ttl">試験場で<br>各項目を検査</div>
                </div>
                <div class="process__block__item">
                    <div class="process__block__item__number">05</div>
                    <img src="<?php echo APP_ASSETS; ?>img/top/ico_process05.svg" alt="" class="process__block__item__icon">
                    <div class="process__block__item__ttl">結果を通知<br>（最短翌日）</div>
                </div>

            </div>

        </section>
        <section id="s05" class="sec__faq">
            <div class="sec__ttl">
                <span class="sec__ttl__en">Q&A</span>
                <h2 class="sec__ttl__txt">よくあるご質問</h2>
            </div>
            <div class="inner">
            <div class="faq__tabs">
                <input id="tab01" type="radio" name="tab_switch" checked>
                <label class="tab_label" for="tab01">検査について</label>
                <input id="tab02" type="radio" name="tab_switch">
                <label class="tab_label tab_label02" for="tab02">ふきとり検査について</label>
                <input id="tab03" type="radio" name="tab_switch">
                <label class="tab_label" for="tab03">その他</label>
                <div class="tab_content" id="tab01_content">
                    <!-- FAQ 検査について -->
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">1回の検査に必要な検体は何グラムですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                        1検体50gとなります。検査項目により変動する場合があります。<br>
                                        担当者までお気軽にお問い合わせください。
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">送料はどちらが負担しますか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                            <div class="accordion__item__txt">
                                <span class="a__icon qa__icon">A.</span>
                                <p class="qa_txt a_txt">
                                    当社で負担させて頂きます。
                                </p>
                            </div>
                        </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">検査用の検体を持ち込むことは可能ですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                        可能です。弊社営業カレンダーをご確認下さい。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">拭き取り検査はどの様におこなえばいいですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                    拭き取りキット及び取り扱い方法用紙を郵送させて頂きます。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">お支払い方法はクレジット決済のみですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                        現状はクレジット決済のみとなります。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">ホームページに記載されていない項目の検査は行うことは可能ですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                        可能です。担当者までお気軽にお問い合わせください。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">日曜日・祝日でも検査対応や結果報告が可能ですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                    対応可能ですが、別途料金が発生します。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">検査後のアドバイスは頂けますか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                    アドバイスさせて頂きます。また必要であればコンサルティングもさせて頂きます。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                </div>
                <div class="tab_content" id="tab02_content">
                    <!-- FAQ ふきとり検査について -->
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">1回の検査に必要な検体は何グラムですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                        1検体50gとなります。検査項目により変動する場合があります。<br>
                                        担当者までお気軽にお問い合わせください。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">送料はどちらが負担しますか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                            <div class="accordion__item__txt">
                                <span class="a__icon qa__icon">A.</span>
                                <p class="qa_txt a_txt">
                                    当社で負担させて頂きます。
                                </p>
                            </div>
                        </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">検査用の検体を持ち込むことは可能ですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                        可能です。弊社営業カレンダーをご確認下さい。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">拭き取り検査はどの様におこなえばいいですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                    拭き取りキット及び取り扱い方法用紙を郵送させて頂きます。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">お支払い方法はクレジット決済のみですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                        現状はクレジット決済のみとなります。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">ホームページに記載されていない項目の検査は行うことは可能ですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                        可能です。担当者までお気軽にお問い合わせください。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">日曜日・祝日でも検査対応や結果報告が可能ですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                    対応可能ですが、別途料金が発生します。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">検査後のアドバイスは頂けますか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                    アドバイスさせて頂きます。また必要であればコンサルティングもさせて頂きます。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                </div>
                <div class="tab_content" id="tab03_content">
                    <!-- FAQ その他 -->
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">1回の検査に必要な検体は何グラムですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                        1検体50gとなります。検査項目により変動する場合があります。<br>
                                        担当者までお気軽にお問い合わせください。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">送料はどちらが負担しますか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                            <div class="accordion__item__txt">
                                <span class="a__icon qa__icon">A.</span>
                                <p class="qa_txt a_txt">
                                    当社で負担させて頂きます。
                                </p>
                            </div>
                        </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">検査用の検体を持ち込むことは可能ですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                        可能です。弊社営業カレンダーをご確認下さい。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">拭き取り検査はどの様におこなえばいいですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                    拭き取りキット及び取り扱い方法用紙を郵送させて頂きます。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">お支払い方法はクレジット決済のみですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                        現状はクレジット決済のみとなります。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">ホームページに記載されていない項目の検査は行うことは可能ですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                        可能です。担当者までお気軽にお問い合わせください。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">日曜日・祝日でも検査対応や結果報告が可能ですか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                    対応可能ですが、別途料金が発生します。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__itemQ js-accordion-title">
                            <div class="accordion__item__txt">
                                <span class="q_icon qa_icon">Q.</span>
                                <p class="q_txt qa_txt">検査後のアドバイスは頂けますか？</p>
                            </div>
                            <div class="accordion__item__txt__icon"></div>
                        </div>
                        <!--/.accordion-title-->
                        <div class="accordion__content" style="display: none;">
                            <div class="accordion__content__inner">
                                <div class="accordion__item__txt">
                                    <span class="a__icon qa__icon">A.</span>
                                    <p class="qa_txt a_txt">
                                    アドバイスさせて頂きます。また必要であればコンサルティングもさせて頂きます。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.accordion-content-->
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="sec__pageNav">
            <a href="https://www.fishinterior.co.jp/company/" class="sec__pageNav__item">
                <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/common/img_pagenav01.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/common/img_pagenav01.jpg" alt="">
                </picture>
                <span>会社概要</span>
                <span class="ico__circle"></span>
            </a>
            <a href="https://www.fishinterior.co.jp/" class="sec__pageNav__item">
                <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/common/img_pagenav02.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/common/img_pagenav02.jpg" alt="">
                </picture>
                <span>公式サイトはこちら</span>
                <span class="ico__circle"></span>
            </a>
            <a href="https://www.fishinterior.co.jp/contact/" class="sec__pageNav__item">
                <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/common/img_pagenav03.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/common/img_pagenav03.jpg" alt="">
                </picture>
                <span>お問い合わせはこちら</span>
                <span class="ico__circle"></span>
            </a>
        </section>
    </main>
    <?php include($path . 'libs/footer.php'); ?>
</body>

</html>