<?php
/* Smarty version 5.0.2, created on 2024-04-19 00:35:26
  from 'file:home.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6621bc4e1ea702_85270278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c92257088bba6f8dfb27cecdd40b9a7c74cc1db' => 
    array (
      0 => 'home.tpl',
      1 => 1713486905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6621bc4e1ea702_85270278 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12741207736621bc4e1e96c3_70636591', 'title');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9904254936621bc4e1ea1d5_33075413', 'body');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'title'} */
class Block_12741207736621bc4e1e96c3_70636591 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views';
?>

    Home Slim Framework
<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_9904254936621bc4e1ea1d5_33075413 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views';
?>

    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure laudantium accusantium facere dicta ducimus rem
        officia delectus aut iste id quidem iusto possimus impedit, eveniet cupiditate vero ullam. Fuga, aliquid.
    </p>
<?php
}
}
/* {/block 'body'} */
}
