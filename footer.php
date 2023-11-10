<footer>
    <p><small>&copy; 2011-<?php echo date('Y') ?> CG-BIM Studio</small></p>
</footer>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js' integrity='sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==' crossorigin='anonymous'></script>
<script>
    $(function(){
        //ハンバーガー
        $('#ham-btn').on('click',function(){
            $(this).toggleClass('is-active');
            $('#sp-nav').toggleClass('slide');
        });
        $('#sp-nav').on('click',function(){
            $('#ham-btn').removeClass('is-active');
            $(this).removeClass('slide');
        })
    });
</script>
<?php wp_footer(); ?>