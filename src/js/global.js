/*
 *  global.js is setting up common rule.
 */

document.addEventListener("DOMContentLoaded", function () {
  scrollTop();
  // headerChange();
  megaMenu();
  spMenu();
  if (window.matchMedia("(max-width: 1280px)").matches) {
    cmntoggleInit(".l-header__drwNavDobozAccordion");
    cmntoggleInit(".l-footer__gnavListItem.has-toggle");
  }
});

window.addEventListener("load", function () {
  loadLocation();
});
