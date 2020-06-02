<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */

$header = $this->cell('Header', [
    "Compra",
    "Encuentra todos los productos que necesitas para trabajar",
    "En yo teletrabajo te conectamos con los mejores productos para que tu trabajo en casa sea óptimo y confortable.",
    "fa-shop"]
);
?>

<?= $header ?>

<section class="products index container">
    <div class="row">
        <div id="filter" class="card col s12 m3">
            <h3 class=""><?= __("Productos para tu trabajo") ?></h3>
            <h3><?= __("Categorías") ?></h3>
        </div>

        <div class="products-wrapper col s12 m9">
            <div id="selected-filters">
            </div>

            <div id="results">
                <?php foreach ($products as $product): ?>
                <div class="card">
                    <div class="card-image">
                        <img src="images/sample-1.jpg">
                        <span class="card-title"><?= h($product->name) ?></span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                    <?php endforeach; ?>

                    <div class="paginator center-align">
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
                </div>
            </div>
        </div>
    </div>
</section>
