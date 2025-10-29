// minimal interactions
document.addEventListener('DOMContentLoaded', function(){
    // smooth anchor scroll
    document.querySelectorAll('a[href^="#"]').forEach(a=>{
      a.addEventListener('click', e=>{
        e.preventDefault();
        document.querySelector(a.getAttribute('href')).scrollIntoView({behavior:'smooth'});
      });
    });

    // on click, go to services page (don’t open image)
    document.querySelectorAll('.gallery img, .services img').forEach(img => {
      img.addEventListener('click', () => {
        window.location.href = 'services.html';
      });
    });
  });
  