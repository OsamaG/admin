<?php
    include('xcrud/xcrud.php');
    $xcrud = Xcrud::get_instance();
    $xcrud->table('users');
    $xcrud->table_name('المتسابقين');
    $xcrud->label('user_name', 'الاسم');
    $xcrud->label('user_email', 'الايميل');
    $xcrud->label('user_phone', 'التليفون');
    $xcrud->label('user_score', 'النقاط');
    $xcrud->label('user_time', 'الوقت');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>نتائج المتسابقين</title>
        <style type="text/css">
            header, section, footer, aside, nav, article, figure, figcaption {
                display: block;}
            body {
                color: #666666;
                background: url('../img/bg_2.jpg') no-repea
                background-position: center;
                font-family: Georgia, Times, serif;
                line-height: 1.4em;
                margin: 0px;}
            .wrapper {
                width: 940px;
                margin: 20px auto 20px auto;
                /*border: 2px solid #000000;*/
                background-color: #ffffff;}
            header {
                height: 160px;
                background-image: url("images/header.jpg");}
            h1 {
                text-indent: -9999px;
                width: 940px;
                height: 130px;
                margin: 0px;}
            section.results {
              /*  float: left!importnat;
                width: 659px;*/
                border-right: 1px solid #eeeeee;}
            article {
                clear: both;
                overflow: auto;
                width: 100%;}
            hgroup {
                margin-top: 40px;}
            figure {
                float: left;
                width: 290px;
                height: 220px;
                padding: 5px;
                margin: 20px;
                border: 1px solid #eeeeee;}
            figcaption {
                font-size: 90%;
                text-align: left;}
            aside {
                width: 230px;
                float: left;
                padding: 0px 0px 0px 20px;}
            aside section a {
                display: block;
                padding: 10px;
                border-bottom: 1px solid #eeeeee;}
            aside section a:hover {
                color: #985d6a;
                background-color: #efefef;}
            a {
                color: #de6581;
                text-decoration: none;}
            h1, h2, h3 {
                font-weight: normal;}
            h2 {
                margin: 10px 0px 5px 0px;
                padding: 0px;}
            h3 {
                margin: 0px 0px 10px 0px;
                color: #de6581;}
            aside h2 {
                padding: 30px 0px 10px 0px;
                color: #de6581;}
            footer {
                font-size: 80%;
                padding: 7px 0px 0px 20px;}
        </style>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">
            <header>
                <h1>Intel Game</h1>
            </header>
            <section class="results">
                <?php echo $xcrud->render('المستخدمين');  ?>
            </section>
            <footer>
                &copy; <?php echo date('Y'); ?> Intel KSA
            </footer>
        </div><!-- .wrapper -->
    </body>
</html>