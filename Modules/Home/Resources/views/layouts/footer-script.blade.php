<script src="/assets/js/assets/bootstrap.min.js"></script>
<script src="/assets/js/assets/owl.carousel.min.js"></script>
<script src="/assets/js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
<script src="/assets/js/assets/revolution/jquery.themepunch.tools.min.js"></script>
<script src="/assets/js/assets/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/assets/jquery.syotimer.min.js"></script>
<script src="/assets/js/assets/jquery.sticky.js"></script>
<script src="/assets/js/assets/slick.min.js"></script>
<script src="/assets/js/assets/jquery.meanmenu.min.js"></script>
<script src="/assets/js/assets/mail.js"></script>
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/custom.js"></script>
<script src="/assets/js/blockUI.js"></script>
<script src="/assets/plugins/toastr/toastr.min.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/596768d66edc1c10b0345d2b/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script type="text/javascript">
    window.doorbellOptions = {
        appKey: '7HI2Q8wACpctacCo6t6mVboOyTbQZe3EfFMLdegp8AjvmZ448DLTL0AUJ71FfI3x'
    };
    (function (w, d, t) {
        var hasLoaded = false;

        function l() {
            if (hasLoaded) {
                return;
            }
            hasLoaded = true;
            window.doorbellOptions.windowLoaded = true;
            var g = d.createElement(t);
            g.id = 'doorbellScript';
            g.type = 'text/javascript';
            g.async = true;
            g.src = 'https://embed.doorbell.io/button/7496?t=' + (new Date().getTime());
            (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(g);
        }

        if (w.attachEvent) {
            w.attachEvent('onload', l);
        } else if (w.addEventListener) {
            w.addEventListener('load', l, false);
        } else {
            l();
        }
        if (d.readyState == 'complete') {
            l();
        }
    }(window, document, 'script'));

    $(document).ready(function (e) {

        $.ajax({
            url: '/ajaxHandler',
            method: "POST",
            dataType: 'json',
            data: {method: 'getCartCount'},
            success: function (result) {
                if (result) {
                    $('#cart-count').text(result.data);
                }
            }
        });
    });
    $(document.body).on('click', '#get-cart-details', function (e) {
        $.ajax({
            url: '/ajaxHandler',
            method: "POST",
            dataType: 'json',
            data: {method: 'getCartDetails'},
            success: function (result) {
                if (result && result.data) {
                    console.log(result.data);
                    var toAppend = '';
                    $.each(result.data, function (i, v) {
                        toAppend += '<tr>';
                        toAppend += '<td>' + v['quantity'] + '</td>';
                        toAppend += '<td>' + v['name'] + '</td>';
                        toAppend += '<td>' + v['price'] + '</td>';
                        toAppend += '<td>' + v['subTotal'] + '</td>';
                        toAppend += '<td><button class="btn btn-xs btn-danger remove-from-cart" data-cid="' + i + '">X</button></td>';
                        toAppend += '</tr>';
                    });

                    $('#cart-tbody').empty().append(toAppend);
                    $('#cart-details-modal').modal('show');
                }
            }
        });
    });

    $(document.body).on('click', '.remove-from-cart', function (e) {
        var obj = $(this);
        var cid = obj.data('cid');
        $.ajax({
            url: '/ajaxHandler',
            method: "POST",
            dataType: 'json',
            data: {method: 'removeFromCart', cid: cid},
            success: function (result) {
                $('#cart-count').text(result.data);
                obj.parents('tr').remove();
            }
        });
    });

</script>
