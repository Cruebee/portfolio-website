/* when a user scrolls down, hide navbar, when scroll up, show navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById('navbar').style.top = '0';
  } else {
    document.getElementById('navbar').style.top = '-60px';
  }
  prevScrollpos = currentScrollPos;
};
