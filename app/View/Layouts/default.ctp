<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Badger 2');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
                
        echo $this->Html->css('badger2');
        
		echo $this->Html->css('resources/css/ext-all');
	    echo $this->Html->script('desktop/ext-all-dev');
	    echo $this->Html->script('/Bancha/js/Bancha');
	    echo $this->Html->script('/bancha-api/models/all');
        
        echo $this->Html->script('bancha-scaffold-debug');
		echo $this->Html->script('desktop/app.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<?php echo $this->Session->flash(); ?>
	
	<?php echo $this->fetch('content'); ?>
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
