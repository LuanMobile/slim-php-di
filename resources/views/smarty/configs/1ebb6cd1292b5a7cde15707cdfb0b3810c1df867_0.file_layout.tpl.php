<?php
/* Smarty version 5.0.2, created on 2024-04-19 00:37:55
  from 'file:layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6621bce3e35903_11458509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ebb6cd1292b5a7cde15707cdfb0b3810c1df867' => 
    array (
      0 => 'layout.tpl',
      1 => 1713487070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/header.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
))) {
function content_6621bce3e35903_11458509 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10829568286621bce3e334c8_50879397', 'title');
?>
</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <?php $_smarty_tpl->renderSubTemplate("file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <div class="container">
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_5229180286621bce3e34eb8_27858334', 'body');
?>

        <?php $_smarty_tpl->renderSubTemplate("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
</body>

</html><?php }
/* {block 'title'} */
class Block_10829568286621bce3e334c8_50879397 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views';
?>
Slim Framework<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_5229180286621bce3e34eb8_27858334 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views';
}
}
/* {/block 'body'} */
}
