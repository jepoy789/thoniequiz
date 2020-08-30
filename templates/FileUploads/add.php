
<a href=<?= $this->Url->Build('/')?>> Home </a>/ <a href=<?= $this->Url->Build('/file-uploads')?>>File Upload </a>/ Upload File<br><br>


<!-- <div class="row"> -->
    <aside class="column">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List File Uploads'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
    </aside>
<center>
    <!-- <div class="column-responsive"> -->
        <!-- <div class="fileUploads form content"> -->
            <?= $this->Form->create($fileUpload,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add File Upload') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('file_upload',['type'=>'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
</center>
        <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->
