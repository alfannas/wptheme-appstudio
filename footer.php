<?php wp_footer();?>
<hr>
<div class="container pb-5">
    <div class="float-left">
        Copyright © <?php echo date("Y"); ?> - Madani Studio
    </div>
    <div class="float-right">
        <?php $footer_menus = basictheme_get_menu_items('footer-menu'); ?>
        <ul class="nav-footer">
            <?php foreach($footer_menus as $item): ?>
                <li>
                    <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</body>
</html>