<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <style>
        .ban{
            opacity: 0.5;
        }
    </style>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <?php 
                    $items_data = [
                        [
                            'user-photo' => 'img/demo/authors/sunny.png',
                            'user-name' => 'Sunny A.',
                            'user-profession' => 'UI/UX Expert',
                            'user-position' => 'Vyvozit ves` proect na sebe',
                            'user-twitter-link' => 'https://twitter.com/@myplaneticket',
                            'user-twitter-nick' => '@myplaneticket',
                            'user-mail' => 'https://wrapbootstrap.com/user/myorange',
                            'ban' => false
                        ],
                        [
                            'user-photo' => 'img/demo/authors/josh.png',
                            'user-name' => 'Jos K.',
                            'user-profession' => 'ASP.NET Developer',
                            'user-position' => 'Partner &amp; Contributor',
                            'user-twitter-link' => 'https://twitter.com/@myplaneticket',
                            'user-twitter-nick' => '@myplaneticket',
                            'user-mail' => 'https://wrapbootstrap.com/user/myorange',
                            'ban' => false
                        ],
                        [
                            'user-photo' => 'img/demo/authors/jovanni.png',
                            'user-name' => 'Jovanni L.',
                            'user-profession' => 'PHP Developer',
                            'user-position' => 'Malchik dlya bit`ya',
                            'user-twitter-link' => 'https://twitter.com/@myplaneticket',
                            'user-twitter-nick' => '@myplaneticket',
                            'user-mail' => 'https://wrapbootstrap.com/user/myorange',
                            'ban' => true
                        ],
                        [
                            'user-photo' => 'img/demo/authors/roberto.png',
                            'user-name' => 'Roberto R.',
                            'user-profession' => 'Rails Developer',
                            'user-position' => 'Minecraft gamer',
                            'user-twitter-link' => 'https://twitter.com/@myplaneticket',
                            'user-twitter-nick' => '@myplaneticket',
                            'user-mail' => 'https://wrapbootstrap.com/user/myorange',
                            'ban' => true
                        ]
                    ]
                    ?>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                               <?php foreach($items_data as $item):?>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0 <?php if($item['ban']): ?>ban <?php endif;?>">
                                <img src="<?php echo $item['user-photo'];?>" alt="<?php echo $item['user-name'];?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                    <?php echo $item['user-name'];?> (<?php echo $item['user-profession'];?>)
                                        <small class="m-0 fw-300">
                                            <?php echo $item['user-position'];?>
                                        </small>
                                    </h5>
                                    <a href="<?php echo $item['user-twitter-link'];?>" class="text-info fs-sm" target="_blank"><?php echo $item['user-twitter-nick'];?></a> -
                                    <a href="<?php echo $item['user-mail'];?>" class="text-info fs-sm" target="_blank" title="Contact Sunny"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
