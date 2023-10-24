		
	</main>

  <!--------Footer--------->
  <footer class="footer">
    <div class="container footer__container">
      <a data-fancybox href="#term-of-service">Terms of Service</a>
      <a data-fancybox href="#refund-policy">Refund Policy</a>
      <a data-fancybox href="#privacy-policy">Privacy Policy</a>
      <p>© 2023 tpboost.io. All rights reserved.</p>
    </div>
  </footer>

  <!-- term-of-service -->
  <div style="display: none;" class="modal modal-content" id="term-of-service">
    <button type="button" data-fancybox-close class="modal-close" title="Close">
      <span>Close</span>
      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.13636 0L0 1.13636L11.3636 12.5L0 23.8636L1.13636 25L12.5 13.6364L23.8636 25L25 23.8636L13.6364 12.5L25 1.13636L23.8636 0L12.5 11.3636L1.13636 0Z" fill="#00B67A"/>
      </svg>      
    </button>
    <?php
    $post_id = 115;
    $post_type = 'info';
    $post = get_post($post_id, $post_type);
    if ($post) { ?>
      <div class="modal-heading">
        <h2 class="modal-title"><?php echo $post->post_title ?></h2>
      </div>
      <!-- Swiper -->
      <div class="swiper scroll-container termSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <?php echo $post->post_content ?>
          </div>
        </div>
        <div class="swiper-scrollbar"></div>
      </div>
    <?php } ?>
  </div>
  <!-- refund-policy -->
  <div style="display: none;" class="modal modal-content" id="refund-policy">
    <button type="button" data-fancybox-close class="modal-close" title="Close">
      <span>Close</span>
      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.13636 0L0 1.13636L11.3636 12.5L0 23.8636L1.13636 25L12.5 13.6364L23.8636 25L25 23.8636L13.6364 12.5L25 1.13636L23.8636 0L12.5 11.3636L1.13636 0Z" fill="#00B67A"/>
      </svg>      
    </button>
    <?php
    $post_id = 106;
    $post_type = 'info';
    $post = get_post($post_id, $post_type);
    if ($post) { ?>
      <div class="modal-heading">
        <h2 class="modal-title"><?php echo $post->post_title ?></h2>
      </div>
      <!-- Swiper -->
      <div class="swiper scroll-container termSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <?php echo $post->post_content ?>
          </div>
        </div>
        <div class="swiper-scrollbar"></div>
      </div>
    <?php } ?>
  </div>
  <!-- privacy-policy -->
  <div style="display: none;" class="modal modal-content" id="privacy-policy">
    <button type="button" data-fancybox-close class="modal-close" title="Close">
      <span>Close</span>
      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.13636 0L0 1.13636L11.3636 12.5L0 23.8636L1.13636 25L12.5 13.6364L23.8636 25L25 23.8636L13.6364 12.5L25 1.13636L23.8636 0L12.5 11.3636L1.13636 0Z" fill="#00B67A"/>
      </svg>      
    </button>
    <?php
    $post_id = 109;
    $post_type = 'info';
    $post = get_post($post_id, $post_type);
    if ($post) { ?>
      <div class="modal-heading">
        <h2 class="modal-title"><?php echo $post->post_title ?></h2>
      </div>
      <!-- Swiper -->
      <div class="swiper scroll-container termSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <?php echo $post->post_content ?>
          </div>
        </div>
        <div class="swiper-scrollbar"></div>
      </div>
    <?php } ?>
  </div>
  

  <div style="display: none;" class="modal modal-order" id="modal-order">
    <button type="button" data-fancybox-close class="modal-close" title="Close">
      <span>Close</span>
      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.13636 0L0 1.13636L11.3636 12.5L0 23.8636L1.13636 25L12.5 13.6364L23.8636 25L25 23.8636L13.6364 12.5L25 1.13636L23.8636 0L12.5 11.3636L1.13636 0Z" fill="#00B67A"/>
      </svg>      
    </button>
    <div class="modal-heading">
      <h2 class="modal-title">Order Details</h2>
      <div class="order-details">
        <p class="order-details-name">EU/USA reviews</p>
        <div class="order-details-charact"><span>1</span><span>8 $</span></div>
      </div>
    </div>
    <div class="form">
      <?php echo do_shortcode('[contact-form-7 id="fa5fe38" title="Order Form"]'); ?>
    </div>
  </div>

  <div style="display: none;" class="modal modal-order-yes" id="modal-order-yes">
    <button type="button" data-fancybox-close class="modal-close" title="Close">
      <span>Close</span>
      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.13636 0L0 1.13636L11.3636 12.5L0 23.8636L1.13636 25L12.5 13.6364L23.8636 25L25 23.8636L13.6364 12.5L25 1.13636L23.8636 0L12.5 11.3636L1.13636 0Z" fill="#00B67A"/>
      </svg>      
    </button>
    <div class="modal-heading">
      <h2 class="title-1">The application <span>is&nbsp;complete</span></h2>
      <p class="title-2">You will receive payment details
        in the specified messenger</p>
    </div>
    <div class="modal-bottom">
      <p class="title-2"><span>Thank you</span> for choosing tpboost.io</p>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>
</html>