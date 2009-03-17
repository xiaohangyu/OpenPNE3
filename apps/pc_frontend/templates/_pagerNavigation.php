<?php
$options->setDefault('is_total', true);
$options->setDefault('query_string', '');

$options->setDefault('prev_text', __('Previous', array(), 'pager'));
$options->setDefault('next_text', __('Next', array(), 'pager'));
?>

<?php if ($options['is_total'] || $pager->haveToPaginate()): ?>
<div class="pagerRelative">
<?php if ($pager->getPreviousPage() != $pager->getPage()): ?>
<p class="prev"><?php echo link_to($options['prev_text'], sprintf($sf_data->getRaw('link_to'), $pager->getPreviousPage()), array('query_string' => $options['query_string'])) ?></p>
<?php endif; ?>
<?php if ($options['is_total']): ?>
<p class="number"><?php op_include_pager_total($pager) ?></p>
<?php endif; ?>
<?php if ($pager->getNextPage() != $pager->getPage()): ?>
<p class="next"><?php echo link_to($options['next_text'], sprintf($sf_data->getRaw('link_to'), $pager->getNextPage()), array('query_string' => $options['query_string'])) ?></p>
<?php endif; ?>
</div>
<?php endif; ?>
