function fixFooter() {
  const bsaFooter = document.querySelector('.bsa-footer');
  const footerHeight = `${bsaFooter.clientHeight}px`;
  document.querySelector('body').style.paddingBottom = footerHeight;
}

document.addEventListener('DOMContentLoaded', () => {
  window.addEventListener('resize', fixFooter);
  fixFooter();
});