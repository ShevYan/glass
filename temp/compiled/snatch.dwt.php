<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

  <?php echo $this->fetch('library/ur_here.lbi'); ?>

<div class="block clearfix">
  
  <div class="AreaL">
    
  
    <?php echo $this->fetch('library/category_tree.lbi'); ?>
    
    <div id="ECS_PRICE_LIST">
    <?php echo $this->fetch('library/snatch_price.lbi'); ?>
    </div>
    <div class="box">
     <div class="box_1">
      <h3><span><?php echo $this->_var['lang']['activity_list']; ?></span></h3>
      <div class="boxCenterList RelaArticle">
        <ul class="clearfix">
        <?php $_from = $this->_var['snatch_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <li><a href="<?php echo $this->_var['item']['url']; ?>"><?php echo $this->_var['item']['snatch_name']; ?></a>&nbsp;&nbsp;
          <?php if ($this->_var['item']['overtime']): ?>
          (<?php echo $this->_var['lang']['end']; ?>)
          <?php endif; ?>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
     </div>
    </div>
    <div class="blank5"></div>
    
    
    
    <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
  
  <div class="AreaR">
   <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['treasure_info']; ?></span></h3>
    <div class="boxCenterList">
      <ul class="group clearfix">
     <li class="f_l">
      <a href="<?php echo $this->_var['snatch_goods']['url']; ?>"><img src="<?php echo $this->_var['snatch_goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['snatch_goods']['goods_name']); ?>" /></a>
      </li>
    <li class="f_r">
       <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
     <a href="<?php echo $this->_var['snatch_goods']['url']; ?>"><strong><?php echo htmlspecialchars($this->_var['snatch_goods']['goods_name']); ?></strong></a><br />
     <?php echo $this->_var['lang']['shop_price']; ?> <font class="shop"><?php echo $this->_var['snatch_goods']['formated_shop_price']; ?></font><br />
     <?php echo $this->_var['lang']['market_price']; ?> <font class="market"><?php echo $this->_var['snatch_goods']['formated_market_price']; ?></font> <br />
     <?php echo $this->_var['lang']['residual_time']; ?> <font color="red"><span id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></span></font><br />
     <?php echo $this->_var['lang']['activity_desc']; ?>：<br /><?php echo nl2br(htmlspecialchars($this->_var['snatch_goods']['desc'])); ?>
      </li>
      </ul>
    </div>
   </div>
  </div>
   <div class="blank5"></div>
   <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['activity_intro']; ?></span></h3>
    <div class="boxCenterList">
    <?php echo $this->_var['snatch_goods']['snatch_time']; ?><br />
    <?php echo $this->_var['lang']['price_extent']; ?><?php echo $this->_var['snatch_goods']['formated_start_price']; ?> - <?php echo $this->_var['snatch_goods']['formated_end_price']; ?> <br />
    <?php echo $this->_var['lang']['user_to_use_up']; ?><?php echo $this->_var['snatch_goods']['cost_points']; ?> <?php echo $this->_var['points_name']; ?><br />
    <?php echo $this->_var['lang']['snatch_victory_desc']; ?><br />
    <?php if ($this->_var['snatch_goods']['max_price'] != 0): ?>    <?php echo $this->_var['lang']['price_less_victory']; ?><?php echo $this->_var['snatch_goods']['formated_max_price']; ?>，<?php echo $this->_var['lang']['price_than_victory']; ?><?php echo $this->_var['snatch_goods']['formated_max_price']; ?>，<?php echo $this->_var['lang']['or_can']; ?><?php echo $this->_var['snatch_goods']['formated_max_price']; ?><?php echo $this->_var['lang']['shopping_product']; ?>。
    <?php else: ?>
    <?php echo $this->_var['lang']['victory_price_product']; ?>
    <?php endif; ?>
    </div>
   </div>
  </div>
  <div class="blank5"></div>
  <div id="ECS_SNATCH">
    <?php echo $this->fetch('library/snatch.lbi'); ?>
    </div>
  </div>
  
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var gmt_end_time = <?php echo empty($this->_var['snatch_goods']['gmt_end_time']) ? '0' : $this->_var['snatch_goods']['gmt_end_time']; ?>;
var id = <?php echo $this->_var['id']; ?>;
<?php $_from = $this->_var['lang']['snatch_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


onload = function()
{
  try
  {
    window.setInterval("newPrice(" + id + ")", 8000);
    onload_leftTime();
  }
  catch (e)
  {}
}

</script>
</html>
