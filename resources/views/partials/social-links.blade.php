<div class="buttons-social-media-share">
  <ul class="share-buttons">
    <li>
      <a href="https://www.facebook.com/sharer.php?u={{ request()->fullUrl() }}&quote={{ $description }}"
      title="Compartir en Facebook"
      target="_blank">
      <img alt="Compartir en Facebook" src="/img/flat_web_icon_set/Facebook.png"></a></li>
    <li>
      <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ $description }}&via={{ config('app.name') }}&hashtags={{ config('app.name') }}"
      target="_blank"
      title="Compartir en twitter">
      <img alt="Compartir en Tweet" src="/img/flat_web_icon_set/Twitter.png"></a></li>
    <li>
      <a href="https://plus.google.com/share?url={{ request()->fullUrl() }}"
      target="_blank" title="Compartir en Google+">
      <img alt="Compartir en Google+" src="/img/flat_web_icon_set/Google+.png"></a></li>
    <li>
      <a href="http://pinterest.com/pin/create/link/?url={{ request()->fullUrl() }}"
      target="_blank"
      title="Compartir en pinterest">
      <img alt="Compartir en pinterest" src="/img/flat_web_icon_set/Pinterest.png"></a></li>
  </ul>
</div>
