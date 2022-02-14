(function (window, document) {
    if (window.wcfbq) return;
    window.wcfbq = (function () {
        if (arguments.length > 0) {
            var pixelId, trackType, contentObj;

            if (typeof arguments[0] == 'string') pixelId = arguments[0];
            if (typeof arguments[1] == 'string') trackType = arguments[1];
            if (typeof arguments[2] == 'object') contentObj = arguments[2];

            var params = [];
            if (typeof pixelId === 'string' && pixelId.replace(/\s+/gi, '') != '' &&
                typeof trackType === 'string' && trackType.replace(/\s+/gi, '')) {
                params.push('id=' + encodeURIComponent(pixelId));
                switch (trackType) {
                    case 'PageView':
                    case 'ViewContent':
                    case 'Search':
                    case 'AddToCart':
                    case 'InitiateCheckout':
                    case 'AddPaymentInfo':
                    case 'Lead':
                    case 'CompleteRegistration':
                    case 'Purchase':
                    case 'AddToWishlist':
                        params.push('ev=' + encodeURIComponent(trackType));
                        break;
                    default:
                        return;
                }

                params.push('dl=' + encodeURIComponent(document.location.href));
                if (document.referrer) params.push('rl=' + encodeURIComponent(document.referrer));
                params.push('if=false');
                params.push('ts=' + new Date().getTime());

                if (typeof contentObj == 'object') {
                    for (var u in contentObj) {
                        if (typeof contentObj[u] == 'object' && contentObj[u] instanceof Array) {
                            if (contentObj[u].length > 0) {
                                for (var y = 0; y < contentObj[u].length; y++) { contentObj[u][y] = (contentObj[u][y] + '').replace(/^\s+|\s+$/gi, '').replace(/\s+/gi, ' ').replace(/,/gi, '§'); }
                                params.push('cd[' + u + ']=' + encodeURIComponent(contentObj[u].join(',').replace(/^/gi, '[\'').replace(/$/gi, '\']').replace(/,/gi, '\',\'').replace(/§/gi, '\,')));
                            }
                        }
                        else if (typeof contentObj[u] == 'string')
                            params.push('cd[' + u + ']=' + encodeURIComponent(contentObj[u]));
                    }
                }

                params.push('v=' + encodeURIComponent('2.7.19'));

                var imgId = new Date().getTime();
                var img = document.createElement('img');
                img.id = 'fb_' + imgId, img.src = 'https://www.facebook.com/tr/?' + params.join('&'), img.width = 1, img.height = 1, img.style = 'display:none;';
                document.body.appendChild(img);
                window.setTimeout(function () { var t = document.getElementById('fb_' + imgId); t.parentElement.removeChild(t); }, 1000);
            }
        }
    });
})(window, document);
jQuery(function($) {
    $(document).on('added_to_cart', function (event, fragments, dhash, button) {
        var currencySymbol = $($(button.get()[0]).closest('.product')
            .find('.woocommerce-Price-currencySymbol').get()[0]).text();

        var price = $(button.get()[0]).closest('.product').find('.amount').text();
        var originalPrice = price.split(currencySymbol).slice(-1).pop();

        wcfbq('419736048625251', 'AddToCart', {
            content_ids: [ $(button).data('product_id') ],
            content_type: 'product',
            value: originalPrice,
            currency: 'GBP'
        });
    });
});



function setREVStartSize(e){
    //window.requestAnimationFrame(function() {
    window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
    window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
    try {
        var pw = document.getElementById(e.c).parentNode.offsetWidth,
            newh;
        pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
        e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
        e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
        e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
        e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
        e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
        e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
        e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
        if(e.layout==="fullscreen" || e.l==="fullscreen")
            newh = Math.max(e.mh,window.RSIH);
        else{
            e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
            for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
            e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
            e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
            for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

            var nl = new Array(e.rl.length),
                ix = 0,
                sl;
            e.tabw = e.tabhide>=pw ? 0 : e.tabw;
            e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
            e.tabh = e.tabhide>=pw ? 0 : e.tabh;
            e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
            for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
            sl = nl[0];
            for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
            var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
            newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
        }
        if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
        document.getElementById(e.c).height = newh+"px";
        window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";
    } catch(e){
        console.log("Failure at Presize of Slider:" + e)
    }
    //});
};











setREVStartSize({c: 'woodmart-main-slider',rl:[1240,1024,778,480],el:[495,476,500,600],gw:[1240,1024,778,480],gh:[495,476,500,600],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
var	revapi1,
    tpj;
jQuery(function() {
    tpj = jQuery;
    revapi1 = tpj("#woodmart-main-slider")
    if(revapi1==undefined || revapi1.revolution == undefined){
        revslider_showDoubleJqueryError("woodmart-main-slider");
    }else{
        revapi1.revolution({
            sliderLayout:"fullwidth",
            visibilityLevels:"1240,1024,778,480",
            gridwidth:"1240,1024,778,480",
            gridheight:"495,476,500,600",
            lazyType:"all",
            spinner:"spinner0",
            perspective:600,
            perspectiveType:"local",
            editorheight:"495,476,500,600",
            responsiveLevels:"1240,1024,778,480",
            disableProgressBar:"on",
            navigation: {
                mouseScrollNavigation:false,
                touch: {
                    touchenabled:true,
                    touchOnDesktop:true,
                    swipe_min_touches:50
                },
                arrows: {
                    enable:true,
                    style:"metis",
                    hide_onmobile:true,
                    hide_under:778,
                    left: {

                    },
                    right: {

                    }
                },
                bullets: {
                    enable:true,
                    tmp:"",
                    style:"hermes"
                }
            },
            parallax: {
                levels:[1,2,3,4,5,6,7,8,45,46,47,48,49,50,51,55],
                type:"mouse",
                disable_onmobile:true
            },
            viewPort: {
                enable:true,
                visible_area:"20%",
                presize:true
            },
            fallbacks: {
                allowHTML5AutoPlayOnAndroid:true
            },
        });
    }

});
var htmlDivCss = unescape("%23woodmart-main-slider_wrapper%20%7B%0A%09height%3A%20495px%3B%0A%20%20%20%20background%3A%20rgb%28248%2C%20248%2C%20248%29%3B%0A%7D%0A%0A%40media%20%28max-width%3A%201024px%29%20%7B%0A%20%20%20%20%0A%23woodmart-main-slider_wrapper%20%7B%0A%20%20height%3A476px%3B%0A%7D%0A%7D%0A%20%20%20%20%20%20%0A%40media%20%28max-width%3A%20778px%29%20%7B%0A%20%20%20%20%0A%23woodmart-main-slider_wrapper%20%7B%0A%20%20height%3A500px%3B%0A%7D%0A%7D%0A%20%20%20%20%20%20%20%20%0A%40media%20%28max-width%3A%20480px%29%20%7B%0A%20%20%20%20%0A%23woodmart-main-slider_wrapper%20%7B%0A%20%20height%3A600px%3B%0A%7D%0A%7D");
var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
if(htmlDiv) {
    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
}else{
    var htmlDiv = document.createElement('div');
    htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
    document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
}








var htmlDivCss = unescape("%23woodmart-main-slider_wrapper%20.metis.tparrows%20%7B%0A%20%20background%3A%23ffffff%3B%0A%20%20padding%3A3px%3B%0A%20%20transition%3Aall%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20width%3A45px%3B%0A%20%20height%3A45px%3B%0A%20%20box-sizing%3Aborder-box%3B%0A%20%7D%0A%20%0A%20%23woodmart-main-slider_wrapper%20.metis.tparrows%3Ahover%20%7B%0A%20%20%20background%3Argba%28255%2C255%2C255%2C0.75%29%3B%0A%20%7D%0A%20%0A%20%23woodmart-main-slider_wrapper%20.metis.tparrows%3Abefore%20%7B%0A%20%20color%3A%23000000%3B%20%20%0A%20%20%20transition%3Aall%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%23woodmart-main-slider_wrapper%20.metis.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20transform%3Ascale%281.5%29%3B%0A%20%20%7D%0A%20%0A%23woodmart-main-slider_wrapper%20.hermes.tp-bullets%20%7B%0A%7D%0A%0A%23woodmart-main-slider_wrapper%20.hermes%20.tp-bullet%20%7B%0A%20%20%20%20overflow%3Ahidden%3B%0A%20%20%20%20border-radius%3A50%25%3B%0A%20%20%20%20width%3A16px%3B%0A%20%20%20%20height%3A16px%3B%0A%20%20%20%20background-color%3A%20rgba%280%2C%200%2C%200%2C%200%29%3B%0A%20%20%20%20box-shadow%3A%20inset%200%200%200%202px%20%23ffffff%3B%0A%20%20%20%20-webkit-transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20position%3Aabsolute%3B%0A%7D%0A%0A%23woodmart-main-slider_wrapper%20.hermes%20.tp-bullet%3Ahover%20%7B%0A%09%20%20background-color%3A%20rgba%280%2C0%2C0%2C0.21%29%3B%0A%7D%0A%23woodmart-main-slider_wrapper%20.hermes%20.tp-bullet%3Aafter%20%7B%0A%20%20content%3A%20%27%20%27%3B%0A%20%20position%3A%20absolute%3B%0A%20%20bottom%3A%200%3B%0A%20%20height%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20background-color%3A%20%23ffffff%3B%0A%20%20box-shadow%3A%200%200%201px%20%23ffffff%3B%0A%20%20-webkit-transition%3A%20height%200.3s%20ease%3B%0A%20%20transition%3A%20height%200.3s%20ease%3B%0A%7D%0A%23woodmart-main-slider_wrapper%20.hermes%20.tp-bullet.selected%3Aafter%20%7B%0A%20%20height%3A100%25%3B%0A%7D%0A%0A");
var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
if(htmlDiv) {
    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
}else{
    var htmlDiv = document.createElement('div');
    htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
    document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
}













var htmlDivCss = unescape("%0A%0A%0A%0A%0A%0A%0A%0A%0A%0A%0A%0A");
var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
if(htmlDiv) {
    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
}else{
    var htmlDiv = document.createElement('div');
    htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
    document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
}








(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/im4fmyjr';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()





if(typeof revslider_showDoubleJqueryError === "undefined") {
    function revslider_showDoubleJqueryError(sliderID) {
        var err = "<div class='rs_error_message_box'>";
        err += "<div class='rs_error_message_oops'>Oops...</div>";
        err += "<div class='rs_error_message_content'>";
        err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
        err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
        err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
        err += "</div>";
        err += "</div>";
        var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
    }
}






var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","downloadImage":"Download image"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.9.14","urls":{"assets":"https:\/\/www.mrstairs.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_lightbox_enable_counter":"yes","elementor_lightbox_enable_fullscreen":"yes","elementor_lightbox_enable_zoom":"yes","elementor_lightbox_enable_share":"yes","elementor_lightbox_title_src":"title","elementor_lightbox_description_src":"description"},"editorPreferences":[]},"post":{"id":8,"title":"MrStairs%20%C2%AE%20-%20UK%27s%20%231%20Staircase%20Manufacturer%20-%203D%20Online%20Stair%20Builder%20Tool","excerpt":"","featuredImage":false}};
