{{--<style>--}}
{{--    #whatsapp_chat_widget {--}}
{{--        display: block;--}}
{{--        width: 200px !important;--}}
{{--    }--}}

{{--    #wa-widget-send-button {--}}
{{--        margin: 0 0 10px 0 !important;--}}
{{--        padding: 10px;--}}
{{--        position: fixed !important;--}}
{{--        z-index: 16000160 !important;--}}
{{--        bottom: 0 !important;--}}
{{--        text-align: center !important;--}}
{{--        height: 50px;--}}
{{--        min-width: 50px;--}}
{{--        border-radius: 25px;--}}
{{--        visibility: visible;--}}
{{--        transition: none !important;--}}
{{--        background-color: #4dc247;--}}
{{--        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);--}}
{{--        right: 60px;--}}
{{--        cursor: pointer;--}}
{{--        display: flex;--}}
{{--        vertical-align: center;--}}
{{--        justify-content: center;--}}
{{--        text-decoration: none;--}}
{{--    }--}}
{{--</style>--}}

{{--@php--}}
{{--    $message="Hello! I want to know more about ".url()->current();--}}
{{--    $phone=config('laravel-whatsapp-widget.phonenumber');--}}
{{--@endphp--}}

{{--<div id="whatsapp_chat_widget">--}}
{{--    <a id="wa-widget-send-button" href="https://web.whatsapp.com/send?phone={{ $phone }}&text={{ $message }}"--}}
{{--       target="_blank">--}}
{{--        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512"--}}
{{--             style="enable-background:new 0 0 512 512;" xml:space="preserve">--}}
{{--  <path style="fill:#EDEDED;" d="M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0--}}
{{--	S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z"/>--}}
{{--            <path style="fill:#55CD6C;" d="M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662--}}
{{--	c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234--}}
{{--	c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z"/>--}}
{{--            <path style="fill:#FEFEFE;" d="M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297--}}
{{--	c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048--}}
{{--	c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359--}}
{{--	c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248--}}
{{--	c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062--}}
{{--	l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945"/>--}}
{{--</svg>--}}

{{--        <div--}}
{{--            style="color: white; font-size: 14px; padding-left: 5px">{{ config('laravel-whatsapp-widget.button', "Whatsapp") }}</div>--}}
{{--    </a>--}}
{{--</div>--}}

<style>
    .ht_ctc_chat_greetings_box :not(ul):not(ol) {
        padding: 0;
        margin: 0;
        box-sizing: border-box
    }

    .ht_ctc_chat_greetings_box ul, .ht_ctc_chat_greetings_box ol {
        margin-top: 0;
        margin-bottom: 0
    }

    .ctc_g_content, .ctc_g_sentbutton, .ctc_g_bottom {
        margin-top: -.9px !important
    }

    @media only screen and (max-width: 420px) {
        .ht_ctc_greetings.ctc_m_full_width {
            position: fixed !important;
            bottom: 0 !important;
            right: 0 !important
        }

        .ht_ctc_greetings.ctc_m_full_width .ht_ctc_chat_greetings_box {
            position: unset !important;
            margin: 7px !important;
            min-width: 80vw !important;
            width: calc(100vw - 14px) !important
        }

        .ctc_m_full_width .ctc_g_message_box_width {
            max-width: 85% !important
        }
    }
</style>

<div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-2 ht_ctc_animation no-animations" id="ht-ctc-chat"
     style="position: fixed; bottom: 15px; right: 18px; cursor: pointer; z-index: 99999999;">
    <div class="ht_ctc_style ht_ctc_chat_style">
        <div style="display: flex; justify-content: center; align-items: center;  " class="ctc-analytics">
            <p class="ctc-analytics ctc_cta ctc_cta_stick ht-ctc-cta  ht-ctc-cta-hover "
               style="padding: 0px 16px; line-height: 1.6; font-size: 15px; background-color: rgb(37, 211, 102); color: rgb(255, 255, 255); border-radius: 10px; margin: 0px 10px; order: 0; display: none;">
                WhatsApp us</p>
            <svg style="pointer-events:none; display:block; height:50px; width:50px;" width="50px" height="50px"
                 viewBox="0 0 1024 1024">
                <defs>
                    <path id="htwasqicona-chat"
                          d="M1023.941 765.153c0 5.606-.171 17.766-.508 27.159-.824 22.982-2.646 52.639-5.401 66.151-4.141 20.306-10.392 39.472-18.542 55.425-9.643 18.871-21.943 35.775-36.559 50.364-14.584 14.56-31.472 26.812-50.315 36.416-16.036 8.172-35.322 14.426-55.744 18.549-13.378 2.701-42.812 4.488-65.648 5.3-9.402.336-21.564.505-27.15.505l-504.226-.081c-5.607 0-17.765-.172-27.158-.509-22.983-.824-52.639-2.646-66.152-5.4-20.306-4.142-39.473-10.392-55.425-18.542-18.872-9.644-35.775-21.944-50.364-36.56-14.56-14.584-26.812-31.471-36.415-50.314-8.174-16.037-14.428-35.323-18.551-55.744-2.7-13.378-4.487-42.812-5.3-65.649-.334-9.401-.503-21.563-.503-27.148l.08-504.228c0-5.607.171-17.766.508-27.159.825-22.983 2.646-52.639 5.401-66.151 4.141-20.306 10.391-39.473 18.542-55.426C34.154 93.24 46.455 76.336 61.07 61.747c14.584-14.559 31.472-26.812 50.315-36.416 16.037-8.172 35.324-14.426 55.745-18.549 13.377-2.701 42.812-4.488 65.648-5.3 9.402-.335 21.565-.504 27.149-.504l504.227.081c5.608 0 17.766.171 27.159.508 22.983.825 52.638 2.646 66.152 5.401 20.305 4.141 39.472 10.391 55.425 18.542 18.871 9.643 35.774 21.944 50.363 36.559 14.559 14.584 26.812 31.471 36.415 50.315 8.174 16.037 14.428 35.323 18.551 55.744 2.7 13.378 4.486 42.812 5.3 65.649.335 9.402.504 21.564.504 27.15l-.082 504.226z"></path>
                </defs>
                <linearGradient id="htwasqiconb-chat" gradientUnits="userSpaceOnUse" x1="512.001" y1=".978" x2="512.001"
                                y2="1025.023">
                    <stop offset="0" stop-color="#61fd7d"></stop>
                    <stop offset="1" stop-color="#2bb826"></stop>
                </linearGradient>
                <use xlink:href="#htwasqicona-chat" overflow="visible" style="fill: url(#htwasqiconb-chat)"
                     fill="url(#htwasqiconb-chat)"></use>
                <g>
                    <path style="fill: #FFFFFF;" fill="#FFF"
                          d="M783.302 243.246c-69.329-69.387-161.529-107.619-259.763-107.658-202.402 0-367.133 164.668-367.214 367.072-.026 64.699 16.883 127.854 49.017 183.522l-52.096 190.229 194.665-51.047c53.636 29.244 114.022 44.656 175.482 44.682h.151c202.382 0 367.128-164.688 367.21-367.094.039-98.087-38.121-190.319-107.452-259.706zM523.544 808.047h-.125c-54.767-.021-108.483-14.729-155.344-42.529l-11.146-6.612-115.517 30.293 30.834-112.592-7.259-11.544c-30.552-48.579-46.688-104.729-46.664-162.379.066-168.229 136.985-305.096 305.339-305.096 81.521.031 158.154 31.811 215.779 89.482s89.342 134.332 89.312 215.859c-.066 168.243-136.984 305.118-305.209 305.118zm167.415-228.515c-9.177-4.591-54.286-26.782-62.697-29.843-8.41-3.062-14.526-4.592-20.645 4.592-6.115 9.182-23.699 29.843-29.053 35.964-5.352 6.122-10.704 6.888-19.879 2.296-9.176-4.591-38.74-14.277-73.786-45.526-27.275-24.319-45.691-54.359-51.043-63.543-5.352-9.183-.569-14.146 4.024-18.72 4.127-4.109 9.175-10.713 13.763-16.069 4.587-5.355 6.117-9.183 9.175-15.304 3.059-6.122 1.529-11.479-.765-16.07-2.293-4.591-20.644-49.739-28.29-68.104-7.447-17.886-15.013-15.466-20.645-15.747-5.346-.266-11.469-.322-17.585-.322s-16.057 2.295-24.467 11.478-32.113 31.374-32.113 76.521c0 45.147 32.877 88.764 37.465 94.885 4.588 6.122 64.699 98.771 156.741 138.502 21.892 9.45 38.982 15.094 52.308 19.322 21.98 6.979 41.982 5.995 57.793 3.634 17.628-2.633 54.284-22.189 61.932-43.615 7.646-21.427 7.646-39.791 5.352-43.617-2.294-3.826-8.41-6.122-17.585-10.714z"></path>
                </g>
            </svg>
        </div>
    </div>
</div>
<span class="ht_ctc_chat_data"
      data-no_number=""
      data-settings="{&quot;number&quot;:&quot;254703024001&quot;,&quot;pre_filled&quot;:&quot;Hello Stima Sacco.\r\nI would like to know...&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 15px; right: 18px;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 15px; right: 18px;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:150,&quot;ani&quot;:&quot;no-animations&quot;,&quot;url_structure_d&quot;:&quot;web&quot;,&quot;url_target_d&quot;:&quot;_blank&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;}"
></span>
></span>
