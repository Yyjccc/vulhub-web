function isMobile() {
    var userAgentInfo = navigator.userAgent;
    var mobileAgents = ["Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod"];
    var mobile_flag = false;
    for (var v = 0; v < mobileAgents.length; v++) {
        if (userAgentInfo.indexOf(mobileAgents[v]) > 0) {
            mobile_flag = true;
            break
        }
    }
    var screen_width = window.screen.width;
    var screen_height = window.screen.height;
    if (screen_width < 500 && screen_height < 800) {
        mobile_flag = true
    }
    return mobile_flag
}
var mobile_flag = isMobile();
var blogTitle = $("#blogTitle").html();
$("#blogTitle").html("<div class='vertical'>" + blogTitle + "</div>");
function light_white() {
    $("#reading").remove();
    $("#darkly").remove();
    $("#reading").remove();
    $("#darkly").remove();
    $("#fish_script").remove();
    $("#jsi-flying-fish-container").html("");
    if (mobile_flag) { } else {
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.id = "fish_type";
        script.src = "./js/fish.js";
        document.body.appendChild(script)
    }
}
function furvous() {
    $("#reading").remove();
    var link = document.createElement("link");
    link.rel = "stylesheet";
    link.id = "darkly";
    link.href = "https://blog-static.cnblogs.com/files/miluluyo/darkly.css";
    document.body.appendChild(link);
    $("#fish_script").remove();
    if (mobile_flag) { } else {
        $("#jsi-flying-fish-container").html("");
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.id = "fish_type";
        script.src = "./js/fish2.js";
        document.body.appendChild(script)
    }
}
function reading() {
    $("#darkly").remove();
    var link = document.createElement("link");
    link.rel = "stylesheet";
    link.id = "reading";
    link.href = "https://blog-static.cnblogs.com/files/miluluyo/reading.css";
    document.body.appendChild(link);
    $("#fish_script").remove();
    $("#jsi-flying-fish-container").html("");
    if (mobile_flag) { } else {
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.id = "fish_type";
        script.src = "https://blog-static.cnblogs.com/files/miluluyo/fish3.js";
        document.body.appendChild(script)
    }
}
var skins = localStorage.getItem("skin");
if (skins == null || skins == undefined) {
    light_white()
} else {
    if (skins == "light_white") {
        light_white()
    } else {
        if (skins == "furvous") {
            furvous()
        } else {
            if (skins == "reading") {
                reading()
            }
        }
    }
}
function miluframe(setting) {
    var c = {
        Youself: "https://www.cnblogs.com/miluluyo/",
        custom: [{
            name: "首页",
            link: "https://www.cnblogs.com/miluluyo/",
            istarget: false
        },
        {
            name: "联系",
            link: "https://msg.cnblogs.com/send/%E9%BA%8B%E9%B9%BF%E9%B2%81%E5%93%9F",
            istarget: true
        },
        {
            name: "技能树",
            link: "https://miluluyo.github.io/",
            istarget: true
        },
        {
            name: "留言板",
            link: "https://www.cnblogs.com/miluluyo/p/11578505.html",
            istarget: false
        },
        {
            name: "相册",
            link: "https://www.cnblogs.com/miluluyo/gallery.html",
            istarget: false
        },
        {
            name: "友链",
            link: "https://www.cnblogs.com/miluluyo/p/11633791.html",
            istarget: false
        },
        {
            name: "维护",
            link: "https://www.cnblogs.com/miluluyo/p/12092009.html",
            istarget: false
        },
        {
            name: "投喂",
            link: "https://www.cnblogs.com/miluluyo/p/gratuity.html",
            istarget: false
        },
        {
            name: "管理",
            link: "https://i.cnblogs.com/",
            istarget: true
        }],
        resume: {
            "name": "麋鹿鲁哟",
            "link": "https://www.cnblogs.com/miluluyo/",
            "headurl": "https://images.cnblogs.com/cnblogs_com/elkyo/1558759/o_o_my.jpg",
            "introduction": "大道至简，知易行难。"
        },
        unionbox: [{
            "name": "麋鹿鲁哟",
            "introduction": "生活是没有标准答案的。",
            "url": "https://www.cnblogs.com/miluluyo",
            "headurl": "https://images.cnblogs.com/cnblogs_com/elkyo/1558759/o_o_my.jpg"
        },
        {
            "name": "麋鹿鲁哟的技能树",
            "introduction": "大道至简，知易行难。",
            "url": "https://miluluyo.github.io/",
            "headurl": "https://images.cnblogs.com/cnblogs_com/elkyo/1558759/o_o_my.jpg"
        }],
        details: [{
            field: "name",
            literal: "昵称",
        },
        {
            field: "introduction",
            literal: "标语",
        },
        {
            field: "url",
            literal: "链接地址",
        },
        {
            field: "headurl",
            literal: "头像地址",
        }],
        logoimg: "https://images.cnblogs.com/cnblogs_com/miluluyo/1765646/o_200519070633f12.png",
        cuteicon: ["icon-caomei", "icon-boluo", "icon-huolongguo", "icon-chengzi", "icon-hamigua", "icon-lizhi", "icon-mangguo", "icon-liulian", "icon-lizi", "icon-lanmei", "icon-longyan", "icon-shanzhu", "icon-pingguo", "icon-mihoutao", "icon-niuyouguo", "icon-xigua", "icon-putao", "icon-xiangjiao", "icon-ningmeng", "icon-yingtao", "icon-taozi", "icon-shiliu", "icon-ximei", "icon-shizi"],
        gratuity: '<div class="popper_box"><p><b>要请我喝奶茶吗  (づ｡◕ᴗᴗ◕｡)づ</b> </p><div class="popper_box_con"><div class="popper_box_con_li"><img src="https://images.cnblogs.com/cnblogs_com/miluluyo/1765646/o_200521053817wx.png" alt="">微信扫码</div><div class="popper_box_con_li"><img src="https://images.cnblogs.com/cnblogs_com/miluluyo/1765646/o_200521053827zfb.png" >支付宝扫码</div></div><p><b>留下一句你觉得很励志与美的话给我吧~</b>&nbsp;&nbsp;<b><a href="https://www.cnblogs.com/miluluyo/p/12930946.html">GO</a></b></div>',
        isGratuity: true
    };
    $.extend(c, setting);
    allpage(c)
}
function allpage(c) {
    var custom = "";
    for (var i = 0; i < c.custom.length; i++) {
        if (c.custom[i].istarget == true) {
            custom = custom + '<li><a href="' + c.custom[i].link + '" target="_black">' + c.custom[i].name + "</a></li>"
        } else {
            custom = custom + '<li><a href="' + c.custom[i].link + '">' + c.custom[i].name + "</a></li>"
        }
    }
    $("#navList").html(custom);
    if (mobile_flag) { } else {
        $("#footer").before('<div id="jsi-flying-fish-container" class="container"></div>')
    }
    var le = $(".postTitle2").length;
    for (var i = 0; i < le; i++) {
        var num = Math.floor(Math.random() * c.cuteicon.length);
        $(".postTitle2").eq(i).before('<svg class="icon" aria-hidden="true"><use xlink:href="#' + c.cuteicon[num] + '"></use></svg>')
    }
    var skin = '<div class="select_skin"><ul><li class="light_white">浅白色系</li><li class="furvous">暗黑色系</li><li class="reading">阅读模式</li></ul></div>';
    tippy(".skin_btn", {
        content: skin,
        theme: "tomato",
        allowHTML: true,
        animation: "scale",
        duration: 500,
        arrow: true,
        hideOnClick: "false",
        interactive: true
    });
    var le = $("link").length;
    for (var i = 0; i < le; i++) {
        var rel = $("link").eq(i).attr("rel");
        if (rel == "shortcut icon") {
            $("link").eq(i).attr("href", c.logoimg)
        }
    }
    var details = [{
        field: "name",
        literal: "昵称",
    },
    {
        field: "introduction",
        literal: "标语",
    },
    {
        field: "url",
        literal: "链接地址",
    },
    {
        field: "headurl",
        literal: "头像地址",
    }];
    var newarray = shuffle(c.unionbox);
    var listfriends = "";
    for (var i = 0; i < newarray.length; i++) {
        listfriends = listfriends + '<div class="unionbox"><div class="info"><div class="headimg"><img src="' + newarray[i].headurl + '" alt=""></div><div class="content"><h3 class="title">' + newarray[i].name + '</h3><p class="desc">' + newarray[i].introduction + '</p><a class="btn" target="_black" href="' + newarray[i].url + '">直达</a></div></div></div>'
    }
    $(".unionbox-box").html(listfriends);
    var detailsfriends = "";
    for (var i = 0; i < details.length; i++) {
        detailsfriends = detailsfriends + "<tr><td>" + details[i].field + "</td><td>" + details[i].literal + "</td></tr>"
    }
    $(".friendstable").append(detailsfriends);
    if (c.isGratuity != false) {
        tippy(".gratuity", {
            content: c.gratuity,
            theme: "tomato",
            allowHTML: true,
            animation: "scale",
            duration: 500,
            arrow: true,
            hideOnClick: "false",
            interactive: true
        })
    } else {
        $(".gratuity").hide()
    }
}
function shuffle(unionbox) {
    var array = unionbox;
    var m = array.length,
        t, i;
    while (m) {
        i = Math.floor(Math.random() * m--);
        t = array[m];
        array[m] = array[i];
        array[i] = t
    }
    return array
}
var le = $(".feedbackItem").length;
for (var i = 0; i < le; i++) {
    var src = $(".feedbackItem").eq(i).find(".feedbackCon").find("span").text();
    $(".feedbackCon").eq(i).prepend('<img class="comment-avatar" src="' + $.trim(src) + '">')
}
$("#tbCommentBody").attr("placeholder", "请乖乖填写哦！ ...");
$("#tbCommentBody").after('<div class="OwO" onclick="load_face(this)"><div class="OwO-logo"><span>OωO<space><space>表情</span></div></div>');
var load_face = function (a) {
    var OwO_demo = new OwO({
        logo: "OωO表情",
        container: document.getElementsByClassName("OwO")[0],
        target: document.getElementById("tbCommentBody"),
        api: "https://miluluyo.github.io/OwO.json",
        position: "down",
        width: "70%",
        maxHeight: "250px"
    });
    a.classList.add("OwO-open");
    a.onclick = null
};
$("#commentbox_opt").nextAll().remove();
$("#btn_comment_submit").val("提交评论 (Ctrl + Enter)");
$(document).on("click", "#btn_edit_comment",
    function () {
        $(".OwO").show()
    });
$(document).on("click", "#btn_preview_comment",
    function () {
        $(".OwO").hide()
    });
$(window).resize(function () {
    var w = document.body.clientWidth;
    if (w > 1300) { } else {
        if (960 < w) {
            if ($("#mainContent").css("width") != "90%") {
                $("#mainContent").css("width", "90%")
            }
        } else {
            if (0 < w) {
                if ($("#mainContent").css("width") != "90%") {
                    $("#mainContent").css("width", "90%")
                }
            }
        }
    }
});
var oInfo = $(".blogTitle");
var json = $("#navigator").offset();
var oTop = json.top;
var sTop = 0;
var sTop2 = 0;
$(window).scroll(function () {
    sTop = $(this).scrollTop();
    oInfo.text(sTop + "-" + oTop);
    if (sTop >= oTop) {
        if (sTop2 <= sTop) {
            $("#navigator").css({
                "position": "static"
            });
            $("#blogTitle").css({
                "margin-bottom": "0"
            })
        } else {
            $("#navigator").css({
                "position": "fixed",
                "top": "0"
            });
            $("#blogTitle").css({
                "margin-bottom": '100px'
            })
        }
    } else {
        $("#navigator").css({
            "position": "static"
        });
        $("#blogTitle").css({
            "margin-bottom": "0"
        })
    }
    sTop2 = sTop;
    var scroHei = $(window).scrollTop();
    if (scroHei > 500) {
        $(".fly_top").css("display", "inline-block");
        $(".catalogueMain").attr("style", "position:fixed;top:10px;width:230px;height:calc(100% - 100px);overflow:auto");
        $("#sideBarMain").attr("style", "position:fixed;top:10px;width:230px;height:calc(100% - 100px);overflow:auto")
    } else {
        $(".fly_top").css("display", "none");
        $(".catalogueMain").attr("style", "");
        $("#sideBarMain").attr("style", "")
    }
});
$("#sideBar").before('<div id="catalogue" ><div class="catalogueMain"></div><div>');
$(".catalogue_btn").click(function () {
    var w = $(window).width();
    if ($("#catalogue").css("visibility") == "hidden") {
        $("#catalogue").css("display", "inline-block");
        $("#catalogue").attr("style", "visibility: visible; clip-path: circle(100% at 50% 50%); transition: all 0.3s ease-in-out 0s;");
        $("#sideBar").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;display:none");
        localStorage.setItem("catalog", "show");
        localStorage.setItem("catalogue", "none")
    } else {
        $("#catalogue").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;");
        localStorage.setItem("catalog", "none");
        setTimeout(function () {
            $("#catalogue").css("display", "none")
        },
            500)
    }
    if (w <= 1300) {
        $("#mainContent").css("width", "90%")
    } else {
        $("#mainContent").css("width", "calc(100% - 250px)");
        $("#sideBar").css("display", "none")
    }
    return false
});
function GenerateContentList() {
    var jquery_h1_list = $("#cnblogs_post_body h1");
    if (jquery_h1_list.length == 0) {
        $(".catalogueMain").prepend('<p style="font-size:18px;text-align: center;padding-bottom: 10px;"><b>阅读目录(Content)</b></p><p>此页目录为空</p>');
        return
    }
    if ($("#cnblogs_post_body").length == 0) {
        return
    }
    var content = '<a name="_labelTop"></a>';
    content += '<div id="navCategory">';
    content += '<p style="font-size:18px;text-align: center;padding-bottom: 10px;"><b>阅读目录(Content)</b></p>';
    content += '<ul class="first_class_ul">';
    for (var i = 0; i < jquery_h1_list.length; i++) {
        var go_to_top = '<div style="text-align: right" class="_labBox"><a name="_label' + i + '" id="_label' + i + '"></a></div>';
        $(jquery_h1_list[i]).before(go_to_top);
        var li_content = '<li><a href="#_label' + i + '" class="_label' + i + '">' + $(jquery_h1_list[i]).text() + "</a></li>";
        var nextH1Index = i + 1;
        if (nextH1Index == jquery_h1_list.length) {
            nextH1Index = 0
        }
        var jquery_h2_list = $(jquery_h1_list[i]).nextUntil(jquery_h1_list[nextH1Index], "h2");
        if (jquery_h2_list.length > 0) {
            li_content += '<ul class="second_class_ul">'
        }
        for (var j = 0; j < jquery_h2_list.length; j++) {
            var go_to_top2 = '<div style="text-align: right" class="_labBox"><a name="_lab2_' + i + "_" + j + '" id="_lab2_' + i + "_" + j + '"></a></div>';
            $(jquery_h2_list[j]).before(go_to_top2);
            li_content += '<li><a href="#_lab2_' + i + "_" + j + '" class="_lab2_' + i + "_" + j + '">' + $(jquery_h2_list[j]).text() + "</a></li>";
            var nextH2Index = j + 1;
            var next;
            if (nextH2Index == jquery_h2_list.length) {
                if (i + 1 == jquery_h1_list.length) {
                    next = jquery_h1_list[0]
                } else {
                    next = jquery_h1_list[i + 1]
                }
            } else {
                next = jquery_h2_list[nextH2Index]
            }
            var jquery_h3_list = $(jquery_h2_list[j]).nextUntil(next, "h3");
            if (jquery_h3_list.length > 0) {
                li_content += '<ul class="third_class_ul">'
            }
            for (var k = 0; k < jquery_h3_list.length; k++) {
                var go_to_third_Content = '<div style="text-align: right" class="_labBox"><a name="_label3_' + i + "_" + j + "_" + k + '"  id="_label3_' + i + "_" + j + "_" + k + '"></a></div>';
                $(jquery_h3_list[k]).before(go_to_third_Content);
                li_content += '<li><a href="#_label3_' + i + "_" + j + "_" + k + '" class="_label3_' + i + "_" + j + "_" + k + '">' + $(jquery_h3_list[k]).text() + "</a></li>"
            }
            if (jquery_h3_list.length > 0) {
                li_content += "</ul>"
            }
            li_content += "</li>"
        }
        if (jquery_h2_list.length > 0) {
            li_content += "</ul>"
        }
        li_content += "</li>";
        content += li_content
    }
    content += "</ul>";
    content += "</div>";
    $(".catalogueMain").prepend(content)
}
GenerateContentList();
$("#catalogue").css("display", "none");
$("#catalogue #navCategory ul li a").click(function () {
    var w = $(window).width();
    if (w < 767) {
        $("#catalogue").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;");
        setTimeout(function () {
            $("#catalogue").css("display", "none")
        },
            500)
    }
});
$(window).scroll(function () {
    var le = $("._labBox").length;
    var scrollTop = $(window).scrollTop() + 80;
    for (var i = 0; i < le; i++) {
        var oftop = $("._labBox").eq(i).offset().top;
        if ($(document).scrollTop() >= oftop) {
            var name = $("._labBox").eq(i).find("a").attr("name");
            $("#catalogue").find("li").attr("style", "");
            $("#catalogue").find("a").attr("style", "");
            $("." + name).parent().attr("style", "background:#2daebf;");
            $("." + name).parent().find("a").attr("style", "color:#fff")
        }
    }
});
var catalogue = localStorage.getItem("catalogue");
var catalog = localStorage.getItem("catalog");
var w = $(window).width();
if (catalogue == null) { } else {
    if (catalogue == "show") {
        if (w > 767) {
            $("#sideBar").css("display", "inline-block");
            $("#sideBar").attr("style", "visibility: visible; clip-path: circle(100% at 50% 50%); transition: all 0.3s ease-in-out 0s;display:inline-block");
            $("#catalogue").attr("style", "visibility: hidden; clip-path: circle(100% at 50% 50%); transition: all 0.3s ease-in-out 0s;display:none")
        }
    } else {
        if (catalogue == "none") {
            $("#sideBar").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;");
            setTimeout(function () {
                $("#sideBar").css("display", "none")
            },
                500)
        }
    }
}
if (catalog == null) { } else {
    if (catalog == "show") {
        if (w > 767) {
            $("#catalogue").css("display", "inline-block");
            $("#catalogue").attr("style", "visibility: visible; clip-path: circle(100% at 50% 50%); transition: all 0.3s ease-in-out 0s;");
            $("#sideBar").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;display:none")
        }
    } else {
        if (catalog == "none") {
            $("#catalogue").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;");
            setTimeout(function () {
                $("#catalogue").css("display", "none")
            },
                500)
        }
    }
}
$(document).on("click", ".light_white",
    function () {
        localStorage.setItem("skin", "light_white");
        light_white()
    });
$(document).on("click", ".furvous",
    function () {
        localStorage.setItem("skin", "furvous");
        furvous()
    });
$(document).on("click", ".reading",
    function () {
        localStorage.setItem("skin", "reading");
        reading()
    });
function showSide(cla) {
    if (cla == "sideBar") {
        var w = $(window).width();
        if ($("#sideBar").css("visibility") == "hidden") {
            $("#sideBar").css("display", "inline-block");
            $("#sideBar").attr("style", "visibility: visible; clip-path: circle(100% at 50% 50%); transition: all 0.3s ease-in-out 0s;")
        } else {
            $("#sideBar").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;");
            setTimeout(function () {
                $("#sideBar").css("display", "none")
            },
                500)
        }
        $("#catalogue").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;");
        setTimeout(function () {
            $("#catalogue").css("display", "none")
        },
            500)
    } else {
        if (cla == "catalogue") {
            if ($("#catalogue").css("visibility") == "hidden") {
                $("#catalogue").css("display", "inline-block");
                $("#catalogue").attr("style", "visibility: visible; clip-path: circle(100% at 50% 50%); transition: all 0.3s ease-in-out 0s;")
            } else {
                $("#catalogue").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;");
                setTimeout(function () {
                    $("#catalogue").css("display", "none")
                },
                    500)
            }
            $("#sideBar").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;");
            setTimeout(function () {
                $("#sideBar").css("display", "none")
            },
                500)
        }
    }
}
$(document).on("click", ".fly_top",
    function () {
        $("body,html").animate({
            scrollTop: 0
        },
            600)
    });
var whref = window.location.href;
if (whref.indexOf("/p/") != -1) {
    $(".article_icon_btn").show();
    $(".artice_recommend").attr("onclick", $(".diggit").attr("onclick"));
    $("#catalogue").css("display", "inline-block");
    $("#catalogue").attr("style", "visibility: visible; clip-path: circle(100% at 50% 50%); transition: all 0.3s ease-in-out 0s;");
    $("#sideBar").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;");
    setTimeout(function () {
        $("#sideBar").css("display", "none")
    },
        500)
} else {
    $("#catalogue").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;");
    $("#catalogue").css("display", "none")
}
$(".artice_recommend").click(function () {
    $(".artice_recommend").attr("onclick", "")
});
$(".catalogue").click(function () {
    var w = $(window).width();
    if ($("#sideBar").css("visibility") == "hidden") {
        $("#sideBar").css("display", "inline-block");
        if (w > 1300) {
            $("#sideBar").attr("style", "visibility: visible; clip-path: circle(100% at 50% 50%); transition: all 0.3s ease-in-out 0s;")
        } else {
            $("#sideBar").attr("style", "visibility: visible; clip-path: circle(100% at 50% 50%); transition: all 0.3s ease-in-out 0s;")
        }
        localStorage.setItem("catalogue", "show");
        localStorage.setItem("catalog", "none");
        $("#catalogue").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;display:none")
    } else {
        $("#sideBar").attr("style", "visibility: hidden; clip-path: circle(30px at calc(100%) 100%); transition: all 0.5s ease-in-out 0s;");
        setTimeout(function () {
            $("#sideBar").css("display", "none")
        },
            500);
        localStorage.setItem("catalogue", "none")
    }
    if (w <= 1300) {
        $("#mainContent").css("width", "90%")
    } else {
        $("#mainContent").css("width", "calc(100% - 250px)")
    }
    return false
});
console.log = function () { };
console.warn = function () { };
console.info("%c ", "background: url(https://images.cnblogs.com/cnblogs_com/miluluyo/1493340/o_a.gif) no-repeat center;padding-left:400px;padding-bottom: 160px;background-size:400px");
var h = "" + "               __                                ___.   .__                       \n" + "  ____  __ ___/  |_  ____             ____   ____\\_ |__ |  |   ____   ____  ______\n" + "_/ ___\\|  |  \\   __\\/ __ \\   ______ _/ ___\\ /    \\| __ \\|  |  /  _ \\ / ___\\/  ___/\n" + "\\  \\___|  |  /|  | \\  ___/  /_____/ \\  \\___|   |  \\ \\_\\ \\  |_(  <_> ) /_/  >___ \\ \n" + " \\___  >____/ |__|  \\___  >          \\___  >___|  /___  /____/\\____/\\___  /____  >\n" + "     \\/                 \\/               \\/     \\/    \\/           /_____/     \\/ \n\n" + "cute-cnblogs v2.0 github:https://github.com/miluluyo/cute-cnblogs (๑•̀ㅁ•́ฅ)";
console.info(h);