// Handle dropdown for mobile and desktop
const dropdownArrow = document.querySelector('.arrow');
const dropdownContent = document.querySelector('.dropdown-content');

dropdownArrow.addEventListener('click', (e) => {
    e.stopPropagation(); // Prevent event from bubbling up to other elements
    const dropdown = e.target.closest('.dropdown');
    dropdown.classList.toggle('active');
    const isOpen = dropdown.getAttribute('aria-expanded') === 'true';
    dropdown.setAttribute('aria-expanded', !isOpen);
    });

// Redirect for mobile when clicking Case Studies
document.querySelector('.case-studies').addEventListener('click', (e) => {
    if (window.innerWidth <= 782) {
        window.location.href = 'index.html';
    } else {
      e.preventDefault(); // Prevent default action only on desktop
    }
    });