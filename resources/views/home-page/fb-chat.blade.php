<link href="{{ asset('css/facebook-chat.css') }}" rel="stylesheet">
<div class="fb-livechat">
    <div class="ctrlq fb-overlay"></div>
    <div class="fb-widget">
        <div class="ctrlq fb-close"></div>
        <div class="fb-page" data-href="https://www.facebook.com/CodeGym-Restaurant-315924632430278"
             data-tabs="messages" data-width="360"
             data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"></div>
    </div>
    <a href="https://m.me/CodeGym" title="Gửi tin nhắn cho chúng tao qua Facebook" class="ctrlq fb-button">
        <div class="bubble">1</div>
        <div class="bubble-msg">Bạn cần hỗ trợ?</div>
    </a></div>
<script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>jQuery(document).ready(function ($) {
        function detectmob () {if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {return true} else {return false}}

        var t = { delay: 125, overlay: $('.fb-overlay'), widget: $('.fb-widget'), button: $('.fb-button') }
        setTimeout(function () {$('div.fb-livechat').fadeIn()}, 8 * t.delay)
        if (!detectmob()) {
            $('.ctrlq').on('click', function (e) {
                e.preventDefault(), t.overlay.is(':visible') ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({
                    bottom: 0,
                    opacity: 0
                }, 2 * t.delay, function () {$(this).hide('slow'), t.button.show()})) : t.button.fadeOut('medium', function () {
                    t.widget.stop().show().animate({
                        bottom: '30px',
                        opacity: 1
                    }, 2 * t.delay), t.overlay.fadeIn(t.delay)
                })
            })
        }
    })</script>
