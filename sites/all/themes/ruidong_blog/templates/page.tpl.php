<?php
/**
 * @file
 * Custom theme implementation to display a single Drupal page.
 */
?>
<!--顶部菜单栏 Header -->
<header id="header" class = "alt">
  <?php if ($main_menu): ?>
    <div class="menu_wrapper">
      <nav id="nav"  role="navigation">
        <div class="menu-navigation-container">
          <?php
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'id' => 'main-menu-links',
              'class' => array('links', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          ));
          ?>
        </div>
        <div class="clear"></div>
      </nav><!--菜单代码结束 end main-menu -->
    </div>
  <?php endif ?>
</header>
<!--顶部背景 Banner -->
<section id="banner">
 <ul class="actions">
  <li>
  <?php if ($logo): ?>
    <h1><a href="<?php print $front_page ?>">
        <img src="<?php print $logo ?>" alt="<?php print t('Home'); ?>" title="<?php print t('Home'); ?>" id="logo" />
      </a>
    </h1>
  <?php endif; ?>
     </li>
     <li>
  <?php if ($site_name): ?>
    <h2><?php print $site_name; ?></h2>
  <?php endif; ?>
  <?php if ($site_slogan): ?>
    <p id="site-slogan">
      <?php print $site_slogan; ?>
    </p>
  <?php endif; ?>
     </li>
    <?php if ($page['banner']): ?>
    <?php print render($page['banner']) ?>
  <?php endif ?>
    </ul>
</section>
<!--顶部背景代码结束-->
<!-- Main -->
<section id="main" class="container">
  <?php print render($page['content']) ?>
  <?php print render($page['content-top']) ?>
  <?php print render($page['content-bottom']) ?>
  <div class="row">
    <div class="6u">
      <?php if ($page['content-left']): ?>
        <?php print render($page['content-left']) ?>
      <?php endif ?>
    </div>
    <div class="6u">
      <?php if ($page['content-right']): ?>
        <?php print render($page['content-right']) ?>
      <?php endif ?>
    </div>
  </div>
</section>

<!-- Footer -->
<footer id="footer">
  <?php if ($page['footer']): ?>
    <?php print render($page['footer']) ?>
  <?php endif ?>
  <!--footer区域输出代码结束-->
  <ul class="copyright">
    <li>&copy; 瑞东的博客. 保留所有权.</li><li>&copy;设计者: <a href="mailto:dongai@yeah.net">瑞东</a></li><li>手机： 15287194655</li>
    <li>QQ: 2990604540</li>
  </ul>
</footer>
