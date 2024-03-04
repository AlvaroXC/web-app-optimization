const goTopContainer = document.querySelector('.gotop-container');

goTopContainer.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    })
});

window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY;
    var contenedor = document.getElementById('up');
    
    if (scrollPosition > 380) {
      contenedor.style.opacity = '1';
    } else {
      contenedor.style.opacity = '0';
    }
  });