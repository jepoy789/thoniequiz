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
            <?= $this->Html->link(__('Edit File Upload'), ['action' => 'edit', $fileUpload->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete File Upload'), ['action' => 'delete', $fileUpload->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileUpload->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List File Uploads'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New File Upload'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fileUploads view content">
            <h3><?= h($fileUpload->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($fileUpload->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($fileUpload->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($fileUpload->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($fileUpload->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($fileUpload->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valid') ?></th>
                    <td><?= $fileUpload->valid ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
