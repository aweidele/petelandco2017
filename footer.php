  </main>
  <footer class="footer">
    <div class="row">
      <div class="col-4 push-5">
        <div class="footer_contact" itemscope itemtype="http://schema.org/Corporation">
          <a href="<?php echo get_home_url(); ?>" class="footer_logo_link">
            <svg viewBox="0 0 578.6 182.8" class="footer_logo">
              <use href="#target" class="target"></use>
              <use href="#amp" class="amp"></use>
              <use href="#type" class="type"></use>
            </svg>
          </a>
          <div class="footer_contact_block">
            <?php echo icon('map'); ?>
            <address>1101 14th Street, NW<br>
            Suite 1210<br>
            Washington, DC 20005</address>
          </div>
          <div class="footer_contact_block">
            <?php echo icon('phone'); ?>
            <a href="tel:2023604323">202.360.4323</a>
          </div>
          <div class="footer_contact_block">
            © Copyright 2015 | Petel & Co.
          </div>
        </div>
      </div>
      <div class="col-3">
        <h4 class="social_header">Get the Latest</h4>
        <div class="social_links">
          <a href="#" class="social_link"><?php echo icon('facebook_circle'); ?><span class="social_link_label">Facebook</span></a>
          <a href="#" class="social_link"><?php echo icon('twitter'); ?><span class="social_link_label">Twitter</span></a>
        </div>
      </div>
    </div>
    <svg viewBox="290.2 9.2 115 140" class="footer_amp">
      <use href="#amp" class="amp"></use>
    </svg>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
