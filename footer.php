<?php
  $address = get_field('address','option');
  $address_line_2 = get_field('address_line_2','option');
  $city = get_field('city','option');
  $state = get_field('state','option');
  $zip = get_field('zip','option');
  $phone = get_field('phone','option');
  $email = get_field('email','option');
  $social_heading = get_field('social_heading','option');
  $social_links = get_field('social_links','option');
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
        <?php if(!empty($social_links)) { ?>
        <h4 class="social_header"><?=$social_heading?></h4>
        <div class="social_links">
          <?php foreach($social_links as $link) { ?>
          <a href="<?=$link['link']?>" class="social_link" target="_blank"><?php echo icon($link['network']); ?><span class="social_link_label"><?=ucwords($link['network'])?></span></a>
          <?php } ?>
        </div>
        <?php } ?>
      </div>
    </div>
    <svg viewBox="290.2 9.2 115 140" class="footer_amp">
      <use href="#amp" class="amp"></use>
    </svg>
  </footer>

  </div>
  <div class="footer_mobile" aria-hidden="true">
    <a href="https://www.google.com/maps/place/<?=urlencode($address.' '.$address_line_2.' '.$city.' '.' '.$state.' '.$zip)?>/" target="_blank"><?php echo icon('map'); ?></a>
    <a href="tel:<?=preg_replace("/[^0-9]/", "", $phone )?>"><?php echo icon('phone'); ?></a>
    <a href="mailto:<?=$email?>"><?php echo icon('social_email'); ?></a>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
