<section class="content-header">
  <h1>
    <?php echo __('User'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Username') ?></dt>
                                        <dd>
                                            <?= h($user->username) ?>
                                        </dd>
                                                                                                                                                                                                                                            <dt><?= __('First Name') ?></dt>
                                        <dd>
                                            <?= h($user->first_name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Last Name') ?></dt>
                                        <dd>
                                            <?= h($user->last_name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Email') ?></dt>
                                        <dd>
                                            <?= h($user->email) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Photo') ?></dt>
                                        <dd>
                                            <?= h($user->photo) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Photo Dir') ?></dt>
                                        <dd>
                                            <?= h($user->photo_dir) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Role') ?></dt>
                                        <dd>
                                            <?= h($user->role) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Active') ?></dt>
                                <dd>
                                    <?= $this->Number->format($user->active) ?>
                                </dd>
                                                                                                
                                                                                                                                                                                                
                                            
                                    </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

</section>
