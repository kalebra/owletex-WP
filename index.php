<?php
/*
 Template Name: Owletex Landing
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <script type="text/javascript">
        var templateUrl = '<?= get_bloginfo("template_url"); ?>';
    </script>
    <?php wp_head() ?>
</head>
<body>
<div class="header-wrapper">
    <div class="header-background-wrapper">
        <img src="<?php bloginfo('template_url'); ?>/img/header-bg.svg" alt="header-background">
        <img src="<?php bloginfo('template_url'); ?>/img/header-greed.svg" alt="header-greed">
    </div>
    <header>
        <div class="top-line">
            <div class="logo">
                <a href="/"></a>
            </div>
            <nav>
                <a href="/">Новости</a>
                <div class="login">Войти</div>
                <div class="divider"></div>
                <a href="/" class="sign-up">Зарегистрироваться</a>
                <div class="dropdown-language">
                    <a href="#" class="dropdown-active">
                        En
                        <span class="arrow-down"></span>
                    </a>
                    <div class="dropdown choices">
                        <ul>
                            <li class="active">En</li>
                            <li>Ru</li>
                            <li>Fr</li>
                            <li>Gr</li>
                        </ul>
                    </div>
                </div>
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="dropdown burger-menu">
                        <a href="#adv">Преимущества</a>
                        <a href="#exc">Биржи с которыми работает сервис</a>
                        <a href="#sch">Схема работы</a>
                        <a href="#opp">Основные возможности</a>
                        <a href="#tar">Тарифы</a>
                        <a href="#faq">FAQ</a>
                        <a href="#new">Новости</a>
                        <a href="#par">Партнеры</a>
                        <a href="/">Войти</a>
                        <div>
                            <a href="/" class="sign-up">Зарегистрироваться</a>
                            <div class="dropdown-language">
                                <a href="#" class="dropdown-active">
                                    En
                                    <span class="arrow-down"></span>
                                </a>
                                <div class="dropdown-choices">
                                    <a href="#">En</a>
                                    <a href="#">Ru</a>
                                    <a href="#">Fr</a>
                                    <a href="#">Gr</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="header-main">
            <div class="header-main-left">
                <h1><?php echo get_theme_mod( 'header-h1', 'Краткое описание сервиса в одном предложении' ); ?></h1>
                <p><?php echo get_theme_mod( 'header-p', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' ); ?></p>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/img/header-main-img.png" alt="App Screen">
        </div>
    </header>
</div>
<section class="advantages" id="adv">
    <h2>Преимущества</h2>
    <div class="head-line"></div>
    <div class="adv-desc">
        <div class="adv-desc-inner">
            <div class="adv-desc-left">
                <div>
                    <div id="b1" class="active">
                        <h3><?php echo get_theme_mod( 'advantages-h3-1', 'Работа с ведущими биржами в одном окне' ); ?></h3>
                        <p><?php echo get_theme_mod( 'advantages-p-1', 'Сервис позволяет работать одновременно с несколькими ведущими криптовалютными биржами. Вы можете подключить все свои аккаунты и производить торговые операции в одном интерфейсе как с каждой биржей в отдельности, так и производить трансфер активов между ними' ); ?></p>
                    </div>
                    <div id="b2">
                        <h3><?php echo get_theme_mod( 'advantages-h3-2', 'Возможность автоматизированной торговли (боты)' ); ?></h3>
                        <p><?php echo get_theme_mod( 'advantages-p-2', 'С Owletex вы имеете возможность использования системы автоматизированной торговли, которая будет зарабатывать деньги без вашего непосредственного участия. Внутри сервиса вы можете создавать и настраивать неограниченное количество трейдинг-ботов, каждый из которых может реализовывать отдельные торговые стратегии для различных криптовалютных активов.' ); ?></p>
                    </div>
                    <div id="b3">
                        <h3><?php echo get_theme_mod( 'advantages-h3-3', 'Наличие демо-аккаунта' ); ?></h3>
                        <p><?php echo get_theme_mod( 'advantages-p-3', 'Торговля криптовалютами - рискованное занятие, постоянно требующее держать обе руки на пульсе валютного рынка. Если вы не уверены в разрабатываемых стратегиях, вы можете протестировать их внутри нашего сервиса в тестовом режиме перед "боевым" запуском.' ); ?></p>
                    </div>
                    <div id="b4">
                        <h3><?php echo get_theme_mod( 'advantages-h3-4', 'Сквозная аналитика портфеля' ); ?></h3>
                        <p><?php echo get_theme_mod( 'advantages-p-4', 'С помощью гибких инструментов внутри сервиса вы сможете производить ежедневную аналитику вашего заработка, расходов и состояния портфеля. Также имеется возможность слежения за состоянием криптовалютного рынка в мире. С помощью несложных действий вы сможете производить пополнение балансов бирж, перераспределять активы и осуществлять ребалансировку вашего портфеля по каждой отдельной бирже.' ); ?></p>
                    </div>
                    <div id="b5">
                        <h3><?php echo get_theme_mod( 'advantages-h3-5', 'Быстрая техподдержка' ); ?></h3>
                        <p><?php echo get_theme_mod( 'advantages-p-5', 'И, хотя система Owletex была разработана так, чтобы она была понятна даже для начинающего трейдера, мы понимаем, что в процессе работы могут возникать самые разнообразные вопросы касаемо самого сервиса и трейдинга с помощью него. Наша техподдержка готова оперативно помочь и ответить на любые интересующие вас вопросы.' ); ?></p>
                    </div>
                </div>
                <div class="adv-bar">
                    <div class="advantage active" id="a1">
                        <div>
                            <div></div>
                        </div>
                    </div>
                    <div class="advantage" id="a2">
                        <div>
                            <div></div>
                        </div>
                    </div>
                    <div class="advantage" id="a3">
                        <div>
                            <div></div>
                        </div>
                    </div>
                    <div class="advantage" id="a4">
                        <div>
                            <div></div>
                        </div>
                    </div>
                    <div class="advantage" id="a5">
                        <div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adv-desc-right" id="adv-desc-right">
                <div id="anim-1" class="active"></div>
                <div id="anim-2"></div>
                <div id="anim-3"></div>
                <div id="anim-4"></div>
                <div id="anim-5"></div>
            </div>
        </div>
        <div class="adv-bar">
            <div class="advantage active" id="a11">
                <div>
                    <div></div>
                </div>
            </div>
            <div class="advantage" id="a22">
                <div>
                    <div></div>
                </div>
            </div>
            <div class="advantage" id="a33">
                <div>
                    <div></div>
                </div>
            </div>
            <div class="advantage" id="a44">
                <div>
                    <div></div>
                </div>
            </div>
            <div class="advantage" id="a55">
                <div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="exchanges" id="exc">
    <img src="<?php bloginfo('template_url'); ?>/img/exchanges-greed.svg" alt="exchanges-greed">
    <h2>Биржи с которыми работает сервис</h2>
    <div class="head-line light"></div>
    <div id="exchanges-anim"></div>
</section>
<section class="scheme-of-work" id="sch">
    <h2>Схема работы</h2>
    <div class="head-line"></div>
    <div class="main-content">
        <img src="<?php bloginfo('template_url'); ?>/img/scheme-greed.svg" alt="scheme-greed">
        <div class="scheme-image">
            <div id="scheme-anim"></div>
        </div>
        <div class="scheme-steps">
            <ol>
                <li><?php echo get_theme_mod( 'scheme-li-1', 'Регистрируйтесь' ); ?></li>
                <p><?php echo get_theme_mod( 'scheme-p-1', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' ); ?></p>
                <li><?php echo get_theme_mod( 'scheme-li-2', 'Подключаете биржи' ); ?></li>
                <p><?php echo get_theme_mod( 'scheme-p-2', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' ); ?></p>
                <li><?php echo get_theme_mod( 'scheme-li-3', 'Выбираете тариф' ); ?></li>
                <p><?php echo get_theme_mod( 'scheme-p-3', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' ); ?></p>
                <li><?php echo get_theme_mod( 'scheme-li-4', 'Работаете с сервисом' ); ?></li>
                <p><?php echo get_theme_mod( 'scheme-p-4', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' ); ?></p>
                <li><?php echo get_theme_mod( 'scheme-li-5', 'Получаете профит' ); ?></li>
                <p><?php echo get_theme_mod( 'scheme-p-5', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' ); ?></p>
            </ol>
        </div>
    </div>
    <div class="btn-reg">Зарегистрироваться</div>
</section>
<section class="main-opportunities" id="opp">
    <h2>Основные возможности</h2>
    <div class="head-line light"></div>
    <div class="main-content">
        <div class="opp-texts">
            <div class="opp-text">
                <h3><?php echo get_theme_mod( 'features-h-1', 'Первая возможность' ); ?></h3>
                <p><?php echo get_theme_mod( 'features-p-1', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' ); ?></p>
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity1.png" alt="Opportunity 1">
            </div>
            <div class="opp-text">
                <h3><?php echo get_theme_mod( 'features-h-2', 'Вторая возможность' ); ?></h3>
                <p><?php echo get_theme_mod( 'features-p-2', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' ); ?></p>
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity2.png" alt="Opportunity 2">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity1.png" alt="Opportunity 1">
            </div>
            <div class="opp-text">
                <h3><?php echo get_theme_mod( 'features-h-3', 'Третья возможность' ); ?></h3>
                <p><?php echo get_theme_mod( 'features-p-3', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' ); ?></p>
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity3.png" alt="Opportunity 3">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity2.png" alt="Opportunity 2">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity1.png" alt="Opportunity 1">
            </div>
        </div>
        <div class="opp-imgs">
            <div class="opp-img-back-wrapp">
                <div class="opp-img-back"></div>
            </div>
<!--            <div class="opp-img fir">-->
            <div class="opp-img fir" data-aos="fade-down" data-aos-offset="300" data-aos-anchor-placement="top-center">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity1.png" alt="Opportunity 1">
            </div>
<!--            <div class="opp-img">-->
            <div class="opp-img" data-aos="fade-down" data-aos-offset="400" data-aos-anchor-placement="top-center">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity2.png" alt="Opportunity 2">
            </div>
<!--            <div class="opp-img">-->
            <div class="opp-img" data-aos="fade-down" data-aos-offset="700" data-aos-anchor-placement="top-center">
                <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity3.png" alt="Opportunity 3">
            </div>
        </div>
    </div>
    <div class="opp-imgs-mobile">
        <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity1.png" alt="Opportunity 1">
        <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity2.png" alt="Opportunity 2">
        <img src="<?php bloginfo('template_url'); ?>/img/opportunities/opportunity3.png" alt="Opportunity 3">
    </div>
    <div class="want-to-try">
        <h2>Хотите попробовать в действии эти и другие возможности Owletex?</h2>
        <div class="btn-reg">Зарегистрироваться</div>
    </div>
</section>
<section class="tariffs" id="tar">
    <img src="<?php bloginfo('template_url'); ?>/img/tarrifs-greed.svg" alt="tariffs-greed">
    <h2>Тарифы</h2>
    <div class="head-line"></div>
    <div class="cards-tariffs">
        <div class="card-tariffs">
            <div class="card-head">
                <h3>Free</h3>
            </div>
            <div class="card-body">
                <div class="opps">
                    <div class="opp">Преимущество</div>
                    <div class="opp">Преимущество</div>
                </div>
                <div class="buy">
                    <div class="price">$0</div>
                    <div class="btn-buy reg">Зарегистрироваться</div>
                </div>
            </div>
        </div>
        <div class="card-tariffs best-choice">
            <div class="card-head">
                <h3>Эксперт</h3>
            </div>
            <div class="card-body">
                <div class="opps">
                    <div class="opp">Преимущество</div>
                    <div class="opp">Преимущество</div>
                    <div class="opp">Преимущество</div>
                    <div class="opp">Преимущество</div>
                    <div class="opp">Преимущество</div>
                </div>
                <div class="buy">
                    <div class="discount">$800</div>
                    <div class="price best">$500</div>
                    <div class="btn-buy best">Купить</div>
                </div>
            </div>
        </div>
        <div class="card-tariffs">
            <div class="card-head">
                <h3>Стандарт</h3>
            </div>
            <div class="card-body">
                <div class="opps">
                    <div class="opp">Преимущество</div>
                    <div class="opp">Преимущество</div>
                    <div class="opp">Преимущество</div>
                </div>
                <div class="buy">
                    <div class="price">$500</div>
                    <div class="btn-buy">Купить</div>
                </div>
            </div>
        </div>
        <div class="card-tariffs">
            <div class="card-head">
                <h3>Тариф 4</h3>
            </div>
            <div class="card-body">
                <div class="opps">
                    <div class="opp">Преимущество</div>
                    <div class="opp">Преимущество</div>
                    <div class="opp">Преимущество</div>
                </div>
                <div class="buy">
                    <div class="price">$500</div>
                    <div class="btn-buy">Купить</div>
                </div>
            </div>
        </div>
        <div class="card-tariffs">
            <div class="card-head">
                <h3>Free</h3>
            </div>
            <div class="card-body">
                <div class="opps">
                    <div class="opp">Преимущество</div>
                    <div class="opp">Преимущество</div>
                </div>
                <div class="buy">
                    <div class="price">$0</div>
                    <div class="btn-buy reg">Зарегистрироваться</div>
                </div>
            </div>
        </div>
        <div class="card-tariffs">
            <div class="card-head">
                <h3>Free</h3>
            </div>
            <div class="card-body">
                <div class="opps">
                    <div class="opp">Преимущество</div>
                    <div class="opp">Преимущество</div>
                </div>
                <div class="buy">
                    <div class="price">$0</div>
                    <div class="btn-buy reg">Зарегистрироваться</div>
                </div>
            </div>
        </div>
    </div>
    <h2>Способы оплаты</h2>
    <div class="methods">
        <img src="<?php bloginfo('template_url'); ?>/img/payment-methods/bitcoin.png" alt="Bitcoin">
        <img src="<?php bloginfo('template_url'); ?>/img/payment-methods/visa.png" alt="Visa">
        <img src="<?php bloginfo('template_url'); ?>/img/payment-methods/mastercard.png" alt="Master Card">
        <img src="<?php bloginfo('template_url'); ?>/img/payment-methods/paypal.png" alt="PayPal">
    </div>
</section>
<section class="faq" id="faq">
    <img src="<?php bloginfo('template_url'); ?>/img/faq-bg.svg" alt="faq-background">
    <img src="<?php bloginfo('template_url'); ?>/img/faq-greed.svg" alt="faq-greed">
    <h2>FAQ</h2>
    <div class="head-line light"></div>
    <div class="faq-inner">
        <?php echo do_shortcode("[accordions id='116']"); ?>
<!--        <div class="quick-answers">-->
<!--            <div class="question-head">Вопрос 1</div>-->
<!--            <div class="question-body">Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и-->
<!--                модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм-->
<!--                деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.-->
<!--                Таким образом дальнейшее развитие различных форм деятельности влечет.</div>-->
<!--            <div class="question-head">Вопрос 2</div>-->
<!--            <div class="question-body">Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и-->
<!--                модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм-->
<!--                деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.-->
<!--                Таким образом дальнейшее развитие различных форм деятельности влечет.</div>-->
<!--            <div class="question-head">Вопрос 3</div>-->
<!--            <div class="question-body">Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и-->
<!--                модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм-->
<!--                деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.-->
<!--                Таким образом дальнейшее развитие различных форм деятельности влечет.</div>-->
<!--            <div class="question-head">Вопрос 4</div>-->
<!--            <div class="question-body">Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и-->
<!--                модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм-->
<!--                деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.-->
<!--                Таким образом дальнейшее развитие различных форм деятельности влечет.</div>-->
<!--            <div class="question-head">Вопрос 5</div>-->
<!--            <div class="question-body">Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и-->
<!--                модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм-->
<!--                деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.-->
<!--                Таким образом дальнейшее развитие различных форм деятельности влечет.</div>-->
<!--            <div class="question-head">Вопрос 6</div>-->
<!--            <div class="question-body">Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и-->
<!--                модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм-->
<!--                деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.-->
<!--                Таким образом дальнейшее развитие различных форм деятельности влечет.</div>-->
<!--            <div class="question-head">Вопрос 7</div>-->
<!--            <div class="question-body">Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и-->
<!--                модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм-->
<!--                деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.-->
<!--                Таким образом дальнейшее развитие различных форм деятельности влечет.</div>-->
<!--        </div>-->
        <div class="ask">
            <div class="ask-info">Все равно ничего не поняли? Отправьте любой интересующий вас вопрос и мы ответим Вам в самое кратчайшее время.</div>
            <div class="ask-form">
                <div class="ask-form-head">Форма обратной связи</div>
                <div class="ask-from-body">
                    <input type="text" placeholder="Имя" name="name" id="name">
                    <input type="text" placeholder="Email" name="name" id="email">
                    <textarea name="question" id="question" cols="30" rows="10" placeholder="Вопрос"></textarea>
                    <div class="ask-send">
                        <div class="captcha"></div>
                        <button type="submit">Отправить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news" id="new">
    <h2>Новости</h2>
    <div class="head-line"></div>
    <div class="news-cards">
        <?php
            while( have_posts() ) : the_post();
        ?>
                <div class="news-card">
                    <div class="card-head"><?php echo get_the_post_thumbnail(); ?></div>
                    <div class="card-body">
                        <div class="news-header"><?php the_title(); ?></div>
                        <div class="news-content"><?php the_content(); ?></div>
                    </div>
                </div>
        <?php
            endwhile;
        ?>
    </div>
    <div class="btn-all-news">Все новости</div>
</section>
<section class="partners" id="par">
    <h2>Партнёры</h2>
    <div class="partners-logos">
        <div class="partners-logo">
            <img src="<?php bloginfo('template_url'); ?>/img/partners/neuronx.io.png" alt="Neurox.io">
        </div>
        <div class="partners-logo">
            <img src="<?php bloginfo('template_url'); ?>/img/partners/foundico.png" alt="Foundico">
        </div>
    </div>
</section>
<footer>
    <div class="social-links">
        <a href="/" class="fb"></a>
        <a href="/" class="gp"></a>
        <a href="/" class="li"></a>
        <a href="/" class="vk"></a>
    </div>
    <div class="main-content">
        <div class="company-info">
            <a href="/" class="logo"></a>
            <div>Юридические данные: ООО “Текст-Рыба”</div>
            <div>Юридический адрес: Юр. адрес: 101000 г. Москва, Чистопрудный б-р, д.11, стр.1</div>
            <div>УНП компании:</div>
        </div>
        <div class="menu">
            <div class="menu-head">Меню</div>
            <a href="/">Новости</a>
            <a href="/">Войти</a>
            <a href="/">Зарегистрироваться</a>
        </div>
        <div class="subscribe">
            <div class="menu-head">Подпишись на нас</div>
            <div>
                <div>Получай последние новости об обновлениях сервиса.</div>
                <div>
                    <input type="text" placeholder="Email">
                    <input type="button" value="Подписаться">
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="copyrights-text"><?php echo get_theme_mod( 'footer-1', 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.' ); ?></div>
        <div class="copyright"><?php echo get_theme_mod( 'footer-2', '@2018 Owletex. Все права защищены' ); ?></div>
    </div>
</footer>

<!--<div class="modal_login">-->
<!--    <div class="mask"></div>-->
<!--    <div class="content">-->
<!--        <div class="modal-head">-->
<!--            <div class="modal-title">Авторизация</div>-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/img/close.svg" alt="close">-->
<!--        </div>-->
<!--        <div class="modal-content">-->
<!--            <form action="">-->
<!--                <input type="text" id="login" placeholder="Email или логин">-->
<!--                <input type="password" id="pass" placeholder="Пароль">-->
<!--                <input type="password" id="twofa" placeholder="2FA код">-->
<!--                <div class="captcha"></div>-->
<!--                <div>-->
<!--                    <label class="container">Запомнить меня-->
<!--                        <input type="checkbox">-->
<!--                        <span class="checkmark"></span>-->
<!--                    </label>-->
<!--                    <button type="button" >Войти</button>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--        <div class="modal-footer"></div>-->
<!--    </div>-->
<!--</div>-->

<?php wp_footer() ?>
</body>
</html>
