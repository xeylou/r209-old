<?php session_start();?>
<!doctype categories>

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
                <!-- <h2 class="widget-title" style="display: inline-block;">Categories</h2>
                        <hr> -->
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 col-sm-push-8">

                    <div class="row">
                        <div class="col-xs-12" style="padding: 0">
                        </div>
                    </div>
                    
                </div>  
                

                <?php
                $db=new SQLite3('r209-db-01.sqlite');

                // put the number of categories in first position of an array
                // decrement from 2 to 1 (shonen to seinen)
                $quer1='SELECT * FROM categories ORDER BY categoryId DESC LIMIT 1';
                $res1=$db->query($quer1);
                $data1=$res1->fetchArray();                
            
                while ($data1[0] != 0) {
                    
                    // catching the categoryId of the query above & make it usable
                    $quer2='SELECT * FROM categories WHERE categoryId = '.$data1[0].'';
                    $res2=$db->query($quer2);
                    $data2=$res2->fetchArray();

                    // name of the categories
                    echo '<div class="col-sm-8 col-sm-pull-4">
                    <div class="col-sm-12">
                        <h2 class="hotmanga-header"><i class=""></i>'.$data2[1].'</h2>
                        <hr>
                        <ul class="hot-thumbnails">';

                    // /!\ COMMENT JE PEUX FAIRE POUR AVOIR UNE VARIABLE QUI PREND SUCCESSIVEMENT CHAQUE ID DES MANGAS QUI CONSTISTUE UNE CATEGORIE


                    $quer3='SELECT * FROM mangas WHERE categoryId = '.$data1[0].'';
                    $res3=$db->query($quer3);

                    while ($data3=$res3->fetchArray()) {
                        echo '<li class="span3">
                                <div class="photo" style="position: relative;">
                                    <div class="manga-name">
                                        <a class="label label-warning"
                                            href="individual.php?id='.$data3[0].'">'.$data3[2].'</a>
                                    </div>
                                    <a class="thumbnail"
                                        style="position: relative; z-index: 10; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"
                                        href="individual.php?id='.$data3[0].'">
                                        <img src="'.$data3[1].'?>"
                                            alt="'.$data3[2].'">
                                    </a>
                                    <div class="well">
                                        <p>
                                            # '.$data3[4].'
                                        </p>
                                    </div>
                                </div>
                            </li>';
                    }

                    // echo $data3[2];
                    // put the number of mangas by categories in first value
                    // $quer3='SELECT COUNT(*) FROM mangas WHERE categoryId = '.$data2[0].'';
                    // $res3=$db->query($quer3);
                    // $data3=$res3->fetchArray();


                    // while ($data3[0] !=  0) {
                    //     $quer4='SELECT * FROM mangas WHERE mangaId = '.$data[0].'';
                    //     $res4=$db->query($quer4);
                    //     $data4=$res4->fetchArray();

                    //     echo "$data3[0] . \n";

                    //     $data4[0] = $data4[0] - 1;
                    // }
                    
                    $data1[0]=$data1[0] - 1;

                    echo '</div>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-4 col-sm-push-8">
                    <div class="row">
                        <div class="col-xs-12" style="padding: 0">
                            <div style="display: table; margin: 10px auto;">
                                <div id="protag-sidebar"></div>
                            </div>
                            <div style="display: table; margin: 10px auto;">
                            </div>
                        </div>
                    </div>
                </div>'; // the ending of the category
                }
                ?>  
            </div>
            <!-- pas touche -->
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

</body>

</categories>