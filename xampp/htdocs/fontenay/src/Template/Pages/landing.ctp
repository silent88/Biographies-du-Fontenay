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
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this -> layout = false;
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

    <?= $this -> Html -> css('fontenay.css') ?>

    <?= $this -> fetch('meta') ?>
    <?= $this -> fetch('css') ?>
    <?= $this -> fetch('script') ?>
</head>
<body class="home">
    <header style="height: 15%">
          <div class="banderole boxshadow">
            <div id="corner_logo"><?= $this -> Html -> image('/img/fonteney_corner_landing.png') ?></div>
   <div class="b_title">
    <b id="b_title_text">Biographies du Fontenay</b>
   </div>
  </div>
  
    </header>
    <div id="content">
    	<?= $this->Form->create() ?>
    	<legend><?= __('Biographies disponibles: ') ?></legend>
    	<?= $this->Form->select('Name', ['Sven', 'Gaia'], ['multiple' => true]); ?>
    	<?= $this->Form->button('Selectioner Biographie', ['type' => 'submit']) ?>
    	
    <?= $this->Form->end() ?>

    <footer>
    	<div class="centered">Copyright (c) Atelier du Fontenay, Licensed under the MIT License.</div>
    </footer>
</body>
</html>
