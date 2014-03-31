<?php

Class SiteController extends CController
{
	public $errorPage = false;

	public function createAlias(IndexModel $model, $key)
	{
		$chars = "qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";
		$max = 4;
		$alias = null;
		while ($max--)
			$alias .= $chars[rand(0, strlen($chars) - 1)];

		if ($model->findByAttributes(['alias' => $alias]) === null)
			return $alias;

		return $this->createAlias($model, $key);
	}

	public function actionIndex()
	{
		$model = new IndexModel();
		$code = null;
		/** @var CHttpRequest $request */
		$request = Yii::app()->getRequest();

		if ($request->isPostRequest) {
			$key = rand(0, 9);

			$model->setTable('table_' . $key);
			$model->url = $_POST['IndexModel']['url'];
			$model->alias = $this->createAlias($model, $key);
			if ($model->save()) {
				$code = $key . $model->alias;

				if ($request->isAjaxRequest)
				{
					echo $this->renderPartial('_form', ['model' => $model, 'code' => $code]);
					Yii::app()->end();
				}
			}
		}

		if ($request->isAjaxRequest)
			echo $this->renderPartial('_form', ['model' => $model, 'code' => $code]);
		else
			$this->render('index', ['model' => $model, 'code' => $code]);
	}

	public function actionGo($key)
	{
		$model = new IndexModel();
		$model->setTable('table_' . $key[0]);
		/** @var IndexModel $Index */
		$Index = $model->findByAttributes(['alias' => str_replace($key[0], '', $key)]);

		if ($Index !== null) {
			/** @var CHttpRequest $request */
			$request = Yii::app()->getRequest();
			$request->redirect($Index->url);

		} else {
			$this->errorPage = true;
			$this->actionIndex();
		}

	}
}