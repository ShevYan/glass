<?php if ($this->_var['new_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="xm-box">
<h4 class="title"><span>新品上架</span> <a class="more" href="search.php?intro=new">更多</a></h4>
<div class="blank"></div>
<div id="show_new_area" class="clearfix">
  <?php endif; ?>
  <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_63073700_1391935991');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_63073700_1391935991']):
?>
  <div class="goodsItem">
       
           <a href="<?php echo $this->_var['goods_0_63073700_1391935991']['url']; ?>"><img src="<?php echo $this->_var['goods_0_63073700_1391935991']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_63073700_1391935991']['name']); ?>" class="goodsimg" /></a><br />
           <p class="f1"><a href="<?php echo $this->_var['goods_0_63073700_1391935991']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_63073700_1391935991']['name']); ?>"><?php echo $this->_var['goods_0_63073700_1391935991']['short_style_name']; ?></a></p>
           
           
 市场价：<font class="market"><?php echo $this->_var['goods_0_63073700_1391935991']['market_price']; ?></font> <br/>
      
           本店价：<font class="f1">
           <?php if ($this->_var['goods_0_63073700_1391935991']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_0_63073700_1391935991']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_0_63073700_1391935991']['shop_price']; ?>
          <?php endif; ?>
           </font>      
		    
        </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
  <?php if ($this->_var['cat_rec_sign'] != 1): ?>
  </div>

</div>
<div class="blank"></div>
  <?php endif; ?>
<?php endif; ?>