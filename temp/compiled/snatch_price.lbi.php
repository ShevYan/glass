<div class="box">
 <div class="box_1">
  <h3><span><?php echo $this->_var['lang']['new_price']; ?></span></h3>
  <div class="boxCenterList RelaArticle">
    <ul class="clearfix">
    <?php $_from = $this->_var['price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
    <li><?php echo $this->_var['item']['user_name']; ?>&nbsp;&nbsp;<?php echo $this->_var['item']['bid_price']; ?></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
 </div>
</div>
<div class="blank5"></div>
