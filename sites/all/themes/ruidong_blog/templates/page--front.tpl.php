<?php
/**
 * @file
 * Custom theme implementation to display a single Drupal page.
 */
?>
<!-- Header -->
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
      </nav><!-- end main-menu -->
    </div>
  <?php endif ?>
</header>

<!-- Banner -->
<section id="banner">
  <?php if ($logo): ?>
    <h1><a href="<?php print $front_page ?>">
        <img src="<?php print $logo ?>" alt="<?php print t('Home'); ?>" title="<?php print t('Home'); ?>" id="logo" />
      </a>
    </h1>
  <?php endif; ?>
  <?php if ($site_name): ?>
    <h2><?php print $site_name; ?></h2>
  <?php endif; ?>
  <?php if ($site_slogan): ?>
    <p id="site-slogan">
      <?php print $site_slogan; ?>
    </p>
  <?php endif; ?>
  <ul class="actions">
    <li><a href="/?q=user" class="button special">登陆</a></li>
    <li><a href="/?q=project" class="button">更多项目</a></li>
  </ul>
  <?php if ($page['banner']): ?>
    <?php print render($page['banner']) ?>
  <?php endif ?>
</section>
<!-- Main -->
<section id="main" class="container">
  <?php if (theme_get_setting('demo_content') || $page['content']) : ?>
    <section class="box special">
      <?php if ($page['content']): ?>
        <?php print render($page['content']) ?>
      <?php endif; ?>
      <?php if (theme_get_setting('demo_content')) : ?><br /><br />
        <header class="major">
          <h2>介绍最新的响应式交互网站设计。<br />
            用你的手机做的事！</h2>
          <br />
          <p>内部管理功能：用手机轻松办公。权限控制：让不同的员工做不同的事，提高工作和交接效率。<br />
            我们的设计不仅仅展示品牌和做电子商务，还契合你的企业，实现企业互联网+。</p>
        </header>
        <span class="image featured"><img src="sites/all/themes/ruidong_blog/images/pic01.jpg" alt="" /></span> 
      <?php endif; ?>
    </section>
  <?php endif; ?>
<br />
<br />
  <section>
    <?php if (theme_get_setting('demo_content') || $page['content-bottom']) : ?>
      <?php if ($page['content-bottom']): ?>
        <?php print render($page['content-bottom']) ?>
      <?php elseif (theme_get_setting('demo_content')) : ?>
        <section class="box special features">
          <div class="features-row">
            <section>
              <span class="icon major fa-bolt accent2"></span>
            <a href="/?q=project-classification/3"><h3>功能化设计</h3></a><br />
              <p>集成：内部系统+权限控制+外部展示+响应式设计，像使用QQ空间一样轻松，而且不同权限的人只能操作和看到不同的内容，想让别人看到什么全由你掌控。</p>
            </section>
            <section>
              <span class="icon major fa-area-chart accent3"></span>
              <a href="/?q=project-classification/1"><h3>互联网+</h3></a><br />
              <p>不单单是电子商务网站，用支付宝来搭建支付功能，还可结合企业实情，订制：在线、预订等功能，让你在线服务、在线办公、在线预订和电子商务，皆有可能。</p>
            </section>
          </div>
          <div class="features-row">
            <section>
              <span class="icon major fa-cloud accent4"></span>
           <a href="/?q=project-classification/2"><h3>简洁UX设计</h3></a><br />
              <p>以UX（用户体验）为设计理念，采用简洁多图的外观设计，让用户轻松浏览，一目了然，查找到所需内容，并且彰显企业形象，凸出企业核心价值观。</p>
            </section>
            <section>
              <span class="icon major fa-lock accent5"></span>
              <a href="/?q=project-classification/4"><h3>手机APP</h3></a><br />
              <p>外部展示响应式设计。也就是PHP代码可根据不同屏幕宽度，自动排版展示，让你电脑、手机都可轻松访问，相当于拥有一个手机APP，还解决APP存在的信任问题。</p>
            </section>
          </div>
        </section>
      <?php endif; ?>
    <?php endif; ?>
  </section>
<br />
  <div class="row">
    <div class="6u">
      <?php if (theme_get_setting('demo_content') || $page['content-left']) : ?>
        <section class="box special">
          <?php if ($page['content-left']): ?>
            <?php print render($page['content-left']) ?>
          <?php elseif (theme_get_setting('demo_content')): ?>
            <span class="image featured"><img src="sites/all/themes/ruidong_blog/images/pic02.jpg" alt="" /></span>
            <h3>也许你需要我们</h3>
            <p>也许你的企业正需要我们，请你联系我们，我们现在提供订制服务，可以提供免费咨询和上门商谈。</p>
            <ul class="actions">
              <li><a href="/?q=blog/8" class="button alt">联系我们</a></li>
            </ul>

          <?php endif ?>
        </section>
      <?php endif ?>
    </div>
    <div class="6u">
      <?php if (theme_get_setting('demo_content') || $page['content-right']) : ?>
        <section class="box special">
          <?php if ($page['content-right']): ?>
            <?php print render($page['content-right']) ?>
          <?php elseif (theme_get_setting('demo_content')): ?>
            <span class="image featured"><img src="sites/all/themes/ruidong_blog/images/pic03.jpg" alt="" /></span>
            <h3>登高而望远</h3>
            <p>了解更多，才能更好的决断，请关注我们的博客，我们会在博客中分享一些资讯，也会分享其他的事情。</p>
            <ul class="actions">
              <li><a href="/?q=blog" class="button alt">阅读博客</a></li>
            </ul>
          <?php endif ?>
        </section>
      <?php endif ?>
    </div>
  </div>
</section>

<!-- CTA -->
<?php if ($page['signup']): ?>
<section id="cta">
    <?php print render($page['signup']) ?>
</section>
<?php endif ?>

<!-- Footer -->
<footer id="footer">
  <?php if ($page['footer']): ?>
    <?php print render($page['footer']) ?>
  <?php endif ?>
<ul class="copyright">
    <li>&copy; 瑞东的博客. 保留所有权.</li><li>&copy;设计者: <a href="mailto:dongai@yeah.net">瑞东</a><li>手机： 15287194655</li>
    <li>QQ: 2990604540</li>
  </ul>
</footer>
