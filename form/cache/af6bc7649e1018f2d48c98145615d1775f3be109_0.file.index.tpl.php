<?php
/* Smarty version 3.1.31, created on 2022-03-22 23:28:59
  from "/home/seet7121/public_html/widifirmaan.github.io/ExcelPintar-Media-Pembelajaran/form/themes/default/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6239f94bbe77d6_62816083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af6bc7649e1018f2d48c98145615d1775f3be109' => 
    array (
      0 => '/home/seet7121/public_html/widifirmaan.github.io/ExcelPintar-Media-Pembelajaran/form/themes/default/index.tpl',
      1 => 1571530732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6239f94bbe77d6_62816083 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home/seet7121/public_html/widifirmaan.github.io/ExcelPintar-Media-Pembelajaran/form/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>"header.tpl"),$_smarty_tpl);?>


  <div class="title"><?php echo $_smarty_tpl->tpl_vars['login_heading']->value;?>
</div>

  <div style="width:600px">
    <?php echo smarty_function_ft_include(array('file'=>"messages.tpl"),$_smarty_tpl);?>

  </div>

  <div class="margin_bottom_large" style="width: 600px">
    <?php echo $_smarty_tpl->tpl_vars['text_login']->value;?>

  </div>

  <form name="login" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">

    <?php if (isset($_smarty_tpl->tpl_vars['upgrade_notification']->value) && !empty($_smarty_tpl->tpl_vars['upgrade_notification']->value)) {?>
      <div class="notify" id="upgrade_notification">
        <div style="padding:8px">
          <span style="float: right; padding-left: 5px;"><a href="#" onclick="return ft.hide_message('upgrade_notification')">X</a></span>
          <?php echo $_smarty_tpl->tpl_vars['upgrade_notification']->value;?>

        </div>
      </div>
      <br />
    <?php }?>

    <div class="login_panel">
      <div class="login_panel_inner">
        <table cellpadding="0" cellspacing="1">
        <tr>
          <td><label for="username"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_username'];?>
</label></td>
          <td><input type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" autofocus /></td>
        </tr>
        <tr>
          <td><label for="password"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_password'];?>
</label></td>
          <td><input type="password" name="password" id="password" value="" /></td>
        </tr>
        </table>

        <?php echo '<script'; ?>
>
        document.write('<input type="submit" class="login_submit" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_log_in'], 'UTF-8');?>
">');
        <?php echo '</script'; ?>
>
        <div class="clear"></div>
      </div>

      <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div>
          <div class="login_error pad_left"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
        </div>
      <?php }?>
    </div>
  </form>

  <noscript>
    <div class="error" style="padding:6px;">
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_js_required'];?>

    </div>
  </noscript>

<?php echo smarty_function_ft_include(array('file'=>"footer.tpl"),$_smarty_tpl);?>

<?php }
}
