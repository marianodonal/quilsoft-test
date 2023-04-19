<div class="d-flex flex-column" style="height: 100%;">
    <?= $this->Form->create($user) ?>
        <h2 class="mb-3">Personal Information</h2>
        <div class="mb-3">
            <?= $this->Form->control('email', ['class' => 'rounded']) ?>
        </div>
        <div class="mb-3">
            <?= $this->Form->control('pwd', ['type' => 'password', 'label' => 'Password', 'class' => 'rounded']) ?>
        </div>
        <div class="d-grid gap-2">
            <?= $this->Form->button(__('Save'), ['class' => 'btn btn-primary text-white rounded']); ?>
        </div>
    <?= $this->Form->end() ?>
</div>
