<?php /* Smarty version 2.6.10, created on 2011-03-04 19:53:23
         compiled from logout.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['installed']): ?>
<center>
	<h4><?php echo $this->_tpl_vars['langs']['t0']; ?>
</h4>
	<?php echo $this->_tpl_vars['langs']['t1']; ?>
 <a href="index.php?<?php echo $this->_tpl_vars['rand']; ?>
"><?php echo $this->_tpl_vars['langs']['t2']; ?>
</a>
</center>

<?php if (! $this->_tpl_vars['manageUsers']): ?>
	<p align=center><?php echo $this->_tpl_vars['langs']['t3']; ?>
</p>
<?php endif; ?>
<?php else: ?>
<center>
	<font color="red"><?php echo $this->_tpl_vars['langs']['t4']; ?>
</font>
</center>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>