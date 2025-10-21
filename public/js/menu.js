const toggle = document.getElementById('menu-toggle');
  const nav = document.getElementById('nav');
  const body = document.body;

  toggle.addEventListener('click', () => {
    const isActive = nav.classList.toggle('active');
    body.classList.toggle('menu-open', isActive);

    // Cambia el ícono entre ☰ (menú) y ✖ (cerrar)
    toggle.innerHTML = isActive ? '&#10005;' : '&#9776;';
  });

  // Cerrar el menú al hacer clic en un enlace
  const links = nav.querySelectorAll('a');
  links.forEach(link => {
    link.addEventListener('click', () => {
      nav.classList.remove('active');
      body.classList.remove('menu-open');
      toggle.innerHTML = '&#9776;';
    });
  });