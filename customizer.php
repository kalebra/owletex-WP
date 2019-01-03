<?php
    function my_customizer( $wp_customize ) {
        $wp_customize->add_panel( 'content_panel', array(
            'title' => 'Содержание',
            'description' => 'Редактирование контента посадочной страницы',
            'priority' => 160,
        ) );

        $wp_customize->add_section(
            'header_section',
            array(
                'title' => 'Шапка',
                'description' => '',
                'priority' => 35,
                'panel' => 'content_panel',
            )
        );

        $wp_customize->add_setting(
            "header-h1",
            array (
                'default' => 'Краткое описание сервиса в одном предложении',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control( "header-h1",
            array(
                'label' => 'Header',
                'section' => 'header_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'header-h1_partial', array(
            'selector' => '.header-main-left h1',
            'settings' => 'header-h1',
            'render_callback' => function() {
                return get_theme_mod('header-h1');
            },
        ) );


        $wp_customize->add_setting(
            'header-p',
            array(
                'default' => 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'header-p',
            array(
                'label' => 'Текст',
                'section' => 'header_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'header-p_partial', array(
            'selector' => '.header-main-left p',
            'settings' => 'header-p',
            'render_callback' => function() {
                return get_theme_mod( 'header-p');
            },
        ) );

        //------------------------------преимущества------------------------------
        $wp_customize->add_section(
            'advantages_section',
            array(
                'title' => 'Преимущества',
                'description' => '',
                'priority' => 35,
                'panel' => 'content_panel',
            )
        );

        $wp_customize->add_setting(
            'advantages-h3-1',
            array(
                'default' => 'Работа с ведущими биржами в одном окне',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'advantages-h3-1',
            array(
                'label' => 'Заголовок преимущества 1',
                'section' => 'advantages_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'advantages-h3-1_partial', array(
            'selector' => '.adv-desc-left #b1 h3',
            'settings' => 'advantages-h3-1',
            'render_callback' => function() {
                return get_theme_mod( 'advantages-h3-1');
            },
        ) );

        $wp_customize->add_setting(
            'advantages-p-1',
            array(
                'default' => 'Сервис позволяет работать одновременно с несколькими ведущими криптовалютными биржами. Вы можете подключить все свои аккаунты и производить торговые операции в одном интерфейсе как с каждой биржей в отдельности, так и производить трансфер активов между ними',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'advantages-p-1',
            array(
                'label' => 'Описание преимущества 1',
                'section' => 'advantages_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'advantages-p-1_partial', array(
            'selector' => '.adv-desc-left #b1 p',
            'settings' => 'advantages-p-1',
            'render_callback' => function() {
                return get_theme_mod( 'advantages-p-1');
            },
        ) );

        $wp_customize->add_setting(
            'advantages-h3-2',
            array(
                'default' => 'Возможность автоматизированной торговли (боты)',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'advantages-h3-2',
            array(
                'label' => 'Заголовок преимущества 2',
                'section' => 'advantages_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'advantages-h3-2_partial', array(
            'selector' => '.adv-desc-left #b2 h3',
            'settings' => 'advantages-h3-2',
            'render_callback' => function() {
                return get_theme_mod( 'advantages-h3-2');
            },
        ) );

        $wp_customize->add_setting(
            'advantages-p-2',
            array(
                'default' => 'С Owletex вы имеете возможность использования системы автоматизированной торговли, которая будет зарабатывать деньги без вашего непосредственного участия. Внутри сервиса вы можете создавать и настраивать неограниченное количество трейдинг-ботов, каждый из которых может реализовывать отдельные торговые стратегии для различных криптовалютных активов.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'advantages-p-2',
            array(
                'label' => 'Описание преимущества 2',
                'section' => 'advantages_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'advantages-p-2_partial', array(
            'selector' => '.adv-desc-left #b2 p',
            'settings' => 'advantages-p-2',
            'render_callback' => function() {
                return get_theme_mod( 'advantages-p-2');
            },
        ) );

        $wp_customize->add_setting(
            'advantages-h3-3',
            array(
                'default' => 'Наличие демо-аккаунта',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'advantages-h3-3',
            array(
                'label' => 'Заголовок преимущества 3',
                'section' => 'advantages_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'advantages-h3-3_partial', array(
            'selector' => '.adv-desc-left #b3 h3',
            'settings' => 'advantages-h3-3',
            'render_callback' => function() {
                return get_theme_mod( 'advantages-h3-3');
            },
        ) );

        $wp_customize->add_setting(
            'advantages-p-3',
            array(
                'default' => 'Торговля криптовалютами - рискованное занятие, постоянно требующее держать обе руки на пульсе валютного рынка. Если вы не уверены в разрабатываемых стратегиях, вы можете протестировать их внутри нашего сервиса в тестовом режиме перед &quot;боевым&quot; запуском.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'advantages-p-3',
            array(
                'label' => 'Описание преимущества 3',
                'section' => 'advantages_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'advantages-p-3_partial', array(
            'selector' => '.adv-desc-left #b3 p',
            'settings' => 'advantages-p-3',
            'render_callback' => function() {
                return get_theme_mod( 'advantages-p-3');
            },
        ) );

        $wp_customize->add_setting(
            'advantages-h3-4',
            array(
                'default' => 'Сквозная аналитика портфеля',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'advantages-h3-4',
            array(
                'label' => 'Заголовок преимущества 4',
                'section' => 'advantages_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'advantages-h3-4_partial', array(
            'selector' => '.adv-desc-left #b4 h3',
            'settings' => 'advantages-h3-4',
            'render_callback' => function() {
                return get_theme_mod( 'advantages-h3-4');
            },
        ) );

        $wp_customize->add_setting(
            'advantages-p-4',
            array(
                'default' => 'С помощью гибких инструментов внутри сервиса вы сможете производить ежедневную аналитику вашего заработка, расходов и состояния портфеля. Также имеется возможность слежения за состоянием криптовалютного рынка в мире. С помощью несложных действий вы сможете производить пополнение балансов бирж, перераспределять активы и осуществлять ребалансировку вашего портфеля по каждой отдельной бирже.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'advantages-p-4',
            array(
                'label' => 'Описание преимущества 4',
                'section' => 'advantages_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'advantages-p-4_partial', array(
            'selector' => '.adv-desc-left #b4 p',
            'settings' => 'advantages-p-4',
            'render_callback' => function() {
                return get_theme_mod( 'advantages-p-4');
            },
        ) );

        $wp_customize->add_setting(
            'advantages-h3-5',
            array(
                'default' => 'Быстрая техподдержка',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'advantages-h3-5',
            array(
                'label' => 'Заголовок преимущества 5',
                'section' => 'advantages_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'advantages-h3-5_partial', array(
            'selector' => '.adv-desc-left #b5 h3',
            'settings' => 'advantages-h3-5',
            'render_callback' => function() {
                return get_theme_mod( 'advantages-h3-5');
            },
        ) );

        $wp_customize->add_setting(
            'advantages-p-5',
            array(
                'default' => 'И, хотя система Owletex была разработана так, чтобы она была понятна даже для начинающего трейдера, мы понимаем, что в процессе работы могут возникать самые разнообразные вопросы касаемо самого сервиса и трейдинга с помощью него. Наша техподдержка готова оперативно помочь и ответить на любые интересующие вас вопросы.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'advantages-p-5',
            array(
                'label' => 'Описание преимущества 5',
                'section' => 'advantages_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'advantages-p-5_partial', array(
            'selector' => '.adv-desc-left #b5 p',
            'settings' => 'advantages-p-5',
            'render_callback' => function() {
                return get_theme_mod( 'advantages-p-5');
            },
        ) );

        //------------------------------схема работы------------------------------
        $wp_customize->add_section(
            'schemeofwork_section',
            array(
                'title' => 'Схема работы',
                'description' => '',
                'priority' => 35,
                'panel' => 'content_panel',
            )
        );

        $wp_customize->add_setting(
            'scheme-li-1',
            array(
                'default' => 'Регистрируйтесь',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'scheme-li-1',
            array(
                'label' => 'Заголовок шага 1',
                'section' => 'schemeofwork_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'scheme-li-1_partial', array(
            'selector' => '.scheme-steps ol li:first-child',
            'settings' => 'scheme-li-1',
            'render_callback' => function() {
                return get_theme_mod( 'scheme-li-1');
            },
        ) );

        $wp_customize->add_setting(
            'scheme-p-1',
            array(
                'default' => 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'scheme-p-1',
            array(
                'label' => 'Описание шага 1',
                'section' => 'schemeofwork_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'scheme-p-1_partial', array(
            'selector' => '.scheme-steps ol p:nth-child(2)',
            'settings' => 'scheme-p-1',
            'render_callback' => function() {
                return get_theme_mod( 'scheme-p-1');
            },
        ) );

        $wp_customize->add_setting(
            'scheme-li-2',
            array(
                'default' => 'Подключаете биржи',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'scheme-li-2',
            array(
                'label' => 'Заголовок шага 2',
                'section' => 'schemeofwork_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'scheme-li-2_partial', array(
            'selector' => '.scheme-steps ol li:nth-child(3)',
            'settings' => 'scheme-li-2',
            'render_callback' => function() {
                return get_theme_mod( 'scheme-li-2');
            },
        ) );

        $wp_customize->add_setting(
            'scheme-p-2',
            array(
                'default' => 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'scheme-p-2',
            array(
                'label' => 'Описание шага 2',
                'section' => 'schemeofwork_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'scheme-p-2_partial', array(
            'selector' => '.scheme-steps ol p:nth-child(4)',
            'settings' => 'scheme-p-2',
            'render_callback' => function() {
                return get_theme_mod( 'scheme-p-2');
            },
        ) );

        $wp_customize->add_setting(
            'scheme-li-3',
            array(
                'default' => 'Выбираете тариф',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'scheme-li-3',
            array(
                'label' => 'Заголовок шага 3',
                'section' => 'schemeofwork_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'scheme-li-3_partial', array(
            'selector' => '.scheme-steps ol li:nth-child(5)',
            'settings' => 'scheme-li-3',
            'render_callback' => function() {
                return get_theme_mod( 'scheme-li-3');
            },
        ) );

        $wp_customize->add_setting(
            'scheme-p-3',
            array(
                'default' => 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'scheme-p-3',
            array(
                'label' => 'Описание шага 3',
                'section' => 'schemeofwork_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'scheme-p-3_partial', array(
            'selector' => '.scheme-steps ol p:nth-child(6)',
            'settings' => 'scheme-p-3',
            'render_callback' => function() {
                return get_theme_mod( 'scheme-p-3');
            },
        ) );

        $wp_customize->add_setting(
            'scheme-li-4',
            array(
                'default' => 'Работаете с сервисом',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'scheme-li-4',
            array(
                'label' => 'Заголовок шага 4',
                'section' => 'schemeofwork_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'scheme-li-4_partial', array(
            'selector' => '.scheme-steps ol li:nth-child(7)',
            'settings' => 'scheme-li-4',
            'render_callback' => function() {
                return get_theme_mod( 'scheme-li-4');
            },
        ) );

        $wp_customize->add_setting(
            'scheme-p-4',
            array(
                'default' => 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'scheme-p-4',
            array(
                'label' => 'Описание шага 4',
                'section' => 'schemeofwork_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'scheme-p-4_partial', array(
            'selector' => '.scheme-steps ol p:nth-child(8)',
            'settings' => 'scheme-p-4',
            'render_callback' => function() {
                return get_theme_mod( 'scheme-p-4');
            },
        ) );

        $wp_customize->add_setting(
            'scheme-li-5',
            array(
                'default' => 'Получаете профит',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'scheme-li-5',
            array(
                'label' => 'Заголовок шага 5',
                'section' => 'schemeofwork_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'scheme-li-5_partial', array(
            'selector' => '.scheme-steps ol li:nth-child(9)',
            'settings' => 'scheme-li-5',
            'render_callback' => function() {
                return get_theme_mod( 'scheme-li-5');
            },
        ) );

        $wp_customize->add_setting(
            'scheme-p-5',
            array(
                'default' => 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'scheme-p-5',
            array(
                'label' => 'Описание шага 5',
                'section' => 'schemeofwork_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'scheme-p-5_partial', array(
            'selector' => '.scheme-steps ol p:last-child',
            'settings' => 'scheme-p-5',
            'render_callback' => function() {
                return get_theme_mod( 'scheme-p-5');
            },
        ) );

        //------------------------------основные возможности------------------------------
        $wp_customize->add_section(
            'features_section',
            array(
                'title' => 'Основные возможности',
                'description' => '',
                'priority' => 35,
                'panel' => 'content_panel',
            )
        );

        $wp_customize->add_setting(
            'features-h-1',
            array(
                'default' => 'Первая возможность',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'features-h-1',
            array(
                'label' => 'Заголовок возможности 1',
                'section' => 'features_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'features-h-1_partial', array(
            'selector' => '.opp-text:first-child h3',
            'settings' => 'features-h-1',
            'render_callback' => function() {
                return get_theme_mod( 'features-h-1');
            },
        ) );

        $wp_customize->add_setting(
            'features-p-1',
            array(
                'default' => 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'features-p-1',
            array(
                'label' => 'Описание возможности 1',
                'section' => 'features_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'features-p-1_partial', array(
            'selector' => '.opp-text:first-child p',
            'settings' => 'features-p-1',
            'render_callback' => function() {
                return get_theme_mod( 'features-p-1');
            },
        ) );

        $wp_customize->add_setting(
            'features-h-2',
            array(
                'default' => 'Вторая возможность',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'features-h-2',
            array(
                'label' => 'Заголовок возможности 2',
                'section' => 'features_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'features-h-2_partial', array(
            'selector' => '.opp-text:nth-child(2) h3',
            'settings' => 'features-h-2',
            'render_callback' => function() {
                return get_theme_mod( 'features-h-2');
            },
        ) );

        $wp_customize->add_setting(
            'features-p-2',
            array(
                'default' => 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'features-p-2',
            array(
                'label' => 'Описание возможности 2',
                'section' => 'features_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'features-p-2_partial', array(
            'selector' => '.opp-text:nth-child(2) p',
            'settings' => 'features-p-2',
            'render_callback' => function() {
                return get_theme_mod( 'features-p-2');
            },
        ) );

        $wp_customize->add_setting(
            'features-h-3',
            array(
                'default' => 'Третья возможность',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'features-h-3',
            array(
                'label' => 'Заголовок возможности 3',
                'section' => 'features_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'features-h-3_partial', array(
            'selector' => '.opp-text:last-child h3',
            'settings' => 'features-h-3',
            'render_callback' => function() {
                return get_theme_mod( 'features-h-3');
            },
        ) );

        $wp_customize->add_setting(
            'features-p-3',
            array(
                'default' => 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'features-p-3',
            array(
                'label' => 'Описание возможности 3',
                'section' => 'features_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'features-p-3_partial', array(
            'selector' => '.opp-text:last-child p',
            'settings' => 'features-p-3',
            'render_callback' => function() {
                return get_theme_mod( 'features-p-3');
            },
        ) );

        //------------------------------подвал------------------------------
        $wp_customize->add_section(
            'footer_section',
            array(
                'title' => 'Текст подвала',
                'description' => '',
                'priority' => 35,
                'panel' => 'content_panel',
            )
        );

        $wp_customize->add_setting(
            'footer-1',
            array(
                'default' => 'Таким образом дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'footer-1',
            array(
                'label' => 'Текст подвала',
                'section' => 'footer_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'footer-1_partial', array(
            'selector' => '.copyrights-text',
            'settings' => 'footer-1',
            'render_callback' => function() {
                return get_theme_mod( 'footer-1');
            },
        ) );

        $wp_customize->add_setting(
            'footer-2',
            array(
                'default' => '@2018 Owletex. Все права защищены',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'footer-2',
            array(
                'label' => 'Копирайт',
                'section' => 'footer_section',
                'type' => 'text',
            )
        );

        $wp_customize->selective_refresh->add_partial( 'footer-2_partial', array(
            'selector' => '.copyright',
            'settings' => 'footer-2',
            'render_callback' => function() {
                return get_theme_mod( 'footer-2');
            },
        ) );
    }
    add_action( 'customize_register', 'my_customizer' );