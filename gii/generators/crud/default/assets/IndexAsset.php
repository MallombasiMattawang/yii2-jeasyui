<?php
use yii\helpers\StringHelper;

$modelName = StringHelper::basename($generator->modelClass);
$lowModelName = strtolower($modelName);

echo "<?php\n";
?>
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class <?=$modelName?>IndexAsset extends AssetBundle
{
    public $sourcePath = '@app/views/<?=$lowModelName?>/assets';
    public $css = [
        'css/<?=$lowModelName?>-index.css',
    ];
    public $js = [
        'js/<?=$lowModelName?>-index.js'
    ];
    public $depends = [];
    public $publishOptions=['forceCopy'=>YII_DEBUG];
}
