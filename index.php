<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <title>不思議な魅力cuba</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
 <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
 
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  
  <!-- js-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
  <meta name="google-site-verification" content="lhJmuvzQwWwrpzxY9V40CiYSfNtPP9Yme8hUn4gatOw" />
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <?php wp_head(); ?>
    </head>
  
</head>
<body <?php body_class(); ?>>
    <header>
        
       <div class="topimg">
           <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/topsp.jpg" alt="top画像">
           <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/toppc.jpg" alt="top画像">
           <div class="box1"></div>
           
           <p class="comment fadein">不思議な魅力にきっとあなたも虜になる</p>
           <h1 class="fadein">CUBA</h1>
       </div>
    </header>
    <main>
    
    <div class="loopsample">
    <h4>記事ループのサンプル</h4>
    <?php /* ↓↓記事ループのサンプルコード↓↓ */
    $wpq = new WP_Query(array(
        'post_type' => array('post'),  
        'category_name' => 'city'   
    ));
    if ( $wpq->have_posts() ) :
        while ( $wpq->have_posts() ): $wpq->the_post();
    ?>
            <h2 class=h2-2>町の名前</h2>
            <p><?php echo get_the_title(); ?></p>
            <h5>URL</h5>
            <p><?php echo get_the_permalink(); ?></p>
            <h5>Image</h5>
            <p><?php echo get_the_post_thumbnail_url(); ?></p>
            <h5>Except</h5>
            <p><?php echo get_the_excerpt(); ?></p>
    <?php
        endwhile;
    endif;
    wp_reset_query();
    
    /* ↑↑記事ループのサンプルコード↑↑ */
    ?>
    </div>
    　　<div class="fadein">
        <h2>where're you going?</h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="twelve columns">
        
        

        <?php /* ↓↓記事ループのサンプルコード2↓↓ */
        $wpq = new WP_Query(array(
        'post_type' => array('post'),  
        'category_name' => 'city'   
        ));
        if ( $wpq->have_posts() ) :
        while ( $wpq->have_posts() ): $wpq->the_post();
        ?>  

            <div class="mainbox"> 
                    <div class="mainitem1 "><a href="<?php echo get_the_permalink(); ?>">
                        <p class="mainp fadein"><?php echo get_the_excerpt(); ?></p>
                        <img class="star" src="<?php echo get_template_directory_uri(); ?>/images/star2.png" alt="star">
                        <p class="mainp2 fadein"><?php echo get_the_title(); ?></p></a>
                    </div>
                    <div class="mainitem2"><img class="sp fadein" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="habana"><img class="pc fadein" src="<?php echo get_the_post_thumbnail_url(); ?>"alt="habana">
                    </div>
            </div>
       
        <?php
        endwhile;
        endif;
        wp_reset_query();
    
        /* ↑↑記事ループのサンプルコード2↑↑ */
        ?>
         </div></div></div>

        <div class="fadein">
        <h2 class="h2_2">What's cuba like?</h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="twelve columns">

        <?php /* ↓↓記事ループのサンプルコード2-2↓↓ */
        $wpq = new WP_Query(array(
        'post_type' => array('post'),  
        'category_name' => 'life'   
        ));
        if ( $wpq->have_posts() ) :
        while ( $wpq->have_posts() ): $wpq->the_post();
        ?>   
            <div class="mainbox"> 
                    <div class="mainitem1 "><a href="index.html"> 
                        <p class="mainp fadein"><?php echo get_the_excerpt(); ?></p>
                        <img class="star" src="<?php echo get_template_directory_uri(); ?>/images/star2.png" alt="star">
                        <p class="mainp2 fadein"><?php echo get_the_title(); ?></p></a>
                    </div>
                    <div class="mainitem2"><img class="sp fadein" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="habana"><img class="pc fadein" src="<?php echo get_the_post_thumbnail_url(); ?>"alt="habana">
                    </div>
                </div>
        <?php
        endwhile;
        endif;
        wp_reset_query();
    
        /* ↑↑記事ループのサンプルコード2-2↑↑ */
        ?>
        </div></div></div>






                    
    
        
    </main>
    <footer>
        <p class="f1">©２０２０︎minami</p>
    </footer>
    <script>
    $(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 200){
                $(this).css('opacity','1');
                $(this).css('transform','translateY(0)');
            }
        });
    });
});
</script>
<?php wp_footer(); ?>
</body>
</html>