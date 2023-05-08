<!doctype catalogue>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Manila Manga</title>
    <meta name="description" content="Site pour acheter vos mangas" />
    <meta name="keywords" content="achat, manga" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google-site-verification" content=""/>
    <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/766013915536556056/1103986776583970937/manilla_mikey.jpg">
    <link defer rel="stylesheet" href="https://cdn.discordapp.com/attachments/766013915536556056/1103987220710445076/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.discordapp.com/attachments/766013915536556056/1104383479724130314/style2.css" />
</head>

<body class=" layout-boxed ">
    <div class="wrapper">
        <nav class="navbar navbar-default" role="navigation">
            <div class=" container ">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="# 01navbar-menu">
                        <span class="sr-only" Navigation"</span> <span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <h1 class="" style="margin:0;">
                        <a class="navbar-brand" href="index.php">
                            Manila Manga
                        </a>
                    </h1>
                </div>

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav  navbar-right">
                        <li>
                            <a href="index.php" title="Home">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="categories.php" title="Categories">
                                Categories
                            </a>
                        </li>
                        <li>
                            <a href="catalogue.php" title="Mangas">
                                Catalogue
                            </a>
                        </li>
                        <li>
                            <a href="login.php" title="Cart">
                                Cart
                            </a>
                        </li>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class=" container ">

            <div class="row">
                <div class="col-sm-12">
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4 col-sm-push-8">

                    <div class="row">
                        <div class="col-xs-12" style="padding: 0">
                            <div style="display: table; margin: 10px auto;">
                            </div>
                            <div style="display: table; margin: 10px auto;">
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Use CTRL + F to do a research</strong></h3>
                        </div>
                        <div id="waiting" style="display: none;text-align: center;">
                        </div>
                        <ul class="top_rating_blade"></ul>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-pull-4">
                    <div class="col-sm-12">
                        <h2 class="hotmanga-header"><i class=""></i>📰  Catalogue</h2>
                        <hr>
                        <ul class="hot-thumbnails">
                        <?php
                        $db = new SQLite3('r209-db-01.sqlite');

                        $req = 'SELECT * FROM mangas';  // statement
                        $results = $db->query($req);
                        

                        while ($data=$results->fetchArray()) {
                            echo '<li class="span3">
                            <div class="photo" style="position: relative;">
                                <div class="manga-name">
                                    <a class="label label-warning"
                                        href=""><?phpecho .$data[2]. ?></a>
                                </div>
                                <a class="thumbnail"
                                    style="position: relative; z-index: 10; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"
                                    href="">
                                    <img src="<?phpecho $data[1]?>"
                                        alt="<?phpecho $data[2]?>">
                                </a>
                                <div class="well">
                                    <p>
                                        # <?phpecho $data[0]?>
                                    </p>
                                </div>
                            </div>
                        </li>';
                        };
                    ?>
                            <li class="span3">
                                <div class="photo" style="position: relative;">
                                    <div class="manga-name">
                                        <a class="label label-warning"
                                            href="">Chainsaw Man</a>
                                    </div>
                                    <a class="thumbnail"
                                        style="position: relative; z-index: 10; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"
                                        href="">
                                        <img src="https://cdn.discordapp.com/attachments/766013915536556056/1103970556052787210/csm_01.png"
                                            alt="Chainsaw Man">
                                    </a>
                                    <div class="well">
                                        <p>
                                            # 01
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="span3">
                                <div class="photo" style="position: relative;">
                                    <div class="manga-name">
                                        <a class="label label-warning"
                                            href="">Vinland Saga</a>
                                    </div>
                                    <a class="thumbnail"
                                        style="position: relative; z-index: 10; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"
                                        href="">
                                        <img src="https://cdn.discordapp.com/attachments/766013915536556056/1103970557571117118/vs_01.jpg"
                                            alt="Vinland Saga">
                                    </a>
                                    <div class="well">
                                        <p>
                                            # 01
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="span3">
                                <div class="photo" style="position: relative;">
                                    <div class="manga-name">
                                        <a class="label label-warning"
                                            href="">Tokyo Revengers</a>
                                    </div>
                                    <a class="thumbnail"
                                        style="position: relative; z-index: 10; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"
                                        href=''>
                                        <img src='https://cdn.discordapp.com/attachments/766013915536556056/1103970557336244245/tr_01.jpg'
                                            alt='Tokto Revengers' />
                                    </a>
                                    <div class="well">
                                        <p>
                                            # 01
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="span3">
                                <div class="photo" style="position: relative;">
                                    <div class="manga-name">
                                        <a class="label label-warning"
                                            href="">Jujutsu Kaisen</a>
                                    </div>
                                    <a class="thumbnail"
                                        style="position: relative; z-index: 10; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"
                                        href="">
                                        <img src="https://cdn.discordapp.com/attachments/766013915536556056/1103970556644175912/jjk_01.png"
                                            alt="Jujutsu Kaisen">
                                    </a>
                                    <div class="well">
                                        <p>
                                            # 01
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="span3">
                                <div class="photo" style="position: relative;">
                                    <div class="manga-name">
                                        <a class="label label-warning"
                                            href="">Blue Lock</a>
                                    </div>
                                    <a class="thumbnail"
                                        style="position: relative; z-index: 10; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"
                                        href="">
                                        <img src="https://cdn.discordapp.com/attachments/766013915536556056/1104367144415789197/bl-01.jpg"
                                            alt="Blue Lock">
                                    </a>
                                    <div class="well">
                                        <p>
                                            # 01
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="span3">
                                <div class="photo" style="position: relative;">
                                    <div class="manga-name">
                                        <a class="label label-warning"
                                            href="">Berserk</a>
                                    </div>
                                    <a class="thumbnail"
                                        style="position: relative; z-index: 10; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"
                                        href="">
                                        <img src="https://cdn.discordapp.com/attachments/766013915536556056/1103970555356516383/berserk_01.jpg"
                                            alt="Berserk">
                                    </a>
                                    <div class="well">
                                        <p>
                                            # 01
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="manga-footer">
    
                            <ul class=" pull-right ">
                                <li>
                                    <a href="index.php" title="Home">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="catalogue.php" title="Mangas">
                                        Catalogue
                                    </a>
                                </li>
                            </ul>
                            <a href="index.php">Manila Manga</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    </div>
    </div>

</body>

</catalogue>