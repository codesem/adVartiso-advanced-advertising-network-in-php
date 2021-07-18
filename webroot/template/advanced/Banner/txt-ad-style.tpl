<style type="text/css">

 /* Import  Roboto font */
 @import url(https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap);
 
 /* CSS Used from: Embedded */
._19_ff9lYbpT9kOPGhy3mQS{
    height:13px;
    width:13px;
    background-size:13px 13px;
    background-repeat:no-repeat;
    background-image:url({$UPD}images/adchoice.svg);
    margin:1px 2px 1px 4px;
}
._3hK_KnZ5Ea1czHOAb0XjRp{
    cursor:pointer;
    position:absolute;
    right:0;
    bottom:0;
    border-radius:8px 0px 0px 0px;
    background-color:rgba(255,255,255,0.7);
    z-index:10;display:flex;
    flex-direction:row-reverse;
}
._3hK_KnZ5Ea1czHOAb0XjRp:hover ._1iU6QyDEUwEXo1W-5nEg60{
    display:block;
}
._1iU6QyDEUwEXo1W-5nEg60{
    margin-left:9px;
    font-size:11px;
    font-family:Roboto;
    font-weight:regular;
    line-height:14px;
    display:none;
}
.str-adunit{
    cursor:pointer;
    position:relative;
}
html *{
    -moz-box-sizing:inherit;
    box-sizing:inherit;
}
a,div,span{
    margin:0;
    padding:0;
    border:0;
    font-size:100%;
    font:inherit;
    vertical-align:baseline;
}:after,:before{
    box-sizing:border-box;
}
a{
    background:transparent;
    color:#0fadc4;
    text-decoration:none;
}
a:hover{
    color:#202429;
    text-decoration:none;
}
a:active,a:focus,a:hover{
    outline:0;
}
::-webkit-scrollbar{
    display:none!important;
}
{if detectDevice() == 'MOBILE'}
 /* small devices (phones) {do_size($size,'source','mb')}*/
     .str-adunit-img-top{
         box-sizing:border-box;
         font-family: sans-serif;
         font-size:17px;
         line-height:18px;
         color:black;
         background-color:white;
         margin:auto;
         overflow:hidden;
         border:1px solid #eee;
         text-align:center;
         {do_size($size,'source','mb')}
     }
     .str-adunit-img-top .thumbnail-wrapper{
         background-color:#eee;
         width:100%!important;
         height:auto!important;
     }
{elseif detectDevice() == 'PC'}
 /* Medium devices (desktops) */
     .str-adunit-img-top{
         box-sizing:border-box;
         font-family:sans-serif;
         font-size:17px;
         line-height:18px;
         color:black;
         background-color:white;
         margin:auto;
         overflow:hidden;
         border:1px solid #eee;
         text-align:center;
         {do_size($size,'source','pc')}
     }
     .str-adunit-img-top .thumbnail-wrapper{
         background-color:#eee;
         width:100%!important;
         height:auto!important;
     }
{/if}

.str-adunit-img-top .str-title,.str-adunit-img-top .str-description,.str-adunit-img-top {
    color:black!important;
}
.str-advertiser{
    font-weight:bold;
    color:green!important;
    margin:auto;
    padding:auto;
}
{if $size == '728x90'}

.str-adunit-img-top .str-title{
    padding:8px 8px 12px 8px;font-weight:bold;font-family: Roboto;
}
.str-adunit-img-top .str-description{
    padding:0 8px 16px 8px;font-size:13px;line-height:17px;font-family: Roboto;
}
.str-adunit-img-top .str-bottom{
    padding:0 8px 8px 8px;display:flex;justify-content:space-between;align-items:center;font-size:12px;line-height:13px;float:none;
}

{elseif $size == '300x250'}

.str-adunit-img-top .str-thumbnail{
    width:100%;height:auto;background-size:cover;background-position:50%;background-repeat:no-repeat;padding-bottom:56.25%;
}
.str-adunit-img-top .str-title{
    padding:8px 8px 12px 8px;font-weight:bold;text-align: center;margin-top: 20px;font-family: Roboto;
}
.str-adunit-img-top .str-description{
    padding:0 8px 16px 8px;font-size:13px;text-align: center;margin-top: 10px;font-family: Roboto;
}
.str-adunit-img-top .str-bottom{
    padding:0 8px 8px 8px;display:flex;justify-content:space-between;float:none;font-size: 17px;margin-top: 30px;margin-left: 56px;margin-right: 56px;;
}
{elseif $size == '468x60'}

.str-adunit-img-top .str-thumbnail{
    width:100%;height:auto;background-size:cover;background-position:50%;background-repeat:no-repeat;padding-bottom:56.25%;
}
.str-adunit-img-top .str-title{
    padding:8px 8px 8px 8px;font-weight:bold;font-family: Roboto;
}
.str-adunit-img-top .str-description{
    padding:0 8px 8px 8px;font-size:11px;line-height:17px;font-family: Roboto;
}
.str-adunit-img-top .str-bottom{
    display:none;
}
{elseif $size == '120x600'}

.str-adunit-img-top .str-thumbnail{
    width:100%;height:auto;background-size:cover;background-position:50%;background-repeat:no-repeat;padding-bottom:56.25%;
}
.str-adunit-img-top .str-title{
    padding:18px 8px 13px 8px;font-weight:bold;font-family: Roboto;
}
.str-adunit-img-top .str-description{
    padding:0 8px 25px 8px;font-size:11px;line-height:17px;font-family: Roboto;
}
.str-adunit-img-top .str-bottom{
    padding:0 8px 8px 8px;display:flex;align-items:center;font-size:10px;float:none;
}

{elseif $size == '200x200'}

.str-adunit-img-top .str-thumbnail{
    width:100%;height:auto;background-size:cover;background-position:50%;background-repeat:no-repeat;padding-bottom:56.25%;
}
.str-adunit-img-top .str-title{
    padding:20px 8px 15px 8px;text-align: center;font-weight:bold;font-family: Roboto;
}
.str-adunit-img-top .str-description{
    padding:0 8px 16px 8px;text-align: center;font-size:14px;line-height:17px;font-family: Roboto;
}
.str-adunit-img-top .str-bottom{
    padding:0 8px 8px 8px;text-align: center;font-size:13px;line-height:13px;
}

{elseif $size == '125x125'}

.str-adunit-img-top .str-thumbnail{
    width:100%;height:auto;background-size:cover;background-position:50%;background-repeat:no-repeat;padding-bottom:56.25%;
}
.str-adunit-img-top .str-title{
    padding:15px 8px 10px 8px;font-weight:bold;font-family: Roboto;
}
.str-adunit-img-top .str-description{
    padding:0 8px 16px 8px;font-size:11px;line-height:15px;font-family: Roboto;
}
.str-adunit-img-top .str-bottom{
    padding:0 8px 8px 8px;font-size:10px;line-height:13px;
}

{elseif $size == '690x500'}

.str-adunit-img-top .str-thumbnail{
    width:100%;height:auto;background-size:cover;background-position:50%;background-repeat:no-repeat;padding-bottom:56.25%;
}
.str-adunit-img-top .str-title{
    padding:20px 8px 10px 8px;text-align: center;font-weight:bold;font-family: Roboto;
}
.str-adunit-img-top .str-description{
    padding:0 8px 16px 8px;text-align: center;font-size:15px;line-height:15px;font-family: Roboto;
}
.str-adunit-img-top .str-bottom{
    padding:0 8px 8px 8px;text-align: center;font-size:13px;line-height:13px;
}

{else}

.str-adunit-img-top .str-thumbnail{
    width:100%;height:auto;background-size:cover;background-position:50%;background-repeat:no-repeat;padding-bottom:56.25%;
}
.str-adunit-img-top .str-title{
    padding:8px 8px 12px 8px;font-weight:bold;font-family: Roboto;
}
.str-adunit-img-top .str-description{
    padding:0 8px 16px 8px;font-size:13px;line-height:17px;font-family: Roboto;
}
.str-adunit-img-top .str-bottom{
    padding:0 8px 8px 8px;display:flex;justify-content:space-between;align-items:center;font-size:12px;line-height:13px;float:none;
}

{/if}

.str-adunit-img-top .str-brand-logo{
    display:inline-block;width:16px;height:16px;max-width:16px;max-height:16px;background-size:contain;background-position:50%;background-repeat:no-repeat;vertical-align:middle;border:none;background-color:inherit;margin-left:8px;float:none;
}
.str-adunit-img-top .str-cta{
    background-color:#596777;color:white;border-radius:5px;padding:3px 13px;line-height:20px;text-align:center;
}
.str-adunit-img-top:hover .str-cta{
    background-color:#4BD1A6;
}
.str-adunit-img-top .str-opt-out-container{
    bottom:unset!important;top:0!important;border-radius:0 0 0 8px!important;background-color:unset!important;
}
.str-adunit-img-top .str-opt-out-container:hover .str-opt-out-label{
    background-color:rgba(255, 255, 255, 0.7)!important;
}
</style>