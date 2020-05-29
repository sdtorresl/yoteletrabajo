<div class="navbar-fixed">
    <nav>
        <ul id="podcast-categories" class="dropdown-content">
            <?php foreach ($podcastsCategories as $category): ?>
            <li>
                <a href="#!podcasts/index/<?= $category->id ?>"><?= $category->name ?></a>
            </li>
            <?php endforeach; ?>
        </ul>

        <ul id="products-categories" class="dropdown-content">
            <?php foreach ($productsCategories as $category): ?>
            <li>
            <a href="#!products/index/<?= $category->id ?>"><?= $category->name ?></a>
            </li>
            <?php endforeach; ?>
        </ul>

        <ul id="services-categories" class="dropdown-content">
            <?php foreach ($servicesCategories as $category): ?>
            <li>
            <a href="#!services/index/<?= $category->id ?>"><?= $category->name ?></a>
            </li>
            <?php endforeach; ?>
        </ul>

        <div class="nav-wrapper grey lighten-5">
            <a href="#" class="brand-logo hide-on-med-and-down">
                <?= $this->Html->image('logo.svg'); ?>
            </a>
            <ul>
                <li>
                    <a href="https://facebook.com/yoteletrabajoco" target="_blank">
                        <?= $this->Html->image('icons/facebook.png', ['class' => 'social-icon']); ?>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/yoteletrabajoco" target="_blank">
                        <?= $this->Html->image('icons/twitter.png', ['class' => 'social-icon']); ?>
                    </a>
                </li>
                <li>
                    <a href="https://linkedin.com/in/yoteletrabajo.co" target="_blank">
                        <?= $this->Html->image('icons/linkedin.png', ['class' => 'social-icon']); ?>
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com/yoteletrabajo.co" target="_blank">
                        <?= $this->Html->image('icons/instagram.png', ['class' => 'social-icon']); ?>
                    </a>
                </li>
            </ul>

            <ul id="nav-mobile" class="right">
                <?php if (sizeof($podcastsCategories)): ?>
                <li>
                    <a class="dropdown-trigger" href="#!" data-target="podcast-categories"><?= __('Podcasts') ?><i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <?php endif; ?>

                <?php if (sizeof($productsCategories)): ?>
                <li>
                    <a class="dropdown-trigger" href="#!" data-target="products-categories"><?= __('Products') ?><i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <?php endif; ?>

                <?php if (sizeof($servicesCategories)): ?>
                <li>
                    <a class="dropdown-trigger" href="#!" data-target="services-categories"><?= __('Services') ?><i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <?php endif; ?>

                <li>
                    <a href="#!acerca"><?= __('About') ?></a>
                </li>
                <li>
                    <a href="#!contacto"><?= __('Contact') ?></a>
                </li>
            </ul>
        </div>
    </nav>
</div>