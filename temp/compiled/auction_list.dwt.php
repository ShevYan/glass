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
   
    
    
    
    
    <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
  
  <div class="AreaR">
	 
   
   <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['auction_goods']; ?></span></h3>
    <div class="boxCenterList">
      <?php if ($this->_var['auction_list']): ?>
      <?php $_from = $this->_var['auction_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'auction');if (count($_from)):
    foreach ($_from AS $this->_var['auction']):
?>
      <ul class="group clearfix">
      <li class="f_l">
      <a href="<?php echo $this->_var['auction']['url']; ?>"><img src="<?php echo $this->_var['auction']['goods_thumb']; ?>" border="0" alt="<?php echo htmlspecialchars($this->_var['auction']['goods_name']); ?>" style="vertical-align: middle" /></a>
      </li>
      <li class="f_r">
      <?php echo $this->_var['lang']['goods_name']; ?>：<a href="<?php echo $this->_var['auction']['url']; ?>" class="f5"><?php echo htmlspecialchars($this->_var['auction']['goods_name']); ?></a><br />
      <?php echo $this->_var['lang']['act_status']; ?>：
    <?php if ($this->_var['auction']['status_no'] == 0): ?>
            <?php echo $this->_var['lang']['au_pre_start']; ?><br>
            <?php elseif ($this->_var['auction']['status_no'] == 1): ?>
            <?php echo $this->_var['lang']['au_under_way_1']; ?><br>
            <?php else: ?>
            <?php echo $this->_var['lang']['au_finished']; ?><br>
            <?php endif; ?>
    <?php echo $this->_var['lang']['au_start_price']; ?>：<?php echo $this->_var['auction']['formated_start_price']; ?><br>
    <?php if ($this->_var['auction']['end_price'] > 0): ?>
    <?php echo $this->_var['lang']['au_end_price']; ?>：<?php echo $this->_var['auction']['formated_end_price']; ?>
          <?php endif; ?>
      </li>
      </ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php else: ?>
       <span style="margin:2px 10px; font-size:14px; line-height:36px;"><?php echo $this->_var['lang']['no_auction']; ?></span>
      <?php endif; ?>
    </div>
   </div>
  </div>
  <div class="blank5"></div>
  <?php echo $this->fetch('library/pages.lbi'); ?>
  </div>
  
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
