<div class="d-flex flex-column" style="height: 100%;">
    <?= $this->Form->create($article, ['type' => 'file']) ?>
    <?= $this->Form->hidden('user_id', ['value' => $this->Identity->get('id')]) ?>
        <h2 class="mb-3">Add Article</h2>
        <div class="mb-3">
            <?= $this->Form->control('title', ['class' => 'rounded']) ?>
        </div>
        <div class="mb-3">
            <?= $this->Form->control('body', ['class' => 'rounded']) ?>
        </div>
        <div class="mb-3">
            <?= $this->Form->control('image_file', ['type' => 'file', 'class' => 'rounded']) ?>
        </div>
        <div class="d-grid gap-2">
            <?= $this->Form->button(__('Save'), ['class' => 'btn btn-primary text-white rounded']); ?>
        </div>
    <?= $this->Form->end() ?>
</div>
