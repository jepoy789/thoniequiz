<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FileUpload $fileUpload
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fileUpload->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fileUpload->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List File Uploads'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fileUploads form content">
            <?= $this->Form->create($fileUpload) ?>
            <fieldset>
                <legend><?= __('Edit File Upload') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('valid');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
