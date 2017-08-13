@extends('frontend.layouts.app')

@section('after-styles')
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Animate style -->
    <link rel="stylesheet" href="/css/module/animate.min.css">

    <!-- Styles for this template -->
    <link rel="stylesheet" href="/css/module/style.css">

    <link rel="stylesheet" href="/css/module/jquery.bxslider.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="/img/frontend/my-ramka/favicon.png">
@endsection

@section('content')

<a href="/test">Специально для техподдержки</a>
<!-- ***Page Preloader*** -->
{{--<div id="page-preloader"><span class="spinner"></span></div>--}}

<!-- ***PRESENTATION*** -->
<div id="presentation" class="presentation section row">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h1>В рамках прекрасного</h1>
                <ul class="check-list list-unstyled">
                    <li><span class="glyphicon glyphicon-ok"></span>Тонкая</li>
                    <li><span class="glyphicon glyphicon-ok"></span>Аккуратная</li>
                    <li><span class="glyphicon glyphicon-ok"></span>Надежная</li>
                    <li><span class="glyphicon glyphicon-ok"></span>Цветная</li>
                </ul>
                <p class="lead">Поспеши украсить свой автомобиль и защитить свой номер по выгодной цене!</p>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="video-wrap">
                    <video src="/video/RCS.mp4"
                           controls="controls"></video>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //presentation -->

<!-- ***ABOUT*** -->
<div id="about" class="about section row">
    <div class="container">
        <!-- row -->
        <div class="row">
            <h2 class="page-header">С этой рамкой Вы будете выделяться на дороге<br>
            </h2>
            <div class="col-md-8">
                <div class="main-img"><img src="/img/frontend/my-ramka/rcs_main3.png"
                                           class="img-responsive" alt=""></div>
            </div>
            <div class="col-md-4 col-xs-12">
                <p>
                    Приятная декоративная рамка. Силиконовая рамка для замены обычной рамки. В качестве
                    преимуществ: уникальный цвет под авто, отсутствие рекламы, защищенность от непогоды и коррозии.
                </p>
                <p>
                    У рамки увеличен силиконовый нахлест, теперь номер не будет выскакивать из рамки. Снизу у рамки есть
                    специальные сливные отверстия для слива воды (во время мойки или дождя). Рамка поставляется в одном
                    из шести вариантов цвета: черный, белый, красный, синий, серый, желтый. Это самые популярные цвета
                    автомобилей, так что Вы без труда сможете подобрать подходящий вариант.
                </p>
                <p>
                    Силиконовая рамка изготовлена из силикона, который не разрушается под воздействием холодов или
                    жары и вообще очень прочный. Номер крепится на специальные болты и вставляется в ободок рамки.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- //about -->

<!-- ***PLUSES*** -->
<div id="pluses" class="pluses section row">
    <div class="container">
        <!-- row -->
        <div class="row">
            <h2>Преимущества</h2>
            <div class="col-md-6">
                <p class="img col-xs-12 text-center">
                    <img src="/img/frontend/my-ramka/adv1.png" alt="">
                </p>
                <p class="description col-xs-12 text-center">
                    <span>УДОБНАЯ</span><br>
                    Легко устанавливается и
                    плотно прилегает к
                    корпусу машины.
                </p>
            </div>
            <div class="col-md-6">
                <p class="img col-xs-12 text-center">
                    <img src="/img/frontend/my-ramka/adv2.png" alt="">
                </p>
                <p class="description col-xs-12 text-center">
                    <span>ТОНКАЯ</span><br>
                    Минималистичный
                    дизайн и аккуратные
                    формы.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="img col-xs-12 text-center">
                    <img src="/img/frontend/my-ramka/adv3.png" alt="">
                </p>
                <p class="description col-xs-12 text-center">
                    <span>АНТИВАНДАЛЬНАЯ</span><br>
                    Металическая основа и
                    антивандальные винты против
                    злоумышленников.
                </p>
            </div>
            <div class="col-md-6">
                <p class="img col-xs-12 text-center">
                    <img src="/img/frontend/my-ramka/adv4.png" alt="">
                </p>
                <p class="description col-xs-12 text-center">
                    <span>БЕЗ РЕКЛАМЫ</span><br>
                    Никакого визуального мусора.
                    Акцент только на вашем
                    номере.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="img col-xs-12 text-center">
                    <img src="/img/frontend/my-ramka/adv5.png" alt="">
                </p>
                <p class="description col-xs-12 text-center">
                    <span>ЦВЕТНАЯ</span><br>
                    Большой выбор цветов
                    под дизайн вашего
                    автомобиля.
                </p>
            </div>
            <div class="col-md-6">
                <p class="img col-xs-12 text-center">
                    <img src="/img/frontend/my-ramka/adv6.png" alt="">
                </p>
                <p class="description col-xs-12 text-center">
                    <span>НАДЕЖНАЯ</span><br>
                    Оцинкованная основа и силиконовый корпус
                    выдержат любые дорожные и погодные условия.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- //pluses -->

<!-- ***SCRINSHOTS*** -->
<div id="scrinshots" class="scrinshots section row">
    <div class="container">
        <!-- row -->
        <div class="row">
            <h2>Скриншоты</h2>
            <div class="col-md-6">
                <div class="media">
                    <div class="text-center"><img src="/img/frontend/my-ramka/scr1.jpg"
                                                  alt=""></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media">
                    <div class="text-center"><img src="/img/frontend/my-ramka/scr3.jpg"
                                                  alt=""></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="media">
                    <div class="text-center"><img src="/img/frontend/my-ramka/scr4.jpg"
                                                  alt=""></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media">
                    <div class="text-center"><img src="/img/frontend/my-ramka/scr6.jpg"
                                                  alt=""></div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- //scrinshots -->

<!-- ***REVIEWS*** -->
<div id="reviews" class="reviews section row">
    <div class="container">
        <!-- row -->
        <div class="row">
            <h2>Отзывы</h2>
            <div class="col-md-6">
                <div class="review-item">
                    <div class="pull-left ava"><img src="/img/frontend/my-ramka/ava1.jpg"
                                                    alt=""></div>
                    <div class="review-body">
                        <blockquote>
                            Актуальная штука, в связи с участившимися кражами госномеров, но...Ну что можно сказать?
                            Сделаны рамки добротно, хорошо и красиво упакованы, без проблем устанавливаются на
                            автомобиль, практически не заметны и не бликуют, вне зависимости от цвета кузова машины.
                        </blockquote>
                        <p class="text-muted">Андрей И.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="review-item">
                    <div class="pull-left ava"><img src="/img/frontend/my-ramka/ava2.jpg"
                                                    alt=""></div>
                    <div class="review-body">
                        <blockquote>
                            Муж подарил мне автомобиль на день рождения, и меня сразу начала раздражать рамка на
                            номерном знаке – с рекламой автоцентра. Поэтому я заказала рамку от RCS. Оказалось то, что
                            надо – никакого мусора, и выбранный цвет – красный – идеально вписался в расцветку моего
                            авто. Красота!
                        </blockquote>
                        <p class="text-muted">Ирина Б.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-6">
                <div class="review-item">
                    <div class="pull-left ava"><img src="/img/frontend/my-ramka/ava2.jpg"
                                                    alt=""></div>
                    <div class="review-body">
                        <blockquote>
                            В том году у меня украли автомобильный номер. Пришлось заплатить воришкам за возврат…
                            Заказал сразу же рамку RCS – ее шпилькой точно не открутишь – антивандальные винты, стальная
                            основа, силиконовый корпус. Теперь спокоен! И дороги наши выдержит, и злоумышленникам шансов
                            не оставит.
                        </blockquote>
                        <p class="text-muted">Константин С.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="review-item">
                    <div class="pull-left ava"><img src="/img/frontend/my-ramka/ava1.jpg"
                                                    alt=""></div>
                    <div class="review-body">
                        <blockquote>
                            У меня свой бизнес, и обращать внимание на детали - моя привычка. Рамка от RCS нравится
                            своим лаконичным дизайном - стильно, аккуратно. Видно, что не кустарная работа. Заказал
                            доставку курьером, а установил сам - дело 5 минут, все винты и саморез уже включены в
                            комплект. В общем, я доволен. Рекомендую!
                        </blockquote>
                        <p class="text-muted">Сергей И.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //reviews -->

<!-- ***BUY IT NOW*** -->
<div id="buy" class="buy section row">
    <div class="container">
        <!-- row -->
        <div class="row">
            <h2>Оформить заказ<br>
                <small>просто, быстро, удобно...</small>
            </h2>
        {{--<p class="lead text-center">Расскажите о способах оплаты, доставки, о гарантиях и т.д.</p>--}}
        <!--standart-->
            <div class="col-md-3 col-xs-12">
                <div class="price standart">
                    <div class="head">
                        <h3>Силиконовая рамка</h3>
                    </div>
                    <div class="body">
                        <div class="wrp">
                            <ul class="bxslider-avto">
                                <li><img src="/img/frontend/my-ramka/ramka_white.png" alt="">
                                </li>
                                <li><img src="/img/frontend/my-ramka/ramka_black.png" alt="">
                                </li>
                                <li><img src="/img/frontend/my-ramka/ramka_blue.png" alt="">
                                </li>
                                <li><img src="/img/frontend/my-ramka/ramka_red.png" alt="">
                                </li>
                                <li><img src="/img/frontend/my-ramka/ramka_yellow.png" alt="">
                                </li>
                                <li><img src="/img/frontend/my-ramka/ramka_gray.png" alt="">
                                </li>
                            </ul>
                            <ul>
                                <li class="title">В рамках прекрасного</li>
                                <li>Время идет и меняются даже привычные нам вещи. Пора сменить старую рамку госномера
                                    дизайна 1990 года на новую стильную и современную рамку RCS
                                </li>
                            </ul>
                        </div>
                        <button class="btn btn-block btn-default"
                                data-toggle="modal"
                                data-target="#basket"
                                data-whatever="ramka">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            1390 <i class="fa fa-rub" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="price standart">
                    <div class="head">
                        <h3>Пластиковая рамка RCS-light</h3>
                    </div>
                    <div class="body">
                        <div class="wrp">
                            <img src="/img/frontend/my-ramka/ramka_light.png" alt="">
                            </ul>
                            <ul>
                                <li class="title">Новинка от RCS</li>
                                <li>Кажется теперь невозможно сделать рамку лучше. Акцент только на вашем номере,
                                    минимальный кант рамки и дополнительные функции делают рамку новым бестселлером!
                                </li>
                            </ul>
                        </div>
                        <button class="btn btn-block btn-default"
                                data-toggle="modal"
                                data-target="#basket"
                                data-whatever="light">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            890 <i class="fa fa-rub"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="price standart">
                    <div class="head">
                        <h3>Магнитный <br>набор</h3>
                    </div>
                    <div class="body">
                        <div class="wrp">
                            <img src="/img/frontend/my-ramka/magnit.png" alt="">
                            <ul>
                                <li class="title">Удобнее не придумать!</li>
                                <li>Забудьте о долгом снятие номера, спите спокойно. Ваш номер будет в безопасности.</li>
                            </ul>
                        </div>
                        <button class="btn btn-block btn-default"
                                data-toggle="modal"
                                data-target="#basket"
                                data-whatever="magnit">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            1790 <i class="fa fa-rub"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="price standart">
                    <div class="head">
                        <h3>Набор винтов для крепления рамки</h3>
                    </div>
                    <div class="body">
                        <div class="wrp">
                            <img src="/img/frontend/my-ramka/vint.png" alt="">
                            <ul>
                                <li class="title">Все под рукой!</li>
                                <li>
                                    На Ваш выбор - антивандальные или обычные винты для крепления номера.
                                </li>
                            </ul>
                        </div>
                        <button class="btn btn-block btn-default"
                                data-toggle="modal"
                                data-target="#basket"
                                data-whatever="vint">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            590 <i class="fa fa-rub"></i>
                        </button>
                    </div>
                </div>
            </div>

            {{--<!--premium-->--}}
            {{--<div class="col-md-4 col-xs-12">--}}
            {{--<div class="price premium">--}}
            {{--<div class="head">--}}
            {{--<h3>Премиум<br><span>150 руб.</span></h3>--}}
            {{--</div>--}}
            {{--<div class="body">--}}
            {{--<ol>--}}
            {{--<li>Porro officia cumque sint deleniti;</li>--}}
            {{--<li>Тemo facere rem vitae odit;</li>--}}
            {{--<li>Cum odio, iste quia doloribus autem;</li>--}}
            {{--<li>Porro officia cumque sint deleniti;</li>--}}
            {{--<li>Тemo facere rem vitae odit;</li>--}}
            {{--</ol>--}}
            {{--<a href="" class="btn btn-block btn-default"><span--}}
            {{--class="glyphicon glyphicon-shopping-cart"></span> Заказать</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--<!--lux-->--}}
            {{--<div class="col-md-4 col-xs-12">--}}
            {{--<div class="price lux">--}}
            {{--<div class="head">--}}
            {{--<h3>Люкс<br><span>200 руб.</span></h3>--}}
            {{--</div>--}}
            {{--<div class="body">--}}
            {{--<ol>--}}
            {{--<li>Porro officia cumque sint deleniti;</li>--}}
            {{--<li>Тemo facere rem vitae odit;</li>--}}
            {{--<li>Cum odio, iste quia doloribus autem;</li>--}}
            {{--<li>Porro officia cumque sint deleniti;</li>--}}
            {{--<li>Тemo facere rem vitae odit;</li>--}}
            {{--<li>Cum odio, iste quia doloribus autem;</li>--}}
            {{--<li>Porro officia cumque sint deleniti;</li>--}}
            {{--</ol>--}}
            {{--<a href="" class="btn btn-block btn-default"><span--}}
            {{--class="glyphicon glyphicon-shopping-cart"></span> Заказать</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
<!-- //buy it now -->

<!-- ***SUBSCRIBE*** -->
{{--<div id="subscribe" class="subscribe section row">
    <div class="container">
        <!-- row -->
        <div class="text-center row">
            <h2>Не пропустите выгодные акции и предложения!<br>Подпишитесь на новости:</h2>
            <p class="lead">Никакого спама, мы гарантируем!</p>
            <div class="col-md-6 col-md-offset-3 col-xs-12">
                <!-- Subscribe form -->
                <form role="form" class="form-inline subscribe-form">
                    <div class="form-group"><input id="subs_email" class="form-control email-mask"
                                                   placeholder="Ваш email:"></div>
                    <div class="form-group">
                        <button id="subs_btn" class="btn btn-danger">Подписаться</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>--}}
<!-- //subscribe -->

<!-- ***CONTACTS*** -->
<div id="contacts" class="contacts section row">
    <div class="container">
        <!-- row -->
        {{--@include('frontend.includes.contact')--}}

        <div class="text-center row">
            <div class="col-md-6 col-xs-6 col-sm-6 text-right">
                <address>
                    <strong>Адрес:</strong><br>
                    Москва<br>
                    <abbr title="Телефон">Т:</abbr> +7 (913) 333-3308
                </address>
            </div>
            <div class="col-md-6 col-xs-6 col-sm-6 text-left">
                <address>
                    <strong>Другие контакты:</strong><br>
                    <abbr title="Email">E:</abbr> <a href="mailto:#">support@my-ramka.ru</a><br>
                    <abbr title="Skype">S:</abbr> <a href="skype:#">login_skype</a><br>
                </address>
            </div>
        </div>
    </div>
</div>
<!-- //contacts -->

<div class="back-top row" id="back-top">
    <a href="#" class="btn btn-block btn-lg btn-danger">Наверх</a>
</div>

<!-- ***FOOTER*** -->
<div class="footer row">
    <div class="container">
        <!-- row -->
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3 col-xs-12">
                <br>
                <!-- Social icons -->
                <p class="social-icons">
                    <a href=""><i class="ico">f</i></a>
                    <a href=""><i class="ico">t</i></a>
                    <a href=""><i class="ico">g</i></a>
                    <a href=""><i class="ico">v</i></a>
                </p>
                <br>
                <p class="text-center">Copyright &copy; {{ \Carbon\Carbon::now()->format('Y') }} Рамки · <a href="">Рамки</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- //footer -->

<!-- ***MODAL*** -->
<div class="modal fade" id="basket" tabindex="-1" role="dialog" aria-labelledby="basketLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Корзина</h4>
            </div>
            {{ Form::open(['route' => 'frontend.ramka.buy', 'class' => 'form-horizontal']) }}
                {{ csrf_field() }}
                <input type="hidden" name="recipient" class="recipient" value="">
                <div class="modal-body">
                    <div class="order">
                        Ваш заказ:
                    </div>
                    <div class="count">
                        <div class="form-group">
                            <label for="count" class="col-sm-4 control-label">Количество</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="count" id="count" placeholder="Количество" value="1">
                            </div>
                        </div>
                    </div>
                    <div class="color" style="display: none">
                        <div class="form-group">
                            <label for="color" class="col-sm-4 control-label">Цвет</label>
                            <div class="col-sm-6">
                                <select name="color" id="color" class="form-control" required>
                                    <option value="black">Черная</option>
                                    <option value="white">Белая</option>
                                    <option value="yellow">Желтая</option>
                                    <option value="red">Красная</option>
                                    <option value="blue">Синяя</option>
                                    <option value="gray">Серая</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    @if(!$logged_in_user)
                        <div class="form-group">
                            {{ Form::label('first_name', trans('validation.attributes.frontend.first_name'),
                            ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::text('first_name', null,
                                ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.first_name')]) }}
                            </div><!--col-md-6-->
                        </div><!--form-group-->

                        <div class="form-group">
                            {{ Form::label('last_name', trans('validation.attributes.frontend.last_name'),
                            ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::text('last_name', null,
                                ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.last_name')]) }}
                            </div><!--col-md-6-->
                        </div><!--form-group-->

                        <div class="form-group">
                            {{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::email('email', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                            </div><!--col-md-6-->
                        </div><!--form-group-->

                        <div class="form-group">
                            {{ Form::label('password', trans('validation.attributes.frontend.password'), ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
                            </div><!--col-md-6-->
                        </div><!--form-group-->

                        <div class="form-group">
                            {{ Form::label('password_confirmation', trans('validation.attributes.frontend.password_confirmation'), ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.password_confirmation')]) }}
                            </div><!--col-md-6-->
                        </div><!--form-group-->

                        @if (config('access.captcha.registration'))
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::captcha() !!}
                                    {{ Form::hidden('captcha_status', 'true') }}
                                </div><!--col-md-6-->
                            </div><!--form-group-->
                        @endif
                    @else
                        <input type="hidden" name="id" value="{{ $logged_in_user->id }}">
                    @endif

                </div>
                <div class="modal-footer">
                    Итого:
                    <span class="price"></span><i class="fa fa-rub"></i>
                    <button class="btn btn-primary">Отправить заказ</button>
                </div>
            {{ Form::close() }}

        </div>
    </div>
</div>
<!-- //modal -->

@endsection

@section('after-scripts')
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/8fc174d1a6.js"></script>

<script src="/js/frontend/jquery.inview.js"></script>
<script src="/js/frontend/detectmobilebrowser.js"></script>
<script src="/js/frontend/jquery.placeholder.js"></script>
<script src="/js/frontend/jquery.bxslider.min.js"></script>
<script src="/js/frontend/inputmask/inputmask.js"></script>
<script src="/js/frontend/inputmask/inputmask.extensions.js"></script>
<script src="/js/frontend/inputmask/inputmask.numeric.extensions.js"></script>
<script src="/js/frontend/inputmask/inputmask.date.extensions.js"></script>
<script src="/js/frontend/inputmask/inputmask.phone.extensions.js"></script>
<script src="/js/frontend/inputmask/jquery.inputmask.js"></script>
<script src="/js/frontend/my-ramka.js"></script>
<script>
    $(window).on('load', function () {
        var $preloader = $('#page-preloader'),
            $spinner = $preloader.find('.spinner');
        $spinner.fadeOut();
        $preloader.delay(350).fadeOut('slow');
    });
</script>
<!--[if !IE]>-->
<script src="/js/frontend/animate.js"></script>
<!--<![endif]-->
@endsection
