<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?php echo $this->Html->css('bootstrap.min'); ?>
    <?php echo $this->Html->css('style'); ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="" class="navbar-brand"><?= $this->fetch('title') ?></a>
            </div>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav navbar-right">
                    <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                    <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?= $this->Flash->render() ?>
    <div class="container">
        <div class="page-header" id="banner">
            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
    <footer>
    </footer>
    <?php echo $this->Html->script('bootstrap.min'); ?>
    <?php echo $this->fetch('script'); ?>
</body>
</html>
