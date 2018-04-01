<?php
  $image = $fields["image"]["sizes"];
?>
<div class="homepage_feature">
  <figure class="homepage_feature_figure">
    <picture class="homepage_feature_picture">
      <source media="(min-width: 900px)" srcset="<?=$image["homepage-feature"]?>">
      <source media="(min-width: 500px)" srcset="<?=$image["homepage-feature-md"]?>">
      <source media="(min-width: 0px)" srcset="<?=$image["homepage-feature-sm"]?>">
      <img src="<?=$image["homepage-feature"]?>">
    </picture>
  </figure>
  <div class="homepage_feature_content">
    <div class="row">
      <div class="col-10 push-1">
        <div class="homepage_feature_content_inner">
          <h2 class="homepage_feature_heading">
            <span class="homepage_feature_intro_top"><?=$fields["intro_text_1"]?></span>
            <span class="homepage_feature_intro_bottom"><?=$fields["intro_text_2"]?></span>
          </h2>
          <p class="homepage_feature_intro"><?=nl2br($fields["intro_paragraph"])?></p>
        </div>
      </div>
    </div>
  </div>
</div>
