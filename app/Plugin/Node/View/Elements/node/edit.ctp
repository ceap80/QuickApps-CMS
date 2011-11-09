<?php 
/**
 * Edit form for NodeType
 * This element is rendered by NodeHookHelper::node_form().
 *
 * @package QuickApps.Plugin.Node.View.Elements.node
 * @author Christopher Castro
 */ 
?>

<?php echo $this->Html->useTag('fieldsetstart', __t('Content')); ?>
    <?php foreach ($data['Field'] as $field): ?>
        <?php echo $this->Layout->hook("{$field['field_module']}_edit", $field); ?>
    <?php endforeach; ?>
<?php echo $this->Html->useTag('fieldsetend'); ?>