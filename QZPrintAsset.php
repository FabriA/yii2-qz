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
	public $sourcePath = __DIR__ . '/assets';

	/**
	 * {@inheritdoc}
	 */
//	public $css = [
//		//'skins/all.css',
//	];

	/**
	 * {@inheritdoc}
	 */
	public $js = [
		'js/qz-tray.js',
		'js/helpers.js',
		'js/printer.js',
		'js/dependencies/rsvp-3.1.0.min.js',
		'js/sha-256.min.js'
	];

	/**
	 * {@inheritdoc}
	 */
	public $depends = [
		'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapPluginAsset',
	];
}
