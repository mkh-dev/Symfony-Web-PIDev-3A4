const nightModeToggle = document.getElementById('night-mode-toggle');
const body = document.body;
const table = document.querySelector('.table');
const links = document.querySelectorAll('a');

// Toggle night mode when the toggle button is clicked
nightModeToggle.addEventListener('click', () => {
  body.classList.toggle('night-mode');
  table.classList.toggle('night-mode');
  links.forEach(link => link.classList.toggle('night-mode'));
});
