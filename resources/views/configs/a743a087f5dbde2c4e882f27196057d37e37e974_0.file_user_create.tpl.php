<?php
/* Smarty version 5.0.2, created on 2024-04-22 18:51:17
  from 'file:user_create.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6626b1a53a17e8_13010718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a743a087f5dbde2c4e882f27196057d37e37e974' => 
    array (
      0 => 'user_create.tpl',
      1 => 1713805521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6626b1a53a17e8_13010718 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_4306240076626b1a5389fe2_69029729', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6663823616626b1a538f870_44202621', 'body');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_4306240076626b1a5389fe2_69029729 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views';
?>

    User Create
<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_6663823616626b1a538f870_44202621 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views';
?>

    <?php if ($_smarty_tpl->getValue('success')) {?>
        <div class="alert alert-success"><?php echo $_smarty_tpl->getValue('success');?>
</div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('error')) {?>
        <div class="alert alert-error"><?php echo $_smarty_tpl->getValue('error');?>
</div>
    <?php }?>
    <form method="post" action="/register">
        <div class="mb-3">
            <?php if ((null !== ($_smarty_tpl->getValue('validate') ?? null) && null !== ($_smarty_tpl->getValue('validate')['firstName'] ?? null))) {?>
                <div class="alert alert-danger"><?php echo $_smarty_tpl->getValue('validate')['firstName'];?>
</div>
            <?php }?>
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstName" value="Alexandre">
        </div>
        <div class="mb-3">
            <?php if ((null !== ($_smarty_tpl->getValue('validate') ?? null) && null !== ($_smarty_tpl->getValue('validate')['lastName'] ?? null))) {?>
                <div class="alert alert-danger"><?php echo $_smarty_tpl->getValue('validate')['lastName'];?>
</div>
            <?php }?>
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastName" value="Cardoso">
        </div>
        <div class="mb-3">
            <?php if ((null !== ($_smarty_tpl->getValue('validate') ?? null) && null !== ($_smarty_tpl->getValue('validate')['email'] ?? null))) {?>
                <div class="alert alert-danger"><?php echo $_smarty_tpl->getValue('validate')['email'];?>
</div>
            <?php }?>
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="xandecar@hotmail.com">
        </div>
        <div class="mb-3">
            <?php if ((null !== ($_smarty_tpl->getValue('validate') ?? null) && null !== ($_smarty_tpl->getValue('validate')['password'] ?? null))) {?>
                <div class="alert alert-danger"><?php echo $_smarty_tpl->getValue('validate')['password'];?>
</div>
            <?php }?>
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="password" value="123456">
        </div>
        <div class="mb-3">
            <?php if ((null !== ($_smarty_tpl->getValue('validate') ?? null) && null !== ($_smarty_tpl->getValue('validate')['confirm_password'] ?? null))) {?>
                <div class="alert alert-danger"><?php echo $_smarty_tpl->getValue('validate')['confirm_password'];?>
</div>
            <?php }?>
            <label class="form-label">Confirm Password</label>
            <input type="text" class="form-control" name="confirm_password" value="123456">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php
}
}
/* {/block 'body'} */
}
