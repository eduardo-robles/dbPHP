$('section a').on('click', function(e) {                 // User clicks nav link
  e.preventDefault();                                // Stop loading new link
  var url = this.href;                               // Get value of href

  $('section a.current').removeClass('current');         // Clear current indicator
  $(this).addClass('current');                       // New current indicator

  $('#queries').remove();                          // Remove old content
  $('#content').load(url + ' #queries').hide().fadeIn('slow'); // New content
});
