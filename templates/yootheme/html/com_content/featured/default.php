<?php

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

defined('_JEXEC') or die;

HTMLHelper::addIncludePath(JPATH_COMPONENT . '/helpers');

// Theme
$theme = HTMLHelper::_('theme');

// Parameter shortcuts
$params = $this->params;
$lead = $this->lead_items ?: [];
$intro = $this->intro_items ?: [];
$columns = max(1, $params->get('num_columns'));

// Article template
$article = HTMLHelper::_('render', 'article:featured', function ($item) use ($columns) {
    return [
        'article' => $item,
        'content' => $item->introtext,
        'image' => 'intro',
        'columns' => $columns,
    ];
});

?>

<?php if ($params->get('show_page_heading')) : ?>
<h1><?= $this->escape($params->get('page_heading')) ?></h1>
<?php endif ?>

<?php

    $attrs_lead = [];

    $column_gap = $theme->get('blog.grid_column_gap');
    $row_gap = $theme->get('blog.grid_row_gap');

    $attrs_lead['class'][] = 'uk-grid uk-child-width-1-1';
    $attrs_lead['class'][] = $row_gap ? "uk-grid-{$row_gap}" : '';

?>

<?php if ($lead) : ?>
<div <?= $theme->view->attrs($attrs_lead) ?>>
    <?php foreach ($lead as $item) : ?>
    <div><?= $article($item) ?></div>
    <?php endforeach ?>
</div>
<?php endif ?>

<?php

if ($intro) :

    // Grid
    $attrs = [];
    $options = [];

    $options[] = $theme->get('blog.grid_masonry') ? 'masonry: true' : '';
    $options[] = $theme->get('blog.grid_parallax') ? "parallax: {$theme->get('blog.grid_parallax')}" : '';
    $attrs['uk-grid'] = implode(';', array_filter($options)) ?: true;

    // Columns
    $breakpoints = ['s', 'm', 'l', 'xl'];
    $breakpoint = $theme->get('blog.grid_breakpoint');
    $pos = array_search($breakpoint, $breakpoints);

    if ($pos === false || $columns === 1) {
        $attrs['class'][] = "uk-child-width-1-{$columns}";
    } else {
        for ($i = $columns; $i > 0; $i--) {
            if (($pos > -1) && ($i > 1)) {
                $attrs['class'][] = "uk-child-width-1-{$i}@{$breakpoints[$pos]}";
                $pos--;
            }
        }
    }

    if ($column_gap == $row_gap) {
        $attrs['class'][] = $column_gap ? "uk-grid-{$column_gap}" : '';
    } else {
        $attrs['class'][] = $column_gap ? "uk-grid-column-{$column_gap}" : '';
        $attrs['class'][] = $row_gap ? "uk-grid-row-{$row_gap}" : '';
    }

?>

    <div <?= $theme->view->attrs($attrs) ?>>
        <?php foreach ($intro as $i => $item) : ?>
        <div><?= $article($item) ?></div>
        <?php endforeach ?>
    </div>

<?php endif ?>

<?php if (!empty($this->link_items)) : ?>
<div class="uk-margin-large<?= $theme->get('post.header_align') ? ' uk-text-center' : '' ?>">

    <h3><?= Text::_('COM_CONTENT_MORE_ARTICLES') ?></h3>

    <ul class="uk-list">
        <?php foreach ($this->link_items as $item) : ?>
        <li><a href="<?= Route::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catslug)) ?>"><?= $item->title ?></a></li>
        <?php endforeach ?>
    </ul>

</div>
<?php endif ?>

<?php if (($params->def('show_pagination', 1) == 1 || ($params->get('show_pagination') == 2)) && ($this->pagination->pagesTotal > 1)) : ?>

    <?php if ($theme->get('blog.navigation') == 'pagination') : ?>
        <?= $this->pagination->getPagesLinks() ?>
    <?php endif ?>

    <?php if ($theme->get('blog.navigation') == 'previous/next') : ?>
    <ul class="uk-pagination uk-margin-large">

        <?php if ($prevlink = $this->pagination->getData()->previous->link) : ?>
        <li><a href="<?= $prevlink ?>"><span uk-pagination-previous></span> <?= Text::_('JPREV') ?></a></li>
        <?php endif ?>

        <?php if ($nextlink = $this->pagination->getData()->next->link) : ?>
        <li class="uk-margin-auto-left"><a href="<?= $nextlink ?>"><?= Text::_('JNEXT') ?> <span uk-pagination-next></span></a></li>
        <?php endif ?>

    </ul>
    <?php endif ?>

<?php endif ?>
