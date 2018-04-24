<?php
  $address = get_field('address','option');
  $address_line_2 = get_field('address_line_2','option');
  $city = get_field('city','option');
  $state = get_field('state','option');
  $zip = get_field('zip','option');
  $phone = get_field('phone','option');
  $email = get_field('email','option');
?>
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
          <div class="footer_contact_block footer_address">
            <a href="https://www.google.com/maps/place/<?=urlencode($address.' '.$address_line_2.' '.$city.' '.' '.$state.' '.$zip)?>/" target="_blank">
              <?php echo icon('map'); ?>
              <address><?=$address?><br>
              <?php if($address_line_2) { ?>
              <?=$address_line_2?><br>
              <?php } ?>
              <?=$city?>, <?=$state?> <?=$zip?></address>
            </a>
          </div>
          <div class="footer_contact_block footer_phone">
            <a href="tel:<?=preg_replace("/[^0-9]/", "", $phone )?>">
            <?php echo icon('phone'); ?>
            <?=$phone?></a>
          </div>
          <div class="footer_contact_block footer_copyright">
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
    <div class="footer_mobile" aria-hidden="true">
      <a href="https://www.google.com/maps/place/<?=urlencode($address.' '.$address_line_2.' '.$city.' '.' '.$state.' '.$zip)?>/" target="_blank"><?php echo icon('map'); ?></a>
      <a href="tel:<?=preg_replace("/[^0-9]/", "", $phone )?>"><?php echo icon('phone'); ?></a>
      <a href="mailto:<?=$email?>"><?php echo icon('mail'); ?></a>
    </div>
    <svg viewBox="290.2 9.2 115 140" class="footer_amp">
      <use href="#amp" class="amp"></use>
    </svg>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
