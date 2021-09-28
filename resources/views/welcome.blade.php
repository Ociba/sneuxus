<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        @include('frontlayouts.title')
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="Subrion CMS - Open Source Content Management System">
        <meta name="robots" content="index">
        <meta name="robots" content="follow">
        <meta name="revisit-after" content="1 day">
        <base >

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="{{asset('front/favicon.ico')}}">

        
        

            
    


    <meta property="og:title" content="Home">
    <meta property="og:url" content="index.html">
    <meta property="og:description" content="">



        
	@include('frontlayouts.css')

        

            </head>

    <body class="page-index">
       @include('frontlayouts.topheader')

       @include('frontlayouts.menu')

      @include('frontlayouts.image-part')

        

        

                    <div class="landing">
                
    <!--__b_-->
    @include('frontlayouts.about')
<!--__e_-->
    <!--__b_-->
    @include('frontlayouts.features')
<!--__e_-->
    <!--__b_-->
    @include('frontlayouts.devices')
<!--__e_-->


            </div>
        
    @include('frontlayouts.topfooter')
                
    @include('frontlayouts.footer')

        <button class="back-to-top js-back-to-top"><span class="fa fa-angle-double-up"></span></button>

        <!-- SYSTEM STUFF -->

                    <div style="display: none;">
                <img src="cron/index8f46.html?968" width="1" height="1" alt="">
            </div>
        
        
        
        
	@include('frontlayouts.javascript')
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
intelli.pageName = 'index';
            intelli.securityToken = '2tFSjwlCyG48xAWfD2pGeewvA0YwLR9Qu0iZ5iGp';
            intelli.config.url = 'index.html';
</script>
	

        
    </body>
</html>

