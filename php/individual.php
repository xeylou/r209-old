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
    $db = new SQLite3('/var/www/html/db/r209-db-01.sqlite');
    // $results = $db->query('SELECT * FROM mangas');
    // echo $results;
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];
        echo $id;
        }
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
            <div class=" container ">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="widget-title" style="display: inline-block;">Chainsaw Man</h2>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="boxed" style="width: 250px; height: 350px;">
                                    <img class="img-responsive" style="height:auto"
                                            src="https://cdn.discordapp.com/attachments/766013915536556056/1103970556052787210/csm_01.png"
                                        alt="Chainsaw Man">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <dl class="dl-horizontal">
                                    <dt>Name</dt>
                                    <dd>Chainsaw Man</dd> 
                                    <dt>Author</dt>
                                    <dd>Fujimoto Tatsuki</dd>
                                    <dt>Volume</dt>
                                    <dd>01</dd>
                                    <dt>Release date</dt>
                                    <dd>2020/08/06</dd>
                                    <dt>Category</dt>
                                    <dd>Shōnen</dd>
                                    <dt>Vues</dt>
                                    <dd>0</dd>
                                    <br>
                                    <dt>Quantity left</dt>
                                    <dd>1</dd>
                                    <dt>Price</dt>
                                    <dd>6.5</dd>
                                </dl>           
                            </div>
                            <dt>Description</dt>
                            <p>
                            <dl style="margin-right: 80px;">
                                Denji is a loser who will do literally anything for money, due to inheriting an enormous debt to some local Yakuza Loan Sharks after his father seemingly committed suicide when he was a child. This includes hunting Devils, dangerous Anthropomorphic Personifications of human fears that randomly appear in the world on a regular basis. Having no friends other than his pet Devil Pochita, a dog-like creature that is also a chainsaw, and having sold several of his own organs now to survive.
                            </dl>
                        </div>
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
</body>

</individual>