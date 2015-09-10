  <header class="header">
    <div class="container">
      <?php if ($logo): ?>
        <h2 id="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h2>
      <?php endif; ?>
      <nav class="primary-nav">
        <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
      </nav>
      <?php if ($page['header']): print render($page['header']); endif; ?>
    </div>
  </header>
<div class="container"> 
  <?php if ($page['highlight']): print render($page['highlight']); endif; ?>

  <?php if ($page['sidebar_first']): ?>
    <aside class="sidebar">
      <?php print render($page['sidebar_first']); ?>
    </aside>
  <?php endif; ?>
  
  <section class="content">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <?php if ($tabs): print render($tabs); endif; ?>

    <?php if ($action_links): ?><ul><?php print render($action_links); ?></ul><?php endif; ?>

    <?php print render($page['content']) ?>
  </section>

</div>

<footer class="footer">
  <div class="footer-inner">
    <p>&copy;<?php print date("Y")?> Lake Town Hound Mobile Grooming</p>
    <?php print render($page['footer']); ?>
  </div>
</footer>

