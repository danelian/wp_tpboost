<?php get_header(); ?>

<section class="hero">
  <div class="container">
    <div class="hero__container">
      <h1 class="title-1"><?php the_field('hero_title'); ?></h1>
      <a href="/" class="logo">
        <svg width="190" height="40" viewBox="0 0 190 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M50.7609 30.1452C51.8267 30.543 53.0191 30.7419 54.338 30.7419C55.8035 30.7419 57.1358 30.4833 58.3348 29.9661C59.5339 29.4357 60.5664 28.6996 61.4324 27.7581C62.3117 26.8165 62.9911 25.7224 63.4708 24.4758C63.9504 23.2159 64.1902 21.8566 64.1902 20.3978C64.1902 18.4882 63.7705 16.7509 62.9312 15.186C62.1052 13.6211 60.9461 12.3745 59.454 11.4462C57.9751 10.5179 56.2565 10.0538 54.298 10.0538C52.4195 10.0538 50.8075 10.4516 49.4619 11.2473C48.4745 11.837 47.6152 12.5578 46.8839 13.4098V1.5H43.2268V30.1452H46.6042V27.0067C47.0035 27.5608 47.4631 28.0698 47.9831 28.5339C48.7691 29.2235 49.695 29.7606 50.7609 30.1452ZM57.1758 26.5844C56.1632 27.1547 54.9975 27.4398 53.6785 27.4398C52.3596 27.4398 51.1872 27.1547 50.1613 26.5844C49.1488 26.0009 48.3494 25.1853 47.7632 24.1376C47.177 23.0767 46.8839 21.8301 46.8839 20.3978C46.8839 18.9523 47.177 17.7057 47.7632 16.6581C48.3494 15.5971 49.1488 14.7815 50.1613 14.2113C51.1872 13.641 52.3596 13.3559 53.6785 13.3559C54.9975 13.3559 56.1632 13.641 57.1758 14.2113C58.2016 14.7815 59.001 15.5971 59.5739 16.6581C60.1601 17.7057 60.4532 18.9523 60.4532 20.3978C60.4532 21.8301 60.1601 23.0767 59.5739 24.1376C59.001 25.1853 58.2016 26.0009 57.1758 26.5844Z" fill="currentColor"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2599 10.6505V38.5H22.917V27.3801C23.743 28.388 24.7689 29.2036 25.9946 29.8269C27.2336 30.4369 28.6791 30.7419 30.3311 30.7419C31.81 30.7419 33.1489 30.4767 34.3479 29.9462C35.5603 29.4025 36.6061 28.6599 37.4854 27.7183C38.3647 26.7634 39.0376 25.6627 39.5038 24.4161C39.9835 23.1563 40.2233 21.8168 40.2233 20.3979C40.2233 18.4484 39.8036 16.6912 38.9643 15.1263C38.1383 13.5615 36.9858 12.3281 35.507 11.4263C34.0282 10.5113 32.3162 10.0538 30.3711 10.0538C28.4926 10.0538 26.9338 10.3853 25.6948 11.0484C24.4691 11.6982 23.4499 12.5403 22.6372 13.5747V10.6505H19.2599ZM33.2088 26.5844C32.1963 27.1547 31.0306 27.4398 29.7116 27.4398C28.3927 27.4398 27.2203 27.1547 26.1944 26.5844C25.1819 26.0009 24.3825 25.1853 23.7963 24.1376C23.2101 23.0767 22.917 21.8301 22.917 20.3979C22.917 18.9523 23.2101 17.7057 23.7963 16.6581C24.3825 15.5971 25.1819 14.7815 26.1944 14.2113C27.2203 13.641 28.3927 13.3559 29.7116 13.3559C31.0306 13.3559 32.1963 13.641 33.2088 14.2113C34.2347 14.7815 35.0341 15.5971 35.6069 16.6581C36.1931 17.7057 36.4862 18.9523 36.4862 20.3979C36.4862 21.8301 36.1931 23.0767 35.6069 24.1376C35.0341 25.1853 34.2347 26.0009 33.2088 26.5844Z" fill="currentColor"/>
          <path d="M12.0516 30.7419C10.2264 30.7419 8.75423 30.2115 7.63512 29.1505C6.52934 28.0896 5.97644 26.4518 5.97644 24.2371V13.7538H1.5V10.6505H5.97644V4.92151H9.65352V10.6505H15.389V13.7538H9.65352V23.322C9.65352 24.8073 9.91998 25.855 10.4529 26.465C10.9991 27.0618 11.7918 27.3602 12.831 27.3602C13.2973 27.3602 13.7369 27.3072 14.1499 27.2011C14.5763 27.095 14.9493 26.9557 15.2691 26.7833L16.0285 29.7871C15.4822 30.0788 14.8627 30.3109 14.1699 30.4833C13.4771 30.6557 12.771 30.7419 12.0516 30.7419Z" fill="currentColor"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M172.553 29.3292C174.138 30.2708 175.943 30.7415 177.968 30.7415C179.5 30.7415 180.906 30.4697 182.185 29.9259C183.464 29.369 184.576 28.613 185.522 27.6582C186.468 26.7034 187.201 25.6027 187.721 24.3561C188.24 23.1095 188.5 21.7899 188.5 20.3975C188.5 18.5143 188.047 16.7903 187.141 15.2254C186.235 13.6605 184.989 12.4073 183.404 11.4657C181.819 10.5242 180.007 10.0534 177.968 10.0534C176.45 10.0534 175.051 10.3252 173.772 10.869C172.493 11.4127 171.38 12.1686 170.434 13.1367C169.488 14.0915 168.756 15.1923 168.236 16.4389C167.717 17.6854 167.457 19.005 167.457 20.3975C167.457 22.2806 167.91 24.0046 168.816 25.5695C169.722 27.1344 170.967 28.3876 172.553 29.3292ZM181.466 26.584C180.453 27.1543 179.287 27.4394 177.968 27.4394C176.663 27.4394 175.497 27.1543 174.471 26.584C173.445 26.0005 172.639 25.1849 172.053 24.1372C171.48 23.0763 171.194 21.8297 171.194 20.3975C171.194 18.9519 171.48 17.7053 172.053 16.6577C172.639 15.5967 173.439 14.7811 174.451 14.2109C175.477 13.6406 176.649 13.3555 177.968 13.3555C179.287 13.3555 180.46 13.6406 181.486 14.2109C182.511 14.7811 183.311 15.5967 183.884 16.6577C184.47 17.7053 184.763 18.9519 184.763 20.3975C184.763 21.8297 184.47 23.0763 183.884 24.1372C183.297 25.1849 182.491 26.0005 181.466 26.584Z" fill="currentColor"/>
          <path d="M160.763 30.1447V10.6501H164.44V30.1447H160.763Z" fill="currentColor"/>
          <path d="M162.602 6.97C161.909 6.97 161.309 6.73792 160.803 6.27377C160.297 5.80961 160.044 5.21947 160.044 4.50334C160.044 3.78721 160.297 3.2037 160.803 2.7528C161.309 2.28864 161.909 2.05656 162.602 2.05656C163.308 2.05656 163.907 2.28864 164.4 2.7528C164.906 3.2037 165.159 3.78721 165.159 4.50334C165.159 5.21947 164.906 5.80961 164.4 6.27377C163.907 6.73792 163.308 6.97 162.602 6.97Z" fill="currentColor"/>
          <path d="M151.942 30.0059C152.502 30.4966 153.168 30.742 153.941 30.742C154.46 30.742 154.933 30.6292 155.359 30.4038C155.786 30.1783 156.125 29.8667 156.379 29.4688C156.632 29.071 156.758 28.6068 156.758 28.0764C156.758 27.2807 156.485 26.6375 155.939 26.1468C155.393 25.6561 154.727 25.4108 153.941 25.4108C153.421 25.4108 152.941 25.5235 152.502 25.749C152.075 25.9744 151.736 26.2861 151.482 26.6839C151.243 27.0818 151.123 27.5459 151.123 28.0764C151.123 28.8721 151.396 29.5153 151.942 30.0059Z" fill="currentColor"/>
          <path d="M144.654 30.7419C142.829 30.7419 141.357 30.2114 140.238 29.1505C139.132 28.0895 138.579 26.4517 138.579 24.237V13.7537H134.102V10.6505H138.579V4.92145H142.256V10.6505H147.991V13.7537H142.256V23.322C142.256 24.8073 142.522 25.855 143.055 26.465C143.602 27.0618 144.394 27.3602 145.433 27.3602C145.9 27.3602 146.339 27.3071 146.752 27.201C147.179 27.0949 147.552 26.9557 147.871 26.7833L148.631 29.787C148.085 30.0788 147.465 30.3109 146.772 30.4833C146.08 30.6557 145.373 30.7419 144.654 30.7419Z" fill="currentColor"/>
          <path d="M120.699 30.0456C122.084 30.4965 123.55 30.7219 125.095 30.7219C126.667 30.7219 128.04 30.4766 129.212 29.9859C130.385 29.482 131.297 28.7791 131.95 27.8773C132.603 26.9623 132.929 25.8881 132.929 24.6547C132.929 23.0633 132.396 21.8167 131.33 20.915C130.265 19.9999 128.506 19.2705 126.055 18.7268C124.363 18.3289 123.15 17.9245 122.418 17.5133C121.698 17.1022 121.338 16.4524 121.338 15.5639C121.338 14.7151 121.711 14.0521 122.458 13.5746C123.217 13.0972 124.189 12.8585 125.375 12.8585C126.095 12.8585 126.814 12.9513 127.533 13.137C128.253 13.3094 128.926 13.5547 129.552 13.873C130.191 14.1913 130.744 14.5693 131.211 15.0069L132.629 12.2219C131.71 11.4528 130.624 10.8693 129.372 10.4714C128.133 10.0603 126.794 9.85474 125.355 9.85474C123.903 9.85474 122.617 10.1067 121.498 10.6107C120.392 11.1146 119.52 11.8108 118.88 12.6994C118.241 13.5746 117.921 14.5825 117.921 15.723C117.921 17.3277 118.461 18.5875 119.54 19.5026C120.632 20.4176 122.378 21.147 124.776 21.6908C126.588 22.1284 127.827 22.5528 128.493 22.9639C129.159 23.375 129.492 24.0049 129.492 24.8537C129.492 25.7687 129.106 26.4782 128.333 26.9822C127.56 27.4728 126.481 27.7182 125.095 27.7182C123.976 27.7182 122.857 27.5193 121.738 27.1214C120.632 26.7103 119.646 26.1467 118.78 25.4305L117.262 28.1956C118.181 28.9648 119.327 29.5814 120.699 30.0456Z" fill="currentColor"/>
          <path d="M102.125 22.1537C102.631 22.6179 103.231 22.85 103.923 22.85C104.629 22.85 105.229 22.6179 105.722 22.1537C106.228 21.6896 106.481 21.0994 106.481 20.3833C106.481 19.6672 106.228 19.0837 105.722 18.6328C105.229 18.1686 104.629 17.9365 103.923 17.9365C103.231 17.9365 102.631 18.1686 102.125 18.6328C101.618 19.0837 101.365 19.6672 101.365 20.3833C101.365 21.0994 101.618 21.6896 102.125 22.1537Z" fill="currentColor"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M77.6318 10.0539C71.8953 10.0539 67.245 14.6828 67.245 20.393C67.245 26.1031 71.8953 30.7321 77.6317 30.7321H104.307C110.043 30.7321 114.693 26.1031 114.693 20.393C114.693 14.6828 110.043 10.0539 104.307 10.0539H77.6318ZM104.307 13.3361H77.6318C73.7164 13.3361 70.5424 16.4956 70.5424 20.393C70.5424 24.2904 73.7164 27.4499 77.6317 27.4499H104.307C108.222 27.4499 111.396 24.2904 111.396 20.393C111.396 16.4956 108.222 13.3361 104.307 13.3361Z" fill="currentColor"/>
        </svg>
      </a>
    </div>
    <div class="hero__bnr" style="background-image: url('<?php the_field('hero_bnr_bg'); ?>');">
      <div class="hero__bnr-content">
        <h2 class="title-2"><?php the_field('hero_bnr_title'); ?></h2>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tp-logo-white.svg" class="hero__bnr-logo" alt=""/>
    </div>
  </div>
</section>

<section class="benefits">
  <div class="container">
    <h2 class="title-1"><?php the_field('benefits_title'); ?></h2>
    <div class="benefits__list">
      <div class="benefits__item">
        <div class="benefits__item-number"><?php the_field('benefit_1_number'); ?></div>
        <h3 class="title-2"><?php the_field('benefit_1_title'); ?></h3>
        <p class="text"><?php the_field('benefit_1_text'); ?></p>
      </div>
      <div class="benefits__item">
        <div class="benefits__item-number"><?php the_field('benefit_2_number'); ?></div>
        <h3 class="title-2"><?php the_field('benefit_2_title'); ?></h3>
        <p class="text"><?php the_field('benefit_2_text'); ?></p>
      </div>
      <div class="benefits__item">
        <div class="benefits__item-number"><?php the_field('benefit_3_number'); ?></div>
        <h3 class="title-2"><?php the_field('benefit_3_title'); ?></h3>
        <p class="text"><?php the_field('benefit_3_text'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="services">
  <div class="container">
    <div class="services__container">
      <div class="services__item">
        <div class="services__item-bnr" style="background-image: url('/img/geo-mixed-bg.jpg');">
          <h2 class="title-1">EU/USA geo mixed reviews</h3>
          <h3 class="title-1"><span>8 $</span> per 1</h3>
        </div>
        <div class="radio__btns">
          <label for="gm1" class="radio">
            <input type="radio" id="gm1" name="gm" checked>
            <span>1</span>
            <span>8 $</span>
          </label>
          <label for="gm3" class="radio">
            <input type="radio" id="gm3" name="gm">
            <span>3</span>
            <span>24 $</span>
          </label>
          <label for="gm5" class="radio">
            <input type="radio" id="gm5" name="gm">
            <span>5</span>
            <span>40 $</span>
          </label>
          <label for="gm10" class="radio">
            <input type="radio" id="gm10" name="gm">
            <span>10</span>
            <span>80 $</span>
          </label>
          <label for="gm25" class="radio">
            <input type="radio" id="gm25" name="gm">
            <span>25</span>
            <span>200 $</span>
          </label>
          <label for="gm100" class="radio">
            <input type="radio" id="gm100" name="gm">
            <span>100</span>
            <span>800 $</span>
          </label>
        </div>
        <button data-fancybox href="#modal-order" class="btn" type="button">Place order</button>
      </div>
      <div class="services__item">
        <div class="services__item-bnr" style="background-image: url('/img/geo-targeted-bg.jpg');">
          <h2 class="title-1">Geo-Targeted reviews</h3>
          <h3 class="title-1"><span>20 $</span> per 1</h3>
        </div>
        <div class="radio__btns">
          <label for="gt1" class="radio">
            <input type="radio" id="gt1" name="gt" checked>
            <span>1</span>
            <span>20 $</span>
          </label>
          <label for="gt3" class="radio">
            <input type="radio" id="gt3" name="gt">
            <span>3</span>
            <span>60 $</span>
          </label>
          <label for="gt5" class="radio">
            <input type="radio" id="gt5" name="gt">
            <span>5</span>
            <span>100 $</span>
          </label>
          <label for="gt10" class="radio">
            <input type="radio" id="gt10" name="gt">
            <span>10</span>
            <span>200 $</span>
          </label>
          <label for="gt25" class="radio">
            <input type="radio" id="gt25" name="gt">
            <span>25</span>
            <span>500 $</span>
          </label>
          <label for="gt100" class="radio">
            <input type="radio" id="gt100" name="gt">
            <span>100</span>
            <span>2000 $</span>
          </label>
        </div>
        <button data-fancybox href="#modal-order-yes" class="btn" type="button">Place order</button>
      </div>
    </div>
  </div>
</section>

<section class="sets">
  <div class="container">
    <h2 class="title-1"><?php the_field('sets_title'); ?></h2>
    <div class="sets__list">
      <div class="sets__item">
        <div class="sets__item-number"><?php the_field('set_1_number'); ?></div>
        <h3 class="title-2"><?php the_field('set_1_title'); ?></h3>
        <p class="text"><?php the_field('set_1_text'); ?></p>
      </div>
      <div class="sets__item">
        <div class="sets__item-number"><?php the_field('set_2_number'); ?></div>
        <h3 class="title-2"><?php the_field('set_2_title'); ?></h3>
        <p class="text"><?php the_field('set_2_text'); ?></p>
      </div>
      <div class="sets__item">
        <div class="sets__item-number"><?php the_field('set_3_number'); ?></div>
        <h3 class="title-2"><?php the_field('set_3_title'); ?></h3>
        <p class="text"><?php the_field('set_3_text'); ?></p>
      </div>
      <div class="sets__item">
        <div class="sets__item-number"><?php the_field('set_4_number'); ?></div>
        <h3 class="title-2"><?php the_field('set_4_title'); ?></h3>
        <p class="text"><?php the_field('set_4_text'); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="faq">
  <div class="container">
    <h2 class="title-1"><?php the_field('faq_title'); ?></h2>
    <div class="faq__list">
      <div class="faq__list-left">
        <div class="faq__item">
          <h3 class="title-2"><?php the_field('faq_1_question'); ?></h3>
          <p class="text"><?php the_field('faq_1_answer'); ?></p>
        </div>
        <div class="faq__item">
          <h3 class="title-2"><?php the_field('faq_2_question'); ?></h3>
          <p class="text"><?php the_field('faq_2_answer'); ?></p>
        </div>
        <div class="faq__item">
          <h3 class="title-2"><?php the_field('faq_3_question'); ?></h3>
          <p class="text"><?php the_field('faq_3_answer'); ?></p>
        </div>
        <div class="faq__item">
          <h3 class="title-2"><?php the_field('faq_4_question'); ?></h3>
          <p class="text"><?php the_field('faq_4_answer'); ?></p>
        </div>
        <div class="faq__item">
          <h3 class="title-2"><?php the_field('faq_5_question'); ?></h3>
          <p class="text"><?php the_field('faq_5_answer'); ?></p>
        </div>
      </div>
      <div class="faq__list-right">
        <div class="faq__item">
          <h3 class="title-2"><?php the_field('faq_6_question'); ?></h3>
          <p class="text"><?php the_field('faq_6_answer'); ?></p>
        </div>
        <div class="faq__item">
          <h3 class="title-2"><?php the_field('faq_7_question'); ?></h3>
          <p class="text"><?php the_field('faq_7_answer'); ?></p>
        </div>
        <div class="faq__item">
          <h3 class="title-2"><?php the_field('faq_8_question'); ?></h3>
          <p class="text"><?php the_field('faq_8_answer'); ?></p>
        </div>
        <div class="faq__item">
          <h3 class="title-2"><?php the_field('faq_9_question'); ?></h3>
          <p class="text"><?php the_field('faq_9_answer'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contacts">
  <div class="container">
    <h2 class="title-1">Contact us</h2>
    <div class="contacts__container">
      <div class="contacts__left">
        <h3 class="title-2">Engage with our specialists directly</h3>
        <p class="text">Utilize the chat feature in the bottom right corner or connect with us through your preferred method of communication</p>
      </div>
      <div class="contacts__right">
        <a href="#" class="btn-withicon">
          <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_206_31)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.629 1.22261C25.9062 1.44687 26.043 1.80173 25.9881 2.154L22.5595 24.154C22.5061 24.4966 22.279 24.7872 21.9594 24.9217C21.6398 25.0562 21.2733 25.0156 20.9909 24.8143L10.7052 17.4809C10.486 17.3247 10.3391 17.0866 10.2976 16.8206C10.2562 16.5547 10.3237 16.2832 10.485 16.0677L13.4981 12.0397L8.43768 15.6476C8.12831 15.8682 7.72066 15.8944 7.38561 15.7152L0.528468 12.0485C0.183078 11.8638 -0.0226974 11.4945 0.00199898 11.1036C0.0266954 10.7127 0.277317 10.3722 0.643205 10.2325L24.6432 1.06583C24.9763 0.938624 25.3519 0.998357 25.629 1.22261ZM3.40486 11.3186L7.78169 13.659L17.5623 6.68577C17.9636 6.39967 18.5135 6.44859 18.858 6.80104C19.2025 7.15349 19.2388 7.70437 18.9436 8.09901L12.6993 16.4464L20.8328 22.2453L23.7465 3.54924L3.40486 11.3186Z" fill="currentColor"/>
            </g>
            <defs>
            <clipPath id="clip0_206_31">
            <rect width="26" height="26" fill="white"/>
            </clipPath>
            </defs>
          </svg>            
          Telegram
        </a>
        <a href="#" class="btn-withicon">
          <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75702e-05 13C2.75702e-05 5.8203 5.82033 0 13 0C20.1797 0 26 5.8203 26 13C26 20.1797 20.1797 26 13 26C10.2988 26 7.78785 25.1751 5.7083 23.7639L1.44724 25.8944C1.06225 26.0869 0.597281 26.0115 0.292921 25.7071C-0.0114395 25.4027 -0.086894 24.9378 0.1056 24.5528L2.23613 20.2917C0.824885 18.2122 2.75702e-05 15.7012 2.75702e-05 13ZM13 2C6.9249 2 2.00003 6.92487 2.00003 13C2.00003 15.4778 2.81806 17.7616 4.1992 19.6001L4.57074 20.0946L3.2361 22.7639L5.90539 21.4293L6.39996 21.8008C8.23843 23.182 10.5223 24 13 24C19.0752 24 24 19.0751 24 13C24 6.92487 19.0752 2 13 2ZM8.85717 8.39924V9.57143C8.85717 10.2495 8.9463 10.9067 9.11348 11.532L9.80877 11.0685C10.0427 10.9126 10.1633 10.634 10.1171 10.3568L9.87807 8.92247C9.79802 8.44215 9.27749 8.18966 8.85717 8.39924ZM9.90127 13.4105L10.9182 12.7326C11.8069 12.1401 12.2655 11.0815 12.0899 10.028L11.8509 8.59367C11.5271 6.65083 9.30674 5.68892 7.6679 6.78148C7.6679 6.78147 7.6679 6.78148 7.6679 6.78148L7.30247 7.02509C7.02427 7.21056 6.85717 7.52279 6.85717 7.85714V9.57143C6.85717 14.8576 11.1424 19.1429 16.4286 19.1429H18.1429C18.4772 19.1429 18.7895 18.9758 18.9749 18.6975L19.2185 18.3321C20.3111 16.6933 19.3492 14.473 17.4064 14.1492L15.9721 13.9101C14.9185 13.7345 13.8599 14.1931 13.2674 15.0819L12.5895 16.0988C11.4815 15.4457 10.5544 14.5185 9.90127 13.4105ZM14.468 16.8865C15.0933 17.0537 15.7506 17.1429 16.4286 17.1429H17.6008C17.8104 16.7225 17.5579 16.202 17.0776 16.122L15.6433 15.8829C15.366 15.8367 15.0874 15.9574 14.9315 16.1913L14.468 16.8865Z" fill="currentColor"/>
          </svg>
          Whatsapp
        </a>
        <a href="#" class="btn-withicon">
          <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.71429C0 1.214 1.214 0 2.71429 0H23.2857C24.786 0 26 1.214 26 2.71429V18.1429C26 19.6431 24.786 20.8571 23.2857 20.8571H16.9638L13.8321 25.5547C13.6466 25.8329 13.3344 26 13 26C12.6656 26 12.3534 25.8329 12.1679 25.5547L9.03624 20.8571H2.71429C1.214 20.8571 0 19.6431 0 18.1429V2.71429ZM2.71429 2C2.31857 2 2 2.31857 2 2.71429V18.1429C2 18.5386 2.31857 18.8571 2.71429 18.8571H9.57143C9.90578 18.8571 10.218 19.0242 10.4035 19.3024L13 23.1972L15.5965 19.3024C15.782 19.0242 16.0942 18.8571 16.4286 18.8571H23.2857C23.6814 18.8571 24 18.5386 24 18.1429V2.71429C24 2.31857 23.6814 2 23.2857 2H2.71429ZM19 8.86162H7V6.86162H19V8.86162ZM17.2857 14.0078H8.71429V12.0078H17.2857V14.0078Z" fill="currentColor"/>
          </svg>
          Chat
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>