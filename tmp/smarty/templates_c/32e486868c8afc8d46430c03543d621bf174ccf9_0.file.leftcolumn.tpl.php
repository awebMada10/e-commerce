<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 20:27:17
  from 'D:\web-no-sync\openserver\OpenServer\domains\e-commerce\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbd1845c9ba64_46391019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32e486868c8afc8d46430c03543d621bf174ccf9' => 
    array (
      0 => 'D:\\web-no-sync\\openserver\\OpenServer\\domains\\e-commerce\\views\\default\\leftcolumn.tpl',
      1 => 1606228021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd1845c9ba64_46391019 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="leftColumn">
    <div class="menuCaption">Меню:</div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
        <br/>
        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/category/<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a>
                <br/>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <div id="registerBox">
        <div class="menuCaption showHidden" onclick="showRegisterBox()">Регистрация</div>
        <div id="registerBoxHidden">
            <label for="email">email:</label><br>
            <input type="text" name="email" id="email"><br>
            <label for="pwd1">пароль:</label> <br>
            <input type="password" name="pwd1" id="pwd1"><br>
            <label for="pwd2">повторить пароль:</label><br>
            <input type="password" name="pwd2" id="pwd2"><br>
            <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/>
        </div>
    </div>

    <div class="menuCaption">Корзина</div>
    <a href="/cart/">В корзине</a>
    <span id="cartCountItems">
<?php if ($_smarty_tpl->tpl_vars['cartCountItems']->value > 0) {?> <?php echo $_smarty_tpl->tpl_vars['cartCountItems']->value;?>
 <?php } else { ?> пусто<?php }?>
</span>
</div><?php }
}
