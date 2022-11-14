<link href="{{ asset(mix('whatsapp-widget.css', 'vendor/laravel-whatsapp-widget')) }}" rel="stylesheet">
<script src="{{asset(mix('whatsapp-widget.js', 'vendor/laravel-whatsapp-widget'))}}"></script>

<div id="lwhtasapp" class="lwhtasapp-free lwhtasapp-button lwhtasapp-bottom-right lwhtasapp-all lwhtasapp-rounded">
    <div class="lwhtasapp-container">
        <a class="lwhtasapp-toggle" data-action="open" data-phone="{{ config('laravel-whatsapp-widget.phonenumber') }}"
           data-message="Hello! I want to know more about {{ url()->current() }}" href="javascript:void(0);"
           target="_blank">
            <i class="lwhtasapp-icon lwhtasapp-whatsapp-icon"></i>
            <i class="lwhtasapp-close" data-action="close">&times;</i>
            <span class="lwhtasapp-text">{{ config('laravel-whatsapp-widget.text') }}</span>
        </a>
    </div>
</div>
