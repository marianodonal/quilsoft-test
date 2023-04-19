<div class="">
    <?= $this->element('search') ?>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php foreach ($articles as $article): ?>
                <div class="col">
                    <div class="card">
                        <a href="<?= $this->Url->build(['action' => 'view', $article->id]) ?>">
                            <div class="card-img-top" style="background-image: url(<?= $this->Url->image($article->image ?: 'https://placehold.co/600x400/png') ?>);"></div>
                        </a>
                        <div class="card-body px-1">
                            <p class="card-text small"><?= $this->Text->truncate(h($article->body), '160') ?></p>
                        </div>
                    </div>
                </div>
        <?php endforeach; ?>
    </div>
    <nav aria-label="Articles pagination">
        <ul class="pagination justify-content-center my-3">
            <?= $this->Paginator->prev('<') ?>
            <?= $this->Paginator->next('>') ?>
        </ul>
    </nav>
</div>
