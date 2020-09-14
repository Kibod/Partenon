// Load the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// Replace the 'div' element, with specific id, with an <iframe> and
// YouTube player after the API code downloads.
var player1;
var player2;
function onYouTubePlayerAPIReady() {
  player1 = new YT.Player('cirikovac', {
    height: '240',
    width: '430',
    videoId: 'iaUlx33gHjY'
  });
  player2 = new YT.Player('prugovo', {
    height: '240',
    width: '430',
    videoId: 'z6iwBu0v74w'
  });
}
