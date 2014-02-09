<?php if ($this->_var['promotion_goods']): ?>
<div class="sale_box clearfix">
<div class="tit"><span>特价商品</span></div>

 
      <div class="clearfix">
         <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_62341900_1391935991');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_62341900_1391935991']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
        
           <ul class="clearfix">
           <li class="goodsimg"><a href="<?php echo $this->_var['goods_0_62341900_1391935991']['url']; ?>"><img src="<?php echo $this->_var['goods_0_62341900_1391935991']['thumb']; ?>" border="0" alt="<?php echo htmlspecialchars($this->_var['goods_0_62341900_1391935991']['name']); ?>" class="B_blue"/></a></li>
			<li> <p><a href="<?php echo $this->_var['goods_0_62341900_1391935991']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_62341900_1391935991']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_62341900_1391935991']['short_name']); ?></a></p>
           <?php echo $this->_var['lang']['promote_price']; ?><font class="f1"><?php echo $this->_var['goods_0_62341900_1391935991']['promote_price']; ?></font></li>
           </ul>

         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </div>
 </div>
 
<div class="blank"></div>
<?php endif; ?>