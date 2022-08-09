<section class="u-clearfix u-section-1" id="sec-c61f">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
        
      <div class="u-blog u-expanded-width u-repeater u-repeater-1"><!--blog_post-->

          <?php foreach($posts as $post) { ?>
          <div class="u-blog-post u-container-style u-repeater-item u-white u-repeater-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><!--blog_post_header-->
              <h4 class="u-blog-control u-text u-text-1">
                <a class="u-post-header-link" href="../blog/пост-5.html"><?=$post['title'];?></a>
              </h4><!--/blog_post_header--><!--blog_post_image-->
              <a class="u-post-header-link" href="../blog/пост-5.html"><img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1" src="<?=$post['image'];?>"></a><!--/blog_post_image--><!--blog_post_content-->
              <div class="u-blog-control u-post-content u-text u-text-2 fr-view"><?=$post['about'];?></div><!--/blog_post_content--><!--blog_post_readmore-->
              <a href="../blog/пост-5.html" class="u-blog-control u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-btn-1"><!--blog_post_readmore_content--><!--options_json--><!--{"content":"Read More","defaultValue":"Читать дальше"}--><!--/options_json-->Read More<!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
            </div>
          </div>
          <?php } ?>
          <!--/blog_post-->

        </div><!--/blog-->
      </div>
    </section>