<nav class="navbar navbar-light">
    <div class="container-fluid px-0">
        <?php
        $avatar = $this->Identity->isLoggedIn() ? $this->Html->image('user-avatar.png', ['style' => 'max-width: 50px;']) : '';
        echo $this->Html->link($avatar, '/', ['class' => 'navbar-brand', 'escape' => false]);
        ?>
        <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="d-flex justify-content-center mb-5">
                <?= $this->Identity->isLoggedIn() ? $this->Html->image('user-avatar.png', ['style' => 'max-width: 100px;']) : '' ?>
            </div>
            <ul class="navbar-nav align-items-center justify-content-end flex-grow-1">
                <?php if ( $this->Identity->isLoggedIn() ) : ?>
                <li class="nav-item">
                    <h3><?= $this->Identity->get('email') ?></h3>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Personal Information'), ['controller' => 'Users', 'action' => 'edit'], ['class' => 'nav-link']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Saved'), '#', ['class' => 'nav-link']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Add Article'), ['controller' => 'Articles', 'action' => 'add'], ['class' => 'nav-link']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link']) ?>
                </li>
                <?php else : ?>
                <li class="nav-item">
                    <?= $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'nav-link']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Articles'), ['controller' => 'Articles', 'action' => 'index'], ['class' => 'nav-link']) ?>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        </div>
    </div>
</nav>
