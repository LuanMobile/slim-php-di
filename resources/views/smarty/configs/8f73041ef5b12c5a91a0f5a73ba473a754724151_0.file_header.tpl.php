<?php
/* Smarty version 5.0.2, created on 2024-04-19 00:08:21
  from 'file:partials/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6621b5f5694d55_41582562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f73041ef5b12c5a91a0f5a73ba473a754724151' => 
    array (
      0 => 'partials/header.tpl',
      1 => 1713484691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6621b5f5694d55_41582562 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/luan/projetos/php/praticandoPHP/slim-phpdi/resources/views/partials';
?><header class="p-3 mb-3 border-bottom">

    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <img src="/assets/images/logo.png" alt="" width="30" height="30">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="/users" class="nav-link px-2 link-darkz">Users</a></li>
            <li><a href="/login" class="nav-link px-2 link-darkz">Login</a></li>
                    </ul>

        <?php if ((null !== ($_SESSION['user'] ?? null))) {?>
            <div class="d-flex align-items justify-content-between">
                <div class="mr-2">
                    Bem vindo, <?php echo $_SESSION['user']['fullName'];?>

                </div>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">
                                <form action="/logout" method="post">
                                    <button type="submit">Logout</button>
                                </form>
                            </a></li>
                    </ul>
                </div>
            </div>
        <?php } else { ?>
            <div class="text-end">
                <a href="/login" class="btn btn-outline-primary me-2">Login</a>
                <a href="/register" class="btn btn-primary">Register</a>
            </div>
        <?php }?>

    </div>

</header><?php }
}
