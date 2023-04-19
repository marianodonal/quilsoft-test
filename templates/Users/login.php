<div class="d-flex flex-column">
    <div class="d-flex justify-content-center mb-5">
        <?= $this->Html->image('user-avatar.png', ['style' => 'max-width: 140px;']) ?>
    </div>
    <?= $this->Form->create() ?>
        <h2 class="mb-3">Sign In</h2>
        <div class="mb-3">
            <?= $this->Form->control('email', ['class' => 'rounded']) ?>
        </div>
        <div class="mb-3">
            <?= $this->Form->control('password', ['class' => 'rounded']) ?>
        </div>
        <div class="d-grid gap-2">
            <?= $this->Form->button(__('Sign In'), ['class' => 'btn btn-primary text-white rounded']); ?>
        </div>
    <?= $this->Form->end() ?>
    <div class="row mt-5">
        <div class="col">
            <?= $this->Html->link(__('Forgot Password?'), '#', ['class' => 'fw-semibold text-dark']) ?>
        </div>
        <div class="col text-end">
            <?= $this->Html->link(__('Sign Up'), ['action' => 'add']) ?>
        </div>
    </div>
</div>
