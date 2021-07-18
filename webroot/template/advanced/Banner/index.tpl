<!DOCTYPE html>
<html>
    <head>
        <title>Zone - {do_config(0)}</title>
    </head>
    <body>
        {if $ad_type == 'img_banner'}
        {include file='../Banner/img-ad-style.tpl'}
        <div data-id="{$id}" data-str-visited-flag="true" data-str-rendered="1616004005649">
            <div class="str-adunit str-card-exp str-adunit-img-top str-clickout">
                <a href="{$url}" target="_blank">
                    <div class="thumbnail-wrapper">
                        <div class="str-thumbnail" style=""></div>
                    </div>
                </a>
                <a href="{$HOST}" target="_blank">
                    <div class="str-opt-out-container _3hK_KnZ5Ea1czHOAb0XjRp" style="right: 0px;">
                        <span class="str-opt-out-icon _19_ff9lYbpT9kOPGhy3mQS"></span>
                        <span class="str-opt-out-label _1iU6QyDEUwEXo1W-5nEg60">{do_config(0)}</span>
                    </div>
                </a>
            <div>
        </div>
        </div>
        </div>
        {else}
        {include file='../Banner/txt-ad-style.tpl'}
        <div data-id="{$id}" data-str-visited-flag="true" data-str-rendered="1616004005649">
            <div class="str-adunit str-card-exp str-adunit-img-top str-clickout">
                <div class="thumbnail-wrapper"><a href="{$url}" target="_blank"></a></div>
                <div class="str-title"><a href="{$url}" target="_blank">{$title}</a></div>
                <div class="str-description">{$description}</div>
                <div class="str-bottom">
                       <div class="str-advertiser">{$url_host}</div>
                </div>
                <a href="{$HOST}" target="_blank">
                    <div class="str-opt-out-container _3hK_KnZ5Ea1czHOAb0XjRp" style="right: 0px;">
                        <span class="str-opt-out-icon _19_ff9lYbpT9kOPGhy3mQS"></span>
                        <span class="str-opt-out-label _1iU6QyDEUwEXo1W-5nEg60">{do_config(0)}</span>
                    </div>
                </a>
            <div>
        </div>
        </div>
        </div>
        {/if}
    </body>
</html>