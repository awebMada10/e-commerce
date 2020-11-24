<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 17:49:19
  from 'D:\web-no-sync\openserver\OpenServer\domains\e-commerce\views\default\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbcf33fccdf39_10309410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bbcc4aa6792234a4136ad3082983defde7014e6' => 
    array (
      0 => 'D:\\web-no-sync\\openserver\\OpenServer\\domains\\e-commerce\\views\\default\\cart.tpl',
      1 => 1606218549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbcf33fccdf39_10309410 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="centerColumn">
    <h3 class="title">Корзина</h3>
    <?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value) {?> В корзине пусто
    <?php } else { ?>
        <table>
            <tr>
                <td>
                    #
                </td>
                <td>
                    Наименование
                </td>
                <td>
                    Количество
                </td>
                <td>
                    Цена за единицу
                </td>
                <td>
                    Стоимость
                </td>
                <td>
                    Действие
                </td>
            </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'product', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
            <tr>
                <td>
                    <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>

                </td>
                <td>
                    <a href="/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a>
                </td>
                <td>
                    <button id="minusOneItem" onclick="cartMainPage.minusOneItem(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
)">-</button>

                    <input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"
                           size="1"
                           type="text"
                           value="1"
                           onchange="cartMainPage.conversionPrice(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
);">
                    <button id="plusOneItem" onclick="cartMainPage.plusOneItem(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
)">+</button>
                </td>
                <td>
                    <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
                </td>
                <td>
                    <span id="itemTotalPrice_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
                </td>
                <td>
                    <a id="removeFromCart_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"
                       href="#"
                       onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
); return false;">Удалить из корзины</a>
                    <a id="addToCart_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" href="#"
                       class="hide"
                       onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
); return false;">Восстановить</a>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    <?php }?>
</div><?php }
}
