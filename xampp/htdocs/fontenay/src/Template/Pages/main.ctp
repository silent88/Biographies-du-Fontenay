<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Biographies du Fontenay';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this -> Html -> charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this -> fetch('title') ?>
    </title>
    <?= $this -> Html -> meta('icon'); ?>
    <?= $this -> Html -> meta('favicon-16x16.png', 'img/favicon-16x16.png', ['type' => 'icon', 'sizes' => '16x16']); ?>
    <?= $this -> Html -> meta('favicon-32x32.png', 'img/favicon-32x32.png', ['type' => 'icon', 'sizes' => '32x32']); ?>

    <?= $this -> Html -> css('base.css') ?>
    <?= $this -> Html -> css('cake.css') ?>

    <?= $this -> fetch('meta') ?>
    <?= $this -> fetch('css') ?>
    <?= $this -> fetch('script') ?>
</head>
<body>
	<div id='name-header'><p>Sven, Godo</p></div>
	<div id='tool-bar'>
		<?= $this->Form->select('Highlight', ['Highlight1', 'Highlight2']); ?>
		<?= $this->Form->select('Layer', ['Layer1', 'Layer2']); ?>
		<?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']); ?>
	</div>
	<div id='main-canvas' style="width: 80%; display:inline-block; box-sizing:unset;">
		<?= file_get_contents('/img/spiral_t12.svg', FILE_USE_INCLUDE_PATH); ?>
	</div>
	<div id='event-add'>		
		<iframe sandbox="allow-scripts allow-forms allow-same-origin" src="/fontenay/events/addSimple">
		</iframe>
	</div>
	<div id='event-edit'>
		<iframe sandbox="allow-scripts allow-forms allow-same-origin" src="/fontenay/events/editSimple/2">
		</iframe>		
	</div>
	<div id='event-date-info'>
		<iframe sandbox="allow-scripts allow-forms allow-same-origin" src="/fontenay/time-dimention/view/20161122">
		</iframe>	
	</div>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">Main</a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
            </ul>
        </div>
    </nav>
    <?= $this -> Flash -> render() ?>
    <div class="container clearfix">
        <?= $this -> fetch('content') ?>
    </div>
    <footer>
    	<div class="centered">Copyright (c) Atelier du Fontenay, Licensed under the MIT License.</div>
    </footer>
</body>
</html>
