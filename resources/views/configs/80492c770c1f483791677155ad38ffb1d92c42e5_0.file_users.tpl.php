<?php
/* Smarty version 5.0.2, created on 2024-04-19 00:36:36
  from 'file:users.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6621bc94ada990_01640267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80492c770c1f483791677155ad38ffb1d92c42e5' => 
    array (
      0 => 'users.tpl',
      1 => 1713486847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6621bc94ada990_01640267 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3452500046621bc94ad5622_50476424', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_873014156621bc94ad6d53_78689238', 'body');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_3452500046621bc94ad5622_50476424 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views';
?>

    Users Slim Framework
<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_873014156621bc94ad6d53_78689238 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views';
?>

    <ul class="list-group">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), 'user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user')->value) {
$foreach0DoElse = false;
?>
            <li class="list-group-item">
                <?php echo $_smarty_tpl->getValue('user')['firstName'];?>

            </li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'body'} */
}
