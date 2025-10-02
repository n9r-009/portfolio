/*
 *  util.js is setting up common rule.
 */
if (window.matchMedia("(max-width: 374px)").matches) {
  new ViewportExtra(375);
}

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
タブ・トグル関連
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*===============================================================
共通タブ切り替え
parent => 切り替えスイッチとコンテンツの親
ankerlink => タブ切り替え後にスクロールアニメーションする場所
===============================================================*/
function cmntabInit(parent, ankerlink) {
  const cmntabParent = document.querySelector(parent);
  if (!cmntabParent) return;

  const cmntabSwitch = cmntabParent.querySelector(".js-tab__switch");
  const cmntabSwitchItems = cmntabParent.querySelectorAll(
    ".js-tab__switch .js-tab__switchItem"
  );
  const cmntabMain = cmntabParent.querySelector(".js-tab__main");
  const cmntabMainItems = cmntabParent.querySelectorAll(
    ".js-tab__main .js-tab__mainItem"
  );

  cmntabSwitchItems.forEach((item, index) => {
    item.addEventListener("click", function (e) {
      const cmntabIndex = item.dataset.tabindex;

      cmntabSwitchItems.forEach((el) => el.classList.remove("is-active"));
      item.classList.add("is-active");

      cmntabMainItems.forEach((el) => el.classList.remove("is-active"));
      if (cmntabMainItems[cmntabIndex]) {
        cmntabMainItems[cmntabIndex].classList.add("is-active");
      }

      if (ankerlink) {
        if (item.classList.contains("disable-anker")) {
          e.preventDefault();
          return false;
        }

        const target = document.querySelector(ankerlink);
        if (target) {
          const speed = 500;
          const headerHeight = 0;
          const position =
            target.getBoundingClientRect().top +
            window.pageYOffset -
            headerHeight;

          window.scrollTo({
            top: position,
            behavior: "smooth",
          });

          e.preventDefault();
        }
      }
    });
  });
}

/*===============================================================
共通トグル
parent => トグルスイッチと開閉するコンテンツの親
ankerlink => トグル後にスクロールアニメーションする場所
===============================================================*/
function cmntoggleInit(parent, ankerlink) {
  const parentEls = document.querySelectorAll(parent);
  if (!parentEls.length) return;

  parentEls.forEach((parentEl) => {
    const toggleSwitches = parentEl.querySelectorAll(".js-toggle__switch");

    toggleSwitches.forEach((switchEl) => {
      switchEl.addEventListener("click", function (e) {
        e.preventDefault();
        this.classList.toggle("is-active");

        const nextEl = this.nextElementSibling;
        if (nextEl && nextEl.classList.contains("js-toggle__next")) {
          if (!nextEl.classList.contains("is-open")) {
            nextEl.style.removeProperty("display");
            let display = window.getComputedStyle(nextEl).display;
            if (display === "none") display = "block";
            nextEl.style.display = display;

            const height = nextEl.offsetHeight;
            nextEl.style.overflow = "hidden";
            nextEl.style.height = "0px";
            nextEl.offsetHeight; // force repaint

            nextEl.style.transition = "height 0.3s ease";
            nextEl.style.height = height + "px";

            setTimeout(() => {
              nextEl.classList.add("is-open");
              nextEl.style.removeProperty("height");
              nextEl.style.removeProperty("overflow");
              nextEl.style.removeProperty("transition");
            }, 300);
          } else {
            nextEl.style.height = nextEl.offsetHeight + "px";
            nextEl.offsetHeight; // force repaint

            nextEl.style.transition = "height 0.3s ease";
            nextEl.style.height = "0px";
            nextEl.style.overflow = "hidden";

            setTimeout(() => {
              nextEl.style.display = "none";
              nextEl.classList.remove("is-open");
              nextEl.style.removeProperty("height");
              nextEl.style.removeProperty("overflow");
              nextEl.style.removeProperty("transition");
            }, 300);
          }
        }

        if (ankerlink) {
          if (this.classList.contains("disable-anker")) return false;

          const SCROLL_SPEED = 500;
          const HEADER_HEIGHT = 0;
          const targetEl = document.querySelector(ankerlink);
          if (!targetEl) return;

          const position =
            targetEl.getBoundingClientRect().top +
            window.pageYOffset -
            HEADER_HEIGHT;

          window.scrollTo({
            top: position,
            behavior: "smooth",
          });

          return false;
        }
      });
    });
  });
}

/*===============================================================
detailタグのトグル処理
===============================================================*/
//アコーディオン
function setUpAccordion() {
  const details = document.querySelectorAll(".js-accordion");
  const RUNNING_VALUE = "running";

  details.forEach((element) => {
    const summary = element.querySelector(".js-accordionSummary");
    const content = element.querySelector(".js-accordionContent");

    summary.addEventListener("click", (event) => {
      event.preventDefault();

      // 連打防止
      if (element.dataset.animStatus === RUNNING_VALUE) {
        return;
      }

      if (element.open) {
        element.classList.toggle("is-active");
        //アニメーション処理
        const closingAnim = content.animate(
          closingAnimKeyframes(content),
          animTiming
        );
        element.dataset.animStatus = RUNNING_VALUE;
        closingAnim.onfinish = () => {
          element.removeAttribute("open");
          element.dataset.animStatus = "";
        };
      } else {
        element.setAttribute("open", "true");
        element.classList.toggle("is-active");
        //アニメーション処理
        const openingAnim = content.animate(
          openingAnimKeyframes(content),
          animTiming
        );
        element.dataset.animStatus = RUNNING_VALUE;
        openingAnim.onfinish = () => {
          element.dataset.animStatus = "";
        };
      }
    });
  });

  //アニメーション
  const animTiming = {
    duration: 300,
    easing: "ease-out",
  };

  const closingAnimKeyframes = (content) => [
    {
      height: content.offsetHeight + "px",
      opacity: 1,
    },
    {
      height: 0,
      opacity: 0,
    },
  ];

  const openingAnimKeyframes = (content) => [
    {
      height: 0,
      opacity: 0,
    },
    {
      height: content.offsetHeight + "px",
      opacity: 1,
    },
  ];
}

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
ページ遷移関連
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*===============================================================
スクロールトップ
===============================================================*/
function scrollTop() {
  const pagetop = document.querySelector(".m-pagetop");
  if (!pagetop) return;

  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 500) {
      pagetop.style.display = "block";
    } else {
      pagetop.style.display = "none";
    }
  });

  pagetop.addEventListener("click", (e) => {
    window.scrollTo({ top: 0, behavior: "smooth" });
    e.preventDefault();
  });
}

/*===============================================================
urlに?anker=があるとき
ページ内スクロール
===============================================================*/
function loadLocation() {
  const url = window.location.href;
  if (url.includes("anker=")) {
    const targetId = url.split("?anker=").pop();
    const target = document.getElementById(targetId);
    if (target) {
      // const headerHeight = document.getElementById("header")?.offsetHeight || 0;
      const position = target.getBoundingClientRect().top + window.pageYOffset;
      window.scrollTo({ top: position, behavior: "smooth" });
    }
  }
}

/*===============================================================
urlに#があるとき
ページ内スクロール
===============================================================*/
function clickScroll() {
  const anchorLinks = document.querySelectorAll(
    'a[href^="#"]:not(.disable-transition)'
  );

  anchorLinks.forEach(function (link) {
    link.addEventListener("click", function (event) {
      const href = link.getAttribute("href");
      const hasDataLity = link.hasAttribute("data-lity");

      if (hasDataLity) {
        return;
      }

      event.preventDefault();

      const targetId = href === "#" || href === "" ? null : href.slice(1);
      const targetElement = targetId
        ? document.getElementById(targetId)
        : document.documentElement;

      if (!targetElement) {
        return;
      }

      const header = document.getElementById("header");
      let headerHeight = 0;

      // ヘッダー高さに応じて調整
      // if (window.matchMedia("(max-width: 767px)").matches && header) {
      //   headerHeight = header.offsetHeight;
      // }

      const targetPosition =
        targetElement.getBoundingClientRect().top +
        window.pageYOffset -
        headerHeight;

      window.scrollTo({
        top: targetPosition,
        behavior: "smooth",
      });
    });
  });
}

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
ヘッダー関連
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*===============================================================
SPメニュー
===============================================================*/
function spMenu() {
  const header = document.getElementById("header");
  const spswitch = document.getElementById("js-hmb");
  const spmenu = document.getElementById("js-drwNav");
  const html = document.documentElement;

  if (!header || !spswitch || !spmenu) return;

  spswitch.addEventListener("click", () => {
    header.classList.toggle("is-active");
    spswitch.classList.toggle("is-active");
    spmenu.classList.toggle("is-active");
    html.classList.toggle("is-active");
  });
}
/*===============================================================
メガメニュー
===============================================================*/
function megaMenu() {
  const triggers = document.querySelectorAll(
    ".js-megamenuTrigger a[data-megamenu]"
  );
  const megamenu = document.querySelector(".l-header__megamenu");
  const header = document.getElementById("header");
  let data = "";

  if (!megamenu || !header || !triggers.length) return;

  triggers.forEach((trigger) => {
    trigger.addEventListener("mouseenter", () => {
      data = trigger.dataset.megamenu;
      header.classList.add("js-modal");
      megamenu.classList.add("is-active");
      const item = megamenu.querySelector(`.js-megamenuItem-${data}`);
      if (item) item.classList.add("is-active");
    });

    trigger.addEventListener("mouseleave", () => {
      megamenu.classList.remove("is-active");
      header.classList.remove("js-modal");
      megamenu
        .querySelectorAll(".l-header__megamenuItem")
        .forEach((el) => el.classList.remove("is-active"));
      const item = megamenu.querySelector(`.js-megamenuItem-${data}`);
      if (item) item.classList.remove("is-active");
    });
  });

  megamenu.addEventListener("mouseenter", () => {
    megamenu.classList.add("is-active");
    header.classList.add("js-modal");
    const item = megamenu.querySelector(`.js-megamenuItem-${data}`);
    if (item) item.classList.add("is-active");
  });

  megamenu.addEventListener("mouseleave", () => {
    megamenu.classList.remove("is-active");
    header.classList.remove("js-modal");
    megamenu
      .querySelectorAll(".l-header__megamenuItem")
      .forEach((el) => el.classList.remove("is-active"));
  });
}

/*===============================================================
ヘッダー スクロール表示
===============================================================*/
function headerScroll() {
  var startPos = 0,
    winScrollTop = 0,
    $header = $("#header"),
    $jsdrwNav = $("#js-drwNav"),
    headerHeight = $header.height(),
    timer = null;

  $(window).on("scroll", function () {
    clearTimeout(timer);
    timer = setTimeout(function () {
      winScrollTop = $(this).scrollTop();
      if ($jsdrwNav.hasClass("is-active")) {
        return;
      } else {
        if (winScrollTop >= startPos) {
          if (winScrollTop >= headerHeight) {
            $header.addClass("js-hide");
          }
        } else if (winScrollTop <= startPos) {
          $header.removeClass("js-hide");
        }
      }
      startPos = winScrollTop;
    }, 30);
  });
}

/*===============================================================
ヘッダースクロール変化
===============================================================*/
function headerChange() {
  const $mv = $(".l-mv");
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > $mv.height()) {
      $("#header").addClass("is-scrolled");
    } else {
      $("#header").removeClass("is-scrolled");
    }
  });
}

/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
アニメーション
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*===============================================================
gsapスクロールフェード付与
===============================================================*/
function initScrollFade() {
  gsap.registerPlugin(ScrollTrigger);
  const elements = document.querySelectorAll(".js-fade");
  elements.forEach((el) => {
    ScrollTrigger.create({
      trigger: el,
      start: "top 70%",
      onEnter: () => {
        el.classList.add("is-active");
      },
    });
  });
}
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
フォーム関連
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*===============================================================
contactform7に処理
===============================================================*/
function setContactform7Event() {
  const wpcf7Elm = document.querySelector(".wpcf7");
  const wpcf7Compleat = document.querySelector(".p-contact-form__complete");
  const footer = document.querySelector(".l-footer");
  const contactForm = document.querySelector(".p-contact-form");

  if (!wpcf7Elm || !contactForm) return;

  // 送信成功時のイベントリスナー
  wpcf7Elm.addEventListener(
    "wpcf7mailsent",
    function (event) {
      // SPかどうか判定（768px以下をSPとする例）
      const isSp = window.innerWidth <= 768;
      const offset = isSp ? 75 : 150;
      // フォームの先頭にスクロール
      const top =
        contactForm.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({
        top: top,
        behavior: "smooth",
      });
      wpcf7Elm.classList.add("is-active");
      wpcf7Compleat.classList.add("is-active");
      footer.classList.add("is-active");
    },
    false
  );
}
/*━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
汎用
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━*/
/*===============================================================
簡易版matchHeight セレクターは詳細に書く
例 ： matchHeight("#consultation .sec2_tab_list > li");
===============================================================*/
function matchHeight(targetSelector) {
  const elements = document.querySelectorAll(targetSelector);
  const heights = Array.from(elements).map((el) => el.offsetHeight);
  const maxHeight = Math.max(...heights);
  elements.forEach((el) => {
    el.style.height = `${maxHeight}px`;
  });
}

/*===============================================================
英語ページ
===============================================================*/
function currentEnPage() {
  if ($(".l-container-en").length) {
    $("body").addClass("is-en");
  }
}

/*===============================================================
アドレスバーの高さ計算
===============================================================*/
function setHeight() {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);
}

/*===============================================================
リサイズでリロード処理
===============================================================*/
function reloadRisize() {
  const getBreakpoint = () => {
    const width = window.innerWidth;
    if (width >= 1094) {
      return "pc";
    } else if (width >= 768) {
      return "tablet";
    } else {
      return "sp";
    }
  };

  let prevBreakpoint = getBreakpoint();
  let resizeTimeout;

  window.addEventListener("resize", function () {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(function () {
      const currentBreakpoint = getBreakpoint();
      if (currentBreakpoint !== prevBreakpoint) {
        location.reload();
      }
    }, 300);
  });
}

/*===============================================================
マウスストーカー
===============================================================*/
function setStalker() {
  const small = document.getElementById("js-stalker-small");
  const large = document.getElementById("js-stalker-large");

  let mouseX = 0;
  let mouseY = 0;
  let smallX = 0;
  let smallY = 0;
  let largeX = 0;
  let largeY = 0;

  const speedSmall = 0.25; // 小さい丸の追従速度（速め）
  const speedLarge = 0.12; // 大きい丸の追従速度（ゆっくり）

  document.addEventListener("mousemove", (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
  });

  // アニメーションループ
  function animate() {
    // 小さい丸
    smallX += (mouseX - smallX) * speedSmall;
    smallY += (mouseY - smallY) * speedSmall;
    small.style.transform = `translate(${smallX}px, ${smallY}px) translate(-50%, -50%)`;

    // 大きい丸
    largeX += (mouseX - largeX) * speedLarge;
    largeY += (mouseY - largeY) * speedLarge;
    large.style.transform = `translate(${largeX}px, ${largeY}px) translate(-50%, -50%)`;

    requestAnimationFrame(animate);
  }
  animate();

  // ホバー対象
  const hoverTargets = [
    ...document.querySelectorAll(
      "a, button,.swiper-button-next,.swiper-button-prev,.js-tab__switchItem"
    ),
  ];

  if (window.innerWidth <= 1094) {
    const stalkerTargets = document.querySelectorAll(".js-stalker-target");
    hoverTargets.push(...stalkerTargets);
  }

  hoverTargets.forEach((target) => {
    target.addEventListener("mouseenter", () => {
      const rect = target.getBoundingClientRect();
      mouseX = rect.left + rect.width / 2;
      mouseY = rect.top + rect.height / 2;
      small.classList.add("is-hover");
      large.classList.add("is-hover");
    });

    target.addEventListener("mouseleave", () => {
      small.classList.remove("is-hover");
      large.classList.remove("is-hover");
    });
  });
}

/*===============================================================
下層ページメインビジュアルテキストアニメーション
===============================================================*/
function initMvTextAnimation() {
  const mvList = document.querySelectorAll(".js-mv");

  const url = window.location.href;
  const hasAnker = url.includes("?anker=");

  mvList.forEach((mv) => {
    const parents = mv.querySelectorAll(".js-mv-txt");

    if (hasAnker) {
      // URLに?anker=がある場合は MV にクラス付与
      mv.classList.add("is-noanimation");

      // 子要素にもクラス付与
      parents.forEach((parent) => {
        const children = parent.querySelectorAll(".js-mv-txt__child");
        children.forEach((child) => {
          child.classList.add("is-noanimation");
        });
      });

      return; // 通常のアニメーションは実行しない
    }

    // 通常の順番アニメーション
    let parentIndex = 0;

    function activateNextParent() {
      if (parentIndex < parents.length) {
        const parent = parents[parentIndex];
        const children = parent.querySelectorAll(".js-mv-txt__child");

        let childIndex = 0;

        function activateNextChild() {
          if (childIndex < children.length) {
            const child = children[childIndex];
            child.classList.add("is-active");

            child.addEventListener(
              "transitionend",
              () => {
                childIndex++;
                activateNextChild();
              },
              { once: true }
            );
          } else {
            parentIndex++;
            activateNextParent();
          }
        }

        activateNextChild();
      } else {
        mv.classList.add("is-active");
      }
    }

    activateNextParent();
  });
}
