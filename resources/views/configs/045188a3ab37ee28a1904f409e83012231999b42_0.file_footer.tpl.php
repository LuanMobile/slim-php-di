<?php
/* Smarty version 5.0.2, created on 2024-04-19 00:12:39
  from 'file:partials/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6621b6f743dcc5_18095198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '045188a3ab37ee28a1904f409e83012231999b42' => 
    array (
      0 => 'partials/footer.tpl',
      1 => 1713485515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6621b6f743dcc5_18095198 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views/partials';
?><footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            Slim Framework
        </a>
        <span class="text-muted">© <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),'Y');?>
 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#twitter"></use>
                </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#instagram"></use>
                </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#facebook"></use>
                </svg></a></li>
    </ul>
</footer><?php }
}
