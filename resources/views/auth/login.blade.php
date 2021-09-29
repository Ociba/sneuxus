{{--
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <x-jet-validation-errors class="mb-4" />
        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
                </a>
                @endif
                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <title>Login :: Powered by Subrion 4.2</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="Subrion CMS - Open Source Content Management System">
        <meta name="robots" content="index">
        <meta name="robots" content="follow">
        <meta name="revisit-after" content="1 day">
        <base >
        <link rel="shortcut icon" href="{{ asset('front/favicon.ico')}}">
        <meta property="og:title" content="Login">
        <meta property="og:url" content="index.html">
        <meta property="og:description" content="">
        <link rel="stylesheet" href="{{ asset('front/templates/kickstart/css/iabootstrap7aa6.css?fm=1528967094')}}">
        <link rel="stylesheet" href="{{ asset('front/templates/kickstart/css/user-style7aa6.css?fm=1528967094')}}">
        <link rel="stylesheet" href="{{ asset('front/modules/fancybox/js/jquery.fancybox7aa6.css?fm=1528967094')}}">
    </head>
    <body class="page-login">
        <div class="inventory">
            <div class="container">
                <ul class="nav-inventory nav-inventory-social pull-left hidden-xs">
                    <li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#" class="google-plus"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
                </ul>
                <ul class="nav-inventory hidden-sm hidden-xs pull-right ">
                    <li class="m_index
                        ">
                        <a href="/"
                            >
                        Home
                        </a>
                    </li>
                    <!-- MORE menu dropdown -->
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-default navbar-sticky">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-brand--img" href="/">
                    <img src="{{ asset('front/templates/kickstart/img/logo.png')}}" alt="Subrion CMS">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <form method="get" action="https://instantcashers.com/search/" class="search-navbar pull-right">
                        <button class="search-navbar__toggle js-search-navbar-toggle" type="button"><span class="fa fa-search"></span></button>
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html">Log in</a></li>
                        <li><a href="/register">Sign up</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right nav-main ">
                        <li class="m_index
                            ">
                            <a href="/"
                                >
                            Home
                            </a>
                        </li>
                        <li class="m_members
                            ">
                            <a href="/members"
                                >
                            Members
                            </a>
                        </li>
                        <li class="m_blog
                            ">
                            <a href="/blog"
                                >
                            Blog
                            </a>
                        </li>
                        <!-- MORE menu dropdown -->
                    </ul>
                </div>
            </div>
        </nav>
        <header class="header">
        </header>
        <div class="breadcrumbs">
            <div class="container">
                <ol class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                    <li typeof="v:Breadcrumb">
                        <a href="/" rel="v:url" property="v:title">Home</a>
                    </li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="page-system">
                    <div class="content__header">
                        <h1>Login</h1>
                        <ul class="content__actions">
                        </ul>
                    </div>
                    <div id="notification" class="alert alert-info" style="display: none;"></div>
                    <div class="content__body">
                        <div class="ia-form-system">
                            @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" class="form-control input-lg" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                                </div>
                                <div class="form-group">
                                    <input class="form-control input-lg" id="password" class="block mt-1 w-full" type="password"  placeholder="Password" name="password" required autocomplete="current-password" >
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox-inline">
                                                <label for="remember_me"><input type="checkbox" id="remember_me"  name="remember"> Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">Forgot password?</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success btn-block btn-lg" type="submit" name="login">Log in</button>
                                </div>
                                <p class="text-center  m-b-0">
                                    <a href="/register" rel="nofollow">Registration</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-blocks">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!--__b_-->
                        <div id="block_footer1"
                            class="box " >
                            <h4 id="caption_footer1" class="box__caption">About CMS
                            </h4>
                            <div id="content_footer1" class="box__content">
                                <!--__b_c_-->
                                <p>Subrion is a free open source content management system
                                    that allows you to build websites for any purpose. Yes, from blog to corporate mega portal.
                                </p>
                                <ul class="list-unstyled hidden">
                                    <li><span class="fa fa-phone"></span> 1-677-124-44227</li>
                                    <li><span class="fa fa-map-pin"></span> 437 S Olive St, Los Angeles</li>
                                    <li><span class="fa fa-clock-o"></span> Mon - Sat 8.00 - 18.00h</li>
                                </ul>
                                <!--__e_c_-->
                            </div>
                        </div>
                        <!--__e_-->
                    </div>
                    <div class="col-md-3">
                        <!--__b_-->
                        <div id="block_footer2"
                            class="box " >
                            <h4 id="caption_footer2" class="box__caption">For users
                            </h4>
                            <div id="content_footer2" class="box__content">
                                <!--__b_c_-->
                                <p>It's done to focus on the content management process. Start it hassle-free within just a few minutes and take care of the content. It's easy!</p>
                                <!--__e_c_-->
                            </div>
                        </div>
                        <!--__e_-->
                    </div>
                    <div class="col-md-3">
                        <!--__b_-->
                        <div id="block_footer3"
                            class="box " >
                            <h4 id="caption_footer3" class="box__caption">For developers
                            </h4>
                            <div id="content_footer3" class="box__content">
                                <!--__b_c_-->
                                <p>Forget the hours of programming simple things. Use Subrion framework API to add extra stuff using hooks, plugins, & packages.</p>
                                <!--__e_c_-->
                            </div>
                        </div>
                        <!--__e_-->
                    </div>
                    <div class="col-md-3">
                        <!--__b_-->
                        <div id="block_footer4"
                            class="box " >
                            <h4 id="caption_footer4" class="box__caption">For designers
                            </h4>
                            <div id="content_footer4" class="box__content">
                                <!--__b_c_-->
                                <p>Simple templating engine and styles allows you to create any template you wish with just a few lines of code.</p>
                                <!--__e_c_-->
                            </div>
                        </div>
                        <!--__e_-->
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <ul class="nav-footer nav-footer-social">
                    <li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#" class="google-plus"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
                </ul>
                <ul class="nav-footer ">
                    <li class="m_about
                        ">
                        <a href="../about/index.html"
                            >
                        About Us
                        </a>
                    </li>
                    <li class="m_policy
                        ">
                        <a href="../policy/index.html"
                            >
                        Privacy Policy
                        </a>
                    </li>
                    <li class="m_terms
                        ">
                        <a href="../terms/index.html"
                            >
                        Terms of Use
                        </a>
                    </li>
                    <li class="m_help
                        ">
                        <a href="../help/index.html"
                            >
                        Help
                        </a>
                    </li>
                    <li class="m_blog
                        ">
                        <a href="/blog"
                            >
                        Blog
                        </a>
                    </li>
                    <!-- MORE menu dropdown -->
                </ul>
                <p class="copyright">&copy; 2021 Powered by <a href="https://subrion.org/" title="Open Source CMS">Subrion CMS</a></p>
            </div>
        </footer>
        <button class="back-to-top js-back-to-top"><span class="fa fa-angle-double-up"></span></button>
        <!-- SYSTEM STUFF -->
        <div style="display: none;">
            <img src="../cron/indexbea5.html?924" width="1" height="1" alt="">
        </div>
        <script src="{{ asset('front/js/jquery/jquery7aa6.js?fm=1528967094')}}"></script>
        <script src="{{ asset('front/js/intelli/intelli7aa6.js?fm=1528967094')}}"></script>
        <script src="https://instantcashers.com/tmp/cache/intelli.config.en.js?fm=1632725863"></script>
        <script src="{{ asset('front/js/intelli/intelli.minmax7aa6.js?fm=1528967094')}}"></script>
        <script src="{{ asset('front/js/frontend/footer7aa6.js?fm=1528967094')}}"></script>
        <script src="https://instantcashers.com/tmp/cache/intelli.lang.en.js?fm=1632725863"></script>
        <script src="{{ asset('front/js/bootstrap/js/bootstrap.min7aa6.js?fm=1528967094')}}"></script>
        <script src="{{ asset('front/modules/fancybox/js/jquery.fancybox.pack7aa6.js?fm=1528967094')}}"></script>
        <script>
            $(function()
            {
                $('a[rel^="ia_lightbox"]').fancybox(
                {
                    nextEffect: 'elastic',
                    prevEffect: 'elastic',
                    openEffect: 'fade',
                    closeEffect: 'fade',
                    nextSpeed: 'fast',
                    prevSpeed: 'fast',
                    openSpeed: 'fast',
                    closeSpeed: 'fast',
                    padding: 15,
                    arrows: 1,
                    closeBtn: 1,
                    closeClick: 0,
                    helpers: {
                        overlay: {
                            locked: false
                        }
                    }
                });
            });
        </script>
        <script>
            intelli.pageName = 'login';
                        intelli.securityToken = '2tFSjwlCyG48xAWfD2pGeewvA0YwLR9Qu0iZ5iGp';
                        intelli.config.url = '/';
        </script>
        <script src="{{ asset('front/templates/kickstart/js/app7aa6.js?fm=1528967094')}}"></script>
    </body>
</html>