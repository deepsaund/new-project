/* ---------------------------------------------------
    OFFCANVAS SIDEBAR SCRIPTS
----------------------------------------------------- */

var sidebarCollapse = document.getElementById("sidebarCollapse");
var offcanvas_el = document.querySelector("#offcanvas");
var offcanvas = bootstrap.Offcanvas.getOrCreateInstance(offcanvas_el);

offcanvas_el.addEventListener('hide.bs.offcanvas', function () {
  sidebarCollapse.classList.remove('active');
})

offcanvas_el.addEventListener('show.bs.offcanvas', function () {
  sidebarCollapse.classList.add('active');
})

function toggleMyOffcanvas() {
  if (window.innerWidth < 576) {
    // Prevent hiding animation triggering if page first loaded in mobile view
    offcanvas_el.style.visibility = 'hidden';
    
    if (offcanvas_el.classList.contains('show')) {
      offcanvas.hide();
    }
  } else {
    if (!offcanvas_el.classList.contains('show')) {
      offcanvas.show();
    }
  }
}

function highlightNav() {
  var paths = location.pathname.split("/"); // uri to array
  paths.shift(); // Remove domain name
  paths = '/' + paths.join('/'); // Add leading slash and join into a string
  paths = (paths == '/') ? '/' : paths.replace(/\/$/, ""); // Remove trailing slash if present
  const menuItem = document.querySelector('.offcanvas-body a[href="' + paths + '"]');
  if (menuItem) {
    menuItem.classList.add('active');
  }
}

window.onload = function() {
  toggleMyOffcanvas();
  highlightNav();
}

window.onresize = function() {
  toggleMyOffcanvas();
} 

// Smooth scrolling to anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            // Check if .main has overflow: hidden
            const mainElement = document.querySelector('.main');
            const isMainOverflowHidden = getComputedStyle(mainElement).overflow === 'hidden';

            if (isMainOverflowHidden) {
                // Show the target element temporarily to scroll to it
                targetElement.style.display = 'block';
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
                targetElement.style.display = ''; // Restore original display property
            } else {
                // .main does not have overflow: hidden, scroll directly
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    });
});
// Smooth scrolling to anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
      e.preventDefault();

      const targetId = this.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
          // Check if .main has overflow: hidden
          const mainElement = document.querySelector('.main');
          const isMainOverflowHidden = getComputedStyle(mainElement).overflow === 'hidden';

          if (isMainOverflowHidden) {
              // Show the target element temporarily to scroll to it
              targetElement.style.display = 'block';
              targetElement.scrollIntoView({
                  behavior: 'smooth'
              });
              targetElement.style.display = ''; // Restore original display property
          } else {
              // .main does not have overflow: hidden, scroll directly
              targetElement.scrollIntoView({
                  behavior: 'smooth'
              });
          }
      }
  });
});
