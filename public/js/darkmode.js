const toggleBtn = document.getElementById('darkModeToggle');
const savedTheme = localStorage.getItem('theme');

// Detect system preference if no theme saved
const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
    document.body.classList.add('dark-mode');
}

toggleBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    const theme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
    localStorage.setItem('theme', theme);
    toggleBtn.textContent = theme === 'dark' ? '☀️' : '🌙';
});

toggleBtn.textContent = document.body.classList.contains('dark-mode') ? '☀️' : '🌙';
