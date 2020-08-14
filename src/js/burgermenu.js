function myFunction() {
  var x = document.getElementById('my-topnav');
  if (x.className === 'top-nav') {
    x.className += ' responsive';
  } else {
    x.className = 'top-nav';
  }
}
