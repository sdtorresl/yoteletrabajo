<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Yo teletrabajo';
$menuCell = $this->cell('Menu');
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription . ' -' ?>
        <?= ' ' . $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
    <?= $this->Html->css('/node_modules/materialize-css/dist/css/materialize.min.css') ?>
    <?= $this->Html->css('/node_modules/animate.css/animate.min.css') ?>
    <?= $this->Html->css('main.min.css') ?>
    
    <?= $this->Html->script('/node_modules/materialize-css/dist/js/materialize.min.js') ?>
    <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js') ?>
    <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>

    <nav>
        <div class="nav-wrapper grey lighten-5">
            <a href="#" class="brand-logo hide-on-med-and-down">
                <?= $this->Html->image('logo.svg'); ?>
            </a>

            <ul id="nav-mobile" class="right">
                <li>
                    <a class="black" href="#!contacto">Contacto</a>
                </li>
                <li>
                    <a class="black" href="#!acerca">Acerca de</a>
                </li>
                <li>
                    <a href="https://facebook.com/yoteletrabajoco" target="_blank">
                        <?= $this->Html->image('icons/facebook.png', ['class' => 'social-icon']); ?>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/yoteletrabajoco" target="_blank">
                        <?= $this->Html->image('icons/twitter.png', ['class' => 'social-icon']); ?>
                    </a>
                </li>
                <li>
                    <a href="https://linkedin.com/in/yoteletrabajo.co" target="_blank">
                        <?= $this->Html->image('icons/linkedin.png', ['class' => 'social-icon']); ?>
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com/yoteletrabajo.co" target="_blank">
                        <?= $this->Html->image('icons/instagram.png', ['class' => 'social-icon']); ?>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main ng-app="yoteletrabajo">
        <div ng-view></div>
    </main>

    <footer class="page-footer">
        <div class="container hide-on-down">
            <div class="row">
                <div class="col s12">
                    <div class="partners ">
                        <figure>
                            <?= $this->Html->image('logos/logo-exea.png') ?>
                        </figure>
                        <figure>
                            <?= $this->Html->image('logos/logo-tribu.png') ?>
                        </figure>
                        <figure>
                            <?= $this->Html->image('logos/logo-velazco-ordonez.jpeg') ?>
                        </figure>
                        <figure>
                            <?= $this->Html->image('logos/logo-innovaciones.png') ?>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container black-text">
                <?= date('Y') ?> © <?= _('Todos los derechos reservados') ?>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        M.AutoInit();

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var options = {
                preventScrolling: false
            }
            var instances = M.Sidenav.init(elems, options);
        });

        var collapsibleElem = document.querySelector('.collapsible');
        var collapsibleInstance = M.Collapsible.init(collapsibleElem);
    </script>

    <script type="text/javascript">
        var app = angular.module("yoteletrabajo", ["ngRoute"]);

        app.config(function($routeProvider) {
            $routeProvider
                .when("/home", {
                    templateUrl : "pages/home"
                })
                .when("/acerca", {
                    templateUrl : "pages/about"
                })
                .when("/contacto", {
                    templateUrl : "contacts"
                });
        });
    </script>

    <?= $this->Flash->render() ?>
</body>

</html>
