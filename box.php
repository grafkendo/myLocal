<!doctype html>
<html>
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <title>myLocal Box - WordPress Development</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="lloan alas">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Muli:300,400,600,700,800,900">

    <style>header h1{font-weight:800;color:rgba(0,0,0,.6)}header h1 small{font-size:40%}table th,table th span{line-height:1}table td,table th{text-align:left}tr{width:100%!important;display:inline-table}td:nth-child(2){text-align:center}.php-section .php-version td{width:33%}.php-section{margin-top:15px}.php-section .php-modules{height:260px}.php-section .php-modules td{width:75%}.extras-section tr td,.node-section tr td{width:60%}.server-section tr td{width:50%}::selection{background:#ff0;color:#000}i.fa.fa-check{color:#66cd8a}body{font-family:Muli,sans-serif;background:#eef1f5}a{transition:all 225ms ease;text-decoration:none!important}footer,header,section{position:relative}main{margin:0 auto;border-top:50px solid #444;padding:20px 0}h2{font-size:125%;color:#fff;margin:15px 0 0;background:#444;padding:10px}h3{font-size:16px;color:#000}article h2,article h3,article h4{margin-top:0;font-weight:700;letter-spacing:-.03em}article p{font-size:18px;color:#777}article section p:last-child{margin-bottom:0}.intro a{margin-top:25px}table{margin:0!important;font-size:135%}table,table *{transition:all .5s ease}table th span{font-size:40px;display:block}table td{font-size:80%;opacity:.7;vertical-align:middle!important}table h2,table h3,table h4{margin:0;padding:8px 0;opacity:.9}hr{border-top-color:#dfdfdf;opacity:1;margin:25px 0}.credentials{display:block;padding:10px 25px;text-align:left}.credentials input{color:#15488c!important;font-weight:600;height:50px!important;transition:all 225ms ease}.credentials input:focus,.credentials input:hover{padding-left:25px}footer{font-size:30px;text-align:center;padding:50px 15px}code{font-size:14px;color:#007bff;word-break:break-word}.table td,.table th{padding:.75rem 20px}@media (max-width:1199px){main{overflow:hidden}}@media (max-width:767px){header h1{font-size:45px}footer{font-size:40px}}</style>

</head>
<body>
<?php
$box_version = '1.0.1'; 
?>
<main>

    <div class="container">
        <header>
            <h1><?php echo 'myLocal Box <small>v' . htmlentities($box_version) . '</small>'; ?></h1>
            <p> LEMP Stack - WordPress Development <br>
                <small><em>Linux / NGINX / MySQL / PHP</em></small>
            </p>
        </header>

        <hr>

        <div class="row">

            <div class="col-md-5 col-sm-12 col-lg-5">
                <section class="site-section">
                    <div class="text-left">
                        <h2>Site</h2>
                    </div>

                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <td><strong>VM IP</strong></td>
                            <td class="table-data"><?php echo htmlentities($_SERVER['SERVER_ADDR']); ?></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><strong>myLocal</strong></td>
                            <td class="table-data">https://<?php echo htmlentities($_SERVER['HTTP_HOST']); ?>
                                <br>

                            </td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr><td><strong>Links</strong></td>
                            <td>
                                <a href="https://<?php echo htmlentities($_SERVER['HTTP_HOST']); ?>/info.php" target="_blank">
                                    <strong>info</strong>
                                </a> |
                                <a href="https://<?php echo htmlentities($_SERVER['HTTP_HOST']); ?>/wp-admin/" target="_blank">
                                    <strong>dashboard</strong>
                                </a> |
                                <a href="https://<?php echo htmlentities($_SERVER['HTTP_HOST']); ?>/" target="_blank">
                                    <strong>front</strong>
                                </a> |
                                <a href="http://<?php echo htmlentities($_SERVER['HTTP_HOST']); ?>.<?php echo htmlentities($_SERVER['SERVER_ADDR']); ?>.xip.io/box.php<?php echo htmlentities($_SERVER['HTTP_HOST']); ?>" target="_blank">
                                    <strong>xip.io</strong>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Repository</td>
                            <td>
                                <a href="https://github.com/lloan/myLocal" target="_blank">
                                    <strong>master branch</strong>
                                </a> ( stable )
                            </td>
                        </tr>
                    </table>
                </section>
                <section class="php-section">

                    <div class="text-left">
                        <h2>PHP</h2>
                    </div>

                    <table class="table table-responsive table-striped table-hover php-version">

                        <tr>
                            <td><strong>PHP</strong></td>
                            <td>7.2.8</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center"><strong>Modules</strong></td>
                        </tr>
                    </table>
                    <table class="table table-responsive table-stripped table-hover php-modules">
                        <?php
                        $modules = get_loaded_extensions();
                        asort($modules);
                        foreach ($modules as $extension) :
                            ?>
                            <tr>
                                <td colspan="2"><?php echo htmlentities($extension); ?></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </section>
                <section class="extras-section">
                    <div class="text-left">
                        <h2>Extras</h2>
                    </div>

                    <table class="table table-responsive table-striped table-hover">

                        <tr>
                            <td>Composer 1.7.2</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>PHPUnit 7.3.1</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>xDebug 2.6.1</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>WP-CLI 2.0.0</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>

                    </table>
                </section>
                <section class="caching-section">
                    <div class="text-left">
                        <h2>Caching</h2>
                    </div>

                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <th colspan="3">
                                <h3>Memcached</h3>
                            </th>
                        </tr>
                        <?php
                        $memcached_running = false;
                        $memcached_version = false;
                        if (class_exists('Memcached')) :
                            $m = new Memcached();
                            if ($m->addServer('localhost', 11211)) {
                                $memcached_running = true;
                                $memcached_version = $m->getVersion();
                                $memcached_version = current($memcached_version);
                            }
                        endif;
                        ?>
                        <tr>
                            <td><strong>Connected?</strong></td>
                            <td>
                                <?php echo($memcached_running ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Version</strong></td>
                            <td>
                                <?php echo($memcached_running ? htmlentities($memcached_version) : 'Nope'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="credentials">
                                    <div class="form-group">
                                        <label>Hostname</label>
                                        <input type="text" class="form-control" value="localhost">
                                    </div>
                                    <div class="form-group">
                                        <label>Port</label>
                                        <input type="text" class="form-control" value="11211">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <th colspan="3">
                                <h3>Redis</h3>
                            </th>
                        </tr>
                        <?php
                        $redis = new Redis();
                        $redis->connect('127.0.0.1', 6379);
                        ?>
                        <tr>
                            <td><strong>Connected?</strong></td>
                            <td>
                                <?php echo($redis->ping() ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Version</strong></td>
                            <td>4.0.11</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="credentials">
                                    <div class="form-group">
                                        <label>Hostname</label>
                                        <input type="text" class="form-control" value="localhost">
                                    </div>
                                    <div class="form-group">
                                        <label>Port</label>
                                        <input type="text" class="form-control" value="6379">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </section>
                <section class="node-section">
                    <div class="text-left">
                        <h2>Node</h2>
                    </div>

                    <table class="table table-responsive table-striped table-hover">

                        <tr>
                            <td><strong>Node.js</strong></td>
                            <td>10.9.0</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><strong>NPM</strong></td>
                            <td>6.4.1</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><strong>Yarn</strong></td>
                            <td>1.10.1</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td colspan="3"><h4>Global Packages</h4></td>
                        </tr>
                        <?php
                        $packages = array(
                            'grunt@1.0.3',
                            'bower@1.8.4',
                            'gulp@3.9.1',
                            'yo@2.0.5',
                            'browser-sync@2.26.3',
                            'browserify@16.2.3',
                            'pm2@3.2.2',
                            'webpack@4.20.2',
                        );
                        foreach ($packages as $package) :
                            ?>
                            <tr>
                                <td colspan="2"><?php echo htmlentities($package); ?></td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </section>
            </div>

            <div class="col-md-7 col-sm-12 col-lg-7">
                <section class="server-section">
                    <div class="text-left">
                        <h2>Server</h2>
                    </div>

                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <td><strong>OS</strong></td>
                            <td class="table-data">Ubuntu 18.04 LTS (Bionic Beaver)</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><strong>Web Server</strong></td>
                            <td class="table-data">NGINX 1.14.0</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><strong>PHP</strong></td>
                            <td class="table-data">7.2.8</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><strong>Python</strong></td>
                            <td class="table-data">2.7</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><strong>Node.js</strong></td>
                            <td class="table-data">10.12.0</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><strong>Ruby</strong></td>
                            <td class="table-data">2.4</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><strong>Command Line Editor</strong></td>
                            <td class="table-data">Nano / Vi</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><strong>Git</strong></td>
                            <td class="table-data">2.19.0</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><strong>Curl</strong></td>
                            <td class="table-data">7.58</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td><strong>Glances</strong></td>
                            <td class="table-data">2.11.1 w/ psutil v5.4.2</td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                    </table>
                </section>
                <section class="mysql-section">
                    <div class="text-left">
                        <h2>Databases</h2>
                    </div>

                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <th colspan="3">
                                <h3>MySQL v5.7.23</h3>
                                <p><code>>> mysql -u root -p</code></p>
                            </th>
                        </tr>
                        <tr>
                            <?php
                            $mysql_exists = false;
                            if (extension_loaded('mysql') or extension_loaded('mysqli')) :
                                $mysql_exists = true;
                            endif;
                            $mysqli = @new mysqli('localhost', 'root', 'root');
                            $mysql_running = true;
                            if (mysqli_connect_errno()) {
                                $mysql_running = false;
                            } else {
                                $mysql_version = $mysqli->server_info;
                            }

                            $mysqli->close();
                            ?>
                            <td><strong>Connected?</strong></td>
                            <td>
                                <?php echo($mysql_running ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="credentials">
                                    <div class="form-group">
                                        <label>Hostname</label>
                                        <input type="text" class="form-control" value="localhost">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" value="root">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" value="root">
                                    </div>
                                    <div class="form-group">
                                        <label>Database</label>
                                        <input type="text" class="form-control"
                                               value="wp_local">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <th colspan="3">
                                <h3>MongoDB v4.0.3</h3>
                            </th>
                        </tr>
                        <tr>
                            <td><strong>Connected?</strong></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="credentials">
                                    <div class="form-group">
                                        <label>Hostname</label>
                                        <input type="text" class="form-control" value="localhost">
                                    </div>
                                    <div class="form-group">
                                        <label>Port</label>
                                        <input type="text" class="form-control" value="27017">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </section>
                <section class="ssh-section">
                    <div class="text-left">
                        <h2>SSH</h2>
                    </div>

                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <th>
                                <h3>How to Connect</h3>
                                <code>>> ssh vagrant@<?php echo htmlentities($_SERVER['SERVER_ADDR']); ?> </code>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div class="credentials">
                                    <div class="form-group">
                                        <label>From project directory via terminal...</label>
                                        <p><code>>> vagrant ssh</code></p>
                                    </div>
                                    <h4 class="text-center">Or</h4>
                                    <div class="form-group">
                                        <label>SSH Host</label>
                                        <input type="text" class="form-control" value="127.0.0.1 or <?php echo htmlentities($_SERVER['SERVER_ADDR']);?>">
                                    </div>
                                    <div class="form-group">
                                        <label>SSH User</label>
                                        <input type="text" class="form-control" value="vagrant">
                                    </div>
                                    <div class="form-group">
                                        <label>SSH Password</label>
                                        <input type="text" class="form-control" value="vagrant">
                                    </div>
                                    <div class="form-group">
                                        <label>SSH Port</label>
                                        <input type="text" class="form-control" value="2222">
                                    </div>
                                    <hr>
                                    <h4>Troubleshoot:</h4>
                                    <p>Vagrant might automatically try to use something else if it's blocked. To get
                                        the credentials just do:</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="vagrant ssh-config">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </section>
            </div>

        </div>
    </div>

    <footer>
        <h3> <?php echo 'myLocal Box <small>v' . htmlentities($box_version) . '</small>'; ?></h3>
    </footer>
</main>

</body>
</html>