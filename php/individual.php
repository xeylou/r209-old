<?php session_start();?>
<!doctype individual>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Manila Manga</title>
    <meta name="description" content="Buy your mangas" />
    <meta name="keywords" content="buy, manga" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon"
        href="https://cdn.discordapp.com/attachments/766013915536556056/1103986776583970937/manilla_mikey.jpg">
    <link defer rel="stylesheet"
        href="https://cdn.discordapp.com/attachments/766013915536556056/1103987220710445076/bootstrap.min.css" />
    <link rel="stylesheet"
        href="https://cdn.discordapp.com/attachments/766013915536556056/1104383479724130314/style2.css" />
</head>

<body class=" layout-boxed ">
    <?php
    $db = new SQLite3('r209-db-01.sqlite');

    $id = $_GET['id'];
    $req1 = 'SELECT * FROM mangas WHERE mangaId="'.$id.'"';  // statement
    $results1 = $db->query($req1);
    $data1=$results1->fetchArray();

    $ctg_name='SELECT cateoryName FROM categories WHERE categoryId IN (SELECT categoryId FROM mangas WHERE mangaId = "'.$id.'")';
    $results2=$db->query($ctg_name);
    $data2=$results2->fetchArray();

    $old_views_number=$data1[7];
    $current_views_number=$old_views_number+1;


    $sth = $db->prepare('UPDATE mangas SET viewsNumber = "'.$current_views_number.'" WHERE mangaId = "'.$id.'"');
    $sth->execute();
    // $data3->query("UPDATE mangas SET viewsNumber = "'.$current_views_number.'" WHERE mangaId = "'.$id.'"");
    ?>
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
                            <a href="" title="Cart">
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
                        <h2 class="widget-title" style="display: inline-block;"><?php echo $data1['displayName'];?></h2>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="boxed" style="width: 250px; height: 350px;">
                                    <img class="img-responsive" style="height:auto"
                                            src="<?php echo $data1['imageLink'];?>"
                                        alt="<?php echo $display_name;?>">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <dl class="dl-horizontal">
                                    <dt>Name</dt>
                                    <dd><?php echo $data1['displayName'];?></dd> 
                                    <dt>Author</dt>
                                    <dd><?php echo $data1['authorName'];?></dd>
                                    <dt>Volume</dt>
                                    <dd><?php echo $data1['volumeNumber'];?></dd>
                                    <dt>Release date</dt>
                                    <dd><?php echo $data1['releaseDate'];?></dd>
                                    <dt>Category</dt>
                                    <dd><a href="<?php echo 'category.php?id='.$data1['categoryId'].'';?>"><?php echo $data2[0];?></a>
                                    </dd>
                                    <dt>Views</dt>
                                    <dd><?php echo $data1['viewsNumber'];?></dd>
                                    <br>
                                    <dt>Quantity left</dt>
                                    <dd><?php echo $data1['stockLeft'];?></dd>
                                    <dt>Price (USD)</dt>
                                    <dd>$<?php echo $data1['price'];?>0</dd>
                                </dl>           
                            </div>
                            <dt>Description</dt>
                            <p>
                            <dl style="margin-right: 80px;">
                            <?php echo $data1['description'];?>
                            </dl>
                            <div style='margin-left: 320px'><button
                                >Add to cart
                            </button></div>
                            
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
</body>

</individual>