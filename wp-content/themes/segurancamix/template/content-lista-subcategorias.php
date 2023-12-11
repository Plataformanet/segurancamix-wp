<div class="megamenu-subcategories menu-<?php echo $args['term_id']; ?>">
    <?php
    foreach ($args['child_cat'] as $child_term) {
        $child_arg = array('hide_empty' => false, 'parent' => $args['term_id']);
        $child_cat = get_terms('categoria-produtos', $child_arg);
    ?>
        <!-- <span class="megamenu-subcategories__title">Subcategorias</span> -->
        <ul class="megamenu-subcategories__list" id="list_sub">
            <li data-id_sub="<?php echo $child_term->term_id; ?>">
                <a href="<?php echo get_category_link($child_term->term_id); ?>"><?php echo $child_term->name; ?></a>
            </li>
        </ul>
    <?php
    }
    ?>

</div>
<?php
foreach ($args['child_cat'] as $key => $child_term) {
    $child_arg = array('hide_empty' => false, 'parent' => $child_term->term_id);
    $child_sub = get_terms('categoria-produtos', $child_arg);
?>
    <div class="megamenu-subcategories-sub menu-sub-<?php echo $child_term->term_id; ?>">
        <!-- <span class="megamenu-subcategories__title">Subcategorias</span> -->
        <ul class="megamenu-subcategories__list" id="list_sub_sub">
            <?php
            foreach ($child_sub as $child__sub_term) {
            ?>
                <li data-id_sub="<?php echo $child__sub_term->term_id; ?>">
                    <a href="<?php echo get_category_link($child__sub_term->term_id); ?>"><?php echo $child__sub_term->name; ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
    <?php
    foreach ($child_sub as $key => $child__sub_term) {
        $child_arg = array('hide_empty' => false, 'parent' => $child__sub_term->term_id);
        $child_sub_sub = get_terms('categoria-produtos', $child_arg);
    ?>
        <div class="megamenu-subcategories-sub-sub menu-with__more_sub-<?php echo $child__sub_term->term_id; ?>">
            <!-- <span class="megamenu-subcategories__title">Subcategorias</span> -->
            <ul class="megamenu-subcategories__list" id="list_sub_with__more_sub">
                <?php
                foreach ($child_sub_sub as $child__sub_sub_term) {
                ?>
                    <li>
                        <a href="<?php echo get_category_link($child__sub_sub_term->term_id); ?>"><?php echo $child__sub_sub_term->name; ?></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    <?php
    }
    ?>
<?php
}
?>