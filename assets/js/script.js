document.addEventListener('DOMContentLoaded', () => {
  const offcanvas = document.getElementById('mobileMenuOffcanvas');

  // Close menu when clicking any link
  offcanvas.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvas);
      if(bsOffcanvas) bsOffcanvas.hide();
    });
  });
});
