<?php

declare(strict_types=1);

use Yiisoft\Html\Html;

/**
 * @var \Yiisoft\View\WebView $this
 * @var \App\Common\Application\ApplicationParameters $applicationParameters
 */
?>
<head>
    <meta charset="<?= Html::encode($applicationParameters->getCharset()) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->head() ?>
    <?php if ($this->getTitle() !== null): ?>
        <title><?= Html::encode($this->getTitle()) ?></title>
    <?php endif ?>
</head>
