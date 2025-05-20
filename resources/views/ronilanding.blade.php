<html dir="ltr" lang="en" class="theme light EHoceA">

<head>
    <base href="/">
    <meta charset="utf-8">
    <title>Roni Landing Page</title>
    <meta name="app-name" content="export_website">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="_assets/a0684b0780c739e9.vendor.ltr.css" rel="stylesheet" integrity="sha512-JwMCpiHdk95MoUTatfaZJwstzeDnWfvWMJiwnSxZfPmgeCe4yvQDQ+ONMQjIy/Ht72r0TmlE+gvZnYRnpdLdVg==" crossorigin="anonymous">
    <link href="_assets/8833e140ed16a88c.ltr.css" rel="stylesheet" integrity="sha512-6OR0OyKm4IpR6unI3/v9QaiRoJQMGxc8D3GnJ09x9yoG8n5MY8+bea0RqLgKdmafpVMp/Q2BihdfLAjyU4ZDVw==" crossorigin="anonymous">
    <link href="_assets/static_font_4.ltr.css" rel="stylesheet">
    <link href="_assets/9a01a4b7c011073e.runtime.js" rel="preload" as="script" crossorigin="anonymous" integrity="sha512-NZ6NvFA7hj+LhgfOKHL3TGwsRVyGplHM7HudKOBRNQSfoKAuOSH6oTw/Ati6TVEkJJRgAGwWGRh+REYa+Ef/hg==" nonce="">
    <link href="_assets/aaa08f5161a956c7.i3d79q.vendor.js" rel="preload" as="script" crossorigin="anonymous" integrity="sha512-2uvObKRh56EnLmVUHGrNNaY2BdIjjB82PSV90VwXpnQ/nvwps09y+cIqwGPg7SfSfO8Q3kbd2HAuIPJCvfjlxw==" nonce="">
    <link href="_assets/ebccce581bffd176.vendor.js" rel="preload" as="script" crossorigin="anonymous" integrity="sha512-eyEUEEnYEs/0KRKpSAq9YDrODPIRPbf7i7IYOr0wkqTmUjGnK0i1mgFdFo0j8xC6aSIlFxPmwltwg5uymzP5Cw==" nonce="">
    <link href="_assets/e5cf5a6afa63924b.strings.js" rel="preload" as="script" crossorigin="anonymous" integrity="sha512-PTdazzEpebJQeKNq5df1ZRxqqE+w++Lkefrvz4Y9Q3m5gnTbYOyIXMTmpDpS9+1v7UdR4ds4eKfnLQQGuAMrkw==" nonce="">
    <link href="_assets/cf274150b001acf0.en.js" rel="preload" as="script" crossorigin="anonymous" integrity="sha512-BQycU6ojOYNjFgM0UfNI+gIeLGPWUNaa/bNpuqCdJ/9dav5a6qdUkdjEjFRfyX2r+QNWQ4pZTWw2185DFOTdBg==" nonce="">
    <link href="_assets/112f9543ad7f609d.js" rel="preload" as="script" crossorigin="anonymous" integrity="sha512-Z/MfEsRwxiTmoxCDN8T/1WL82hMO14MMVN1pYKhSfGzqgjy4gReWTYldBv1sk44VkwDRaE+MxRb4nUydMZDPkg==" nonce="">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <meta property="og:title" content="Roni Landing Page">
    <meta property="og:type" content="website">
    <link rel="shortcut icon" href="_assets/images/2d0b56e7e51cf11036ad8734bdb67e2d.png">
    <link rel="icon" href="_assets/images/e53c4bd8da5e491d9ab09e7cf0daf874.png" sizes="192x192">
    <link rel="apple-touch-icon" href="_assets/images/725b756a69a7d4c235070e51acd85560.png" sizes="180x180">
    <script nonce="">
        document.addEventListener('contextmenu', (e) => {
            const isMedia = ['img', 'image', 'video', 'svg', 'picture'].some(
                tagName => tagName.localeCompare(e.target.tagName, undefined, {
                    sensitivity: 'base'
                }) === 0,
            );
            isMedia && e.preventDefault();
        });
    </script>
    <script nonce="">
        const lang = navigator.language ? navigator.language : 'en';
        window.canva_installFooter = (container) => {
            if (!(container instanceof HTMLDivElement)) {
                return;
            }
            fetch('_footer?lang=' + encodeURIComponent(lang)).then(response => {
                if (response.status !== 200) {
                    return;
                }
                response.text().then(footerStr => {
                    const div = document.createElement('div');
                    div.innerHTML = footerStr;
                    for (const child of [...div.children]) {
                        if (child.tagName.toLowerCase() !== 'script') {
                            container.append(child);
                        }
                    }

                    (() => {
                        ! function(e) {
                            "use strict";
                            const t = document.getElementById("modal_backdrop"),
                                n = document.getElementById("modal"),
                                o = document.getElementById("captcha-form"),
                                c = document.getElementById("report_button"),
                                d = document.getElementById("form_report"),
                                s = document.getElementById("form_cancel"),
                                l = document.getElementById("form_submit_reason"),
                                a = document.getElementById("form_go_back"),
                                r = document.getElementById("form_submit_captcha"),
                                m = document.getElementById("form_close"),
                                i = document.getElementById("form_close_initial"),
                                u = document.getElementById("report_reason_0"),
                                p = document.getElementById("error_message"),
                                _ = document.getElementById("error_message_captcha"),
                                y = new Map;
                            y.set(0, document.getElementById("form_step_terms")), y.set(1, document.getElementById("form_step_report_reason")), y.set(4, document.getElementById("form_step_report_other"));
                            const E = document.getElementById("form_step_report_ip");
                            E && y.set(5, E), y.set(2, document.getElementById("form_step_captcha")), y.set(3, document.getElementById("form_step_success"));
                            const f = document.getElementById("report_reason_4"),
                                g = document.getElementById("form_close_ip"),
                                h = document.getElementById("form_go_back_ip"),
                                I = document.getElementById("report_reason_other"),
                                k = document.getElementById("form_close_other"),
                                w = document.getElementById("form_go_back_other");

                            function v() {
                                t.classList.remove("active"), n.classList.remove("active"), c.classList.remove("active"), c.focus()
                            }

                            function B(e) {
                                y.forEach(((t, n) => {
                                    n === e ? (t.style.display = "block", L(t)) : t.style.display = "none"
                                }))
                            }
                            let b, C = !1;
                            const T = "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ? () => b : () => {
                                const e = o.elements.namedItem("g-recaptcha-response");
                                return null == e ? void 0 : e.value
                            };
                            t.onclick = v, s.onclick = v, m.onclick = v, i.onclick = v, g && (g.onclick = v), k.onclick = v, c.onclick = function() {
                                y.forEach(((e, t) => {
                                    e.style.display = 0 === t ? "block" : "none"
                                })), t.classList.add("active"), n.classList.add("active"), c.classList.add("active"), u.checked = !0, setTimeout((() => {
                                    L(y.get(0))
                                }), 350)
                            }, d.onclick = d.dataset.reportUrl ? function() {
                                const {
                                    origin: e,
                                    pathname: t
                                } = window.location, n = e + t, o = d.dataset.reportUrl + encodeURIComponent(n);
                                window.open(o)
                            } : () => B(1), l.onclick = () => {
                                null != E && f.checked ? B(5) : I.checked ? B(4) : (B(2), function() {
                                    if (C) return;
                                    const e = document.createElement("script");
                                    e.src = "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ? "https://cstaticdun.126.net/load.min.js" : "https://www.google.com/recaptcha/api.js", e.async = !0, e.defer = !0, document.head.appendChild(e), C = !0, e.onload = "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ? () => {
                                        var e;
                                        null === (e = window.initNECaptcha) || void 0 === e || e.call(window, {
                                            captchaId: window.C_CAPTCHA_KEY,
                                            element: "#netease-captcha",
                                            protocol: "https",
                                            width: "auto",
                                            onVerify: (e, t) => {
                                                b = t.validate
                                            }
                                        })
                                    } : () => {}
                                }())
                            }, a.onclick = () => B(1), h && (h.onclick = () => B(1)), w.onclick = () => B(1), o.addEventListener("submit", (function(e) {
                                e.preventDefault(), p.style.display = "none", _.style.display = "none";
                                const t = function() {
                                        let e = "";
                                        const t = document.getElementsByName("report_reason");
                                        for (let n = 0; n < t.length; n++) {
                                            const o = t[n];
                                            o.checked && (e = o.value)
                                        }
                                        return e
                                    }(),
                                    n = T();
                                if (!n) return void(_.style.display = "block");
                                const o = {
                                        reason: t,
                                        challenge: n
                                    },
                                    c = window.location.origin + window.location.pathname + "/_api/report";
                                r.classList.add("loading"), fetch(c, {
                                    method: "POST",
                                    body: JSON.stringify(o),
                                    headers: {
                                        "Content-Type": "application/json; charset=utf-8"
                                    }
                                }).then((e => {
                                    r.classList.remove("loading"), e.ok ? B(3) : p.style.display = "block"
                                }))
                            }));
                            const A = new Map,
                                L = e => {
                                    const t = A.get(e);
                                    null != t && document.removeEventListener("keydown", t);
                                    const n = e.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'),
                                        o = e,
                                        c = n[n.length - 1],
                                        d = function(e) {
                                            ("Tab" === e.key || 9 === e.keyCode) && (e.shiftKey ? document.activeElement === o && (c.focus(), e.preventDefault()) : document.activeElement === c && (o.focus(), e.preventDefault()))
                                        };
                                    A.set(e, d), document.addEventListener("keydown", d), o.focus()
                                };
                            e.keepFocus = L, Object.defineProperty(e, "__esModule", {
                                value: !0
                            })
                        }({});
                    })();
                });
            });
        }
    </script>
    <script nonce="">
        window.C_CAPTCHA_IMPLEMENTATION = 'RECAPTCHA';
    </script>
    <script nonce="">
        window.C_CAPTCHA_KEY = '6Ldk59waAAAAAMPqkICbJjfMivZLCGtTpa6Wn6zO';
    </script>
    <style type="text/css"></style>
    <link rel="stylesheet" type="text/css" href="_assets/784ade8bd24ba7d6.ltr.css">
    <style type="text/css"></style>
    <link rel="stylesheet" type="text/css" href="_assets/6cd95ec3bdfd8887.ltr.css">
    <link rel="stylesheet" type="text/css" href="_assets/18e6498382718900.ltr.css">
    <link rel="stylesheet" type="text/css" href="_assets/106ff6d2a1d1c94c.ltr.css">
</head>

<body>
    <script nonce="">
        document.documentElement.classList.replace('adaptive', window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    </script>
    <div id="root">
        <div class="yIDCqA">
            <main class="_8OlyIw">
                <div class="_4KoDHA">
                    <div class="ZRRuDw">
                        <div style="height: 100%; width: 100%;">
                            <div class="KYQZFA">
                                <section id="PBKdqrJC7YPSwJG6" class="rGeu6w" data-scroll-ready="true" style="background-color: rgb(10, 26, 68);">
                                    <div>
                                        <div class="_8jGYJw" style="width: 1513px; height: 768px;">
                                            <div class="fMSICA h517IA" aria-hidden="false">
                                                <div class="_5yhCRQ">
                                                    <div class="onhyOQ" style="width: 1513px; height: 768px; align-items: center;">
                                                        <div class="twbtjQ">
                                                            <div class="GDnEHQ" style="width: 1513px; height: 768px; background-color: rgb(255, 255, 255);">
                                                                <div class="o2Yl2g">
                                                                    <div class="_mXnjA" lang="en" style="width: 1513px; height: 768px;">
                                                                        <div class="_6t4CHA">
                                                                            <div class="a26Xuw">
                                                                                <div class="fbzKiw" style="background: rgb(10, 26, 68);"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="position: absolute; top: 76.8px; left: 76.8px; width: 1359.4px; height: 614.4px;"></div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 1544.08px; height: 867.49px; transform: translate(-15.5382px, -49.7451px);">
                                                                            <div class="Zp7NQw">
                                                                                <div class="a26Xuw">
                                                                                    <div class="PcHy7w">
                                                                                        <div class="uk_25A Ty61NA">
                                                                                            <div class="Izwocg" style="width: 1544.08px; height: 867.49px; transform: translate(0px, 0px) rotate(0deg);"><img class="dMHlHA" crossorigin="anonymous" src="blob:https://roniapp.my.canva.site/1c615ee4-46fa-4390-b948-ee058250473a" draggable="false"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 867.49px; width: 1544.08px; pointer-events: none; transform: scale(1);"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 537.6px; height: 537.6px; transform: translate(867.473px, 107.795px);">
                                                                            <div class="Zp7NQw">
                                                                                <div class="a26Xuw">
                                                                                    <div class="PcHy7w">
                                                                                        <div class="uk_25A Ty61NA">
                                                                                            <div class="Izwocg" style="width: 537.6px; height: 537.6px; transform: translate(0px, 0px) rotate(0deg);"><img class="dMHlHA" crossorigin="anonymous" src="blob:https://roniapp.my.canva.site/c9ef5cb2-8a32-4857-a98e-83c70d40203c" draggable="false"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 537.6px; width: 537.6px; pointer-events: none; transform: scale(1);"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 310.511px; height: 614.4px; transform: translate(981.017px, 76.8px);">
                                                                            <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 614.4px; width: 310.511px; transform: scale(1);">
                                                                                <div class="hWv4NA" style="width: 310.511px; height: 614.4px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                        <defs>
                                                                                            <clipPath id="__id6">
                                                                                                <path d="M216.16674745516235,2.4818225884634026L39.833252544837606,2.4818225884634026C20.723218613669406,2.4818225884634026 5.211827435773141,17.99321376635967 5.211827435773141,37.10324769752787L5.211827435773141,469.3126514784294C5.211827435773141,488.4226854095976 20.723218613669406,503.93407658749385 39.833252544837606,503.93407658749385L216.16674745516235,503.93407658749385C235.27678138633055,503.93407658749385 250.78817256422684,488.4226854095976 250.78817256422684,469.3126514784294L250.78817256422684,37.10324769752784C250.78817256422684,17.99321376635964 235.27678138633055,2.481822588463376 216.16674745516235,2.481822588463376ZM157.47164323800288,18.36548715462918C159.20891904992726,18.36548715462918 160.57392147358212,19.73048957828405 160.57392147358212,21.467765390208434C160.57392147358212,23.20504120213282 159.20891904992726,24.570043625787687 157.47164323800288,24.570043625787687C155.73436742607848,24.570043625787687 154.36936500242362,23.205041202132815 154.36936500242362,21.467765390208434C154.36936500242362,19.730489578284054 155.85845855550167,18.36548715462918 157.47164323800288,18.36548715462918ZM111.68201648085312,19.35821619001454L141.46388754241394,19.35821619001454C142.5807077072225,19.35821619001454 143.57343674260784,20.226854095976734 143.57343674260784,21.467765390208434C143.57343674260784,22.708676684440135 142.5807077072225,23.577314590402324 141.46388754241394,23.577314590402324L111.68201648085312,23.577314590402324C110.56519631604458,23.577314590402324 109.57246728065923,22.708676684440135 109.57246728065923,21.467765390208434C109.57246728065923,20.226854095976734 110.56519631604458,19.35821619001454 111.68201648085312,19.35821619001454ZM238.1308773630635,471.29810954920015C238.1308773630635,482.59040232670867 228.9481337857489,491.77314590402324 217.65584100824043,491.77314590402324L38.592341250605905,491.77314590402324C27.30004847309742,491.77314590402324 18.117304895782834,482.59040232670867 18.117304895782834,471.29810954920015L18.117304895782834,35.73824527387301C18.117304895782834,24.44595249636453 27.30004847309742,15.26320891904994 38.592341250605905,15.26320891904994L65.27193407658748,15.26320891904994L65.27193407658748,20.847309743092595C65.27193407658748,27.175957343674273 70.48376151236063,32.38778477944742 76.8124091129423,32.38778477944742L179.435773145904,32.38778477944742C185.76442074648568,32.38778477944742 190.97624818225884,27.175957343674273 190.97624818225884,20.847309743092595L190.97624818225884,15.26320891904994L217.53174987881727,15.26320891904994C228.82404265632573,15.26320891904994 238.00678623364033,24.44595249636453 238.00678623364033,35.73824527387301L238.00678623364033,471.29810954920015Z"></path>
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id6&quot;); background: rgb(20, 33, 64); width: 256px; height: 506.54px; transform: scale(1.21293, 1.21293); transform-origin: 0px 0px;"></div><svg class="_7KaXww">
                                                                                        <defs>
                                                                                            <clipPath id="__id7">
                                                                                                <path d="M217.53174987881727,15.263208919049926L190.97624818225884,15.263208919049926L190.97624818225884,20.847309743092584C190.97624818225884,27.175957343674256 185.7644207464857,32.38778477944741 179.435773145904,32.38778477944741L76.93650024236548,32.38778477944741C70.60785264178381,32.38778477944741 65.39602520601066,27.175957343674263 65.39602520601066,20.847309743092584L65.39602520601066,15.263208919049926L38.59234125060591,15.263208919049926C27.30004847309743,15.263208919049926 18.11730489578284,24.44595249636452 18.11730489578284,35.738245273873L18.11730489578284,471.29810954920015C18.11730489578284,482.59040232670867 27.30004847309743,491.77314590402324 38.59234125060591,491.77314590402324L217.5317498788172,491.77314590402324C228.8240426563257,491.77314590402324 238.0067862336403,482.59040232670867 238.0067862336403,471.29810954920015L238.0067862336403,35.73824527387301C238.13087736306346,24.44595249636453 228.94813378574887,15.26320891904994 217.5317498788172,15.26320891904994Z"></path>
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id7&quot;); transform: scale(1.21293, 1.21293); transform-origin: 0px 0px; width: 256px; height: 506.54px;">
                                                                                        <div class="_4c2rDg GxUsfw" style="transform-origin: 128.063px 253.518px;">
                                                                                            <div class="qhHTGg" style="width: 224.754px; height: 499.453px; transform: translate(15.6857px, 15.2632px) translate(112.377px, 249.727px) rotate(0deg) translate(-112.377px, -249.727px); transform-origin: 0px 0px;"><img class="_7_i_XA" crossorigin="anonymous" src="https://roniapp.my.canva.site/_assets/media/970b98700f8aad05063514e0ef87efdf.jpg" draggable="false"></div>
                                                                                        </div>
                                                                                    </div><svg class="_7KaXww">
                                                                                        <defs>
                                                                                            <clipPath id="__id8">
                                                                                                <path d="M141.46388754241394,19.35821619001454L111.68201648085312,19.35821619001454C110.56519631604458,19.35821619001454 109.57246728065923,20.226854095976734 109.57246728065923,21.467765390208434C109.57246728065923,22.708676684440135 110.56519631604458,23.577314590402324 111.68201648085312,23.577314590402324L141.46388754241394,23.577314590402324C142.5807077072225,23.577314590402324 143.57343674260784,22.708676684440135 143.57343674260784,21.467765390208434C143.57343674260784,20.226854095976734 142.5807077072225,19.35821619001454 141.46388754241394,19.35821619001454Z"></path>
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id8&quot;); background: rgb(75, 75, 75); width: 256px; height: 506.54px; transform: scale(1.21293, 1.21293); transform-origin: 0px 0px;"></div><svg class="_7KaXww">
                                                                                        <defs>
                                                                                            <clipPath id="__id9">
                                                                                                <path d="M157.4716432380029,18.36548715462918C155.75830227876048,18.36548715462918 154.36936500242365,19.754424430966033 154.36936500242365,21.467765390208434C154.36936500242365,23.18110634945084 155.75830227876048,24.570043625787687 157.4716432380029,24.570043625787687C159.18498419724529,24.570043625787687 160.57392147358215,23.18110634945084 160.57392147358215,21.467765390208434C160.57392147358215,19.754424430966033 159.18498419724529,18.36548715462918 157.4716432380029,18.36548715462918Z"></path>
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id9&quot;); background: rgb(75, 75, 75); width: 256px; height: 506.54px; transform: scale(1.21293, 1.21293); transform-origin: 0px 0px;"></div><svg class="_7KaXww">
                                                                                        <defs>
                                                                                            <clipPath id="__id10">
                                                                                                <path d="M0,69.61512360639844L0,85.1265147842947C0,86.61560833737275 1.2409112942317013,87.85651963160446 2.730004847309743,87.85651963160446L2.730004847309743,67.00920988851188C1.2409112942317015,67.00920988851188 0,68.1260300533204 0,69.61512360639844Z"></path>
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id10&quot;); background: rgb(216, 230, 237); width: 256px; height: 506.54px; transform: scale(1.21293, 1.21293); transform-origin: 0px 0px;"></div><svg class="_7KaXww">
                                                                                        <defs>
                                                                                            <clipPath id="__id11">
                                                                                                <path d="M0,105.9738245273873L0,138.23751817741154C0,139.72661173048957 1.2409112942317013,140.9675230247213 2.730004847309743,140.9675230247213L2.730004847309743,103.36791080950073C1.2409112942317015,103.36791080950073 0,104.48473097430927 0,105.9738245273873Z"></path>
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id11&quot;); background: rgb(216, 230, 237); width: 256px; height: 506.54px; transform: scale(1.21293, 1.21293); transform-origin: 0px 0px;"></div><svg class="_7KaXww">
                                                                                        <defs>
                                                                                            <clipPath id="__id12">
                                                                                                <path d="M0,151.88754241396026L0,184.15123606398447C0,185.64032961706252 1.2409112942317013,186.8812409112942 2.730004847309743,186.8812409112942L2.730004847309743,149.1575375666505C1.2409112942317015,149.1575375666505 0,150.39844886088218 0,151.88754241396023Z"></path>
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id12&quot;); background: rgb(216, 230, 237); width: 256px; height: 506.54px; transform: scale(1.21293, 1.21293); transform-origin: 0px 0px;"></div><svg class="_7KaXww">
                                                                                        <defs>
                                                                                            <clipPath id="__id13">
                                                                                                <path d="M253.26999515269023,115.77702375181774L253.26999515269023,176.2094037809016C254.75908870576825,176.2094037809016 256,174.96849248666987 256,173.47939893359185L256,118.5070285991275C256,117.01793504604944 254.75908870576825,115.77702375181775 253.26999515269023,115.77702375181775Z"></path>
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id13&quot;); background: rgb(216, 230, 237); width: 256px; height: 506.54px; transform: scale(1.21293, 1.21293); transform-origin: 0px 0px;"></div><svg class="_7KaXww">
                                                                                        <defs>
                                                                                            <clipPath id="__id14">
                                                                                                <path d="M253.26999515269023,115.77702375181774L253.26999515269023,37.10324769752787C253.26999515269023,34.49733397964129 253.0218128938439,32.01551139117789 252.52544837615122,29.65777993213766C252.2772661173049,28.41686863790596 252.02908385845853,27.30004847309743 251.65681047018904,26.05913717886573C251.16044595249636,24.32186136694135 250.41589917595735,22.584585555016965 249.67135239941834,20.97140087251575C249.17498788172563,19.854580707707218 248.55453223460978,18.86185167232186 247.93407658749393,17.8691226369365C247.3136209403781,16.876393601551136 246.69316529326224,15.883664566165775 245.94861851672323,14.890935530780414C244.8317983519147,13.401841977702373 243.71497818710614,12.160930683470669 242.47406689287445,10.7959282598158C241.60542898691227,9.927290353853609 240.73679108095007,9.18274357731459 239.86815317498787,8.438196800775568C233.41541444498304,3.102278235579252 225.22539990305378,0 216.29083858458554,0L39.83325254483764,0C30.898691226369394,0 22.584585555016993,3.2263693650024226 16.255937954435314,8.438196800775568C15.387300048473126,9.182743577314588 14.518662142510934,10.05138148327678 13.650024236548743,10.7959282598158C12.409112942317043,12.036839554047502 11.16820164808534,13.401841977702373 10.17547261269998,14.890935530780416C9.430925836160961,15.883664566165777 8.810470189045109,16.876393601551136 8.190014541929258,17.8691226369365C7.569558894813408,18.861851672321862 6.949103247697558,19.978671837130392 6.452738730004877,20.97140087251575C5.584100824042686,22.70867668444013 4.9636451769268355,24.321861366941345 4.343189529810984,26.05913717886573C3.9709161415414744,27.30004847309743 3.7227338826951337,28.41686863790596 3.4745516238487935,29.65777993213766C2.978187106156113,32.01551139117789 2.730004847309772,34.62142510906447 2.730004847309772,37.10324769752787L2.730004847309772,469.3126514784294C2.730004847309772,489.7876878332525 19.35821619001457,506.4158991759573 39.83325254483764,506.4158991759573L216.16674745516238,506.4158991759573C236.64178380998547,506.4158991759573 253.26999515269026,489.7876878332525 253.26999515269026,469.3126514784294L253.26999515269026,115.77702375181775ZM250.78817256422684,115.77702375181774L250.78817256422684,469.43674260785264C250.78817256422684,488.5467765390208 235.27678138633055,504.05816771691707 216.16674745516235,504.05816771691707L39.833252544837606,504.05816771691707C20.723218613669406,504.05816771691707 5.211827435773141,488.5467765390208 5.211827435773141,469.43674260785264L5.211827435773141,37.22733882695104C5.211827435773141,17.99321376635967 20.723218613669406,2.4818225884634026 39.833252544837606,2.4818225884634026L216.16674745516235,2.4818225884634026C235.27678138633055,2.4818225884634026 250.78817256422684,17.99321376635967 250.78817256422684,37.10324769752787L250.78817256422684,115.77702375181774Z"></path>
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id14&quot;); background: rgb(7, 19, 50); width: 256px; height: 506.54px; transform: scale(1.21293, 1.21293); transform-origin: 0px 0px;"></div>
                                                                                </div>
                                                                                <div class="Pr6LEA"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 230.464px; height: 74.2206px; transform: translate(879.985px, 552.728px);">
                                                                            <div style="width: 230.464px; height: 74.2206px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 230.464px; height: 74.2206px; transform: translate(0px, 7.10543e-15px);">
                                                                                    <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 74.2206px; width: 230.464px; transform: scale(1);">
                                                                                        <div class="hWv4NA" style="width: 230.464px; height: 74.2206px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                                <defs>
                                                                                                    <clipPath id="__id15">
                                                                                                        <path d="M746.6643819569292,256L48.24615384615386,256C21.66153846153847,256 0,234.3384615384616 0,207.7538461538462L0,48.24615384615386C0,21.66153846153847 21.66153846153847,0 48.24615384615386,0L746.6643819569292,0C773.2489973415447,0 794.9105358030831,21.66153846153847 794.9105358030831,48.24615384615386L794.9105358030831,207.7538461538462C794.9105358030831,234.3384615384616 773.2489973415447,256 746.6643819569292,256Z"></path>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                            <div class="bFnJ2A" style="clip-path: url(&quot;#__id15&quot;); background: rgb(255, 87, 87); width: 794.911px; height: 256px; transform: scale(0.289924, 0.289924); transform-origin: 0px 0px;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 140.204px; height: 45.3177px; transform: translate(69.4609px, 14.4514px);">
                                                                                    <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 122.927px; height: 39.7333px; transform: scale(1.14055, 1.14055); transform-origin: 0px 0px;">
                                                                                        <div lang="en" class="AdBbhQ hGbcYA _7rUwsA" style="transform: translate(0px, 0.86667px);">
                                                                                            <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAEnXHTFXhg 0&quot;, auto; --cAuMqQ: 17.3334px; color: rgb(255, 255, 255); line-height: 19px; letter-spacing: -0.02em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 400; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">Get it on</span></p>
                                                                                            <p class="cgHgbA nxe3IQ Xp24Nw" style="font-family: &quot;YAEnXHTFXhg 0&quot;, auto; --cAuMqQ: 17.3334px; color: rgb(255, 255, 255); line-height: 19px; letter-spacing: -0.02em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 700; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">Google Play</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 340.505px; height: 65.678px; transform: translate(150.3px, 519.889px);">
                                                                            <div style="width: 340.505px; height: 65.678px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 340.505px; height: 65.678px; transform: translate(0px, 4.26326e-14px);">
                                                                                    <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 65.678px; width: 340.505px; transform: scale(1);">
                                                                                        <div class="hWv4NA" style="width: 340.505px; height: 65.678px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                                <defs>
                                                                                                    <clipPath id="__id16">
                                                                                                        <path d="M128.00000000200748,0L1199.2206595034506,0C1269.9131075263124,0 1327.2206595054581,57.30755197914552 1327.2206595054581,128.00000000200748C1327.2206595054581,198.69244802486946 1269.9131075263124,256.00000000401496 1199.2206595034506,256.00000000401496L128.00000000200748,256.00000000401496C57.30755197914552,256.00000000401496 0,198.69244802486946 0,128.00000000200748C0,57.30755197914552 57.30755197914552,0 128.00000000200748,0Z"></path>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                            <div class="bFnJ2A" style="clip-path: url(&quot;#__id16&quot;); background: rgb(0, 196, 204); width: 1327.22px; height: 256px; transform: scale(0.256555, 0.256555); transform-origin: 0px 0px;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 332.505px; height: 29.6px; transform: translate(4px, 18.039px);">
                                                                                    <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 332.505px; height: 29.6px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                        <div lang="en" class="AdBbhQ hGbcYA rLWGlw _7rUwsA" style="transform: translate(0px, 2.39538px);">
                                                                                            <p class="cgHgbA pYZEjA Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 23.9538px; color: rgb(0, 0, 0); line-height: 23px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><a href="https://roniapp.my.canva.site" target="_blank" draggable="false" rel="noopener nofollow" class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(0, 0, 0); font-kerning: none; text-decoration: underline;">Download the App</a></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 230.464px; height: 74.2206px; transform: translate(879.985px, 452.159px);">
                                                                            <div style="width: 230.464px; height: 74.2206px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 230.464px; height: 74.2206px; transform: translate(-4.26326e-14px, 2.84217e-14px);">
                                                                                    <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 74.2206px; width: 230.464px; transform: scale(1);">
                                                                                        <div class="hWv4NA" style="width: 230.464px; height: 74.2206px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                                <defs>
                                                                                                    <clipPath id="__id17">
                                                                                                        <path d="M746.6643819569292,256L48.24615384615386,256C21.66153846153847,256 0,234.3384615384616 0,207.7538461538462L0,48.24615384615386C0,21.66153846153847 21.66153846153847,0 48.24615384615386,0L746.6643819569292,0C773.2489973415447,0 794.9105358030831,21.66153846153847 794.9105358030831,48.24615384615386L794.9105358030831,207.7538461538462C794.9105358030831,234.3384615384616 773.2489973415447,256 746.6643819569292,256Z"></path>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                            <div class="bFnJ2A" style="clip-path: url(&quot;#__id17&quot;); background: rgb(255, 87, 87); width: 794.911px; height: 256px; transform: scale(0.289924, 0.289924); transform-origin: 0px 0px;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 140.204px; height: 45.3177px; transform: translate(69.4609px, 14.4514px);">
                                                                                    <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 122.927px; height: 39.7333px; transform: scale(1.14055, 1.14055); transform-origin: 0px 0px;">
                                                                                        <div lang="en" class="AdBbhQ hGbcYA _7rUwsA" style="transform: translate(0px, 0.86667px);">
                                                                                            <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAEnXHTFXhg 0&quot;, auto; --cAuMqQ: 17.3334px; color: rgb(255, 255, 255); line-height: 19px; letter-spacing: -0.02em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 400; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">Get it on the</span></p>
                                                                                            <p class="cgHgbA nxe3IQ Xp24Nw" style="font-family: &quot;YAEnXHTFXhg 0&quot;, auto; --cAuMqQ: 17.3334px; color: rgb(255, 255, 255); line-height: 19px; letter-spacing: -0.02em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 700; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">App Store</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 39.0095px; height: 44.5823px; transform: translate(14.8732px, 14.4514px);">
                                                                                    <div class="Zp7NQw">
                                                                                        <div class="a26Xuw">
                                                                                            <div class="PcHy7w">
                                                                                                <div class="uk_25A Ty61NA">
                                                                                                    <div class="Izwocg" style="width: 39.0095px; height: 44.5823px; transform: translate(0px, 0px) rotate(0deg);"><img class="dMHlHA" crossorigin="anonymous" src="blob:https://roniapp.my.canva.site/eee2f896-3d6a-497c-9cd0-6a51a0838d7a" draggable="false"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 44.5823px; width: 39.0095px; pointer-events: none; transform: scale(1);"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 109.307px; height: 109.307px; transform: translate(150.3px, 126.357px);">
                                                                            <div class="Zp7NQw">
                                                                                <div class="a26Xuw">
                                                                                    <div class="PcHy7w">
                                                                                        <div class="uk_25A Ty61NA">
                                                                                            <div class="Izwocg" style="width: 109.307px; height: 109.307px; transform: translate(-7.10543e-15px, -7.10543e-15px) rotate(0deg);"><img class="_7_i_XA" crossorigin="anonymous" src="https://roniapp.my.canva.site/_assets/media/c785dbcb8e8ac520c81d424d356cb8e6.png" draggable="false"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 109.307px; width: 109.307px; pointer-events: none; transform: scale(1);"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 40.2469px; height: 37.2451px; transform: translate(895.777px, 569.331px);">
                                                                            <div class="Zp7NQw" style="clip-path: path(&quot;M 0 10 L 0 27.2451 C 0 32.768 4.47715 37.2451 10 37.2451 L 30.2469 37.2451 C 35.7697 37.2451 40.2469 32.768 40.2469 27.2451 L 40.2469 10 C 40.2469 4.47715 35.7697 0 30.2469 0 L 10 0 C 4.47715 0 0 4.47715 0 10 Z&quot;);">
                                                                                <div class="a26Xuw">
                                                                                    <div class="PcHy7w">
                                                                                        <div class="uk_25A Ty61NA">
                                                                                            <div class="Izwocg" style="width: 41.1161px; height: 38.0496px; transform: translate(-0.637908px, -0.532361px) rotate(-0.6deg);"><img class="_7_i_XA" crossorigin="anonymous" src="https://roniapp.my.canva.site/_assets/media/37e05c2e9ded8dde46677eef1d9d6ab0.jpg" draggable="false"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 37.2451px; width: 40.2469px; pointer-events: none; transform: scale(1);">
                                                                                    <div class="TRWryw" style="clip-path: path(&quot;M 0 10 L 0 27.2451 C 0 32.768 4.47715 37.2451 10 37.2451 L 30.2469 37.2451 C 35.7697 37.2451 40.2469 32.768 40.2469 27.2451 L 40.2469 10 C 40.2469 7.34784 39.1933 4.8043 37.3179 2.92893 C 35.4426 1.05357 32.899 0 30.2469 0 L 10 0 C 4.47715 0 0 4.47715 0 10 Z&quot;);"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 687.512px; height: 148.494px; transform: translate(150.3px, 303.665px);">
                                                                            <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 687.512px; height: 148.494px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div lang="en" class="AdBbhQ hGbcYA rLWGlw _7rUwsA" style="transform: translate(0px, 3.98053px);">
                                                                                    <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 79.6107px; color: rgb(255, 255, 255); line-height: 87px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 700; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">RONI App</span></p>
                                                                                    <p class="cgHgbA nxe3IQ Xp24Nw" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 50.2781px; color: rgb(255, 255, 255); line-height: 55px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">Konkordansi Obat Interaktif.</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 85.7875px; height: 15.6666px; transform: translate(879.985px, 629.728px);">
                                                                            <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 85.7875px; height: 15.6667px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div class="nmQ_KA">
                                                                                    <div class="gY5IIA" style="filter: drop-shadow(rgba(0, 133, 210, 0.95) 0px 0px 0.220419px) drop-shadow(rgba(11, 137, 210, 0.75) 0px 0px 1.1021px) drop-shadow(rgba(11, 137, 210, 0.44) 0px 0px 3.30629px); --uyVUlA: rgb(108,191,240);">
                                                                                        <div lang="en" class="AdBbhQ hGbcYA rLWGlw _7rUwsA" style="transform: translate(0px, -0.666675px);">
                                                                                            <p class="cgHgbA pYZEjA Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 13.3335px; color: rgb(14, 135, 205); line-height: 17px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 700; font-style: normal; color: rgb(14, 135, 205); font-kerning: normal; text-decoration: none;">coming soon</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 85.7875px; height: 15.6666px; transform: translate(879.985px, 527.721px);">
                                                                            <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 85.7875px; height: 15.6667px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div class="nmQ_KA">
                                                                                    <div class="gY5IIA" style="filter: drop-shadow(rgba(0, 133, 210, 0.95) 0px 0px 0.220419px) drop-shadow(rgba(11, 137, 210, 0.75) 0px 0px 1.1021px) drop-shadow(rgba(11, 137, 210, 0.44) 0px 0px 3.30629px); --uyVUlA: rgb(108,191,240);">
                                                                                        <div lang="en" class="AdBbhQ hGbcYA rLWGlw _7rUwsA" style="transform: translate(0px, -0.666675px);">
                                                                                            <p class="cgHgbA pYZEjA Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 13.3335px; color: rgb(14, 135, 205); line-height: 17px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 700; font-style: normal; color: rgb(14, 135, 205); font-kerning: normal; text-decoration: none;">coming soon</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="QhExXw pKfnlA" style="width: 1513px; height: 768px; margin: 0px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section id="PBDXFbCtzJjZt2G3" class="rGeu6w" data-scroll-ready="true" style="background-color: rgb(250, 250, 250);">
                                    <div>
                                        <div class="_8jGYJw" style="width: 1513px; height: 895px;">
                                            <div class="fMSICA h517IA" aria-hidden="false">
                                                <div class="_5yhCRQ">
                                                    <div class="onhyOQ" style="width: 1513px; height: 895px; align-items: center;">
                                                        <div class="twbtjQ">
                                                            <div class="GDnEHQ" style="width: 1513px; height: 895px; background-color: rgb(255, 255, 255);">
                                                                <div class="o2Yl2g">
                                                                    <div class="_mXnjA" lang="en" style="width: 1513px; height: 895px;">
                                                                        <div class="_6t4CHA">
                                                                            <div class="a26Xuw">
                                                                                <div class="fbzKiw" style="background: rgb(250, 250, 250);"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="position: absolute; top: 89.5px; left: 89.5px; width: 1334px; height: 716px;"></div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 1074.25px; height: 170.72px; transform: translate(150.3px, 137.78px);">
                                                                            <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 1074.25px; height: 170.72px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div lang="en" class="AdBbhQ hGbcYA rLWGlw _7rUwsA" style="transform: translate(0px, 3.36px);">
                                                                                    <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 74.6667px; color: rgb(10, 26, 68); line-height: 82px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 700; font-style: normal; color: rgb(10, 26, 68); font-kerning: none; text-decoration: none;">RONI App</span></p>
                                                                                    <p class="cgHgbA nxe3IQ Xp24Nw" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 74.6667px; color: rgb(10, 26, 68); line-height: 82px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(10, 26, 68); font-kerning: none; text-decoration: none;">(Konkordansi Obat Interaktif)</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 455.333px; height: 437.826px; transform: translate(73.5px, 465.174px);">
                                                                            <div style="width: 455.333px; height: 437.826px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div style="clip-path: polygon(0px -5.68434e-14px, 455.333px -5.68434e-14px, 455.333px 429.826px, 0px 429.826px);">
                                                                                    <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 455.333px; height: 437.826px; transform: translate(2.84217e-14px, 0px);">
                                                                                        <div class="DF_utQ" style="width: 455.333px; height: 437.826px;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 437.826px; width: 455.333px; transform: scale(1);">
                                                                                                <div class="hWv4NA" style="width: 455.333px; height: 437.826px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                                        <defs>
                                                                                                            <clipPath id="__id27">
                                                                                                                <path d="M0,0L266.2368317329853,0L266.2368317329853,256L0,256Z"></path>
                                                                                                            </clipPath>
                                                                                                        </defs>
                                                                                                    </svg>
                                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id27&quot;); background: rgb(10, 26, 68); width: 266.237px; height: 256px; transform: scale(1.71026, 1.71026); transform-origin: 0px 0px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 323.183px; height: 213.867px; transform: translate(66.0753px, 147.159px);">
                                                                                    <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 323.183px; height: 213.867px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                        <div lang="en" class="AdBbhQ hGbcYA rLWGlw _7rUwsA" style="transform: translate(0px, -1.06666px);">
                                                                                            <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3332px; color: rgb(255, 255, 255); line-height: 27px; letter-spacing: -0.02em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">Aplikasi RONI merupakan inovasi</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">digital yang dirancang untuk</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">mengedukasi pasien tuberkulosis</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">(TB) dalam menjalani pengobatan</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">secara konsisten dan tepat.</span><span class="OYPEnA L7Ipcg" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;"> </span></p>
                                                                                            <div class="cgHgbA nxe3IQ Xp24Nw" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3332px; color: rgb(255, 255, 255); line-height: 27px; letter-spacing: -0.02em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><br></div>
                                                                                            <div class="cgHgbA nxe3IQ Xp24Nw" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3332px; color: rgb(255, 255, 255); line-height: 27px; letter-spacing: -0.02em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><br></div>
                                                                                            <div class="cgHgbA nxe3IQ Xp24Nw" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3332px; color: rgb(255, 255, 255); line-height: 27px; letter-spacing: -0.02em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><br></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 59.213px; height: 59.213px; transform: translate(66.0753px, 46.198px);">
                                                                                    <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 59.213px; width: 59.213px; transform: scale(1);">
                                                                                        <div class="hWv4NA" style="width: 59.213px; height: 59.213px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                                <defs>
                                                                                                    <clipPath id="__id28">
                                                                                                        <path d="M128,0C57.30755202165845,0 0,57.30755202165844 0,128C0,198.69244797834153 57.307552021658424,256 128,256C198.69244797834153,256 256,198.6924479783416 256,128C256,57.30755202165848 198.6924479783416,0 128,0Z"></path>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                            <div class="bFnJ2A" style="clip-path: url(&quot;#__id28&quot;); background: rgb(0, 196, 204); width: 256px; height: 256px; transform: scale(0.231301, 0.231301); transform-origin: 0px 0px;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 23.6172px; height: 24.8667px; transform: translate(83.8732px, 63.3712px);">
                                                                                    <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 23.6172px; height: 24.8667px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                        <div lang="en" class="AdBbhQ hGbcYA rLWGlw _7rUwsA" style="transform: translate(0px, -1.06666px);">
                                                                                            <p class="cgHgbA pYZEjA Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3333px; color: rgb(10, 26, 68); line-height: 27px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 500; font-style: normal; color: rgb(10, 26, 68); font-kerning: none; text-decoration: none;">01</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 455.333px; height: 437.826px; transform: translate(528.833px, 465.174px);">
                                                                            <div style="width: 455.333px; height: 437.826px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div style="clip-path: polygon(0px 2.84217e-14px, 455.333px 2.84217e-14px, 455.333px 429.826px, 0px 429.826px);">
                                                                                    <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 455.333px; height: 437.826px; transform: translate(2.84217e-14px, -8.52651e-14px);">
                                                                                        <div class="DF_utQ" style="width: 455.333px; height: 437.826px;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 437.826px; width: 455.333px; transform: scale(1);">
                                                                                                <div class="hWv4NA" style="width: 455.333px; height: 437.826px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                                        <defs>
                                                                                                            <clipPath id="__id29">
                                                                                                                <path d="M0,0L266.2368317329855,0L266.2368317329855,256L0,256Z"></path>
                                                                                                            </clipPath>
                                                                                                        </defs>
                                                                                                    </svg>
                                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id29&quot;); background: rgb(7, 19, 50); width: 266.237px; height: 256px; transform: scale(1.71026, 1.71026); transform-origin: 0px 0px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 315.762px; height: 213.867px; transform: translate(69.7858px, 147.159px);">
                                                                                    <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 315.762px; height: 213.867px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                        <div lang="en" class="AdBbhQ hGbcYA rLWGlw _7rUwsA" style="transform: translate(0px, -1.06666px);">
                                                                                            <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3332px; color: rgb(87, 228, 255); line-height: 27px; letter-spacing: -0.02em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(87, 228, 255); font-kerning: none; text-decoration: none;">Sebagai tenaga medis yang aktif</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(87, 228, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(87, 228, 255); font-kerning: none; text-decoration: none;">dalam edukasi pasien, dr. Roni</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(87, 228, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(87, 228, 255); font-kerning: none; text-decoration: none;">menyadari pentingnya</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(87, 228, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(87, 228, 255); font-kerning: none; text-decoration: none;">pemahaman pasien terhadap</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(87, 228, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(87, 228, 255); font-kerning: none; text-decoration: none;">terapi jangka panjang seperti</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(87, 228, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(87, 228, 255); font-kerning: none; text-decoration: none;">pengobatan TB.</span></p>
                                                                                            <div class="cgHgbA nxe3IQ Xp24Nw" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3332px; color: rgb(87, 228, 255); line-height: 27px; letter-spacing: -0.02em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><br></div>
                                                                                            <div class="cgHgbA nxe3IQ Xp24Nw" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3332px; color: rgb(87, 228, 255); line-height: 27px; letter-spacing: -0.02em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><br></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 59.213px; height: 59.213px; transform: translate(69.7858px, 46.198px);">
                                                                                    <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 59.213px; width: 59.213px; transform: scale(1);">
                                                                                        <div class="hWv4NA" style="width: 59.213px; height: 59.213px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                                <defs>
                                                                                                    <clipPath id="__id30">
                                                                                                        <path d="M128,0C57.30755202165845,0 0,57.30755202165844 0,128C0,198.69244797834153 57.307552021658424,256 128,256C198.69244797834153,256 256,198.6924479783416 256,128C256,57.30755202165848 198.6924479783416,0 128,0Z"></path>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                            <div class="bFnJ2A" style="clip-path: url(&quot;#__id30&quot;); background: rgb(0, 196, 204); width: 256px; height: 256px; transform: scale(0.231301, 0.231301); transform-origin: 0px 0px;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 33.5477px; height: 24.8667px; transform: translate(82.6185px, 63.3712px);">
                                                                                    <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 33.5477px; height: 24.8667px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                        <div lang="en" class="AdBbhQ hGbcYA _7rUwsA" style="transform: translate(0px, -1.06666px);">
                                                                                            <p class="cgHgbA pYZEjA Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3333px; color: rgb(10, 26, 68); line-height: 27px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 500; font-style: normal; color: rgb(10, 26, 68); font-kerning: none; text-decoration: none;">02</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 455.333px; height: 437.826px; transform: translate(984.167px, 465.174px);">
                                                                            <div style="width: 455.333px; height: 437.826px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div style="clip-path: polygon(1.13687e-13px 0px, 455.333px 0px, 455.333px 429.826px, 1.13687e-13px 429.826px);">
                                                                                    <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 455.333px; height: 437.826px; transform: translate(2.84217e-14px, 5.68434e-14px);">
                                                                                        <div class="DF_utQ" style="width: 455.333px; height: 437.826px;">
                                                                                            <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 437.826px; width: 455.333px; transform: scale(1);">
                                                                                                <div class="hWv4NA" style="width: 455.333px; height: 437.826px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                                        <defs>
                                                                                                            <clipPath id="__id31">
                                                                                                                <path d="M0,0L266.2368317329855,0L266.2368317329855,256L0,256Z"></path>
                                                                                                            </clipPath>
                                                                                                        </defs>
                                                                                                    </svg>
                                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id31&quot;); background: rgb(10, 26, 68); width: 266.237px; height: 256px; transform: scale(1.71026, 1.71026); transform-origin: 0px 0px;"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 304.63px; height: 213.867px; transform: translate(75.3517px, 147.159px);">
                                                                                    <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 304.63px; height: 213.867px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                        <div lang="en" class="AdBbhQ hGbcYA rLWGlw _7rUwsA" style="transform: translate(0px, -1.06666px);">
                                                                                            <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3332px; color: rgb(255, 255, 255); line-height: 27px; letter-spacing: -0.02em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">Dengan RONI, diharapkan</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">informasi antara pasien dan</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">tenaga kesehatan menjadi</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">lebih terbuka dan interaktif,</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">serta membantu program</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">pengendalian TB secara lebih</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">luas di Indonesia.</span></p>
                                                                                            <div class="cgHgbA nxe3IQ Xp24Nw" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3332px; color: rgb(255, 255, 255); line-height: 27px; letter-spacing: -0.02em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><br></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 59.213px; height: 59.213px; transform: translate(75.3517px, 46.198px);">
                                                                                    <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 59.213px; width: 59.213px; transform: scale(1);">
                                                                                        <div class="hWv4NA" style="width: 59.213px; height: 59.213px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                                <defs>
                                                                                                    <clipPath id="__id32">
                                                                                                        <path d="M128,0C57.30755202165845,0 0,57.30755202165844 0,128C0,198.69244797834153 57.307552021658424,256 128,256C198.69244797834153,256 256,198.6924479783416 256,128C256,57.30755202165848 198.6924479783416,0 128,0Z"></path>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                            <div class="bFnJ2A" style="clip-path: url(&quot;#__id32&quot;); background: rgb(0, 196, 204); width: 256px; height: 256px; transform: scale(0.231301, 0.231301); transform-origin: 0px 0px;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 33.5477px; height: 24.8667px; transform: translate(88.1844px, 63.3712px);">
                                                                                    <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 33.5477px; height: 24.8667px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                        <div lang="en" class="AdBbhQ hGbcYA _7rUwsA" style="transform: translate(0px, -1.06666px);">
                                                                                            <p class="cgHgbA pYZEjA Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3333px; color: rgb(10, 26, 68); line-height: 27px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 500; font-style: normal; color: rgb(10, 26, 68); font-kerning: none; text-decoration: none;">03</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="QhExXw pKfnlA" style="width: 1513px; height: 895px; margin: 0px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section id="PBGYT9Ll92rGMZS4" class="rGeu6w" data-scroll-ready="true" style="background-color: rgb(250, 250, 250);">
                                    <div>
                                        <div class="_8jGYJw" style="width: 1513px; height: 768px;">
                                            <div class="fMSICA h517IA" aria-hidden="false">
                                                <div class="_5yhCRQ">
                                                    <div class="onhyOQ" style="width: 1513px; height: 768px; align-items: center;">
                                                        <div class="twbtjQ">
                                                            <div class="GDnEHQ" style="width: 1513px; height: 768px; background-color: rgb(255, 255, 255);">
                                                                <div class="o2Yl2g">
                                                                    <div class="_mXnjA" lang="en" style="width: 1513px; height: 768px;">
                                                                        <div class="_6t4CHA">
                                                                            <div class="a26Xuw">
                                                                                <div class="fbzKiw" style="background: rgb(250, 250, 250);"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="position: absolute; top: 76.8px; left: 76.8px; width: 1359.4px; height: 614.4px;"></div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 1514.1px; height: 850.647px; transform: translate(-1.09686px, -41.3236px);">
                                                                            <div class="Zp7NQw">
                                                                                <div class="a26Xuw">
                                                                                    <div class="PcHy7w">
                                                                                        <div class="uk_25A Ty61NA">
                                                                                            <div class="Izwocg" style="width: 1514.1px; height: 850.647px; transform: translate(0px, 0px) rotate(0deg);"><img class="dMHlHA" crossorigin="anonymous" src="blob:https://roniapp.my.canva.site/1c615ee4-46fa-4390-b948-ee058250473a" draggable="false"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 850.647px; width: 1514.1px; pointer-events: none; transform: scale(1);"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 476.216px; height: 236.933px; transform: translate(847.409px, 76.5982px);">
                                                                            <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 476.216px; height: 236.933px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div lang="en" class="AdBbhQ hGbcYA rLWGlw _7rUwsA" style="transform: translate(0px, 7.46667px);">
                                                                                    <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 74.6667px; color: rgb(255, 255, 255); line-height: 74px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">dr. Roni</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">Permana,</span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;"><br></span><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">Sp.P(K), FISR</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 515.291px; height: 179.6px; transform: translate(847.409px, 375.802px);">
                                                                            <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 515.291px; height: 179.6px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div lang="en" class="AdBbhQ hGbcYA rLWGlw _7rUwsA" style="transform: translate(0px, -3.19999px);">
                                                                                    <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3333px; color: rgb(255, 255, 255); line-height: 31px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(255, 255, 255); font-kerning: none; text-decoration: none;">dr. Roni Permana, Sp.P(K), FISR, seorang dokter<br>spesialis paru yang telah berpengalaman dalam<br>menangani berbagai kasus penyakit pernapasan<br>dengan pendekatan yang mengutamakan<br>keselamatan dan mutu pelayanan pasien.</span></p>
                                                                                    <div class="cgHgbA nxe3IQ Xp24Nw" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3333px; color: rgb(255, 255, 255); line-height: 31px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><br></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 606.2px; height: 548.005px; transform: translate(150.3px, 117.299px);">
                                                                            <div style="width: 606.2px; height: 548.005px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 606.2px; height: 548.005px; transform: translate(-5.68434e-14px, 0px);">
                                                                                    <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 548.005px; width: 606.2px; transform: scale(1);">
                                                                                        <div class="hWv4NA" style="width: 606.2px; height: 548.005px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                                <defs>
                                                                                                    <clipPath id="__id36">
                                                                                                        <path d="M0,42.7v145.7C0,211.9,19.1,231,42.7,231h47.7c23.6,0,42.7,19.1,42.7,42.7v135.7c0,23.6,19.1,42.7,42.7,42.7h107.6  c10.7,0,21.1-4.1,29-11.3l174-161c8.7-8.1,13.7-19.4,13.7-31.3V42.7C500,19.1,480.9,0,457.3,0H42.7C19.1,0,0,19.1,0,42.7z"></path>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                            <div class="bFnJ2A" style="clip-path: url(&quot;#__id36&quot;); transform: scale(1.2124, 1.2124); transform-origin: 0px 0px; width: 500px; height: 452px;">
                                                                                                <div class="_4c2rDg GxUsfw" style="transform-origin: 250.05px 226.05px;">
                                                                                                    <div class="qhHTGg" style="width: 500.1px; height: 502.985px; transform: translate(0px, -25.4426px) translate(250.05px, 251.493px) rotate(0deg) translate(-250.05px, -251.493px); transform-origin: 0px 0px;"><img class="_7_i_XA" crossorigin="anonymous" src="https://roniapp.my.canva.site/_assets/media/850a4c2b19560435f1f829cfe1294cb7.png" draggable="false"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="Pr6LEA"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 224.167px; height: 224.576px; transform: translate(370.901px, 323.429px);">
                                                                                    <div class="Zp7NQw">
                                                                                        <div class="a26Xuw">
                                                                                            <div class="PcHy7w">
                                                                                                <div class="uk_25A Ty61NA">
                                                                                                    <div class="Izwocg" style="width: 224.167px; height: 224.576px; transform: translate(-2.84217e-14px, 0px) rotate(0deg);"><img class="dMHlHA" crossorigin="anonymous" src="blob:https://roniapp.my.canva.site/d34bfd99-f154-4517-b0ff-d9421fca42cf" draggable="false"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 224.576px; width: 224.167px; pointer-events: none; transform: scale(1);"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="QhExXw pKfnlA" style="width: 1513px; height: 768px; margin: 0px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section id="PBm52VJ29QzldfRj" class="rGeu6w" data-scroll-ready="true" style="background-color: rgb(20, 33, 64);">
                                    <div>
                                        <div class="_8jGYJw" style="width: 1513px; height: 768px;">
                                            <div class="fMSICA h517IA" aria-hidden="false">
                                                <div class="_5yhCRQ">
                                                    <div class="onhyOQ" style="width: 1513px; height: 768px; align-items: center;">
                                                        <div class="twbtjQ">
                                                            <div class="GDnEHQ" style="width: 1513px; height: 768px; background-color: rgb(255, 255, 255);">
                                                                <div class="o2Yl2g">
                                                                    <div class="_mXnjA" lang="en" style="width: 1513px; height: 768px;">
                                                                        <div class="_6t4CHA">
                                                                            <div class="a26Xuw">
                                                                                <div class="fbzKiw" style="background: rgb(20, 33, 64);"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="position: absolute; top: 76.8px; left: 76.8px; width: 1359.4px; height: 614.4px;"></div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 551.944px; height: 146.893px; transform: translate(150.3px, 81.1743px);">
                                                                            <div style="width: 551.944px; height: 146.893px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 551.944px; height: 146.893px; transform: translate(4.54747e-13px, 0px);">
                                                                                    <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 146.893px; width: 551.944px; transform: scale(1);">
                                                                                        <div class="hWv4NA" style="width: 551.944px; height: 146.893px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                                <defs>
                                                                                                    <clipPath id="__id40">
                                                                                                        <path d="M0,0L961.908184404981,0L961.908184404981,256L0,256Z"></path>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                            <div class="bFnJ2A" style="clip-path: url(&quot;#__id40&quot;); background: rgb(7, 19, 50); width: 961.908px; height: 256px; transform: scale(0.573801, 0.573801); transform-origin: 0px 0px;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 473.996px; height: 88.9333px; transform: translate(37.6856px, 27.1123px);">
                                                                                    <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 473.996px; height: 88.9333px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                        <div lang="en" class="AdBbhQ hGbcYA _7rUwsA" style="transform: translate(0px, 7.46667px);">
                                                                                            <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 74.6667px; color: rgb(87, 228, 255); line-height: 74px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(87, 228, 255); font-kerning: none; text-decoration: none;">Contact</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 359.86px; height: 24.6px; transform: translate(187.986px, 312.977px);">
                                                                            <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 359.86px; height: 24.6px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div lang="en" class="AdBbhQ hGbcYA rLWGlw _7rUwsA" style="transform: translate(0px, -3.19999px);">
                                                                                    <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3333px; color: rgb(10, 26, 68); line-height: 31px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(10, 26, 68); font-kerning: none; text-decoration: none;">(123) 456-7890</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 359.86px; height: 28.8px; transform: translate(187.986px, 265.455px);">
                                                                            <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 359.86px; height: 28.8px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div lang="en" class="AdBbhQ hGbcYA _7rUwsA" style="transform: translate(0px, 2.40001px);">
                                                                                    <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 24.0001px; color: rgb(10, 26, 68); line-height: 24px; letter-spacing: 0.093em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 500; font-style: normal; color: rgb(10, 26, 68); font-kerning: none; text-decoration: none;">Phone</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 551.944px; height: 146.893px; transform: translate(150.3px, 235.107px);">
                                                                            <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 146.893px; width: 551.944px; transform: scale(1);">
                                                                                <div class="hWv4NA" style="width: 551.944px; height: 146.893px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                        <defs>
                                                                                            <clipPath id="__id41">
                                                                                                <path d="M0,0L961.908184404981,0L961.908184404981,256L0,256Z"></path>
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id41&quot;); background: rgb(255, 255, 255); width: 961.908px; height: 256px; transform: scale(0.573801, 0.573801); transform-origin: 0px 0px;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 551.944px; height: 146.893px; transform: translate(150.3px, 386px);">
                                                                            <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 146.893px; width: 551.944px; transform: scale(1);">
                                                                                <div class="hWv4NA" style="width: 551.944px; height: 146.893px; margin-left: 0px; margin-top: 0px;"><svg class="_7KaXww">
                                                                                        <defs>
                                                                                            <clipPath id="__id42">
                                                                                                <path d="M0,0L961.908184404981,0L961.908184404981,256L0,256Z"></path>
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                    <div class="bFnJ2A" style="clip-path: url(&quot;#__id42&quot;); background: rgb(87, 228, 255); width: 961.908px; height: 256px; transform: scale(0.573801, 0.573801); transform-origin: 0px 0px;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 58.4567px; height: 58.4567px; transform: translate(586.873px, 430.218px);">
                                                                            <div class="Zp7NQw">
                                                                                <div class="a26Xuw">
                                                                                    <div class="PcHy7w">
                                                                                        <div class="uk_25A Ty61NA">
                                                                                            <div class="Izwocg" style="width: 58.4567px; height: 58.4567px; transform: translate(0px, 0px) rotate(0deg);"><img class="dMHlHA" crossorigin="anonymous" src="blob:https://roniapp.my.canva.site/2041e4cd-7570-43fd-b16c-24b7caa9716b" draggable="false"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 58.4567px; width: 58.4567px; pointer-events: none; transform: scale(1);"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 58.4567px; height: 58.4567px; transform: translate(419.487px, 430.218px);">
                                                                            <div class="Zp7NQw">
                                                                                <div class="a26Xuw">
                                                                                    <div class="PcHy7w">
                                                                                        <div class="uk_25A Ty61NA">
                                                                                            <div class="Izwocg" style="width: 58.4567px; height: 58.4567px; transform: translate(0px, 0px) rotate(0deg);"><img class="dMHlHA" crossorigin="anonymous" src="blob:https://roniapp.my.canva.site/48cabf64-1ac4-4732-9b67-9973b46a9f4e" draggable="false"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 58.4567px; width: 58.4567px; pointer-events: none; transform: scale(1);"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 58.4567px; height: 58.4567px; transform: translate(502.943px, 430.218px);">
                                                                            <div class="Zp7NQw">
                                                                                <div class="a26Xuw">
                                                                                    <div class="PcHy7w">
                                                                                        <div class="uk_25A Ty61NA">
                                                                                            <div class="Izwocg" style="width: 58.4567px; height: 58.4567px; transform: translate(0px, 0px) rotate(0deg);"><img class="dMHlHA" crossorigin="anonymous" src="blob:https://roniapp.my.canva.site/070642fb-e27c-47d9-b4cf-102e0a5bbee8" draggable="false"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 58.4567px; width: 58.4567px; pointer-events: none; transform: scale(1);"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 297.786px; height: 297.786px; transform: translate(756.5px, 237.107px);">
                                                                            <div class="Zp7NQw">
                                                                                <div class="a26Xuw">
                                                                                    <div class="PcHy7w">
                                                                                        <div class="uk_25A Ty61NA">
                                                                                            <div class="Izwocg" style="width: 297.786px; height: 297.786px; transform: translate(0px, 0px) rotate(0deg);"><img class="_7_i_XA" crossorigin="anonymous" src="https://roniapp.my.canva.site/_assets/media/c785dbcb8e8ac520c81d424d356cb8e6.png" draggable="false"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="position: absolute; top: 0px; left: 0px; transform-origin: 0px 0px; height: 297.786px; width: 297.786px; pointer-events: none; transform: scale(1);"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 359.86px; height: 24.6px; transform: translate(187.986px, 315.414px);">
                                                                            <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 359.86px; height: 24.6px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div lang="en" class="AdBbhQ hGbcYA rLWGlw _7rUwsA" style="transform: translate(0px, -3.19999px);">
                                                                                    <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 21.3333px; color: rgb(10, 26, 68); line-height: 31px; letter-spacing: 0em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 300; font-style: normal; color: rgb(10, 26, 68); font-kerning: none; text-decoration: none;">permanaroni13@yahoo.com</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 359.86px; height: 28.8px; transform: translate(187.986px, 267.892px);">
                                                                            <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 359.86px; height: 28.8px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div lang="en" class="AdBbhQ hGbcYA _7rUwsA" style="transform: translate(0px, 2.40001px);">
                                                                                    <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 24.0001px; color: rgb(10, 26, 68); line-height: 24px; letter-spacing: 0.093em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 500; font-style: normal; color: rgb(10, 26, 68); font-kerning: none; text-decoration: none;">Email</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="DF_utQ _682gpw _0xkaeQ" style="touch-action: pan-x pan-y pinch-zoom; width: 109.011px; height: 28.8px; transform: translate(187.986px, 445.047px);">
                                                                            <div class="aF9o6Q _0yZ6Qg" style="writing-mode: horizontal-tb; width: 109.011px; height: 28.8px; transform: scale(1, 1); transform-origin: 0px 0px;">
                                                                                <div lang="en" class="AdBbhQ hGbcYA _7rUwsA" style="transform: translate(0px, 2.40001px);">
                                                                                    <p class="cgHgbA nxe3IQ Xp24Nw PanoWQ" style="font-family: &quot;YAFdJs2qTWQ 0&quot;, auto; --cAuMqQ: 24.0001px; color: rgb(10, 26, 68); line-height: 24px; letter-spacing: 0.093em; --pY_8zA: 0; text-transform: none; --oJepFA: 0; --uYCVzQ: none; list-style-type: none;"><span class="OYPEnA" style="font-size: 1em; font-weight: 500; font-style: normal; color: rgb(10, 26, 68); font-kerning: none; text-decoration: none;">Social</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="QhExXw pKfnlA" style="width: 1513px; height: 768px; margin: 0px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div>
                                <style>
                                    .footer-overflow-container {
                                        display: flex;
                                        background-color: #000000;
                                        position: relative;
                                    }

                                    .footer-container {
                                        flex-grow: 1;
                                        position: relative;
                                        display: flex;
                                        flex-direction: row;
                                        justify-content: space-between;
                                        padding: 6px;
                                    }

                                    .footer-pill-link {
                                        appearance: none;
                                        text-decoration: none;
                                    }

                                    .footer-pill {
                                        display: flex;
                                        flex-direction: row;
                                        justify-content: center;
                                        align-items: center;
                                        border-radius: 1000px;
                                        border: none;
                                        background: none;
                                        padding: 4px 8px;
                                        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif;
                                        white-space: nowrap;
                                        text-decoration: none;
                                        font-weight: 600;
                                        font-style: normal;
                                        font-size: calc(12px * var(--rfso, var(--bfso, 1)));
                                        color: #ffffff;
                                        transition: background-color 0.2s;
                                    }

                                    .footer-pill:hover {
                                        cursor: pointer;
                                    }

                                    .footer-pill+.footer-pill {
                                        margin-left: 8px;
                                    }

                                    .footer-pill-primary {
                                        position: relative;
                                        z-index: 1;
                                        background-color: rgba(255, 255, 255, 0.1);
                                    }

                                    .footer-pill-primary:hover>.footer-pill-primary-background {
                                        opacity: 1;
                                    }

                                    .footer-pill-primary-background {
                                        position: absolute;
                                        z-index: -1;
                                        border-radius: 1000px;
                                        top: 0;
                                        left: 0;
                                        width: 100%;
                                        height: 100%;
                                        background: linear-gradient(90deg, #00C4CC 0%, #7D2AE8 100%);
                                        opacity: 0;
                                        overflow: hidden;
                                        transition: opacity 0.2s;
                                    }

                                    /* Subtle wipe effect */
                                    .footer-pill-primary-background::after {
                                        content: "";
                                        position: absolute;
                                        width: 100%;
                                        height: 100%;
                                        left: 0;
                                        top: 0;
                                        background: linear-gradient(to right, rgba(125, 42, 232, 0) 0%, #1a1a1a calc(50px + 20%), #1a1a1a 100%);
                                        transform: translateX(0);
                                        transition: transform 0.7s;
                                    }

                                    .footer-pill-primary:hover>.footer-pill-primary-background::after {
                                        transform: translateX(110%);
                                    }

                                    .footer-pill-primary-background>svg {
                                        position: absolute;
                                        top: 50%;
                                        left: 0;
                                        right: 0;
                                        transform-origin: center;
                                        transform: translateY(-50%);
                                        width: 100%;
                                    }

                                    .animation-container {
                                        animation: spin linear 12s infinite;
                                        animation-play-state: paused;
                                    }

                                    .footer-pill-primary:hover>.footer-pill-primary-background .animation-container {
                                        animation-play-state: running;
                                    }

                                    .footer-pill-secondary {
                                        background-color: rgba(255, 255, 255, 0);
                                    }

                                    .footer-pill-secondary:hover {
                                        background-color: rgba(255, 255, 255, 0.1);
                                    }

                                    .footer-pill-secondary:active,
                                    .footer-pill-secondary.active {
                                        background-color: rgba(255, 255, 255, 0.15)
                                    }

                                    .inline-icon {
                                        display: inline-block;
                                        width: 16px;
                                        height: 16px;
                                        margin-right: 5px;
                                    }

                                    .inline-icon>svg {
                                        fill: rgba(218, 218, 218, 1);
                                    }

                                    .inline-icon-logo {
                                        display: inline-block;
                                        height: 15px;
                                        margin-left: 5px;
                                    }

                                    .inline-icon-logo>svg {
                                        height: 100%;
                                    }

                                    .modal-backdrop {
                                        position: fixed;
                                        top: 0;
                                        right: 0;
                                        bottom: 0;
                                        left: 0;
                                        width: 100%;
                                        height: 100%;
                                        z-index: 9999;
                                        transition: opacity 0.35s, visibility 0.35s;
                                        opacity: 0;
                                        visibility: hidden;
                                        pointer-events: none;
                                    }

                                    .modal-backdrop.active {
                                        opacity: 1;
                                        visibility: visible;
                                        pointer-events: all;
                                    }

                                    .report-form-modal {
                                        display: block;
                                        box-sizing: border-box;
                                        position: absolute;
                                        top: 0;
                                        left: 6px;
                                        width: 367px;
                                        /* min width for the gcaptcha to fit*/
                                        transform: translate3d(0, calc(-100% + 24px), 0);
                                        z-index: 10000;
                                        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif;
                                        background-color: #ffffff;
                                        border-radius: 8px;
                                        margin: 0;
                                        box-shadow: 0px 2px 18px 0px rgba(14, 19, 24, 0.25), 0px 0px 1px 0px rgba(14, 19, 24, 0.02);
                                        transition-duration: 0.35s;
                                        transition-property: opacity, transform, visibility;
                                        opacity: 0;
                                        visibility: hidden;
                                        pointer-events: none;
                                    }

                                    .report-form-modal.active {
                                        transform: translate3d(0, calc(-100% + 8px), 0);
                                        opacity: 1;
                                        visibility: visible;
                                        pointer-events: all;
                                    }

                                    .form-content {
                                        margin: 32px;
                                        outline-offset: 34px;
                                    }

                                    .form-content>* {
                                        margin: 16px 0;
                                    }

                                    .form-title {
                                        font-size: calc(24px * var(--rfso, var(--bfso, 1)));
                                        font-weight: 700;
                                    }

                                    .form-body {
                                        font-size: calc(14px * var(--rfso, var(--bfso, 1)));
                                        font-weight: 400;
                                        color: rgba(14, 19, 24, 0.7);
                                    }

                                    .form-body-bold {
                                        font-size: calc(14px * var(--rfso, var(--bfso, 1)));
                                        font-weight: 600;
                                        line-height: 22.4px;
                                        color: rgba(14, 19, 24, 1);
                                    }

                                    .form-radio-input {
                                        display: grid;
                                        grid-template-columns: 24px auto;
                                        grid-template-rows: auto;
                                        grid-template-areas:
                                            "radio-button radio-label"
                                            ". radio-description"
                                    }

                                    .form-radio-input:hover {
                                        cursor: pointer;
                                    }

                                    .radio-button-input {
                                        opacity: 0;
                                        margin: 0;
                                        width: 0;
                                        height: 0;
                                    }

                                    .radio-button {
                                        align-self: flex-start;
                                        grid-area: radio-button;
                                        display: inline-block;
                                        width: 16px;
                                        height: 16px;
                                        margin: 4px 8px 0 0;
                                        vertical-align: middle;
                                        border-radius: 50%;
                                        box-shadow: inset 0 0 0 1px rgba(53, 71, 90, .2);
                                        outline: none;
                                        background-color: #ffffff;
                                        flex-shrink: 0;
                                    }

                                    .radio-button-input:checked+.radio-button {
                                        background: #fff;
                                        box-shadow: inset 0 0 0 5px #8b3dff;
                                        transition: box-shadow .1s ease-in-out, background-color .1s ease-in-out;
                                    }

                                    .form-radio-input:hover .radio-button-input:not(:checked)+.radio-button {
                                        box-shadow: inset 0 0 0 1px rgba(30, 41, 51, .45);
                                    }

                                    .radio-button-input+.radio-button::after {
                                        content: "";
                                        width: 6px;
                                        height: 6px;
                                        background-color: transparent;
                                        display: block;
                                        margin: 5px;
                                        border-radius: 50%;
                                    }

                                    .radio-button-input:checked+.radio-button::after {
                                        background-color: #ffffff;
                                        transition: background-color .1s ease-in-out;
                                    }

                                    .form-radio-label {
                                        grid-area: radio-label;
                                        font-size: calc(14px * var(--rfso, var(--bfso, 1)));
                                        font-weight: 600;
                                        line-height: 22.4px;
                                        color: rgba(14, 19, 24, 1);
                                    }

                                    .form-radio-desc {
                                        grid-area: radio-description;
                                        font-size: calc(12px * var(--rfso, var(--bfso, 1)));
                                        font-weight: 400;
                                        color: rgba(14, 19, 24, 0.7);
                                        margin: 0;
                                    }

                                    .g-recaptcha {
                                        width: 300px;
                                    }

                                    .form-buttons {
                                        margin-top: 32px;
                                        display: grid;
                                        grid-gap: 8px;
                                        grid-template-columns: auto auto;
                                        justify-content: flex-end;
                                    }

                                    .tertiary-button {
                                        border: 2px solid transparent;
                                        box-sizing: border-box;
                                        background-color: rgba(13, 18, 22, 0);
                                        border-radius: 4px;
                                        color: rgb(13, 18, 22);
                                        cursor: pointer;
                                        display: inline-flex;
                                        height: 40px;
                                        margin: 0;
                                        max-width: 100%;
                                        min-width: 80px;
                                        width: 100%;
                                        padding: 0 6px;
                                        vertical-align: middle;
                                        align-items: center;
                                        justify-content: center;
                                        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif;
                                        font-weight: 400;
                                        line-height: 1.6;
                                        outline-offset: 2px;
                                        transition: background-color 0.2s;
                                    }

                                    .tertiary-button:hover {
                                        background-color: rgba(64, 87, 109, .07);
                                    }

                                    .tertiary-button:active {
                                        background-color: rgba(57, 76, 96, .15);
                                    }

                                    .button {
                                        border: 2px solid transparent;
                                        box-sizing: border-box;
                                        background-color: rgba(64, 87, 109, 0.07);
                                        border-radius: 4px;
                                        color: #0e1318;
                                        cursor: pointer;
                                        display: inline-flex;
                                        height: 40px;
                                        margin: 0;
                                        max-width: 100%;
                                        min-width: 80px;
                                        width: 100%;
                                        padding: 0 6px;
                                        vertical-align: middle;
                                        align-items: center;
                                        justify-content: center;
                                        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif;
                                        font-weight: 400;
                                        line-height: 1.6;
                                        outline-offset: 2px;
                                        transition: background-color 0.2s;
                                    }

                                    .button:hover {
                                        background-color: rgba(57, 76, 96, .15);
                                    }

                                    .button:active {
                                        background-color: rgba(53, 71, 90, .2);
                                    }

                                    .submit-button {
                                        border: 2px solid transparent;
                                        box-sizing: border-box;
                                        background-color: #7d2ae8;
                                        border-radius: 4px;
                                        color: #ffffff;
                                        cursor: pointer;
                                        display: inline-flex;
                                        height: 40px;
                                        margin: 0;
                                        max-width: 100%;
                                        min-width: 80px;
                                        width: 100%;
                                        padding: 0 6px;
                                        vertical-align: middle;
                                        align-items: center;
                                        justify-content: center;
                                        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif;
                                        font-weight: 400;
                                        line-height: 1.6;
                                        outline-offset: 4px;
                                        transition: background-color 0.2s;
                                    }

                                    .submit-button:hover {
                                        background-color: #8d39fa;
                                    }

                                    .submit-button:active {
                                        background-color: #6718cf;
                                    }

                                    .button-text {
                                        font-size: calc(14px * var(--rfso, var(--bfso, 1)));
                                        display: inline-block;
                                        max-width: 100%;
                                        overflow: hidden;
                                        padding: 0 8px;
                                        text-overflow: ellipsis;
                                        white-space: nowrap;
                                        font-weight: 600;
                                        transition: all 0.2s;
                                    }

                                    .submit-button.loading .button-text {
                                        visibility: hidden;
                                        opacity: 0;
                                    }

                                    .submit-button.loading::after {
                                        content: "";
                                        position: absolute;
                                        width: 16px;
                                        height: 16px;
                                        margin: auto;
                                        border: 4px solid transparent;
                                        border-top-color: #ffffff;
                                        border-radius: 50%;
                                        animation: spin 1s ease infinite;
                                    }

                                    .text-danger {
                                        text-align: left;
                                        margin: 4px 0 0;
                                        color: #f84856;
                                        font-size: calc(12px * var(--rfso, var(--bfso, 1)));
                                    }

                                    .a-link:visited {
                                        color: rgba(14, 19, 24, 0.7)
                                    }

                                    .a-link {
                                        text-decoration: underline;
                                        color: rgba(14, 19, 24, 0.7)
                                    }

                                    .a-link:hover {
                                        color: #7d2ae8;
                                    }

                                    @keyframes spin {
                                        from {
                                            transform: rotate(0turn);
                                        }

                                        to {
                                            transform: rotate(1turn);
                                        }
                                    }

                                    @supports selector(:focus-visible) {
                                        .radio-button-input:focus-visible+.radio-button {
                                            outline: auto;
                                        }

                                        .footer-pill-primary:focus-visible>.footer-pill-primary-background::after {
                                            transform: translateX(110%);
                                        }

                                        .footer-pill-primary:focus-visible>.footer-pill-primary-background {
                                            opacity: 1;
                                        }

                                        .footer-pill-primary:focus-visible>.footer-pill-primary-background .animation-container {
                                            animation-play-state: running;
                                        }
                                    }

                                    @supports not selector(:focus-visible) {
                                        .radio-button-input:focus+.radio-button {
                                            outline: auto;
                                        }

                                        .footer-pill-primary:focus>.footer-pill-primary-background::after {
                                            transform: translateX(110%);
                                        }

                                        .footer-pill-primary:focus>.footer-pill-primary-background {
                                            opacity: 1;
                                        }

                                        .footer-pill-primary:focus>.footer-pill-primary-background .animation-container {
                                            animation-play-state: running;
                                        }
                                    }

                                    /* stylelint-disable-next-line media-feature-name-disallowed-list */
                                    @media only screen and (max-width: 600px) {
                                        .modal-backdrop {
                                            background-color: rgba(14, 19, 24, 0.45);
                                            backdrop-filter: blur(4px);
                                            -webkit-backdrop-filter: blur(4px);
                                        }

                                        .report-form-modal {
                                            width: 100%;
                                            position: fixed;
                                            left: 0;
                                            right: 0;
                                            bottom: 0;
                                            border-radius: 8px 8px 0 0;
                                            transform: translate3d(0, 33%, 0);
                                        }

                                        .report-form-modal.active {
                                            transform: translate3d(0, 0, 0);
                                        }

                                        .form-content {
                                            margin: 16px;
                                        }

                                        .form-buttons {
                                            display: grid;
                                            grid-gap: 8px;
                                            grid-template-columns: 1fr;
                                        }

                                        .submit-button {
                                            order: -1;
                                        }

                                        @supports (padding: env(safe-area-inset-bottom)) {
                                            .footer-container {
                                                padding: 6px 6px calc(6px + env(safe-area-inset-bottom)) 6px;
                                            }

                                            .form-content {
                                                margin: 16px 16px calc(16px + env(safe-area-inset-bottom)) 16px;
                                            }
                                        }
                                    }

                                    @media (prefers-reduced-motion) {

                                        .report-form-modal,
                                        .report-form-modal.active {
                                            transition-property: opacity, visibility;
                                            transform: translate3d(0, calc(-100% + 8px), 0);
                                        }

                                        @media only screen and (max-width: 600px) {

                                            .report-form-modal,
                                            .report-form-modal.active {
                                                transform: translate3d(0, 0, 0);
                                            }
                                        }

                                        .animation-container {
                                            animation-play-state: paused !important;
                                        }

                                        .footer-pill-primary-background::after {
                                            transform: translateX(0);
                                            opacity: 0;
                                            transition: opacity 0.7s;
                                        }

                                        .footer-pill-primary-background>svg {
                                            display: none;
                                        }
                                    }
                                </style>
                                <div class="footer-overflow-container" lang="id-ID">
                                    <div class="footer-container">
                                        <button id="report_button" class="footer-pill footer-pill-secondary" type="button">
                                            Syarat &amp; Dukungan
                                        </button>
                                        <a class="footer-pill footer-pill-primary footer-pill-link" target="_blank" href="https://www.canva.com" aria-label="Didesain pakai Canva">
                                            <div class="footer-pill-primary-background">
                                                <svg viewBox="20 20 55 55" xmlns="http://www.w3.org/2000/svg">
                                                    <defs>
                                                        <radialGradient id="cyanSpotLarge" cx="0.5" cy="0.5" r="0.5" fx="0.8" fy="0.8" spreadMethod="pad">
                                                            <stop offset="0%" stop-color="rgb(0, 196, 204)" stop-opacity="1"></stop>
                                                            <stop offset="100%" stop-color="rgb(0, 196, 204)" stop-opacity="0"></stop>
                                                        </radialGradient>
                                                        <radialGradient id="cyanSpot" cx="0.5" cy="0.5" r="0.5" fx="0.2" fy="0.2" spreadMethod="pad">
                                                            <stop offset="0%" stop-color="rgb(0, 196, 204)" stop-opacity="0.75"></stop>
                                                            <stop offset="100%" stop-color="rgb(0, 196, 204)" stop-opacity="0"></stop>
                                                        </radialGradient>
                                                        <radialGradient id="purpleSpotLarge" cx="0.5" cy="0.5" r="0.5" fx="0.8" fy="0.8" spreadMethod="pad">
                                                            <stop offset="0%" stop-color="rgb(125, 42, 232)" stop-opacity="1"></stop>
                                                            <stop offset="100%" stop-color="rgb(125, 42, 232)" stop-opacity="0"></stop>
                                                        </radialGradient>
                                                        <radialGradient id="purpleSpot" cx="0.5" cy="0.5" r="0.5" fx="0.2" fy="0.2" spreadMethod="pad">
                                                            <stop offset="0%" stop-color="rgb(125, 42, 232)" stop-opacity="0.85"></stop>
                                                            <stop offset="100%" stop-color="rgb(125, 42, 232)" stop-opacity="0"></stop>
                                                        </radialGradient>
                                                    </defs>
                                                    <!-- Average the RGB values of the Cyan & Purple brand colors -> Blue rect background -->
                                                    <rect x="0" y="0" width="100" height="100" fill="rgb(62.5, 119, 218)"></rect>
                                                    <g class="animation-container">
                                                        <!-- Initial Rotation -->
                                                        <g transform="rotate(25)">
                                                            <!-- Large Spots -->
                                                            <g transform="rotate(0) scale(2) translate(-40, -40)">
                                                                <rect x="0" y="0" width="100" height="100" fill="url(#cyanSpotLarge)"></rect>
                                                            </g>
                                                            <g transform="rotate(180) scale(2) translate(-40, -40)">
                                                                <rect x="0" y="0" width="100" height="100" fill="url(#cyanSpotLarge)"></rect>
                                                            </g>
                                                            <g transform="rotate(90) scale(1.5) translate(-25, -25)">
                                                                <rect x="0" y="0" width="100" height="100" fill="url(#purpleSpotLarge)"></rect>
                                                            </g>
                                                            <g transform="rotate(270) scale(1.5) translate(-25, -25)">
                                                                <rect x="0" y="0" width="100" height="100" fill="url(#purpleSpotLarge)"></rect>
                                                            </g>
                                                            <!-- Small spots -->
                                                            <g transform="rotate(0) translate(-10, -10)">
                                                                <rect x="0" y="0" width="66" height="66" fill="url(#purpleSpot"></rect>
                                                            </g>
                                                            <g transform="rotate(180) translate(-10, -10)">
                                                                <rect x="0" y="0" width="66" height="66" fill="url(#purpleSpot"></rect>
                                                            </g>
                                                            <g transform="rotate(90) scale(1.2) translate(-10, -10)">
                                                                <rect x="0" y="0" width="66" height="66" fill="url(#cyanSpot)"></rect>
                                                            </g>
                                                            <g transform="rotate(270) scale(1.2) translate(-10, -10)">
                                                                <rect x="0" y="0" width="66" height="66" fill="url(#cyanSpot)"></rect>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            Didesain dengan
                                            <span class="inline-icon-logo">
                                                <svg viewBox="0 0 80 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M79.444 18.096c-.136 0-.26.088-.324.272-.82 2.34-1.928 3.732-2.84 3.732-.524 0-.736-.584-.736-1.5 0-2.292 1.372-7.152 2.064-9.368.08-.268.132-.508.132-.712 0-.644-.352-.96-1.224-.96-.94 0-1.952.368-2.936 2.092-.34-1.52-1.368-2.184-2.804-2.184-1.66 0-3.264 1.068-4.584 2.8-1.32 1.732-2.872 2.3-4.04 2.02.84-2.056 1.152-3.592 1.152-4.732 0-1.788-.884-2.868-2.312-2.868-2.172 0-3.424 2.072-3.424 4.252 0 1.684.764 3.416 2.444 4.256-1.408 3.184-3.464 6.064-4.244 6.064-1.008 0-1.304-4.932-1.248-8.46.036-2.024.204-2.128.204-2.74 0-.352-.228-.592-1.144-.592-2.136 0-2.796 1.808-2.896 3.884a10.233 10.233 0 01-.368 2.332c-.892 3.184-2.732 5.6-3.932 5.6-.556 0-.708-.556-.708-1.284 0-2.292 1.284-5.156 1.284-7.6 0-1.796-.788-2.932-2.272-2.932-1.748 0-4.06 2.08-6.248 5.976.72-2.984 1.016-5.872-1.116-5.872A2.886 2.886 0 0036 9.916a.752.752 0 00-.432.728c.204 3.176-2.56 11.312-5.18 11.312-.476 0-.708-.516-.708-1.348 0-2.296 1.368-7.144 2.056-9.364.088-.288.136-.536.136-.752 0-.608-.376-.92-1.228-.92-.936 0-1.952.356-2.932 2.08-.344-1.52-1.372-2.184-2.808-2.184-2.356 0-4.988 2.492-6.144 5.74-1.548 4.336-4.668 8.524-8.868 8.524-3.812 0-5.824-3.172-5.824-8.184C4.068 8.312 9.38 2.4 13.32 2.4c1.884 0 2.784 1.2 2.784 3.04 0 2.228-1.244 3.264-1.244 4.112 0 .26.216.516.644.516 1.712 0 3.728-2.012 3.728-4.756S17.004.56 13.064.56C6.552.56 0 7.112 0 15.508c0 6.68 3.296 10.708 8.996 10.708 3.888 0 7.284-3.024 9.116-6.552.208 2.924 1.536 4.452 3.56 4.452 1.8 0 3.256-1.072 4.368-2.956.428 1.972 1.564 2.936 3.04 2.936 1.692 0 3.108-1.072 4.456-3.064-.02 1.564.336 3.036 1.692 3.036.64 0 1.404-.148 1.54-.708 1.428-5.904 4.956-10.724 6.036-10.724.32 0 .408.308.408.672 0 1.604-1.132 4.892-1.132 6.992 0 2.268.964 3.768 2.956 3.768 2.208 0 4.452-2.704 5.948-6.656.468 3.692 1.48 6.672 3.064 6.672 1.944 0 5.396-4.092 7.488-8.424.82.104 2.052.076 3.236-.76-.504 1.276-.8 2.672-.8 4.068 0 4.02 1.92 5.148 3.572 5.148 1.796 0 3.252-1.072 4.368-2.956.368 1.7 1.308 2.932 3.036 2.932 2.704 0 5.052-2.764 5.052-5.032 0-.6-.256-.964-.556-.964zM23.32 21.888c-1.092 0-1.52-1.1-1.52-2.74 0-2.848 1.948-7.604 4.008-7.604.9 0 1.24 1.06 1.24 2.356 0 2.892-1.852 7.988-3.728 7.988zm37.404-8.5c-.652-.776-.888-1.832-.888-2.772 0-1.16.424-2.14.932-2.14s.664.5.664 1.196c0 1.164-.416 2.864-.708 3.716zm8.468 8.5c-1.092 0-1.52-1.264-1.52-2.74 0-2.748 1.948-7.604 4.024-7.604.9 0 1.22 1.052 1.22 2.356 0 2.892-1.82 7.988-3.724 7.988z" fill="#fff"></path>
                                                </svg>
                                            </span>

                                        </a>
                                    </div>
                                    <div id="modal_backdrop" class="modal-backdrop"></div>
                                    <div id="modal" class="report-form-modal" role="dialog">
                                        <div class="form-content" id="form_step_terms" style="display: none;" aria-labelledby="termsTitle" aria-describedby="termsDesc" tabindex="0">
                                            <h2 id="termsTitle" class="form-title">Syarat &amp; Dukungan</h2>
                                            <p id="termsDesc" class="form-body">Situs web ini dibuat di Canva, tetapi isinya adalah Konten Buatan Pengguna yang tunduk pada <a class="a-link" href="https://www.canva.com/policies/terms-of-use/" target="_blank">Persyaratan Penggunaan</a> kami. Jika Anda melihat hal yang melanggar <a class="a-link" href="https://www.canva.com/policies/acceptable-use-policy/" target="_blank">kebijakan penggunaan sewajarnya</a>, harap laporkan ke tim peninjau konten kami.</p>
                                            <div class="form-buttons">
                                                <button id="form_close_initial" type="button" class="tertiary-button">
                                                    <span class="button-text">
                                                        Tutup
                                                    </span>
                                                </button>
                                                <button id="form_report" data-report-url="https://www.canva.com/help/report-content/?source=design&amp;link=" type="button" class="button">
                                                    <span class="button-text">
                                                        Laporkan
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-content" id="form_step_report_reason" style="display: none;" aria-labelledby="reportTitle" aria-describedby="reportDesc" tabindex="0">
                                            <h2 id="reportTitle" class="form-title">Laporkan</h2>
                                            <p id="reportDesc" class="form-body">Pelaporan membantu Canva memastikan bahwa kontennya sesuai dan diberi label
                                                dengan benar.</p>
                                            <p class="form-body-bold">Mengapa Anda melaporkan konten ini?</p>
                                            <label class="form-radio-input" for="report_reason_0">
                                                <input id="report_reason_0" class="radio-button-input" type="radio" name="report_reason" value="0" autocomplete="off" checked="">
                                                <span class="radio-button"></span>
                                                <span class="form-radio-label">
                                                    Konten yang tidak pantas
                                                </span>
                                            </label>
                                            <label class="form-radio-input" for="report_reason_1">
                                                <input id="report_reason_1" class="radio-button-input" type="radio" name="report_reason" value="1" autocomplete="off">
                                                <span class="radio-button"></span>
                                                <span class="form-radio-label">
                                                    Ujaran, tindakan, diskriminasi karena kebencian
                                                </span>
                                            </label>
                                            <label class="form-radio-input" for="report_reason_2">
                                                <input id="report_reason_2" class="radio-button-input" type="radio" name="report_reason" value="2" autocomplete="off">
                                                <span class="radio-button"></span>
                                                <span class="form-radio-label">
                                                    Konten ilegal
                                                </span>
                                            </label>
                                            <label class="form-radio-input" for="report_reason_3">
                                                <input id="report_reason_3" class="radio-button-input" type="radio" name="report_reason" value="3" autocomplete="off">
                                                <span class="radio-button"></span>
                                                <span class="form-radio-label">
                                                    Pencemaran nama baik atau perundungan
                                                </span>
                                            </label>
                                            <label class="form-radio-input" for="report_reason_4">
                                                <input id="report_reason_4" class="radio-button-input" type="radio" name="report_reason" value="4" autocomplete="off">
                                                <span class="radio-button"></span>
                                                <span class="form-radio-label">
                                                    Pelanggaran Kekayaan Intelektual
                                                </span>
                                            </label>
                                            <label class="form-radio-input" for="report_reason_5">
                                                <input id="report_reason_5" class="radio-button-input" type="radio" name="report_reason" value="5" autocomplete="off">
                                                <span class="radio-button"></span>
                                                <span class="form-radio-label">
                                                    Informasi sesat
                                                </span>
                                            </label>
                                            <label class="form-radio-input" for="report_reason_6">
                                                <input id="report_reason_6" class="radio-button-input" type="radio" name="report_reason" value="6" autocomplete="off">
                                                <span class="radio-button"></span>
                                                <span class="form-radio-label">
                                                    Pengelabuan
                                                </span>
                                            </label>
                                            <label class="form-radio-input" for="report_reason_other">
                                                <input id="report_reason_other" class="radio-button-input" type="radio" name="report_reason" value="7" autocomplete="off">
                                                <span class="radio-button"></span>
                                                <span class="form-radio-label">
                                                    Hal lainnya
                                                </span>
                                            </label>
                                            <div class="form-buttons">
                                                <button id="form_cancel" type="button" class="button">
                                                    <span class="button-text">Batalkan</span>
                                                </button>
                                                <button id="form_submit_reason" type="button" class="submit-button">
                                                    <span class="button-text">Berikutnya</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-content" id="form_step_report_ip" style="display: none;" aria-labelledby="ipTitle" aria-describedby="ipDesc" tabindex="0">
                                            <h2 id="ipTitle" class="form-title">Pelanggaran Kekayaan Intelektual</h2>
                                            <p id="ipDesc" class="form-body">Kirimkan pemberitahuan pelanggaran ke Canva dengan mengikuti langkah-langkah yang diuraikan dalam <a class="a-link" href="https://www.canva.com/policies/intellectual-property-policy/" target="_blank">Kebijakan Kekayaan Intelektual</a> kami di sini.</p>
                                            <div class="form-buttons">
                                                <button id="form_go_back_ip" type="button" class="button">
                                                    <span class="button-text">Kembali</span>
                                                </button>
                                                <button id="form_close_ip" type="button" class="submit-button">
                                                    <span class="button-text">Tutup</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-content" id="form_step_report_other" style="display: none;" aria-labelledby="otherTitle" aria-describedby="otherDesc" tabindex="0">
                                            <h2 id="otherTitle" class="form-title">Hal lainnya</h2>
                                            <p id="otherDesc" class="form-body">Silakan hubungi Canva melalui <a class="a-link" href="mailto:privacy@canva.com" target="_blank">privacy@canva.com</a> dan sertakan URL situs web untuk melaporkan masalah lainnya.</p>
                                            <div class="form-buttons">
                                                <button id="form_go_back_other" type="button" class="button">
                                                    <span class="button-text">Kembali</span>
                                                </button>
                                                <button id="form_close_other" type="button" class="submit-button">
                                                    <span class="button-text">Tutup</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-content" id="form_step_captcha" style="display: none;" aria-labelledby="captchaTitle" aria-describedby="captchaDesc" tabindex="0">
                                            <h2 id="captchaTitle" class="form-title">Laporkan</h2>
                                            <p id="captchaDesc" class="form-body">Mari kita pastikan Anda bukan robot.</p>
                                            <form id="captcha-form">
                                                <div class="g-recaptcha" data-sitekey="6Ldk59waAAAAAMPqkICbJjfMivZLCGtTpa6Wn6zO"></div>
                                                <div id="netease-captcha"></div>
                                                <p id="error_message_captcha" class="text-danger" style="display: none;">
                                                    Harap selesaikan verifikasi.
                                                </p>
                                                <p id="error_message" class="text-danger" style="display: none;">
                                                    Kami tidak dapat mengirim laporan Anda sekarang. Silakan coba kembali nanti.
                                                </p>
                                                <div class="form-buttons">
                                                    <button id="form_go_back" type="button" class="button">
                                                        <span class="button-text">Kembali</span>
                                                    </button>
                                                    <button id="form_submit_captcha" type="submit" class="submit-button">
                                                        <span class="button-text">Kirim</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="form-content" id="form_step_success" style="display: none;" aria-labelledby="thanksTitle" aria-describedby="thanksDesc" tabindex="0">
                                            <h2 id="thanksTitle" class="form-title">Terima kasih</h2>
                                            <p id="thanksDesc" class="form-body">Terima kasih telah menandai konten ini sebagai tidak pantas. Tim pemeriksa konten kami sedang menangani dan meninjaunya sesegera mungkin.</p>
                                            <div class="form-buttons">
                                                <button id="form_close" type="button" class="submit-button">
                                                    <span class="button-text">
                                                        Tutup
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script nonce="">
        (function() {
            window['__canva_public_path__'] = '_assets\/';
            window['bootstrap'] = JSON.parse('{"base":{"A?":"B","L":false,"N":false,"E":"0b6f1d96f1ebbdcb74b44cb41f4c5a0148dc634c","K":1747749948,"F":{"A?":"B"},"G":"CLIENT_FULL","I":"A","O":{"A?":"B"},"M":"/_online","U":[],"V":[],"a":{"K":"export_website","H":{}},"d":{"A":"wss://www.canva.com/_stream","B":{"F":"export_website"}},"b":{"A?":"H","C":{"a":"DESKTOP_APP"},"D":{"a":"DESKTOP_APP","c":"en"},"E":{},"P":[],"Q":[],"R":false,"S":false}},"page":{"A":{"B":{"A?":"A","A":"TAGcbLa0hys","B":1},"C":{"A":1366.0,"B":768.0,"C":"D"},"Q":[],"R":[],"P":"en","D":"Roni Landing Page","E":"","F":["free","animated","tech","tech website","teal","white","navy","gradients","modern","modern","contemporary","current","modernized","state-of-the-art","latest","avant-garde","innovative","new","fresh","geometric","bright","vivid","colorful","neon","shapes","gradient","icons","mockup","","","tech"],"G":{},"Y":{},"a":[],"b":[],"V":[],"W":[],"A":[{"A?":"j","Z":{"A?":"A","A":"TAGcbLa0hys","B":1},"a":"PBnm0KG0Ntyjkp3k","R":false,"S":false,"U":false,"Q":{},"v":"B","t":[{"A?":"i","a":"PBKdqrJC7YPSwJG6","B":"Home","R":false,"S":false,"U":false,"Q":{},"K":4,"V":{"C":"E","G":{"A":641025.641025641},"H":{"A":256410.2564102564}},"W":[],"X":[],"H":[],"L":{},"C":{"A":1366.0,"B":768.0,"C":"D"},"G":{"A":"EAFSuZdtO6A","B":2,"C":1},"D":{"C":"#0a1a44","D":0.0,"F":false,"J":false,"G":false,"H":false},"r":[],"E":[{"A?":"I","A":-7.603316797232338,"B":-14.028557406076857,"D":1394.0571148121537,"C":783.2066335944645,"E":0.0,"F":0.0,"BA":[],"BB":[],"X":{"A?":"B","A":4,"B":{"D":"E","G":{"A":2631578.947368421},"H":{"A":1052631.5789473683}}},"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":false,"B":{"A":{"A":"MADWOHeLm0o","B":9},"B":{"A":0.0,"B":0.0,"D":1394.0571148121537,"C":783.2066335944645,"E":0.0},"E":0.0,"C":{"#7c2ae8":"#0a1a44"}},"D":0.0,"F":false,"J":false,"G":false,"H":false},"e":[]},{"A?":"I","A":107.79504132231426,"B":793.973012795657,"D":537.6,"C":537.6,"E":0.0,"F":0.0,"BA":[],"BB":[],"X":{"A?":"B","A":4,"B":{"D":"E","G":{"A":2631578.947368421},"H":{"A":1052631.5789473683}}},"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":false,"B":{"A":{"A":"MAEL5Bmn-RI","B":3},"B":{"A":0.0,"B":0.0,"D":537.6,"C":537.6,"E":0.0},"E":0.0,"C":{"#f9a01b":"#57e4ff"}},"D":0.0,"F":false,"J":false,"G":false,"H":false},"e":[]},{"A?":"J","A":76.80000000000013,"B":907.5173538049662,"D":310.5113179813817,"C":614.4,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":206.3,"C":408.2},"b":[{"A":"m174.2 2h-142.1c-15.4 0-27.9 12.5-27.9 27.9v348.3c0 15.4 12.5 27.9 27.9 27.9h142.1c15.4 0 27.9-12.5 27.9-27.9v-348.3c0-15.4-12.5-27.9-27.9-27.9zm-47.3 12.8c1.4 0 2.5 1.1 2.5 2.5s-1.1 2.5-2.5 2.5-2.5-1.1-2.5-2.5 1.2-2.5 2.5-2.5zm-36.9 0.8h24c0.9 0 1.7 0.7 1.7 1.7s-0.8 1.7-1.7 1.7h-24c-0.9 0-1.7-0.7-1.7-1.7s0.8-1.7 1.7-1.7zm101.9 364.2c0 9.1-7.4 16.5-16.5 16.5h-144.3c-9.1 0-16.5-7.4-16.5-16.5v-351c0-9.1 7.4-16.5 16.5-16.5h21.5v4.5c0 5.1 4.2 9.3 9.3 9.3h82.7c5.1 0 9.3-4.2 9.3-9.3v-4.5h21.4c9.1 0 16.5 7.4 16.5 16.5v351z","B":{"A":false,"C":"#142140","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0},{"A":"m175.3 12.3h-21.4v4.5c0 5.1-4.2 9.3-9.3 9.3h-82.6c-5.1 0-9.3-4.2-9.3-9.3v-4.5h-21.6c-9.1 0-16.5 7.4-16.5 16.5v351c0 9.1 7.4 16.5 16.5 16.5h144.2c9.1 0 16.5-7.4 16.5-16.5v-351c0.1-9.1-7.3-16.5-16.5-16.5z","B":{"A":true,"B":{"A":{"A":"MAGn_Lkuxbc","B":1},"B":{"A":12.300000000000011,"B":12.64045896995205,"D":181.12008375543525,"C":402.48907501207833,"E":0.0},"E":0.0,"C":{}},"D":0.0,"F":false,"J":false,"E":"photo","G":false,"H":false},"D":0.0},{"A":"m114 15.6h-24c-0.9 0-1.7 0.7-1.7 1.7s0.8 1.7 1.7 1.7h24c0.9 0 1.7-0.7 1.7-1.7s-0.8-1.7-1.7-1.7z","B":{"A":false,"C":"#4b4b4b","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0},{"A":"M126.9 14.8A2.5 2.5 0 1 0 126.9 19.8A2.5 2.5 0 1 0 126.9 14.8Z","B":{"A":false,"C":"#4b4b4b","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0},{"A":"m0 56.1v12.5c0 1.2 1 2.2 2.2 2.2v-16.8c-1.2 0-2.2 0.9-2.2 2.1z","B":{"A":false,"C":"#d8e6ed","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0},{"A":"m0 85.4v26c0 1.2 1 2.2 2.2 2.2v-30.3c-1.2 0-2.2 0.9-2.2 2.1z","B":{"A":false,"C":"#d8e6ed","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0},{"A":"m0 122.4v26c0 1.2 1 2.2 2.2 2.2v-30.4c-1.2 0-2.2 1-2.2 2.2z","B":{"A":false,"C":"#d8e6ed","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0},{"A":"m204.1 93.3v48.7c1.2 0 2.2-1 2.2-2.2v-44.3c0-1.2-1-2.2-2.2-2.2z","B":{"A":false,"C":"#d8e6ed","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0},{"A":"m204.1 93.3v-63.4c0-2.1-0.2-4.1-0.6-6-0.2-1-0.4-1.9-0.7-2.9-0.4-1.4-1-2.8-1.6-4.1-0.4-0.9-0.9-1.7-1.4-2.5s-1-1.6-1.6-2.4c-0.9-1.2-1.8-2.2-2.8-3.3-0.7-0.7-1.4-1.3-2.1-1.9-5.2-4.3-11.8-6.8-19-6.8h-142.2c-7.2 0-13.9 2.6-19 6.8-0.7 0.6-1.4 1.3-2.1 1.9-1 1-2 2.1-2.8 3.3-0.6 0.8-1.1 1.6-1.6 2.4s-1 1.7-1.4 2.5c-0.7 1.4-1.2 2.7-1.7 4.1-0.3 1-0.5 1.9-0.7 2.9-0.4 1.9-0.6 4-0.6 6v348.3c0 16.5 13.4 29.9 29.9 29.9h142.1c16.5 0 29.9-13.4 29.9-29.9v-284.9zm-2 0v285c0 15.4-12.5 27.9-27.9 27.9h-142.1c-15.4 0-27.9-12.5-27.9-27.9v-348.3c0-15.5 12.5-28 27.9-28h142.1c15.4 0 27.9 12.5 27.9 27.9v63.4z","B":{"A":false,"C":"#071332","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0}],"d":[],"f":[],"g":[]},{"A?":"H","A":552.7284225550239,"B":806.4851874057882,"D":230.46387932699648,"C":74.22062037221059,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"b":202.06433279835608,"a":65.07457992630441,"y":{},"c":[{"A?":"J","A":8.526512829121202E-14,"B":-4.263256414560601E-14,"D":202.06433279835605,"C":65.07457992630435,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":150.7,"C":150.7},"b":[{"A":"M140.9 150.7H9.8c-5.4 0-9.8-4.4-9.8-9.8V9.8C0 4.4 4.4 0 9.8 0h131.1c5.4 0 9.8 4.4 9.8 9.8v131.1c0 5.4-4.4 9.8-9.8 9.8z","B":{"C":"#ff5757","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0}],"d":[],"c":{"A":{"A":26.0,"B":26.0,"D":98.7,"C":98.7},"B":109.46620258500121,"C":0.0,"D":"A","E":"A"},"f":[],"g":[]},{"A?":"K","A":12.670619963152262,"B":60.901425978180896,"D":122.92714584709802,"C":39.73334,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"paragraph","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"Get it on\\nGoogle Play\\n"}],"B":[{"A?":"A","A":{"leading":{"B":"1100.0"},"font-size":{"B":"17.3334"},"font-family":{"B":"YAEnXHTFXhg,0"},"tracking":{"B":"-20.0"},"color":{"B":"#ffffff"}}},{"A?":"B","A":9},{"A?":"A","A":{"font-weight":{"B":"bold"}}},{"A?":"B","A":12},{"A?":"A","A":{"direction":{"B":"ltr"},"text-transform":{"B":"none"},"decoration":{"B":"none"},"list-level":{"B":"0.0"},"font-style":{"B":"normal"},"list-marker":{"B":"none"},"link":{"B":""},"style":{"B":"body"},"head-indent":{"B":"0.0"},"kerning":{"B":"0.0"},"spacing":{"B":"0.0"}}},{"A?":"B","A":1},{"A?":"A","A":{"direction":{},"kerning":{},"list-marker":{},"spacing":{},"color":{},"font-weight":{},"font-style":{},"text-transform":{},"font-family":{},"list-level":{},"font-size":{},"decoration":{},"style":{},"head-indent":{},"leading":{},"tracking":{},"link":{}}}]},"b":{"A":[]},"d":"B","l":false,"g":true,"h":"A"}],"d":[]},{"A?":"J","A":519.889434955539,"B":76.80000000000001,"D":340.5045529871353,"C":65.6779751989699,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"b":[{"A":"M0 0H64V64H0z","B":{"C":"#00c4cc","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":100.0}],"d":[],"c":{"A":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"B":67.26015861474278,"C":12.973427199796532,"D":"A","E":"A"},"e":{"A":false,"B":false},"f":[{"A":{"A":[{"A?":"A","A":"Download the App\\n"}],"B":[{"A?":"A","A":{"decoration":{"B":"underline"},"style":{"B":"body"},"head-indent":{"B":"0.0"},"leading":{"B":"1000.0"},"tracking":{"B":"0.0"},"link":{"B":"https://roniapp.my.canva.site"},"text-align":{"B":"center"},"kerning":{"B":"0.0"},"direction":{"B":"ltr"},"list-marker":{"B":"none"},"spacing":{"B":"0.0"},"color":{"B":"#000000"},"font-weight":{"B":"light"},"text-transform":{"B":"none"},"font-family":{"B":"YAFdJs2qTWQ,0"},"list-level":{"B":"0.0"},"font-size":{"B":"23.9538"}}},{"A?":"B","A":17},{"A?":"A","A":{"decoration":{},"style":{},"head-indent":{},"leading":{},"tracking":{},"link":{},"text-align":{},"kerning":{},"direction":{},"list-marker":{},"spacing":{},"color":{},"font-weight":{},"text-transform":{},"font-family":{},"list-level":{},"font-size":{}}}]},"B":{"A":[17]},"D":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"E":[4.0],"F":"B"}],"g":[],"h":{"A?":"H","A":65.6779751989699}},{"A?":"H","A":452.15894615844826,"B":806.4851874057882,"D":230.46387932699633,"C":74.2206203722104,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"b":202.06433279835608,"a":65.0745799263043,"y":{},"c":[{"A?":"J","A":-2.8421709430404007E-14,"B":7.105427357601002E-14,"D":202.06433279835605,"C":65.07457992630435,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":150.7,"C":150.7},"b":[{"A":"M140.9 150.7H9.8c-5.4 0-9.8-4.4-9.8-9.8V9.8C0 4.4 4.4 0 9.8 0h131.1c5.4 0 9.8 4.4 9.8 9.8v131.1c0 5.4-4.4 9.8-9.8 9.8z","B":{"C":"#ff5757","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0}],"d":[],"c":{"A":{"A":26.0,"B":26.0,"D":98.7,"C":98.7},"B":109.46620258500121,"C":0.0,"D":"A","E":"A"},"f":[],"g":[]},{"A?":"K","A":12.670619963152262,"B":60.90142597818078,"D":122.92714584709802,"C":39.73334,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"heading","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"Get it on the\\nApp Store\\n"}],"B":[{"A?":"A","A":{"leading":{"B":"1100.0"},"font-size":{"B":"17.3334"},"font-family":{"B":"YAEnXHTFXhg,0"},"tracking":{"B":"-20.0"},"color":{"B":"#ffffff"}}},{"A?":"B","A":13},{"A?":"A","A":{"font-weight":{"B":"bold"}}},{"A?":"B","A":10},{"A?":"A","A":{"direction":{"B":"ltr"},"text-transform":{"B":"none"},"decoration":{"B":"none"},"list-level":{"B":"0.0"},"font-style":{"B":"normal"},"list-marker":{"B":"none"},"link":{"B":""},"style":{"B":"body"},"head-indent":{"B":"0.0"},"kerning":{"B":"0.0"},"spacing":{"B":"0.0"}}},{"A?":"B","A":1},{"A?":"A","A":{"direction":{},"kerning":{},"list-marker":{},"spacing":{},"color":{},"font-weight":{},"font-style":{},"text-transform":{},"font-family":{},"list-level":{},"font-size":{},"decoration":{},"style":{},"head-indent":{},"leading":{},"tracking":{},"link":{}}}]},"b":{"A":[]},"d":"B","l":false,"g":true,"h":"A"},{"A?":"I","A":12.670619963152248,"B":13.04041098678075,"D":34.20246499733942,"C":39.08853142553076,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":false,"B":{"A":{"A":"MAD0an-VpLA","B":1},"B":{"A":0.0,"B":0.0,"D":34.20246499733942,"C":39.08853142553076,"E":0.0},"E":0.0,"C":{"#156cdd":"#ffffff"}},"D":0.0,"F":false,"J":false,"G":false,"H":false},"e":[]}],"d":[]},{"A?":"I","A":126.35731930634792,"B":76.80000000000001,"D":109.30718685210036,"C":109.30718685210036,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"B":{"A":{"A":"MAGn_GdqFQo","B":1},"B":{"A":-7.105427357601002E-15,"B":-7.105427357601002E-15,"D":109.30718685210037,"C":109.30718685210037,"E":0.0},"E":0.0,"C":{}},"D":0.0,"F":false,"J":false,"G":false,"H":false},"e":[]},{"A?":"I","A":569.3312049857586,"B":822.2770104605947,"D":40.24686097157319,"C":37.245115924110024,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"B":{"A":{"A":"MAGn_NwaoJ0","B":1},"B":{"A":-0.5323606035775832,"B":-0.6379080900372287,"D":41.116144357063085,"C":38.04956525709879,"E":-0.5999999999999999},"E":0.0,"C":{}},"D":0.0,"F":false,"J":false,"G":false,"H":false},"e":[10.0]},{"A?":"K","A":303.66450615844826,"B":76.80000000000001,"D":687.5116415050852,"C":148.49444,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"title","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"RONI App\\nKonkordansi Obat Interaktif.\\n"}],"B":[{"A?":"A","A":{"font-weight":{"B":"bold"},"color":{"B":"#ffffff"},"leading":{"B":"1100.0"},"font-size":{"B":"79.6107"},"font-family":{"B":"YAFdJs2qTWQ,0"}}},{"A?":"B","A":8},{"A?":"A","A":{"font-weight":{"B":"light"}}},{"A?":"B","A":1},{"A?":"A","A":{"font-size":{"B":"50.2781"}}},{"A?":"B","A":28},{"A?":"A","A":{"tracking":{"B":"0.0"},"text-transform":{"B":"none"}}},{"A?":"B","A":1},{"A?":"A","A":{"tracking":{},"color":{},"font-weight":{},"font-family":{},"font-size":{},"text-transform":{},"leading":{}}}]},"b":{"A":[9,29]},"d":"C","l":false,"g":false,"h":"A"},{"A?":"K","A":629.7283913223142,"B":806.4851874057882,"D":85.7874984741211,"C":15.66665,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"coming soon\\n"}],"B":[{"A?":"A","A":{"text-align":{"B":"center"},"font-kerning":{"B":"normal"},"leading":{"B":"1300.0"},"font-size":{"B":"13.3335"},"font-family":{"B":"YAFdJs2qTWQ,0"},"font-weight":{"B":"bold"},"color":{"B":"#0e87cd"}}},{"A?":"B","A":11},{"A?":"A","A":{"spacing":{"B":"0.0"},"text-transform":{"B":"none"},"tracking":{"B":"0.0"}}},{"A?":"B","A":1},{"A?":"A","A":{"tracking":{},"spacing":{},"font-family":{},"text-transform":{},"font-size":{},"leading":{},"font-kerning":{},"color":{},"font-weight":{},"text-align":{}}}]},"b":{"A":[12]},"j":{"A":[{"A":"neon","B":{"intensity":"0.5"}}],"B":[]},"d":"A","l":false,"g":false,"h":"B"},{"A?":"K","A":527.7206695428413,"B":806.4851874057882,"D":85.7874984741211,"C":15.66665,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"coming soon\\n"}],"B":[{"A?":"A","A":{"color":{"B":"#0e87cd"},"font-size":{"B":"13.3335"},"font-family":{"B":"YAFdJs2qTWQ,0"},"font-weight":{"B":"bold"},"leading":{"B":"1300.0"},"text-align":{"B":"center"},"font-kerning":{"B":"normal"}}},{"A?":"B","A":11},{"A?":"A","A":{"spacing":{"B":"0.0"},"text-transform":{"B":"none"},"tracking":{"B":"0.0"}}},{"A?":"B","A":1},{"A?":"A","A":{"color":{},"font-size":{},"font-family":{},"font-weight":{},"leading":{},"text-align":{},"font-kerning":{},"spacing":{},"text-transform":{},"tracking":{}}}]},"b":{"A":[12]},"j":{"A":[{"A":"neon","B":{"intensity":"0.5"}}],"B":[]},"d":"A","l":false,"h":"B"}],"I":[]},{"A?":"i","a":"PBDXFbCtzJjZt2G3","B":"Features","R":false,"S":false,"U":false,"Q":{},"K":4,"W":[],"X":[],"H":[],"L":{},"C":{"A":1366.0,"B":895.0,"C":"D"},"G":{"A":"EAFSuZdtO6A","B":2,"C":3},"D":{"C":"#fafafa","D":0.0,"F":false,"J":false,"G":false,"H":false},"r":[],"E":[{"A?":"K","A":137.77999699999998,"B":76.79999999999995,"D":1074.2508557381198,"C":170.720003,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"heading1","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"RONI App\\n(Konkordansi Obat Interaktif)\\n"}],"B":[{"A?":"A","A":{"font-weight":{"B":"bold"},"color":{"B":"#0a1a44"},"leading":{"B":"1110.0"},"font-size":{"B":"74.6667"},"font-family":{"B":"YAFdJs2qTWQ,0"}}},{"A?":"B","A":9},{"A?":"A","A":{"font-weight":{"B":"light"}}},{"A?":"B","A":29},{"A?":"A","A":{"tracking":{"B":"0.0"}}},{"A?":"B","A":1},{"A?":"A","A":{"leading":{},"color":{},"tracking":{},"font-weight":{},"font-size":{},"font-family":{}}}]},"b":{"A":[9,30]},"d":"A","l":false,"g":false,"h":"A"},{"A?":"H","A":465.1742770352709,"B":0.0,"D":455.3333333333334,"C":437.8257229647294,"E":0.0,"F":0.0,"BA":[],"BB":[],"X":{"A?":"B","A":6},"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"b":455.3333333333334,"a":437.8257229647294,"y":{},"c":[{"A?":"J","A":-8.526512829121202E-14,"B":0.0,"D":455.3333333333334,"C":437.8257229647295,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"b":[{"A":"M0 0H64V64H0z","B":{"A":false,"C":"#0a1a44","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0}],"d":[],"c":{"A":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"B":123.18253702052135,"C":118.44615664928108,"D":"A","E":"A"},"e":{"A":false,"B":false},"f":[{"A":{"A":[{"A?":"A","A":"\\n"}],"B":[{"A?":"A","A":{"font-size":{"B":"21.3333"},"font-style":{"B":"normal"},"font-family":{"B":"YAD1aU3sLnI,0"},"tracking":{"B":"0.0"},"leading":{"B":"1300.0"},"text-align":{"B":"center"},"font-weight":{"B":"bold"},"text-transform":{"B":"none"},"color":{"B":"#ffffff"}}},{"A?":"B","A":1},{"A?":"A","A":{"font-size":{},"font-style":{},"font-family":{},"tracking":{},"leading":{},"text-align":{},"font-weight":{},"text-transform":{},"color":{}}}]},"B":{"A":[]},"D":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"E":[4.0],"F":"B"}],"g":[],"h":{"A?":"H","A":437.8257229647295}},{"A?":"K","A":147.15904296472922,"B":66.07525917380445,"D":323.18281498572446,"C":213.86668,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"paragraph2","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"Aplikasi RONI merupakan inovasi digital yang dirancang untuk mengedukasi pasien tuberkulosis (TB) dalam menjalani pengobatan secara konsisten dan tepat. \\n\\n\\n\\n"}],"B":[{"A?":"A","A":{"font-weight":{"B":"light"},"color":{"B":"#ffffff"},"leading":{"B":"1300.0"},"font-size":{"B":"21.3332"},"font-family":{"B":"YAFdJs2qTWQ,0"}}},{"A?":"B","A":153},{"A?":"A","A":{"tracking":{"B":"-20.0"}}},{"A?":"B","A":3},{"A?":"A","A":{"text-transform":{"B":"none"}}},{"A?":"B","A":1},{"A?":"A","A":{"tracking":{},"color":{},"font-weight":{},"font-family":{},"font-size":{},"text-transform":{},"leading":{}}}]},"b":{"A":[32,29,32,32,29,1,1,1]},"d":"A","l":false,"g":false,"h":"A"},{"A?":"J","A":46.19797965336817,"B":66.07525917380445,"D":59.21302830554477,"C":59.21302830554477,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"b":[{"A":"M32 0A32 32 0 1 0 32 64A32 32 0 1 0 32 0Z","B":{"A":false,"C":"#00c4cc","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0}],"d":[],"c":{"A":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"B":64.0,"C":64.0,"D":"A","E":"A"},"e":{"A":false,"B":false},"f":[{"A":{"A":[{"A?":"A","A":"\\n"}],"B":[{"A?":"A","A":{"font-size":{"B":"21.3333"},"font-style":{"B":"normal"},"font-family":{"B":"YAD1aU3sLnI,0"},"tracking":{"B":"0.0"},"leading":{"B":"1300.0"},"text-align":{"B":"center"},"font-weight":{"B":"bold"},"text-transform":{"B":"none"},"color":{"B":"#000000"}}},{"A?":"B","A":1},{"A?":"A","A":{"font-size":{},"font-style":{},"font-family":{},"tracking":{},"leading":{},"text-align":{},"font-weight":{},"text-transform":{},"color":{}}}]},"B":{"A":[]},"D":{"A":6.0,"B":6.0,"D":52.0,"C":52.0},"E":[4.0],"F":"B"}],"g":[],"h":{"A?":"H","A":59.21302830554477}},{"A?":"K","A":63.371158806140556,"B":83.87317957657683,"D":23.6171875,"C":24.86667,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"heading4","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"01\\n"}],"B":[{"A?":"A","A":{"text-align":{"B":"center"},"font-family":{"B":"YAFdJs2qTWQ,0"},"font-size":{"B":"21.3333"},"font-weight":{"B":"medium"},"color":{"B":"#0a1a44"},"leading":{"B":"1300.0"}}},{"A?":"B","A":2},{"A?":"A","A":{"spacing":{"B":"0.0"},"text-transform":{"B":"none"},"tracking":{"B":"0.0"}}},{"A?":"B","A":1},{"A?":"A","A":{"font-size":{},"font-family":{},"spacing":{},"tracking":{},"leading":{},"text-align":{},"font-weight":{},"text-transform":{},"color":{}}}]},"b":{"A":[3]},"d":"A","l":false,"g":true}],"d":[]},{"A?":"H","A":465.1742770352706,"B":455.33333333333326,"D":455.33333333333354,"C":437.82572296472927,"E":0.0,"F":0.0,"BA":[],"BB":[],"X":{"A?":"B","A":6},"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"b":455.33333333333354,"a":437.82572296472927,"y":{},"c":[{"A?":"J","A":-2.8421709430404007E-14,"B":5.6843418860808015E-14,"D":455.3333333333334,"C":437.8257229647293,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"b":[{"A":"M0 0H64V64H0z","B":{"A":false,"C":"#071332","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0}],"d":[],"c":{"A":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"B":123.18253702052135,"C":118.44615664928102,"D":"A","E":"A"},"e":{"A":false,"B":false},"f":[{"A":{"A":[{"A?":"A","A":"\\n"}],"B":[{"A?":"A","A":{"text-align":{"B":"center"},"leading":{"B":"1300.0"},"tracking":{"B":"0.0"},"font-family":{"B":"YAD1aU3sLnI,0"},"font-size":{"B":"21.3333"},"font-style":{"B":"normal"},"color":{"B":"#ffffff"},"text-transform":{"B":"none"},"font-weight":{"B":"bold"}}},{"A?":"B","A":1},{"A?":"A","A":{"text-align":{},"leading":{},"tracking":{},"font-family":{},"font-size":{},"font-style":{},"color":{},"text-transform":{},"font-weight":{}}}]},"B":{"A":[]},"D":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"E":[4.0],"F":"B"}],"g":[],"h":{"A?":"H","A":437.8257229647293}},{"A?":"K","A":147.1590429647295,"B":69.78583714776579,"D":315.76165903780236,"C":213.86668,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"paragraph2","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"Sebagai tenaga medis yang aktif dalam edukasi pasien, dr. Roni menyadari pentingnya pemahaman pasien terhadap terapi jangka panjang seperti pengobatan TB.\\n\\n\\n"}],"B":[{"A?":"A","A":{"font-weight":{"B":"light"},"color":{"B":"#57e4ff"},"leading":{"B":"1300.0"},"font-size":{"B":"21.3332"},"font-family":{"B":"YAFdJs2qTWQ,0"}}},{"A?":"B","A":154},{"A?":"A","A":{"tracking":{"B":"-20.0"},"text-transform":{"B":"none"}}},{"A?":"B","A":3},{"A?":"A","A":{"tracking":{},"color":{},"font-weight":{},"font-family":{},"font-size":{},"text-transform":{},"leading":{}}}]},"b":{"A":[32,31,21,26,30,15,1,1]},"d":"A","l":false,"g":false,"h":"A"},{"A?":"J","A":46.197979653368456,"B":69.78583714776579,"D":59.21302830554477,"C":59.21302830554477,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"b":[{"A":"M32 0A32 32 0 1 0 32 64A32 32 0 1 0 32 0Z","B":{"A":false,"C":"#00c4cc","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0}],"d":[],"c":{"A":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"B":64.0,"C":64.0,"D":"A","E":"A"},"e":{"A":false,"B":false},"f":[{"A":{"A":[{"A?":"A","A":"\\n"}],"B":[{"A?":"A","A":{"text-align":{"B":"center"},"leading":{"B":"1300.0"},"tracking":{"B":"0.0"},"font-family":{"B":"YAD1aU3sLnI,0"},"font-size":{"B":"21.3333"},"font-style":{"B":"normal"},"color":{"B":"#000000"},"text-transform":{"B":"none"},"font-weight":{"B":"bold"}}},{"A?":"B","A":1},{"A?":"A","A":{"text-align":{},"leading":{},"tracking":{},"font-family":{},"font-size":{},"font-style":{},"color":{},"text-transform":{},"font-weight":{}}}]},"B":{"A":[]},"D":{"A":6.0,"B":6.0,"D":52.0,"C":52.0},"E":[4.0],"F":"B"}],"g":[],"h":{"A?":"H","A":59.21302830554477}},{"A?":"K","A":63.37115880614084,"B":82.61848785819814,"D":33.54772688468006,"C":24.86667,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"heading4","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"02\\n"}],"B":[{"A?":"A","A":{"text-align":{"B":"center"},"font-family":{"B":"YAFdJs2qTWQ,0"},"font-size":{"B":"21.3333"},"font-weight":{"B":"medium"},"color":{"B":"#0a1a44"},"leading":{"B":"1300.0"}}},{"A?":"B","A":2},{"A?":"A","A":{"spacing":{"B":"0.0"},"text-transform":{"B":"none"},"tracking":{"B":"0.0"}}},{"A?":"B","A":1},{"A?":"A","A":{"font-size":{},"font-family":{},"spacing":{},"tracking":{},"leading":{},"text-align":{},"font-weight":{},"text-transform":{},"color":{}}}]},"b":{"A":[]},"d":"A","l":false,"g":true,"h":"A"}],"d":[]},{"A?":"H","A":465.17427703527073,"B":910.6666666666667,"D":455.3333333333335,"C":437.8257229647293,"E":0.0,"F":0.0,"BA":[],"BB":[],"X":{"A?":"B","A":6},"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"b":455.3333333333335,"a":437.8257229647293,"y":{},"c":[{"A?":"J","A":-1.7053025658242404E-13,"B":2.8421709430404007E-14,"D":455.3333333333334,"C":437.8257229647294,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"b":[{"A":"M0 0H64V64H0z","B":{"A":false,"C":"#0a1a44","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0}],"d":[],"c":{"A":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"B":123.18253702052135,"C":118.44615664928102,"D":"A","E":"A"},"e":{"A":false,"B":false},"f":[{"A":{"A":[{"A?":"A","A":"\\n"}],"B":[{"A?":"A","A":{"text-align":{"B":"center"},"leading":{"B":"1300.0"},"tracking":{"B":"0.0"},"font-family":{"B":"YAD1aU3sLnI,0"},"font-size":{"B":"21.3333"},"font-style":{"B":"normal"},"color":{"B":"#ffffff"},"text-transform":{"B":"none"},"font-weight":{"B":"bold"}}},{"A?":"B","A":1},{"A?":"A","A":{"text-align":{},"leading":{},"tracking":{},"font-family":{},"font-size":{},"font-style":{},"color":{},"text-transform":{},"font-weight":{}}}]},"B":{"A":[]},"D":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"E":[4.0],"F":"B"}],"g":[],"h":{"A?":"H","A":437.8257229647294}},{"A?":"K","A":147.1590429647294,"B":75.35170410870683,"D":304.62992511591983,"C":213.86668,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"paragraph2","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"Dengan RONI, diharapkan informasi antara pasien dan tenaga kesehatan menjadi lebih terbuka dan interaktif, serta membantu program pengendalian TB secara lebih luas di Indonesia.\\n\\n"}],"B":[{"A?":"A","A":{"font-weight":{"B":"light"},"color":{"B":"#ffffff"},"leading":{"B":"1300.0"},"font-size":{"B":"21.3332"},"font-family":{"B":"YAFdJs2qTWQ,0"}}},{"A?":"B","A":177},{"A?":"A","A":{"tracking":{"B":"-20.0"},"text-transform":{"B":"none"}}},{"A?":"B","A":2},{"A?":"A","A":{"tracking":{},"color":{},"font-weight":{},"font-family":{},"font-size":{},"text-transform":{},"leading":{}}}]},"b":{"A":[24,28,25,30,23,29,19,1]},"d":"A","l":false,"g":false,"h":"A"},{"A?":"J","A":46.19797965336834,"B":75.35170410870688,"D":59.21302830554477,"C":59.21302830554477,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"b":[{"A":"M32 0A32 32 0 1 0 32 64A32 32 0 1 0 32 0Z","B":{"A":false,"C":"#00c4cc","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0}],"d":[],"c":{"A":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"B":64.0,"C":64.0,"D":"A","E":"A"},"e":{"A":false,"B":false},"f":[{"A":{"A":[{"A?":"A","A":"\\n"}],"B":[{"A?":"A","A":{"text-align":{"B":"center"},"leading":{"B":"1300.0"},"tracking":{"B":"0.0"},"font-family":{"B":"YAD1aU3sLnI,0"},"font-size":{"B":"21.3333"},"font-style":{"B":"normal"},"color":{"B":"#000000"},"text-transform":{"B":"none"},"font-weight":{"B":"bold"}}},{"A?":"B","A":1},{"A?":"A","A":{"text-align":{},"leading":{},"tracking":{},"font-family":{},"font-size":{},"font-style":{},"color":{},"text-transform":{},"font-weight":{}}}]},"B":{"A":[]},"D":{"A":6.0,"B":6.0,"D":52.0,"C":52.0},"E":[4.0],"F":"B"}],"g":[],"h":{"A?":"H","A":59.21302830554477}},{"A?":"K","A":63.37115880614073,"B":88.18435481913923,"D":33.54772688468006,"C":24.86667,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"heading4","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"03\\n"}],"B":[{"A?":"A","A":{"text-align":{"B":"center"},"font-family":{"B":"YAFdJs2qTWQ,0"},"font-size":{"B":"21.3333"},"font-weight":{"B":"medium"},"color":{"B":"#0a1a44"},"leading":{"B":"1300.0"}}},{"A?":"B","A":2},{"A?":"A","A":{"spacing":{"B":"0.0"},"text-transform":{"B":"none"},"tracking":{"B":"0.0"}}},{"A?":"B","A":1},{"A?":"A","A":{"font-size":{},"font-family":{},"spacing":{},"tracking":{},"leading":{},"text-align":{},"font-weight":{},"text-transform":{},"color":{}}}]},"b":{"A":[]},"d":"A","l":false,"g":true,"h":"A"}],"d":[]}],"I":[]},{"A?":"i","a":"PBGYT9Ll92rGMZS4","B":"Company","R":false,"S":false,"U":false,"Q":{},"K":4,"W":[],"X":[],"H":[],"L":{},"C":{"A":1366.0,"B":768.0,"C":"D"},"G":{"A":"EAFSuZdtO6A","B":2,"C":5},"D":{"C":"#fafafa","D":0.0,"F":false,"J":false,"G":false,"H":false},"r":[],"E":[{"A?":"I","A":0.0,"B":-0.9902912621359974,"D":1366.990291262136,"C":768.0,"E":0.0,"F":0.0,"BA":[],"BB":[],"X":{"A?":"B","A":4,"B":{"D":"E","G":{"A":1111111.111111111},"H":{"A":444444.44444444444}}},"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":false,"B":{"A":{"A":"MADWOHeLm0o","B":9},"B":{"A":0.0,"B":0.0,"D":1366.990291262136,"C":768.0,"E":0.0},"E":0.0,"C":{"#7c2ae8":"#0a1a44"}},"D":0.0,"F":false,"J":false,"G":false,"H":false},"e":[]},{"A?":"K","A":76.59815935817647,"B":773.9091603620427,"D":476.21608657303864,"C":236.93334,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"heading1","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"dr. Roni Permana, Sp.P(K), FISR\\n"}],"B":[{"A?":"A","A":{"font-family":{"B":"YAFdJs2qTWQ,0"},"color":{"B":"#ffffff"},"font-weight":{"B":"light"},"font-size":{"B":"74.6667"}}},{"A?":"B","A":31},{"A?":"A","A":{"leading":{"B":"1000.0"},"tracking":{"B":"0.0"}}},{"A?":"B","A":1},{"A?":"A","A":{"leading":{},"color":{},"tracking":{},"font-weight":{},"font-size":{},"font-family":{}}}]},"b":{"A":[9,9,14]},"d":"C","l":false,"g":false,"h":"A"},{"A?":"K","A":375.80183064182376,"B":773.9091603620429,"D":515.2908396379572,"C":179.60001,"E":0.0,"F":0.0,"BA":[],"BB":[],"X":{"A?":"A"},"Q":false,"S":false,"N":"paragraph1","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"dr. Roni Permana, Sp.P(K), FISR, seorang dokter spesialis paru yang telah berpengalaman dalam menangani berbagai kasus penyakit pernapasan dengan pendekatan yang mengutamakan keselamatan dan mutu pelayanan pasien.\\n\\n"}],"B":[{"A?":"A","A":{"font-weight":{"B":"light"},"color":{"B":"#ffffff"},"leading":{"B":"1500.0"},"font-size":{"B":"21.3333"},"font-family":{"B":"YAFdJs2qTWQ,0"}}},{"A?":"B","A":213},{"A?":"A","A":{"tracking":{"B":"0.0"},"link":{"B":""},"style":{"B":"body"},"head-indent":{"B":"0.0"},"kerning":{"B":"0.0"},"text-align":{"B":"start"},"direction":{"B":"ltr"},"text-transform":{"B":"none"},"decoration":{"B":"none"},"list-level":{"B":"0.0"},"list-marker":{"B":"none"}}},{"A?":"B","A":2},{"A?":"A","A":{"font-family":{},"color":{},"text-align":{},"leading":{},"list-marker":{},"kerning":{},"text-transform":{},"decoration":{},"style":{},"list-level":{},"font-weight":{},"tracking":{},"head-indent":{},"link":{},"font-size":{},"direction":{}}}]},"b":{"A":[48,46,45,36,39,1]},"d":"A","l":false,"g":false,"h":"A"},{"A?":"H","A":117.29943064182362,"B":76.8,"D":606.2,"C":548.0048000000002,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"b":606.2,"a":548.0048000000002,"y":{},"c":[{"A?":"J","A":0.0,"B":-5.6843418860808015E-14,"D":606.2000000000002,"C":548.0048000000002,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":500.0,"C":452.0},"b":[{"A":"M0,42.7v145.7C0,211.9,19.1,231,42.7,231h47.7c23.6,0,42.7,19.1,42.7,42.7v135.7c0,23.6,19.1,42.7,42.7,42.7h107.6  c10.7,0,21.1-4.1,29-11.3l174-161c8.7-8.1,13.7-19.4,13.7-31.3V42.7C500,19.1,480.9,0,457.3,0H42.7C19.1,0,0,19.1,0,42.7z","B":{"A":true,"B":{"A":{"A":"MAGn_GQg3Pk","B":1},"B":{"A":-25.442596153846154,"B":0.0,"D":500.09999999999997,"C":502.9851923076923,"E":0.0},"E":0.0,"C":{}},"D":0.0,"F":false,"J":false,"E":"photo","G":false,"H":false},"D":0.0}],"d":[],"f":[],"g":[]},{"A?":"I","A":323.4292316467381,"B":370.9010169400424,"D":224.16724913807428,"C":224.57556835326207,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"illustration","P":[],"5":{},"T":{},"W":{},"a":{"A":false,"B":{"A":{"A":"MAFICw1xfuo","B":1},"B":{"A":0.0,"B":-2.8421709430404007E-14,"D":224.16724913807434,"C":224.57556835326207,"E":0.0},"E":0.0,"C":{"#00a32e":"#235a86","#edff06":"#57e4ff"}},"D":0.0,"F":false,"J":false,"G":false,"H":false},"e":[]}],"d":[]}],"I":[]},{"A?":"i","a":"PBm52VJ29QzldfRj","B":"Contact","R":false,"S":false,"U":false,"Q":{},"K":5,"V":{"C":"B","G":{"A":602409.638554217}},"W":[],"X":[],"H":[],"L":{},"C":{"A":1366.0,"B":768.0,"C":"D"},"G":{"A":"EAFSuZdtO6A","B":2,"C":6},"D":{"C":"#142140","D":0.0,"F":false,"J":false,"G":false,"H":false},"r":[],"E":[{"A?":"H","A":81.17427703527062,"B":76.8,"D":551.9438025074319,"C":146.8930358767107,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"b":551.9438025074319,"a":146.8930358767107,"y":{},"c":[{"A?":"J","A":0.0,"B":4.547473508864641E-13,"D":551.9438025074318,"C":146.8930358767107,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"b":[{"A":"M0 0H64V64H0z","B":{"A":false,"C":"#071332","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0}],"d":[],"c":{"A":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"B":149.31882405333607,"C":39.73936346253225,"D":"A","E":"A"},"e":{"A":false,"B":false},"f":[{"A":{"A":[{"A?":"A","A":"\\n"}],"B":[{"A?":"A","A":{"font-style":{"B":"normal"},"font-size":{"B":"21.3333"},"font-family":{"B":"YAD1aU3sLnI,0"},"tracking":{"B":"0.0"},"leading":{"B":"1300.0"},"text-align":{"B":"center"},"font-weight":{"B":"bold"},"text-transform":{"B":"none"},"color":{"B":"#ffffff"}}},{"A?":"B","A":1},{"A?":"A","A":{"font-style":{},"font-size":{},"font-family":{},"tracking":{},"leading":{},"text-align":{},"font-weight":{},"text-transform":{},"color":{}}}]},"B":{"A":[]},"D":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"E":[4.0],"F":"B"}],"g":[],"h":{"A?":"H","A":146.8930358767107}},{"A?":"K","A":27.112316061853242,"B":37.68560793238501,"D":473.9962000775491,"C":88.93334,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"heading1","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"Contact\\n"}],"B":[{"A?":"A","A":{"font-family":{"B":"YAFdJs2qTWQ,0"},"font-size":{"B":"74.6667"},"leading":{"B":"1000.0"},"color":{"B":"#57e4ff"},"font-weight":{"B":"light"}}},{"A?":"B","A":7},{"A?":"A","A":{"tracking":{"B":"0.0"}}},{"A?":"B","A":1},{"A?":"A","A":{"font-family":{},"font-size":{},"font-weight":{},"tracking":{},"color":{},"leading":{}}}]},"b":{"A":[]},"d":"A","l":false,"g":true,"h":"A"}],"d":[]},{"A?":"K","A":312.9766206821639,"B":114.48560793238491,"D":359.85967357656347,"C":24.600009999999997,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"paragraph1","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"(123) 456-7890\\n"}],"B":[{"A?":"A","A":{"font-family":{"B":"YAFdJs2qTWQ,0"},"font-size":{"B":"21.3333"},"leading":{"B":"1500.0"},"color":{"B":"#0a1a44"},"font-weight":{"B":"light"}}},{"A?":"B","A":14},{"A?":"A","A":{"list-marker":{"B":"none"},"direction":{"B":"ltr"},"decoration":{"B":"none"},"tracking":{"B":"0.0"},"text-align":{"B":"start"},"list-level":{"B":"0.0"},"style":{"B":"body"},"spacing":{"B":"0.0"},"link":{"B":""},"head-indent":{"B":"0.0"},"text-transform":{"B":"none"},"kerning":{"B":"0.0"}}},{"A?":"B","A":1},{"A?":"A","A":{"font-size":{},"list-level":{},"font-family":{},"text-transform":{},"font-weight":{},"color":{},"spacing":{},"list-marker":{},"direction":{},"kerning":{},"text-align":{},"link":{},"tracking":{},"leading":{},"head-indent":{},"style":{},"decoration":{}}}]},"b":{"A":[15]},"d":"B","l":false,"g":true,"h":"A"},{"A?":"K","A":265.4549372685094,"B":114.48560793238491,"D":359.85967357656347,"C":28.80002,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"heading3","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"Phone\\n"}],"B":[{"A?":"A","A":{"font-family":{"B":"YAFdJs2qTWQ,0"},"font-size":{"B":"24.0001"},"font-weight":{"B":"medium"},"tracking":{"B":"93.0"},"color":{"B":"#0a1a44"},"leading":{"B":"1000.0"}}},{"A?":"B","A":6},{"A?":"A","A":{"font-family":{},"font-size":{},"font-weight":{},"tracking":{},"color":{},"leading":{}}}]},"b":{"A":[]},"d":"B","l":false,"g":true,"h":"A"},{"A?":"J","A":235.10696412328923,"B":76.80000000000047,"D":551.9438025074318,"C":146.8930358767107,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"b":[{"A":"M0 0H64V64H0z","B":{"A":false,"C":"#ffffff","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0}],"d":[],"c":{"A":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"B":149.31882405333607,"C":39.73936346253225,"D":"A","E":"A"},"e":{"A":false,"B":false},"f":[{"A":{"A":[{"A?":"A","A":"\\n"}],"B":[{"A?":"A","A":{"font-style":{"B":"normal"},"font-size":{"B":"21.3333"},"font-family":{"B":"YAD1aU3sLnI,0"},"tracking":{"B":"0.0"},"leading":{"B":"1300.0"},"text-align":{"B":"center"},"font-weight":{"B":"bold"},"text-transform":{"B":"none"},"color":{"B":"#ffffff"}}},{"A?":"B","A":1},{"A?":"A","A":{"font-style":{},"font-size":{},"font-family":{},"tracking":{},"leading":{},"text-align":{},"font-weight":{},"text-transform":{},"color":{}}}]},"B":{"A":[]},"D":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"E":[4.0],"F":"B"}],"g":[],"h":{"A?":"H","A":146.8930358767107}},{"A?":"J","A":386.0,"B":76.80000000000047,"D":551.9438025074318,"C":146.8930358767107,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"b":[{"A":"M0 0H64V64H0z","B":{"A":false,"C":"#57e4ff","D":0.0,"F":false,"J":false,"G":false,"H":false},"D":0.0}],"d":[],"c":{"A":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"B":149.31882405333607,"C":39.73936346253225,"D":"A","E":"A"},"e":{"A":false,"B":false},"f":[{"A":{"A":[{"A?":"A","A":"\\n"}],"B":[{"A?":"A","A":{"font-style":{"B":"normal"},"font-size":{"B":"21.3333"},"font-family":{"B":"YAD1aU3sLnI,0"},"tracking":{"B":"0.0"},"leading":{"B":"1300.0"},"text-align":{"B":"center"},"font-weight":{"B":"bold"},"text-transform":{"B":"none"},"color":{"B":"#ffffff"}}},{"A?":"B","A":1},{"A?":"A","A":{"font-style":{},"font-size":{},"font-family":{},"tracking":{},"leading":{},"text-align":{},"font-weight":{},"text-transform":{},"color":{}}}]},"B":{"A":[]},"D":{"A":0.0,"B":0.0,"D":64.0,"C":64.0},"E":[4.0],"F":"B"}],"g":[],"h":{"A?":"H","A":146.8930358767107}},{"A?":"I","A":430.21816288330933,"B":513.3732187164485,"D":58.456710110092146,"C":58.456710110092146,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"icon","P":[],"5":{},"T":{},"W":{},"a":{"A":false,"B":{"A":{"A":"MAE9MLqxm-0","B":1},"B":{"A":0.0,"B":0.0,"D":58.456710110092146,"C":58.456710110092146,"E":0.0},"E":0.0,"C":{"#000000":"#0a1a44"}},"D":0.0,"F":false,"J":false,"G":false,"H":false},"e":[]},{"A?":"I","A":430.21816288330933,"B":345.98678708711344,"D":58.456710110092146,"C":58.456710110092146,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"icon","P":[],"5":{},"T":{},"W":{},"a":{"A":false,"B":{"A":{"A":"MAE9MPw9s3g","B":1},"B":{"A":0.0,"B":0.0,"D":58.456710110092146,"C":58.456710110092146,"E":0.0},"E":0.0,"C":{"#000000":"#0a1a44"}},"D":0.0,"F":false,"J":false,"G":false,"H":false},"e":[]},{"A?":"I","A":430.21816288330933,"B":429.4434971972056,"D":58.456710110092146,"C":58.456710110092146,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"icon","P":[],"5":{},"T":{},"W":{},"a":{"A":false,"B":{"A":{"A":"MAE9MOa_Ldk","B":1},"B":{"A":0.0,"B":0.0,"D":58.456710110092146,"C":58.456710110092146,"E":0.0},"E":0.0,"C":{"#000000":"#0a1a44"}},"D":0.0,"F":false,"J":false,"G":false,"H":false},"e":[]},{"A?":"I","A":237.10696412328923,"B":683.0,"D":297.78607175342154,"C":297.78607175342154,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"P":[],"5":{},"T":{},"W":{},"a":{"B":{"A":{"A":"MAGn_GdqFQo","B":1},"B":{"A":0.0,"B":0.0,"D":297.78607175342154,"C":297.78607175342154,"E":0.0},"E":0.0,"C":{}},"D":0.0,"F":false,"J":false,"G":false,"H":false},"e":[]},{"A?":"K","A":315.4136153058401,"B":114.48560793238497,"D":359.85967357656347,"C":24.600009999999997,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"paragraph1","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"permanaroni13@yahoo.com\\n"}],"B":[{"A?":"A","A":{"font-weight":{"B":"light"},"color":{"B":"#0a1a44"},"leading":{"B":"1500.0"},"font-size":{"B":"21.3333"},"font-family":{"B":"YAFdJs2qTWQ,0"}}},{"A?":"B","A":23},{"A?":"A","A":{"style":{"B":"body"},"text-align":{"B":"start"},"list-marker":{"B":"none"},"list-level":{"B":"0.0"},"text-transform":{"B":"none"},"spacing":{"B":"0.0"},"kerning":{"B":"0.0"},"head-indent":{"B":"0.0"},"direction":{"B":"ltr"},"tracking":{"B":"0.0"}}},{"A?":"B","A":1},{"A?":"A","A":{"text-align":{},"color":{},"head-indent":{},"font-family":{},"font-size":{},"tracking":{},"spacing":{},"font-weight":{},"direction":{},"style":{},"kerning":{},"list-level":{},"leading":{},"text-transform":{},"list-marker":{}}}]},"b":{"A":[24]},"d":"B","l":false,"g":false,"h":"A"},{"A?":"K","A":267.8919318921856,"B":114.48560793238497,"D":359.85967357656347,"C":28.80002,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"heading3","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"Email\\n"}],"B":[{"A?":"A","A":{"font-family":{"B":"YAFdJs2qTWQ,0"},"font-size":{"B":"24.0001"},"font-weight":{"B":"medium"},"tracking":{"B":"93.0"},"color":{"B":"#0a1a44"},"leading":{"B":"1000.0"}}},{"A?":"B","A":6},{"A?":"A","A":{"font-family":{},"font-size":{},"font-weight":{},"tracking":{},"color":{},"leading":{}}}]},"b":{"A":[]},"d":"B","l":false,"g":true,"h":"A"},{"A?":"K","A":445.04650793835526,"B":114.48560793238505,"D":109.01143782627247,"C":28.80002,"E":0.0,"F":0.0,"BA":[],"BB":[],"Q":false,"S":false,"N":"heading3","P":[],"5":{},"T":{},"W":{},"a":{"A":[{"A?":"A","A":"Social\\n"}],"B":[{"A?":"A","A":{"font-family":{"B":"YAFdJs2qTWQ,0"},"font-size":{"B":"24.0001"},"font-weight":{"B":"medium"},"tracking":{"B":"93.0"},"color":{"B":"#0a1a44"},"leading":{"B":"1000.0"}}},{"A?":"B","A":7},{"A?":"A","A":{"font-family":{},"font-size":{},"font-weight":{},"tracking":{},"color":{},"leading":{}}}]},"b":{"A":[]},"d":"A","l":false,"g":true,"h":"A"}],"I":[]}],"u":[],"L":{}}],"I":[]},"Z":{"A?":"E","M":"en","e":false,"f":{"A":"YAFdJs2qTWQ-0","B":"#0a1a44","C":"#ffffff"},"g":[{"A?":"A","K":"PBnm0KG0Ntyjkp3k","e":{"A":true}}]},"B":[{"A":"YACgEZ1cb1Q","B":0,"C":"Arimo","D":[{"style":"ITALICS","files":[{"url":"_assets/fonts/d257a7100844bc3f98c9021168b6249e.woff2","format":"WOFF2","unicodeRanges":[],"sizeBytes":201132},{"url":"_assets/fonts/ac9b8a560f98d1757a4565a2419d33c3.woff","format":"WOFF","unicodeRanges":[],"sizeBytes":240632},{"url":"_assets/fonts/79d14bb61301a10c73c6cb293c29b309.otf","format":"OTF","unicodeRanges":[],"sizeBytes":440740}],"subsettedFiles":[],"scriptSubsetFiles":[],"metadata":{"head":{"unitsPerEm":2048,"yMin":-621,"yMax":2077},"hhea":{"ascender":1854,"descender":-434,"lineGap":67},"os2":{"sTypoAscender":1491,"sTypoDescender":-425,"sTypoLineGap":307,"usWinAscent":1854,"usWinDescent":434,"fsSelection":1}}},{"style":"REGULAR","files":[{"url":"_assets/fonts/4ff8a742aa834e35f10ead140b735c45.woff","format":"WOFF","unicodeRanges":[],"sizeBytes":234380},{"url":"_assets/fonts/f8f199f09526f79e87644ed227e0f651.woff2","format":"WOFF2","unicodeRanges":[],"sizeBytes":194188},{"url":"_assets/fonts/daee28464eba92254cb149feea6599e3.otf","format":"OTF","unicodeRanges":[],"sizeBytes":436180}],"subsettedFiles":[],"scriptSubsetFiles":[],"metadata":{"head":{"unitsPerEm":2048,"yMin":-621,"yMax":2007},"hhea":{"ascender":1854,"descender":-434,"lineGap":67},"os2":{"sTypoAscender":1491,"sTypoDescender":-431,"sTypoLineGap":307,"usWinAscent":1854,"usWinDescent":434,"fsSelection":64}}},{"style":"BOLD_ITALICS","files":[{"url":"_assets/fonts/4de29305db46625343735e840e3d27aa.otf","format":"OTF","unicodeRanges":[],"sizeBytes":435028},{"url":"_assets/fonts/7fc2786f9023d4d812357cb787e9ad4b.woff","format":"WOFF","unicodeRanges":[],"sizeBytes":237660},{"url":"_assets/fonts/1060345c54d396e76d73f1da7ee200bd.woff2","format":"WOFF2","unicodeRanges":[],"sizeBytes":203232}],"subsettedFiles":[],"scriptSubsetFiles":[],"metadata":{"head":{"unitsPerEm":2048,"yMin":-771,"yMax":2109},"hhea":{"ascender":1854,"descender":-434,"lineGap":67},"os2":{"sTypoAscender":1491,"sTypoDescender":-431,"sTypoLineGap":307,"usWinAscent":1854,"usWinDescent":434,"fsSelection":33}}},{"style":"BOLD","files":[{"url":"_assets/fonts/9fd726aeae98b22824f0dc8947036e77.woff","format":"WOFF","unicodeRanges":[],"sizeBytes":234696},{"url":"_assets/fonts/0bb563f2f60ffd4e62b64cb021c33776.otf","format":"OTF","unicodeRanges":[],"sizeBytes":438516},{"url":"_assets/fonts/98c4d2c0223fc8474641c77f923528e9.woff2","format":"WOFF2","unicodeRanges":[],"sizeBytes":194064}],"subsettedFiles":[],"scriptSubsetFiles":[],"metadata":{"head":{"unitsPerEm":2048,"yMin":-771,"yMax":2116},"hhea":{"ascender":1854,"descender":-434,"lineGap":67},"os2":{"sTypoAscender":1491,"sTypoDescender":-431,"sTypoLineGap":307,"usWinAscent":1854,"usWinDescent":434,"fsSelection":32}}}],"E":false},{"A":"YAEnXHTFXhg","B":0,"C":"TT Commons Pro Expanded","D":[{"style":"BOLD","files":[{"url":"_assets/fonts/bce029266d39f22860f649cd544f5d9c.otf","format":"OTF","unicodeRanges":[],"sizeBytes":208884},{"url":"_assets/fonts/039a2e9110898bb4bbd0c6795df326b4.woff","format":"WOFF","unicodeRanges":[],"sizeBytes":100720},{"url":"_assets/fonts/9c2c6aa6700c787262c247c3d2dfbde9.woff2","format":"WOFF2","unicodeRanges":[],"sizeBytes":81488}],"subsettedFiles":[],"scriptSubsetFiles":[],"metadata":{"head":{"unitsPerEm":1000,"yMin":-401,"yMax":1111},"hhea":{"ascender":1000,"descender":-250,"lineGap":0},"os2":{"sTypoAscender":1000,"sTypoDescender":-250,"sTypoLineGap":0,"usWinAscent":1000,"usWinDescent":250,"fsSelection":32}}},{"style":"REGULAR","files":[{"url":"_assets/fonts/2c3ee10250c20997c19fa86723beb510.woff","format":"WOFF","unicodeRanges":[],"sizeBytes":98940},{"url":"_assets/fonts/fcd349140b0dbb75604bd51fdc02e2e8.woff2","format":"WOFF2","unicodeRanges":[],"sizeBytes":79956},{"url":"_assets/fonts/5274bec3a5d98a60f841bc2117556f88.otf","format":"OTF","unicodeRanges":[],"sizeBytes":209548}],"subsettedFiles":[],"scriptSubsetFiles":[],"metadata":{"head":{"unitsPerEm":1000,"yMin":-355,"yMax":1060},"hhea":{"ascender":1000,"descender":-250,"lineGap":0},"os2":{"sTypoAscender":1000,"sTypoDescender":-250,"sTypoLineGap":0,"usWinAscent":1000,"usWinDescent":250,"fsSelection":64}}}],"E":false},{"A":"YAFdJs2qTWQ","B":0,"C":"Open Sauce","D":[{"style":"BOLD","files":[{"url":"_assets/fonts/c19f8e9cab364abc00a750036f731e21.woff2","format":"WOFF2","unicodeRanges":[],"sizeBytes":23676},{"url":"_assets/fonts/de669392b0efa3dd9bfdbeb6f018490a.otf","format":"OTF_CFF","unicodeRanges":[],"sizeBytes":41880},{"url":"_assets/fonts/f6d736a830913474eafbf6d0b332350c.woff","format":"WOFF","unicodeRanges":[],"sizeBytes":26956}],"subsettedFiles":[],"scriptSubsetFiles":[],"metadata":{"head":{"unitsPerEm":1000,"yMin":-237,"yMax":1029},"hhea":{"ascender":1000,"descender":-237,"lineGap":0},"os2":{"sTypoAscender":763,"sTypoDescender":-237,"sTypoLineGap":0,"usWinAscent":1000,"usWinDescent":237,"fsSelection":32}}},{"style":"MEDIUM","files":[{"url":"_assets/fonts/052da5ec8d65933d8d2d4c66f4c915ce.woff","format":"WOFF","unicodeRanges":[],"sizeBytes":26696},{"url":"_assets/fonts/6f953f3e7ac9d894a97d59a06afcfa7b.woff2","format":"WOFF2","unicodeRanges":[],"sizeBytes":23740},{"url":"_assets/fonts/891b24b6e551f137fbe317fd48a02199.otf","format":"OTF_CFF","unicodeRanges":[],"sizeBytes":41320}],"subsettedFiles":[],"scriptSubsetFiles":[],"metadata":{"head":{"unitsPerEm":1000,"yMin":-237,"yMax":1029},"hhea":{"ascender":1000,"descender":-237,"lineGap":0},"os2":{"sTypoAscender":763,"sTypoDescender":-237,"sTypoLineGap":0,"usWinAscent":1000,"usWinDescent":237,"fsSelection":64}}},{"style":"LIGHT","files":[{"url":"_assets/fonts/75d3f60309d5248df1b5826ca25d1c18.otf","format":"OTF_CFF","unicodeRanges":[],"sizeBytes":38680},{"url":"_assets/fonts/431c32190aee3c0565d73c56274fb073.woff","format":"WOFF","unicodeRanges":[],"sizeBytes":25756},{"url":"_assets/fonts/22ff9d894b6467b3ddab0f1989a2cb4d.woff2","format":"WOFF2","unicodeRanges":[],"sizeBytes":22836}],"subsettedFiles":[],"scriptSubsetFiles":[],"metadata":{"head":{"unitsPerEm":1000,"yMin":-237,"yMax":1019},"hhea":{"ascender":1000,"descender":-237,"lineGap":0},"os2":{"sTypoAscender":763,"sTypoDescender":-237,"sTypoLineGap":0,"usWinAscent":1000,"usWinDescent":237,"fsSelection":64}}}],"E":false},{"A":"YAD1aU3sLnI","B":0,"C":"DM Sans","D":[{"style":"BOLD","files":[{"url":"_assets/fonts/9340013c7d177c83df1edab0cf96ac10.woff2","format":"WOFF2","unicodeRanges":[],"sizeBytes":30896},{"url":"_assets/fonts/0bcf79ab4ea537bcf8b52dbf09733ea4.otf","format":"OTF","unicodeRanges":[],"sizeBytes":71764},{"url":"_assets/fonts/e708e75f6212d0e6686e1c64567ff7de.woff","format":"WOFF","unicodeRanges":[],"sizeBytes":36676}],"subsettedFiles":[],"scriptSubsetFiles":[],"metadata":{"head":{"unitsPerEm":1000,"yMin":-274,"yMax":975},"hhea":{"ascender":992,"descender":-310,"lineGap":0},"os2":{"sTypoAscender":992,"sTypoDescender":-310,"sTypoLineGap":0,"usWinAscent":992,"usWinDescent":310,"fsSelection":32}}}],"E":false}],"E":[{"type":"RASTER","id":"MAGn_GdqFQo","version":1,"files":[{"url":"_assets/media/c785dbcb8e8ac520c81d424d356cb8e6.png","urlDenied":false,"width":512,"height":512,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN","mimeType":"image/png"}]},{"type":"RASTER","id":"MAGn_GdqFQo","version":1,"files":[{"url":"_assets/media/c785dbcb8e8ac520c81d424d356cb8e6.png","urlDenied":false,"width":512,"height":512,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_2X","mimeType":"image/png"}]},{"type":"RASTER","id":"MAGn_GdqFQo","version":1,"files":[{"url":"_assets/media/c785dbcb8e8ac520c81d424d356cb8e6.png","urlDenied":false,"width":512,"height":512,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_3X","mimeType":"image/png"}]},{"type":"RASTER","id":"MAGn_GQg3Pk","version":1,"files":[{"url":"_assets/media/850a4c2b19560435f1f829cfe1294cb7.png","urlDenied":false,"width":520,"height":523,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN","mimeType":"image/png"}]},{"type":"RASTER","id":"MAGn_GQg3Pk","version":1,"files":[{"url":"_assets/media/850a4c2b19560435f1f829cfe1294cb7.png","urlDenied":false,"width":520,"height":523,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_2X","mimeType":"image/png"}]},{"type":"RASTER","id":"MAGn_GQg3Pk","version":1,"files":[{"url":"_assets/media/850a4c2b19560435f1f829cfe1294cb7.png","urlDenied":false,"width":520,"height":523,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_3X","mimeType":"image/png"}]},{"type":"VECTOR","id":"MAFICw1xfuo","version":1,"files":[{"url":"_assets/media/2595ab35c794763af07ee64b712ab026.svg","urlDenied":false,"width":462,"height":463,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAFICw1xfuo","version":1,"files":[{"url":"_assets/media/2595ab35c794763af07ee64b712ab026.svg","urlDenied":false,"width":462,"height":463,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_2X","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAFICw1xfuo","version":1,"files":[{"url":"_assets/media/2595ab35c794763af07ee64b712ab026.svg","urlDenied":false,"width":462,"height":463,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_3X","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAEL5Bmn-RI","version":3,"files":[{"url":"_assets/media/37a2705704c77745dff732729098a765.svg","urlDenied":false,"width":436,"height":436,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAEL5Bmn-RI","version":3,"files":[{"url":"_assets/media/37a2705704c77745dff732729098a765.svg","urlDenied":false,"width":436,"height":436,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_2X","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAEL5Bmn-RI","version":3,"files":[{"url":"_assets/media/37a2705704c77745dff732729098a765.svg","urlDenied":false,"width":436,"height":436,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_3X","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAD0an-VpLA","version":1,"files":[{"url":"_assets/media/02e71c40ec989385d8d23da327d2be38.svg","urlDenied":false,"width":42,"height":48,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAD0an-VpLA","version":1,"files":[{"url":"_assets/media/02e71c40ec989385d8d23da327d2be38.svg","urlDenied":false,"width":42,"height":48,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_2X","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAD0an-VpLA","version":1,"files":[{"url":"_assets/media/02e71c40ec989385d8d23da327d2be38.svg","urlDenied":false,"width":42,"height":48,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_3X","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAE9MOa_Ldk","version":1,"files":[{"url":"_assets/media/e05b25f4d46e0b4f1e47a8fc94d542c4.svg","urlDenied":false,"width":237,"height":237,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAE9MOa_Ldk","version":1,"files":[{"url":"_assets/media/e05b25f4d46e0b4f1e47a8fc94d542c4.svg","urlDenied":false,"width":237,"height":237,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_2X","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAE9MOa_Ldk","version":1,"files":[{"url":"_assets/media/e05b25f4d46e0b4f1e47a8fc94d542c4.svg","urlDenied":false,"width":237,"height":237,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_3X","mimeType":"image/svg+xml"}]},{"type":"RASTER","id":"MAGn_Lkuxbc","version":1,"files":[{"url":"_assets/media/970b98700f8aad05063514e0ef87efdf.jpg","urlDenied":false,"width":360,"height":800,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN","mimeType":"image/jpeg"}]},{"type":"RASTER","id":"MAGn_Lkuxbc","version":1,"files":[{"url":"_assets/media/f4f67c5cdd45563d52fe572c494ce788.jpg","urlDenied":false,"width":720,"height":1600,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_2X","mimeType":"image/jpeg"}]},{"type":"RASTER","id":"MAGn_Lkuxbc","version":1,"files":[{"url":"_assets/media/e99531d67272169968fa938aacf76033.jpg","urlDenied":false,"width":1080,"height":2400,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_3X","mimeType":"image/jpeg"}]},{"type":"VECTOR","id":"MAE9MPw9s3g","version":1,"files":[{"url":"_assets/media/556920767273eb27df43184a1f76254f.svg","urlDenied":false,"width":237,"height":237,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAE9MPw9s3g","version":1,"files":[{"url":"_assets/media/556920767273eb27df43184a1f76254f.svg","urlDenied":false,"width":237,"height":237,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_2X","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAE9MPw9s3g","version":1,"files":[{"url":"_assets/media/556920767273eb27df43184a1f76254f.svg","urlDenied":false,"width":237,"height":237,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_3X","mimeType":"image/svg+xml"}]},{"type":"RASTER","id":"MAGn_NwaoJ0","version":1,"files":[{"url":"_assets/media/37e05c2e9ded8dde46677eef1d9d6ab0.jpg","urlDenied":false,"width":800,"height":740,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN","mimeType":"image/jpeg"}]},{"type":"RASTER","id":"MAGn_NwaoJ0","version":1,"files":[{"url":"_assets/media/4dbaac3412cf4fa463c7e381e4bccda8.jpg","urlDenied":false,"width":1600,"height":1481,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_2X","mimeType":"image/jpeg"}]},{"type":"RASTER","id":"MAGn_NwaoJ0","version":1,"files":[{"url":"_assets/media/13f7e934c7da06db40b528ae5d2e4443.jpg","urlDenied":false,"width":2400,"height":2221,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_3X","mimeType":"image/jpeg"}]},{"type":"VECTOR","id":"MADWOHeLm0o","version":9,"files":[{"url":"_assets/media/8eb259e4e433f8dff9c42dafaad235c2.svg","urlDenied":false,"width":512,"height":288,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MADWOHeLm0o","version":9,"files":[{"url":"_assets/media/8eb259e4e433f8dff9c42dafaad235c2.svg","urlDenied":false,"width":512,"height":288,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_2X","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MADWOHeLm0o","version":9,"files":[{"url":"_assets/media/8eb259e4e433f8dff9c42dafaad235c2.svg","urlDenied":false,"width":512,"height":288,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_3X","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAE9MLqxm-0","version":1,"files":[{"url":"_assets/media/216c707feb04937484a0fba6be590fcf.svg","urlDenied":false,"width":237,"height":237,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAE9MLqxm-0","version":1,"files":[{"url":"_assets/media/216c707feb04937484a0fba6be590fcf.svg","urlDenied":false,"width":237,"height":237,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_2X","mimeType":"image/svg+xml"}]},{"type":"VECTOR","id":"MAE9MLqxm-0","version":1,"files":[{"url":"_assets/media/216c707feb04937484a0fba6be590fcf.svg","urlDenied":false,"width":237,"height":237,"watermarked":false,"spritesheet":false,"recoloring":{},"quality":"SCREEN_3X","mimeType":"image/svg+xml"}]}],"F":[],"G":[],"H":[],"S":[],"K":{"A":"YAFdJs2qTWQ-0","B":"#0a1a44","C":"#ffffff"},"Q":{"A":false,"B":true,"M":true},"R":false,"T":true,"U":false},"ui":{"N":false,"A":true,"B":"A","C":false,"D":false,"K":"A","I":false,"J":false}}');
            window['flags'] = JSON.parse('{"978ce15d":150000.0,"fb00120d":true}');
            window['cmsg'] = window['cmsg'] || {
                locale: "en",
                strings: {}
            };
        })();
    </script>
    <script crossorigin="anonymous" src="_assets/9a01a4b7c011073e.runtime.js" defer="" integrity="sha512-NZ6NvFA7hj+LhgfOKHL3TGwsRVyGplHM7HudKOBRNQSfoKAuOSH6oTw/Ati6TVEkJJRgAGwWGRh+REYa+Ef/hg==" nonce=""></script>
    <script crossorigin="anonymous" src="_assets/aaa08f5161a956c7.i3d79q.vendor.js" defer="" integrity="sha512-2uvObKRh56EnLmVUHGrNNaY2BdIjjB82PSV90VwXpnQ/nvwps09y+cIqwGPg7SfSfO8Q3kbd2HAuIPJCvfjlxw==" nonce=""></script>
    <script crossorigin="anonymous" src="_assets/ebccce581bffd176.vendor.js" defer="" integrity="sha512-eyEUEEnYEs/0KRKpSAq9YDrODPIRPbf7i7IYOr0wkqTmUjGnK0i1mgFdFo0j8xC6aSIlFxPmwltwg5uymzP5Cw==" nonce=""></script>
    <script crossorigin="anonymous" src="_assets/e5cf5a6afa63924b.strings.js" integrity="sha512-PTdazzEpebJQeKNq5df1ZRxqqE+w++Lkefrvz4Y9Q3m5gnTbYOyIXMTmpDpS9+1v7UdR4ds4eKfnLQQGuAMrkw==" nonce=""></script>
    <script crossorigin="anonymous" src="_assets/cf274150b001acf0.en.js" integrity="sha512-BQycU6ojOYNjFgM0UfNI+gIeLGPWUNaa/bNpuqCdJ/9dav5a6qdUkdjEjFRfyX2r+QNWQ4pZTWw2185DFOTdBg==" nonce=""></script>
    <script crossorigin="anonymous" src="_assets/112f9543ad7f609d.js" defer="" integrity="sha512-Z/MfEsRwxiTmoxCDN8T/1WL82hMO14MMVN1pYKhSfGzqgjy4gReWTYldBv1sk44VkwDRaE+MxRb4nUydMZDPkg==" nonce=""></script>
    <div class="Q_Mxww"></div>
    <div class="i7CgFw"></div>
    <div class="BghEng">
        <div></div>
        <div></div>
    </div>
    <div class="sOABQQ"></div>
    <div class="sOABQQ"></div>
</body>

</html>