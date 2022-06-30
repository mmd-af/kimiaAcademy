<!--footer section start-->
<footer class="footer-2 py-4 bg-navbar  ">
    <div class="footer-circle"></div>
    <div class="container">
        <div class="row text-light ">
            <div class="col-md-12 col-lg-6 mb-4 mb-md-4 mb-sm-4 mb-lg-0 mt-5 order-2 order-sm-1">
                <div class="col-sm">
                    <h5>ارتباط با ما</h5>

                    <ul class="list-inline social-list-default social-hover-2 text-right">

                        <li class="list-inline-item">
                            <a class="instagram text-light" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="whatsapp text-light" href="#">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="twitter text-light" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="youtube text-light" href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="list-inline-item px-2">
                            <a class="linkedin text-light" href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm text-light">
                    <h6>ایمیل پشتیبانی سایت : </h6>

                    <small><a href="mailto:" class="text-light"><i class="fa fa-inbox m-2" aria-hidden="true"></i>
                            info@gmail.com </a></small>

                </div>
                <div class="col-sm text-light pt-4">
                    <h6>شماره واتساپ پشتیبانی سایت : </h6>

                    <small><a href="tel:+98" class="text-light"><i class="fab fa-whatsapp m-2" aria-hidden="true"></i>
                            +989017707170 </a></small>
                </div>

            </div>
            <div class="col-md-12 col-lg-5 mt-5 order-sm-1 px-4">
                <h5>درباره ما</h5>
                <p>
                    درباره شما
                </p>


            </div>

        </div>
        <div class="row mt-5 pt-4 pb-4 border-top justify-content-sm-center mx-md-0 mx-2">

            <div class="col-md-3 col-sm-12 text-center order-1 order-sm-2 mb-3">
                <img src="holder.js/80x80" alt="">
                <img src="holder.js/80x80" alt="">
            </div>
            <div class="col-md-9 col-sm-12 text-cente align-self-center order-sm-1  mx-auto">
                <small class="text-muted ">کلیه حقوق این سایت محفوظ و متعلق به آکادمی کیمیاگر می باشد.</small>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12 order-sm-3 text-center pb-0">
                <small><a class="text-light" href="https://derakweb.com">طراحی و اجرا از تیم دراک وب</a></small>
            </div>
        </div>
    </div>
    <!--end of container-->




</footer>
<!-- Scroll to Top Button-->
@include('site.layouts.partials.scroll_top')

@yield('script')

@include('sweetalert::alert')

<script>
    $('#searchTable').hide();
    $('#search').on('keyup', function () {
        $('#searchTable').show();
        let value = $(this).val();
        $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});
        $.ajax({
            type: 'get',
            url: "{{ route('site.searches.ajax.getData') }}",
            data: {'search': value},
            success: function (data) {
                $('tbody').html(data);
            }
        });
    })
</script>
</body>

</html>
