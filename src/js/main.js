document.addEventListener('scroll', function(e) {
  document.querySelector('nav').classList.add('scroll');
});

function goTo(id) {
  window.scrollTo(0, document.getElementById(id).offsetTop);
}
