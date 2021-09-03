<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <p>المقالات والتعليقات لا تعبر عن رأي الموقع بل تعبر عن رأي الكاتب نفسه وللإبلاغ عن مقالة أو تعليق مخالف ارسل بلاغ</p>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <a href="{{asset('call')}}">تواصل معنا</a>
                    <a href="{{asset('pages/2')}}">الشروط والاحكام</a>
                    <a href="{{asset('pages/1')}}">سياسة الخصوصية</a>
                </div>
            </div>
            <div class="col-lg-6">
                <h1>©جميع الحقوق محفوظة لدى بريست كانسر 2021</h1>
            </div>
            <div class="col-lg-6">
                <ul class="soical-footer">
                     @foreach ($settings as $setting)
                    <a href="{{$setting->youtube}}"><i class="fab fa-youtube"></i></a>
                    <a href="{{$setting->snapchat}}"><i class="fab fa-snapchat-ghost"></i></a>
                    <a href="{{$setting->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                    <a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a>
                    <a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a>
                    <a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</footer>
</main>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6129151ed6e7610a49b2564f/1fe47l05k';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
<!----java script----->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vue.js')}}"></script>
<script src="{{asset('assets/js/script-vue.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<!---- End java script----->

</body>
</html>
