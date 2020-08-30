
<a href=<?= $this->Url->Build('/')?>> Home </a>/ File Upload <br><br>

<div class="fileUploads index content">
    <?= $this->Html->link(__('New File Upload'), ['action' => 'add'], ['class' => 'button float-right']) ?>

    <h3><?= __('File Uploads') ?></h3>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fileUploads as $fileUpload): ?>
                <tr>
                    <td><?= $fileUpload->id ?></td>
                    <td><?= $fileUpload->file ?></td>
                    <td><?= $fileUpload->email ?></td>
                    <td><?= $fileUpload->created ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>
