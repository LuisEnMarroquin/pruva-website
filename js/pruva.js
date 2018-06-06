// GENERAL SETTING
window.sr = ScrollReveal({ reset: true });

// Custom Settings
sr.reveal('.foo-1', { duration: 200 });

sr.reveal('.foo', {
  origin: 'right',
  duration: 2000
});

sr.reveal('.foo-3', {
  rotate: { x: 100, y: 100, z: 0 },
  duration: 3000
});

sr.reveal('.foo-4', {
  viewFactor: 0.5
});

sr.reveal('.foo-5', {
  duration: 2000
});
