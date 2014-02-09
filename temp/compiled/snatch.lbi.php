<?php if ($this->_var['myprice']['is_end'] == false): ?>
<div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['me_bid']; ?></span></h3>
    <div class="boxCenterList">
  <form action="javascript:bid()" method="post" name="formBid" id="formBid">
   <?php echo $this->_var['lang']['my_integral']; ?>：
    <?php echo $this->_var['myprice']['pay_points']; ?><br />
    <?php echo $this->_var['lang']['bid']; ?>：
    <!--<input type="hidden" name="snatch_id" value="<?php echo $this->_var['id']; ?>" /><input name="price" type="text" id="price" />-->
    <input type="hidden" name="snatch_id" value="<?php echo $this->_var['id']; ?>" /><input name="price" type="text" class="inputBg" style="vertical-align:middle;">
    <input type="submit" name="Submit" class="bnt_blue_1" value="<?php echo $this->_var['lang']['me_bid']; ?>" style="vertical-align:middle;" />
  </form>
  </div>
</div>
</div>
<div class="blank5"></div>
<div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['me_now_bid']; ?></span></h3>
    <div class="boxCenterList">
    <?php $_from = $this->_var['myprice']['bid_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_41800500_1391936247');if (count($_from)):
    foreach ($_from AS $this->_var['item_0_41800500_1391936247']):
?>
      <?php echo $this->_var['item_0_41800500_1391936247']['price']; ?>
      <?php if ($this->_var['item_0_41800500_1391936247']['is_only']): ?>
      (<?php echo $this->_var['lang']['only_price']; ?>)
      <?php endif; ?>
      <br>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
 </div>
</div>
<div class="blank5"></div>
<?php else: ?>


<div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['view_snatch_result']; ?></span></h3>
    <div class="boxCenterList">
<?php if ($this->_var['result']): ?>
<form name="buy" action="snatch.php" method="get">
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $this->_var['lang']['victory_user']; ?>
</td>
    <td bgcolor="#FFFFFF"><?php echo $this->_var['result']['user_name']; ?>
      <input type="hidden" name="act" value="buy" />
      <input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $this->_var['lang']['price_bid']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $this->_var['result']['formated_bid_price']; ?> &nbsp;&nbsp;
    <?php if ($this->_var['result']['order_count'] == 0 && $this->_var['result']['user_id'] == $_SESSION['user_id']): ?>
      <input type="submit" name="bug" class="bnt_blue_1" title="<?php echo $this->_var['lang']['button_buy']; ?>" />
    <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $this->_var['lang']['bid_time']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $this->_var['result']['bid_time']; ?></td>
  </tr>
</table>
</form>
<?php else: ?>
<?php echo $this->_var['lang']['not_victory_user']; ?>
<?php endif; ?>
</div>
</div>
</div>
<?php endif; ?>
