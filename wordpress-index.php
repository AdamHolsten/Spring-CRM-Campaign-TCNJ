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
      <div id="video-only">
         <div class="video-container">
            <div class="screen-container">
               <div id="play-button"></div>
               <img src="https://inside.tcnj.edu/wp-content/uploads/sites/344/2022/02/Video-screencap.png" alt="" />
            </div>
            <iframe id="embedded-video"
            width:100%;
            height: 637px;
            src="https://www.youtube-nocookie.com/embed/4YERMJzsrzM"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            ></iframe>
         </div>
         <div class="video-or-gallery-description">
            <p>Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
         </div>
      </div>
      <?php endif; ?>
            <?php 
         if( get_field('page_type') == 'story' ): ?>
      <div id="story-only">
         <div class="landing-container">
            <img src="https://inside.tcnj.edu/wp-content/uploads/sites/344/2022/02/Headshot.jpg" alt="">
            <h4>Superintendent Scott Rocco</h4>
            <p>I come from a family of educators, several of whom also studied at The College of New Jersey. So, I always knew I wanted to go into education, and I knew TCNJ was my first-choice school. But I went as a math major, and soon realized that my passion was in history and social studies.</p>
            <p>When I made that transition, the hardest call I had to make was to my father, to tell him I was changing the direction of my career. He said, “Listen, as a math major, you’ll get dozens of job offered a job right out of school. I think a big reason was TCNJ’s  on-campus recruitment. Eventually, I did recruiting there myself — It’s my district’s top recruitment spot.</p>
            <p>I started my career as a teacher, became a middle school VP, an elementary principal, and then an assistant superintendent. Now, I’m now in my fifth year as superintendent of Hamilton Township Public Schools in Mercer County. It’s a very large district, with 11,000 students K through 12, and 1,800 staff. </p>
            <p>
               When we’re hiring, we know what we’re getting with TCNJ graduates. The college’s program for education majors is outstanding. From the classwork to partnerships with school districts, the support that TCNJ provides their student teachers both on campus and within the schools where they’re teaching is absolutely incredible. As a student in those education courses, I was exposed to all different types of schools — middle school, high school, different towns — and I got the knowledge and experience I needed to be successful.  
            </p>
            <p>
               And now, in hiring, I know TCNJ candidates will be well prepared. Generally, I look for candidates who are motivated and excited to work with children of all ages, who understand how to be effective, and who know how to teach. And I know I’ll get all of that from TCNJ graduates. 
            </p>
         </div>
      </div>
            <?php endif; ?>
            <?php 
         if( get_field('page_type') == 'gallery' ): ?>

<div id="gallery-only">
         <div id="main-slider" class="splide">
            <div class="splide__track">
               <ul class="splide__list">
                  <li class="splide__slide">
                     <p class="caption">Caption 1</p>
                     <img src="https://source.unsplash.com/random/1000x1000?sig=1" />
                     <div class="gradient-overlay"></div>
                  </li>
                  <li class="splide__slide">
                     <p class="caption">Caption 2</p>
                     <img src="https://source.unsplash.com/random/1000x1000?sig=2" />
                     <div class="gradient-overlay"></div>
                  </li>
                  <li class="splide__slide">
                     <p class="caption">Caption 3</p>
                     <img src="https://source.unsplash.com/random/1000x1000?sig=3" />
                     <div class="gradient-overlay"></div>
                  </li>
                  <li class="splide__slide">
                     <p class="caption">Caption 4</p>
                     <img src="https://source.unsplash.com/random/1000x1000?sig=4" />
                     <div class="gradient-overlay"></div>
                  </li>
               </ul>
            </div>
         </div>
         <ul id="thumbnails" class="thumbnails">
            <li class="thumbnail">
               <img src="https://source.unsplash.com/random/1000x1000?sig=1" />
            </li>
            <li class="thumbnail">
               <img src="https://source.unsplash.com/random/1000x1000?sig=2" />
            </li>
            <li class="thumbnail">
               <img src="https://source.unsplash.com/random/1000x1000?sig=3" />
            </li>
            <li class="thumbnail">
               <img src="https://source.unsplash.com/random/1000x1000?sig=4" />
            </li>
         </ul>
      </div>
      <div class="video-or-gallery-description">
         <p>Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>

<?php endif; ?>
      <div class="cta">
         <h3>Join the Pride!</h3>
         <a href="">Enroll today</a>
      </div>
    
    
   </div>
</div>
<div class="email-footer">
   <img
      src="https://tcnj.edu/custom/icon-library/logos/Blue-logo.svg"
      alt="TCNJ"
      />
   <div class="social-icons-container mobile-hide">
      <img
         src="https://tcnj.edu/custom/homepage/img/compressed/1-social-media-icon-facebook.png"
         alt="Facebook"
         />
      <img
         src="https://tcnj.edu/custom/homepage/img/compressed/2-social-media-icon-twitter.png"
         alt="Twitter"
         />
      <img
         src="https://tcnj.edu/custom/homepage/img/compressed/3-social-media-icon-linkedin.png"
         alt="LinkedIn"
         />
      <img
         src="https://tcnj.edu/custom/homepage/img/compressed/4-social-media-icon-instagram.png"
         alt="Instagram"
         />
      <img
         src="https://tcnj.edu/custom/homepage/img/compressed/5-social-media-icon-youtube.png"
         alt="Youtube"
         />
      <p>All Rights Reserved ©2022</p>
   </div>
</div>
      <?php 
         if( get_field('page_type') == 'video' ): ?>
<script>
   const screenContainer = document.querySelector(".screen-container");
   const videoEmbed = document.querySelector("#embedded-video");
   screenContainer.addEventListener('click', event => {
       screenContainer.style.display = "none";
       videoEmbed.src += "?autoplay=1";
   });
   </script>
<?php endif; ?>
      <?php 
         if( get_field('page_type') == 'gallery' ): ?>
   <script>
    var splide = new Splide("#main-slider", {
   width: 1130,
   height: 637,
   pagination: false,
   cover: true
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