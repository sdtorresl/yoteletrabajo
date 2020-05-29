<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Podcast[]|\Cake\Collection\CollectionInterface $podcasts
 */
?>

<?= $this->Html->css('main.min.css') ?>

<div class="container">
    <section class="podcasts index">
        <div id="podcasts-wrapper" class="row">
            <?php foreach ($podcasts as $podcast): ?>
            <div class="podcast-item col l4 m6 s12">
                <div class="card">
                    <div class="card-image">
                        <img
                            src="https://michael-zhigulin.github.io/mz-codepen-projects/Material%20Design%20UI%20Audio%20Player/tim_minchin_piano.jpg"
                            alt="fun.png">
                        <a class="btn-floating btn-large halfway-fab waves-effect waves-light">
                            <i class="material-icons" id="PausePlay">play_arrow</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <h5><?= $podcast->title ?></h5>
                        <p class="description"><?= $podcast->description ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="paginator center-align row">
            <ul class="pagination">
                <?= $this->Paginator->first('<<') ?>
                <?= $this->Paginator->prev('<') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('>') ?>
                <?= $this->Paginator->last('>>') ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
            </p>
        </div>
    </section>
</div>

<?= $this->Html->script('https://code.jquery.com/jquery-2.1.1.min.js') ?>
<?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/node-waves/0.7.5/waves.min.js') ?>
<?= $this->Html->script('podcasts.js') ?>
