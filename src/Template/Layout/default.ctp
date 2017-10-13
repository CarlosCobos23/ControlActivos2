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

$cakeDescription = 'TONI TI: HelpDesk & Asset Management';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('base - modified.css') ?>
	  <?= $this->Html->css('font-awesome.css') ?>
	  <?= $this->Html->css('themes/default/easyui.css') ?>
	  <?= $this->Html->css('themes/icon.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

	<?= $this->Html->script('jquery.min.js'); ?>
	<?= $this->Html->script('jquery.easyui.min.js'); ?>

</head>
<body>

  <div id="mySidenav" class="sidenav">
    <div class="snavheader"><h1>Opciones</h1></div>

    <a href="#" onmousedown="elemento(event);" id="activos"><img src="img/computer-icon.png" alt="" class="menu-icons">Activos</a>

    <ul class="easyui-tree tree" id="lista1">
        <li>
            <span>Foods</span>
            <ul>
                <li>
                    <span>Fruits</span>
                    <ul>
                        <li>apple</li>
                        <li>orange</li>
                    </ul>
                </li>
                <li>
                    <span>Vegetables</span>
                    <ul>
                        <li>tomato</li>
                        <li>carrot</li>
                        <li>cabbage</li>
                        <li>potato</li>
                        <li>lettuce</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>

    <a href="#" onmousedown="elemento(event);" id="tickets"><img src="img/ticket.png" alt="" class="menu-icons">Tickets</a>

    <ul class="easyui-tree tree" id="lista2">
        <li>
            <span>Foods</span>
            <ul>
                <li>
                    <span>Fruits</span>
                    <ul>
                        <li>apple</li>
                        <li>orange</li>
                    </ul>
                </li>
                <li>
                    <span>Vegetables</span>
                    <ul>
                        <li>tomato</li>
                        <li>carrot</li>
                        <li>cabbage</li>
                        <li>potato</li>
                        <li>lettuce</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>

    <a href="#" onmousedown="elemento(event);" id="movimientos"><img src="img/package.png" alt="" class="menu-icons">Movimientos</a>

    <ul class="easyui-tree tree" id="lista3">
        <li>
            <span>Foods</span>
            <ul>
                <li>
                    <span>Fruits</span>
                    <ul>
                        <li>apple</li>
                        <li>orange</li>
                    </ul>
                </li>
                <li>
                    <span>Vegetables</span>
                    <ul>
                        <li>tomato</li>
                        <li>carrot</li>
                        <li>cabbage</li>
                        <li>potato</li>
                        <li>lettuce</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>

    <a href="#"  onmousedown="elemento(event);"  id="pendientes"><img src="img/task.png" alt="" class="menu-icons">Pendientes</a>

    <ul class="easyui-tree tree" id="lista4">
        <li>
            <span>Foods</span>
            <ul>
                <li>
                    <span>Fruits</span>
                    <ul>
                        <li>apple</li>
                        <li>orange</li>
                    </ul>
                </li>
                <li>
                    <span>Vegetables</span>
                    <ul>
                        <li>tomato</li>
                        <li>carrot</li>
                        <li>cabbage</li>
                        <li>potato</li>
                        <li>lettuce</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>




  <a href="javascript:void(0)" onclick="closeNav()"><img src="img/close.png" alt="" class="menu-icons">Cerrar</a>
  </div>
	<div id="header">
	  <div id="mainmenu" class="left"><i class="fa fa-bars" aria-hidden="true" onclick="openNav()"></i></div>
	  <div id="logo" class="left">PORTAL TI</div>
	  <div class="right">
			<ul class="headernav">
				<li><a href="" class="blink bgalert"><i class="fa fa-bell-o" aria-hidden="true"></i> (13)</a></li>
				<li><a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i> Conocimiento</a></li>
				<li><a href=""><i class="fa fa-user-circle" aria-hidden="true"></i> Julio Perea Pastrana</a></li>
			</ul>
	  </div>
	</div>

	<?= $this->element('appnav') ?>

    <?= $this->Flash->render() ?>
    <div class="container clearfix" onclick="closeNav()">
        <?= $this->fetch('content') ?>
    </div>

    <div class="footer">
		Desarrollado por TI Operaciones © Copyright 2017 - TONY Tiendas. Todos los derechos reservados
	</div>




</body>
<script>
      function doSearch(value,name){
          alert('You input: ' + value+'('+name+')');
      }
  </script>
  <script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    }
  </script>
</html>
