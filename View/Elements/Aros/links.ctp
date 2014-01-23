<div class="toolbar-sub">
<?php
$selected = isset($selected) ? $selected : $this->params['action'];

$links = array();
$links[] = $this->Html->link('<i class="fa fa-plus"></i> ' . __d('acl', 'Build missing AROs'), '/acl/aros/check', array('class' => 'btn btn-' . (($selected == 'check' )? 'primary' : 'default'), 'escape'=>false));
$links[] = $this->Html->link('<i class="fa fa-user"></i> ' . __d('acl', 'Users roles'), '/acl/aros/users', array('class' => 'btn btn-' . (($selected == 'users' )? 'primary' : 'default'), 'escape'=>false));

if(Configure :: read('acl.gui.roles_permissions.ajax') === true)
{
    $links[] = $this->Html->link('<i class="fa fa-group"></i> ' . __d('acl', 'Roles permissions'), '/acl/aros/ajax_role_permissions', array('class' => 'btn btn-' . (($selected == 'role_permissions' || $selected == 'ajax_role_permissions' )? 'primary' : 'default'), 'escape'=>false));
}
else
{
    $links[] = $this->Html->link('<i class="fa fa-group"></i> ' . __d('acl', 'Roles permissions'), '/acl/aros/role_permissions', array('class' => 'btn btn-' . (($selected == 'role_permissions' || $selected == 'ajax_role_permissions' )? 'primary' : 'default'), 'escape'=>false));
}
$links[] = $this->Html->link('<i class="fa fa-user"></i> ' . __d('acl', 'Users permissions'), '/acl/aros/user_permissions', array('class' => 'btn btn-' . (($selected == 'user_permissions' )? 'primary' : 'default'), 'escape'=>false));

echo $this->Html->nestedList($links, array('class' => 'list-inline'));
?>
</div>