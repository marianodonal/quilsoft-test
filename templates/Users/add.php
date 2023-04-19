<div class="d-flex flex-column" style="height: 100%;">
    <div class="d-flex justify-content-center mb-5">
        <?= $this->Html->image('user-avatar.png', ['style' => 'max-width: 140px;']) ?>
    </div>
    <?= $this->Form->create($user) ?>
        <h2 class="mb-3">Sign Up</h2>
        <div class="mb-3">
            <?= $this->Form->control('email', ['class' => 'rounded']) ?>
        </div>
        <div class="mb-3">
            <?= $this->Form->control('password', ['class' => 'rounded']) ?>
        </div>
        <div class="d-grid gap-2">
            <?= $this->Form->button(__('Sign Up'), ['class' => 'btn btn-primary text-white rounded']); ?>
        </div>
    <?= $this->Form->end() ?>
    <div class="row mt-5">
        <div class="col">
            <?= __('Already have an account?') ?>
            <?= $this->Html->link(__('Sign In'), ['action' => 'login']) ?>
        </div>
    </div>
</div>
