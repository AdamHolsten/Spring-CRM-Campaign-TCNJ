<div class="crm-campaign">
   <div class="inner-page">
      <img
         src="https://tcnj.edu/custom/icon-library/logos/LOGO.svg"
         alt="TCNJ"
         id="logo-top"
         />
      <h2>Inside the Pride</h2>
      <h1><?php single_post_title(); ?></h1>
      <?php 
         if( get_field('page_type') == 'video' ): ?>

<?php
    $video_group = get_field('video_content');
    $video_still = $video_group['video_still'];  
    $youtube_embed_src_code = $video_group['youtube_embed_src_code'];  
    $video_description = $video_group['video_description'];  
 ?>
 


      <div id="video-only">
         <div class="video-container">
            <div class="screen-container">
               <div id="play-button"></div>
               <img src="<?php echo $video_still;?>" alt="" />
            </div>
 <video
              id="embedded-video"
              style="display: none"
              src="<?php echo $youtube_embed_src_code;?>"
              controls="true"
              class="full-video-play"
              poster="<?php echo $video_still;?>"
            >
<!-- 
            <iframe id="embedded-video"
            width:100%;
            height: 637px;
            src=""
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            ></iframe> -->
         </div>
         <div class="video-or-gallery-description">
<?php echo $video_description;?>         </div>
      </div>
      <?php endif; ?>
            <?php 
         if( get_field('page_type') == 'story' ): ?>

<?php
    $story_group = get_field('story_content');
    $story_title = $story_group['story_title'];  
    $image = $story_group['image'];  
    $story_content = $story_group['story_content'];  
 ?>

      <div id="story-only">
         <div class="landing-container">
             <?php if ( $story_group['image'] ): ?>
            <img src="<?php echo $image;?>" alt="<?php echo $story_title;?>">
            <?php endif;?>
            <h4><?php echo $story_title;?></h4>
            <?php echo $story_content;?>
         </div>
      </div>
            <?php endif; ?>
            <?php 
         if( get_field('page_type') == 'gallery' ): ?>

<div id="gallery-only">
         <div id="main-slider" class="splide">
              <div class="splide__arrows">
		<button class="splide__arrow splide__arrow--prev">
			<img src="https://tcnj.edu/custom/icon-library/thin-left-arrow.svg"/>
		</button>
		<button class="splide__arrow splide__arrow--next">
			<img src="https://tcnj.edu/custom/icon-library/thin-right-arrow.svg"/>
		</button>
  </div>
            <div class="splide__track">

            <?php if( have_rows('gallery_content') ): ?>
                <ul class="splide__list">
                <?php while( have_rows('gallery_content') ): the_row(); 
                    $image = get_sub_field('gallery_image');
                    $caption = get_sub_field('image_caption');
                    ?>
                    <li class="splide__slide">
                     <p class="caption"><?php echo $caption;?></p>
                     <img src="<?php echo $image;?>" />
                     <div class="gradient-overlay"></div>
                  </li>
                   
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>


            </div>
         </div>

                 <?php if( have_rows('gallery_content') ): ?>
                <ul id="thumbnails" class="thumbnails">
                <?php while( have_rows('gallery_content') ): the_row(); 
                    $image = get_sub_field('gallery_image');
                    ?>
                    <li class="thumbnail">
               <img src="<?php echo $image;?>" />
            </li>
                   
                   
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>

      </div>
      <div class="video-or-gallery-description">
         <p>Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>

<?php endif; ?>
      <div class="cta">
         <h3>Join the Pride!</h3>
         <a href="<?php the_field('cta_link');?>">Enroll today</a>
      </div>
    
    
   </div>
</div>
<div class="email-footer">
   <img
      src="https://tcnj.edu/custom/icon-library/logos/Blue-logo.svg"
      alt="TCNJ"
      />
   <div class="social-icons-container mobile-hide">
      <a href="http://www.facebook.com/tcnjlions" target="_blank"><img
         src="https://tcnj.edu/custom/homepage/img/compressed/1-social-media-icon-facebook.png"
         alt="Facebook"
         /></a>
      <a href="http://twitter.com/tcnj" target="_blank"><img
         src="https://tcnj.edu/custom/homepage/img/compressed/2-social-media-icon-twitter.png"
         alt="Twitter"
         /></a>
      <a href="https://www.linkedin.com/school/the-college-of-new-jersey/" target="_blank"><img
         src="https://tcnj.edu/custom/homepage/img/compressed/3-social-media-icon-linkedin.png"
         alt="LinkedIn"
         /></a>
      <a href="http://instagram.com/tcnj_official" target="_blank"><img
         src="https://tcnj.edu/custom/homepage/img/compressed/4-social-media-icon-instagram.png"
         alt="Instagram"
         /></a>
      <a href="http://www.youtube.com/tcnjvideo" target="_blank"><img
         src="https://tcnj.edu/custom/homepage/img/compressed/5-social-media-icon-youtube.png"
         alt="Youtube"
         /></a>
      <p>All Rights Reserved ©2022</p>
   </div>
</div>
      <?php 
         if( get_field('page_type') == 'video' ): ?>
<script>
    const screenContainer = document.querySelector(".screen-container");
      const videoEmbed = document.querySelector("#embedded-video");
      function handleVideoPlay() {
        screenContainer.style.display = "none";
        videoEmbed.style.display = "block";
        videoEmbed.play();
      }
      screenContainer.addEventListener("touchstart", handleVideoPlay);
      screenContainer.addEventListener("click", handleVideoPlay);
   </script>
<?php endif; ?>
      <?php 
         if( get_field('page_type') == 'gallery' ): ?>
   <script>
    var splide = new Splide("#main-slider", {
   width: 1130,
   height: 637,
   pagination: false,
   cover: true,
        rewind: true,
   });
   
   var thumbnails = document.getElementsByClassName("thumbnail");
   var current;
   
   for (var i = 0; i < thumbnails.length; i++) {
   initThumbnail(thumbnails[i], i);
   }
   
   function initThumbnail(thumbnail, index) {
   thumbnail.addEventListener("click", function () {
    splide.go(index);
   });
   }
   
   splide.on("mounted move", function () {
   var thumbnail = thumbnails[splide.index];
   
   if (thumbnail) {
    if (current) {
      current.classList.remove("is-active");
    }
   
    thumbnail.classList.add("is-active");
    current = thumbnail;
   }
   });
   
   splide.mount();
</script><?php endif; ?>