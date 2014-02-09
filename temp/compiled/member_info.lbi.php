




<?php if ($this->_var['user_info']): ?>

<span><font style="color:#666;"> 欢迎回到本网站！</font><?php echo $this->_var['user_info']['username']; ?></span>   
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>  
 <a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a> 


<?php else: ?>

<p class="login"><a href="user.php">登录</a></p>
<span class="shu" >|</span>
<p class="register"><a href="user.php?act=register">注册</a></p>
<?php endif; ?>


 
