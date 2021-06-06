<!-- Javascript files-->
<script src="{{ $web_source }}/js/jquery.min.js"></script>
<script src="{{ $web_source }}/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script src="{{ $web_source }}/js/owl.carousel.min.js"></script>
<script src="{{ $web_source }}/js/custom.js"></script>
<script>
    //css restriction for body element in homepage
    var url = window.location.pathname;
    if (url != '/') {
        $('body').addClass('inner_page');
    }
</script>