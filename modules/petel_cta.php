<?php
  $cta_statement = get_field("call_to_action_statement","option");
  $cta_label = get_field("call_to_action_button_label","option");
  $cta_link = get_field("call_to_action_link","option");
?>
<?php if($cta_statement || !empty($cta_link)) { ?>
<aside class="cta theme_dk_teal">
  <div class="row">
    <div class="col-6 push-1">
      <div class="cta_message"><?=$cta_statement?></div>
    </div>
    <div class="col-4">
      <?php if(!empty($cta_link)) { ?>
      <a class="cta_link" href="<?=$cta_link["url"]?>"<?php if($cta_link["target"]) { echo ' target="_blank"'; } ?>><?=$cta_label ? $cta_label : "Learn More"?><?php echo icon("double_chevron_right"); ?></a>
      <?php } ?>
    </div>
  </div>
</aside>
<?php }
