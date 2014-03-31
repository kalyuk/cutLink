<?php
/** @var $model IndexModel */
?>
<div class="form" id="output">

	<?php if (!empty($code)): ?>
		<div class="url-wrapper">
			http://<?php echo $_SERVER['HTTP_HOST'].'/'.$code ?>
		</div>
	<?php endif; ?>

	<?php echo CHtml::beginForm(); ?>

	<?php echo CHtml::errorSummary($model); ?>

	<div class="row">
		<?php echo CHtml::activeLabel($model,'url'); ?>
		<?php echo CHtml::activeTextArea($model,'url'); ?>
	</div>

	<div class="row submit">
		<?php
		echo CHtml::ajaxSubmitButton('Укоротить', '', array(
				'type' => 'POST',
				'update' => '#output',
			),
			array(
				'type' => 'submit'
			));
		?>
	</div>
	<?php echo CHtml::endForm(); ?>
</div><!-- form -->