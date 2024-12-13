document.addEventListener("DOMContentLoaded", () => {

  const popupWrapper   = document.getElementById('form-block');
  const messageWrapper = document.getElementById('form-block-message');
  const popupClose     = document.getElementById('form-message-button');

  if(!popupWrapper){
    return;
  }

  document.addEventListener( 'wpcf7mailsent', function( event ) {
    popupWrapper.style.display = 'none';
    messageWrapper.style.display = 'block';
  }, false );

  popupClose.addEventListener('click', function() {
    messageWrapper.style.display = 'none';
    popupWrapper.style.display = 'block';
  }, false );

});



