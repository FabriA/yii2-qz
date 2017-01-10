<?php

/**
 * @copyright Copyright &copy; Fabrizio Albonico 2017
 * @package yii2-qz
 * @version 1.0.0
 */

namespace fabria\qz;

use yii\web\AssetBundle;

/**
 * Asset bundle for [[QZPrint]] Widget.
 *
 * @author Fabrizio Albonico <software@albonico.ch>
 * @since 1.0
 */
class QZPrintAsset extends AssetBundle
{
	/**
	 * {@inheritdoc}
	 */
	public $sourcePath = 'backend/runtime/tmp-extensions/yii2-qz';

	/**
	 * {@inheritdoc}
	 */
	public $css = [
		//'skins/all.css',
	];

	/**
	 * {@inheritdoc}
	 */
	public $js = [
		'assets/js/qz-tray.js',
		'assets/js/dependencies/rsvp-3.1.0.min.js',
		'assets/js/sha-256.min.js'
	];

	/**
	 * {@inheritdoc}
	 */
	public $depends = [
		'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapPluginAsset',
	];
}
