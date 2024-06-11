<style>
    #whatsapp_chat_widget {
        display: block;
        width: 200px !important;
    }

    #wa-widget-send-button {
        margin: 0 0 10px 0 !important;
        padding: 10px;
        position: fixed !important;
        z-index: 16000160 !important;
        bottom: 0 !important;
        text-align: center !important;
        height: 50px;
        min-width: 50px;
        border-radius: 25px;
        visibility: visible;
        transition: none !important;
        background-color: #4dc247;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
        right: 60px;
        cursor: pointer;
        display: flex;
        vertical-align: center;
        justify-content: center;
        text-decoration: none;
    }
</style>

@php
    $message="Hello! I want to know more about ".url()->current();
    $phone=config('laravel-whatsapp-widget.phonenumber');
@endphp

<div id="whatsapp_chat_widget">
    <a id="wa-widget-send-button" href="https://web.whatsapp.com/send?phone={{ $phone }}&text={{ $message }}"
       target="_blank">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512"
             style="enable-background:new 0 0 512 512;" xml:space="preserve">
  <path style="fill:#EDEDED;" d="M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0
	S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z"/>
            <path style="fill:#55CD6C;" d="M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662
	c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234
	c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z"/>
            <path style="fill:#FEFEFE;" d="M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297
	c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048
	c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359
	c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248
	c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062
	l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945"/>
</svg>

        <div
            style="color: white; font-size: 14px; padding-left: 5px">{{ config('laravel-whatsapp-widget.button', "Whatsapp") }}</div>
    </a>
</div>