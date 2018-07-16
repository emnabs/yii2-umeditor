<?php

namespace emhome\umeditor;

use yii\web\AssetBundle;

class UMEditorAsset extends AssetBundle {

    public $js = [
        'umeditor.config.js',
        'umeditor.js',
    ];

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
    }

}
