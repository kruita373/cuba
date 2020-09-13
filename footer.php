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
<script>
  $(function(){
    $(document).ready(function(){

      $(".humb").click(function () {
        $(this).next().slideToggle();
      });

    });
  });
</script>

<?php wp_footer(); ?>
</body>
</html>