<link href="themes/ecmoban_aizhigu/qq/images/qq.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>


 

<div class="topNav">
<script type="text/javascript">
          //初始化主菜单
            function sw_nav(obj,tag)
            {
     
            var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
                if(tag==1)
                {
                    DisSub.style.display = "block";
             
                    
                }
                else
                {
                    DisSub.style.display = "none";
                
                }
     
            }
     
    </script>

<div class="block clearfix" >
 
        <ul class="top_bav_l">
        <li class="lovesave">
            <a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">收藏我们</a></li>
            <li>关注我们：</li>
            <li style="border:none" class="menuPopup"  onMouseOver="sw_nav(1,1);" onMouseOut="sw_nav(1,0);">
            <a id="HandleLI_1" href="javascript:;" title="微博" class="attention"></a> 
            <div id=DisSub_1 class="top_nav_box  top_weibo"> 
            <a href="http://e.weibo.com/ECMBT" target="_blank" title="新浪微博" class="top_weibo"></a>
            <a href="http://e.t.qq.com/ecmoban_com" target="_blank" title="QQ微博" class="top_qq"></a> 
            </div> 
            </li> 
            <li class="menuPopup" onMouseOver="sw_nav(2,1);" onMouseOut="sw_nav(2,0);">
            <a id="HandleLI_2" href="javascript:;" title="微信" class="top_weixin"></a> 
            <div id=DisSub_2 class="  weixinBox" style="display:none;"> 
            <img src="themes/ecmoban_aizhigu/images/weixin.png"> 
            </div> 
            </li>
        </ul>
    
<div class="f_r" style="width:320px;">

 <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.js,utils.js')); ?>
 
   <div id="ECS_MEMBERZONE" class="f_r">
    
     <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </div>
   
   
  <?php if ($this->_var['navigator_list']['top']): ?>
     <div class="f_l">
        <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
         <a class="jifen" href="<?php echo $this->_var['nav']['url']; ?>" 
        <?php if ($this->_var['nav']['opennew'] == 1): ?>
        target="_blank"
        <?php endif; ?>
        ><?php echo $this->_var['nav']['name']; ?></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
        <?php endif; ?>  
</div>

 </div>
</div>







<div style="background:#f8f7f7" class="clearfix"> 
    <div class="block header">
        <div class="block clearfix">
        <div class="f_l">
        <a href="index.php" class="logo"><img src="themes/ecmoban_aizhigu/images/logo.gif">  </a>
      
         <div class="top_goodness"> 
            <img src="themes/ecmoban_aizhigu/images/service.gif">
            </div>
            </div>
            
        <div class="top_shopCart f_r"  >
         <s><span class="buy_num"><span id="ECS_CARTINFO">
            <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            </span></span></s>
          
            <a class="jiesuan" href="flow.php">去购物车结算</a>
            <span class="bg">&nbsp;</span>
            </div> 
             
      
        </div>
    </div> 
</div>
<div style="clear:both"></div>
 
<div class="menu_box clearfix"> 
<div class="block" style="position:relative;"> 
<div class="menu">
  <a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['lang']['home']; ?><span></span></a>
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
  <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>>
<?php echo $this->_var['nav']['name']; ?>
 <span></span>
</a>
 
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
 <div class="top_search"> 
        <script type="text/javascript">
            
            <!--
            function checkSearchForm()
            {
                if(document.getElementById('keyword').value)
                {
                    return true;
                }
                else
                {
                    alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
                    return false;
                }
            }
            -->
            
            </script>
          <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  style="_position:relative; top:5px;">
          <input name="keywords" type="text" id="keyword" class="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>"  />
          <input type="image" src="themes/ecmoban_aizhigu/images/search_sub.jpg" name="搜索" class="search_go">
        </form>
        <div class="vjia-suggest-container"><div class="vjia-suggest-content"></div>
            <ol>
            </ol>
        </div> 
        <div style="clear:both"></div> 
        <?php if ($this->_var['searchkeywords']): ?>
            <div class="search_tig">
                <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" target="_blank" class="track"><?php echo $this->_var['val']; ?></a>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>    
        <?php endif; ?>
        </div>
</div> 
</div>
</div>
 
 

 


