document.getElementById("complete-hanoi").addEventListener('click', function (event) {
  document.getElementById('sub-content').style.display = 'block';
  $('html,body').animate({
    scrollTop: $("#sub-content").offset().top
 });
  
  });