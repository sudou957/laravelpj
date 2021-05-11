const target = document.getElementById("menu");
target.addEventListener('click', () => {
  const target = document.getElementById("menu");
  target.classList.toggle('open');
  const nav = document.getElementById("nav2");
  nav.classList.toggle('in');
});