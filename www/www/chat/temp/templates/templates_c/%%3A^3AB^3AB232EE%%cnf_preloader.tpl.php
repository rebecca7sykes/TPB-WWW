<?php /* Smarty version 2.6.10, created on 2011-09-22 19:15:57
         compiled from cnf_preloader.tpl */ ?>
<H3><?php echo $this->_tpl_vars['langs']['t12']; ?>
</H3>
<FORM action="cnf_config.php" method="post" enctype="multipart/form-data" name="cnf_form">

<table border="0" width="700" height="100%">

<!--error process -->

<?php if ($this->_tpl_vars['errMsg'] != ''): ?>
	<TR>
		<TD class="errorMsg" valign='middle'  align="center" colspan="2">
			<?php echo $this->_tpl_vars['errMsg']; ?>

		</TD>
	</TR>
<?php endif; ?>
<!--end error handling-->

<?php $this->assign('bool', 'true'); ?>
<!--representation values-->
<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
        $this->_foreach['fields']['iteration']++;
?>
<?php if ($this->_tpl_vars['val']['level_1'] == 'btn'): ?>
	<tr>
		<td>&nbsp;

		</td>
	</tr>
	<tr>
		<td align="left">
			<H3><?php echo $this->_tpl_vars['cnf_langs']['t0']; ?>
</H3>
		</td>
	</tr>
<?php $this->assign('bool', 'false'); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['val']['level_1'] == 'username' && $this->_tpl_vars['bool'] == 'true'): ?>
	<tr>
		<td align="left">
			<?php echo $this->_tpl_vars['cnf_langs']['t1']; ?>

		</td>
	</tr>
<?php $this->assign('bool', 'false'); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['val']['level_1'] == 'password' && $this->_tpl_vars['bool'] == 'false'): ?>
	<tr>
		<th align="left">
			<?php echo $this->_tpl_vars['cnf_langs']['t2']; ?>

		</th>
	</tr>
<?php $this->assign('bool', 'true'); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['val']['level_1'] == 'lang' && $this->_tpl_vars['bool'] == 'true'): ?>
	<tr>
		<th align="left">
			<?php echo $this->_tpl_vars['cnf_langs']['t3']; ?>

		</th>
	</tr>
<?php $this->assign('bool', 'false'); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['val']['level_1'] == 'title' && $this->_tpl_vars['bool'] == 'false'): ?>
	<tr>
		<th align="left">
			<?php echo $this->_tpl_vars['cnf_langs']['t4']; ?>

		</th>
	</tr>
<?php $this->assign('bool', 'true'); ?>
<?php endif; ?>
	<tr>


		<td  style="width:40%;">
			<?php echo $this->_tpl_vars['val']['title']; ?>

			<input type="Hidden" name="type_<?php echo $this->_tpl_vars['val']['id']; ?>
" value="<?php echo $this->_tpl_vars['val']['type']; ?>
">
			<input type="Hidden" name="name_<?php echo $this->_tpl_vars['val']['id']; ?>
" value="<?php echo $this->_tpl_vars['val']['title']; ?>
">
			<input type="Hidden" name="field_<?php echo $this->_tpl_vars['val']['id']; ?>
" value="<?php echo $this->_tpl_vars['val']['level_1']; ?>
">
		</td>
			<?php if ($this->_tpl_vars['val']['type'] == 'string'): ?>

				<td width="40">
				<div style="white-space: nowrap;">
					<input type="Text" size="30" name="fld_<?php echo $this->_tpl_vars['val']['id']; ?>
" value="<?php echo $this->_tpl_vars['val']['value']; ?>
">
					<?php if ($this->_tpl_vars['val']['level_1'] == 'fontColor' || $this->_tpl_vars['val']['level_1'] == 'BGColor' || $this->_tpl_vars['val']['level_1'] == 'barColor'): ?>

					 	<a href="javascript:TCP.popup(document.forms['cnf_form'].elements['fld_<?php echo $this->_tpl_vars['val']['id']; ?>
'])">
							<img width="15" height="13" border="0" alt="<?php echo $this->_tpl_vars['cnf_langs']['t5']; ?>
" src="../images/cnf_img/sel.gif">
						</a>

				<?php endif; ?>
				<?php echo $this->_tpl_vars['val']['units']; ?>

				</div>
				</td>
			<?php elseif ($this->_tpl_vars['val']['type'] == 'integer'): ?>
				<td width="40">
					<input type="Text" size="5"  name="fld_<?php echo $this->_tpl_vars['val']['id']; ?>
" value="<?php echo $this->_tpl_vars['val']['value']; ?>
"><?php echo $this->_tpl_vars['val']['units']; ?>

				</td>
			<?php elseif ($this->_tpl_vars['val']['type'] == 'combo'): ?>
				<td width="40">
				<div style="white-space: nowrap;">
					<select name="fld_<?php echo $this->_tpl_vars['val']['id']; ?>
">
						<?php $this->assign('array', $this->_tpl_vars['font'][$this->_tpl_vars['val']['level_1']]); ?>
						<?php if ($this->_tpl_vars['val']['level_0'] == 'login'): ?>
							<?php $this->assign('array', $this->_tpl_vars['value'][$this->_tpl_vars['val']['level_2']]); ?>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['val']['level_1'] == 'theme'): ?>
							<?php $this->assign('array', $this->_tpl_vars['value']['defaultTheme']); ?>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['val']['level_2'] == align): ?>
							<?php $this->assign('array', $this->_tpl_vars['value']['alignment']); ?>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['val']['level_2'] == type): ?>
							<?php $this->assign('array', $this->_tpl_vars['value']['text_type']); ?>
						<?php endif; ?>
						<?php $_from = $this->_tpl_vars['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['font'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['font']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
        $this->_foreach['font']['iteration']++;
?>
						<option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($this->_tpl_vars['val']['value'] == $this->_tpl_vars['v']): ?> selected <?php endif; ?>><?php echo $this->_tpl_vars['v']; ?>

						<?php endforeach; endif; unset($_from); ?>
					</select>
					<?php if ($this->_tpl_vars['val']['info'] != ''): ?>
				<a href="#" class="hintanchor" onMouseover="showhint('<?php echo $this->_tpl_vars['val']['info']; ?>
', this, event, '200px')" >[?]</a>
			<?php endif; ?>
			</div>
				</td>

			<?php elseif ($this->_tpl_vars['val']['type'] == 'string1'): ?>
				<td>
					<div style="white-space: nowrap;">
						<input type="Radio" name="fld_<?php echo $this->_tpl_vars['val']['id']; ?>
" value="true" <?php if ($this->_tpl_vars['val']['value'] == 'true'): ?> checked <?php endif; ?> id="yes<?php echo $this->_tpl_vars['key']; ?>
"><label for="yes<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['cnf_langs']['t6']; ?>
</label>
						<input type="Radio" name="fld_<?php echo $this->_tpl_vars['val']['id']; ?>
" value="false" <?php if ($this->_tpl_vars['val']['value'] == 'false'): ?> checked <?php endif; ?> id="no<?php echo $this->_tpl_vars['key']; ?>
"><label for="no<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['cnf_langs']['t7']; ?>
</label>
						<?php if ($this->_tpl_vars['val']['info'] != ''): ?>
				<a href="#" class="hintanchor" onMouseover="showhint('<?php echo $this->_tpl_vars['val']['info']; ?>
', this, event, '200px')" >[?]</a>
			<?php endif; ?>
					</div>
				</td>
			<?php endif; ?>




	</tr>
<?php endforeach; endif; unset($_from); ?>

	<tr>
		<td colspan="3">&nbsp;

		</td>
	</tr>
	<tr>

		<td colspan="3" align="center">
			<input type="Submit" name="submit" value="<?php echo $this->_tpl_vars['cnf_langs']['t8']; ?>
">
		</td>
	</tr>

</table>


<input type="Hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
</form>