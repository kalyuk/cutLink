<div class="form-wrapper">
<?php
$this->renderPartial('_fail');
?>
<?php
$this->renderPartial('_form', ['model' => $model, 'code' => $code]);
?>
</div>