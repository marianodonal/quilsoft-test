<div class="">
    <?= $this->element('search') ?>
    <h2><?= h($article->title) ?></h2>
    <?= $this->Html->image($article->image, ['class' => 'img-fluid mb-3']) ?>
    <div class="small">
        <?= $this->Text->autoParagraph(h($article->body)) ?>
    </div>
    <a class="btn btn-primary rounded share-button text-white" data-title="<?= h($article->title) ?>" data-url="<?= $this->Url->build(['action' => 'view', $article->id], ['fullBase' => true]) ?>">Share</a>
</div>
