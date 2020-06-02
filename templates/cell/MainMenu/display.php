<div class="navbar-fixed">
    <nav>
        <ul id="podcast-categories" class="dropdown-content">
            <?php foreach ($podcastsCategories as $category): ?>
            <li>
                <a href="#!podcasts/index/<?= $category->id ?>"><?= $category->name ?></a>
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
                <li>
                    <a href="#!/podcasts"><?= __('Podcasts') ?></a>
                </li>
                <li>
                    <a href="#!/productos"><?= __('Products') ?></a>
                </li>
                <li>
                    <a href="#!/servicios"><?= __('Services') ?></a>
                </li>
                <li>
                    <a href="#!/acerca"><?= __('About') ?></a>
                </li>
                <li>
                    <a href="#!/contacto"><?= __('Contact') ?></a>
                </li>
            </ul>
        </div>
    </nav>
</div>