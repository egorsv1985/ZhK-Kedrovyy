(() => {
  "use strict";
document.addEventListener("DOMContentLoaded", function () {
  let e = !0,
    t = (t = 500) => {
      let n = document.querySelector("body");
      if (e) {
        let o = document.querySelectorAll("[data-lp]");
        setTimeout(() => {
          for (let e = 0; e < o.length; e++) {
            o[e].style.paddingRight = "0px";
          }
          (n.style.paddingRight = "0px"),
            document.documentElement.classList.remove("lock");
        }, t),
          (e = !1),
          setTimeout(function () {
            e = !0;
          }, t);
      }
    },
    n = (t = 500) => {
      let n = document.querySelector("body");
      if (e) {
        let o = document.querySelectorAll("[data-lp]");
        for (let e = 0; e < o.length; e++) {
          o[e].style.paddingRight = "0px";
        }
        (n.style.paddingRight = "0px"),
          document.documentElement.classList.add("lock"),
          (e = !1),
          setTimeout(function () {
            e = !0;
          }, t);
      }
    };
  function o() {
    let o = document.querySelector(".burger");
    o &&
      o.addEventListener("click", function (o) {
        e &&
          (((e = 500) => {
            document.documentElement.classList.contains("lock") ? t(e) : n(e);
          })(),
          document.documentElement.classList.toggle("open"));
      });
  }
  o(),
    (window.FLS = !0),
    (function (e) {
      let t = new Image();
      (t.onload = t.onerror =
        function () {
          e(2 == t.height);
        }),
        (t.src =
          "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA");
    })(function (e) {
      let t = !0 === e ? "webp" : "no-webp";
      document.documentElement.classList.add(t);
    }),
    o();
  const l = document.body,
    c = "scroll-up",
    s = "scroll-down";
  let d = 0;
  window.addEventListener("scroll", () => {
    const e = window.pageYOffset;
    e <= 0
      ? l.classList.remove(c)
      : (e > d && !l.classList.contains(s)
          ? (l.classList.remove(c), l.classList.add(s))
          : e < d &&
            l.classList.contains(s) &&
            (l.classList.remove(s), l.classList.add(c)),
        (d = e));
  });
  const i = document.getElementById("video-container"),
    a = document.getElementById("play-button"),
    m = i.querySelector(".video__frame"),
    u = document.getElementById("video-cover");
  (a.style.display = "block"),
    a.addEventListener("click", function () {
      m.contentWindow.postMessage(
        '{"event":"command","func":"playVideo","args":""}',
        "*"
      ),
        (a.style.display = "none"),
        (u.style.display = "none");
    });
Fancybox.bind('.fancy', {
    // Your custom options
  });
})
jQuery(document).ready(function () {
	// var e = document.querySelectorAll('.form-phone"]')
	// jQuery(e).inputmask({
	// 	mask: ['+7 (999) 999 99 99', '8 (999) 999 99 99'],
	// 	greedy: !1,
	// 	placeholder: '_',
	// })
  $('.form-phone').inputmask('+7 (999) 999-99-99')
})
})
();
