<aside class="about" id="about">
  <h1>About mastermix.in</h1>
  <h3>Your one and only mixin collection.</h3>
  <div class="description">
    <p>mastermix.in is a collection of different mixins in the languages Sass, SCSS, Less and Stylus.</p>
    <p>Everybody can add new mixins, to let the collection grow.</p>
  </div>
  <div class="by">
    <p>mastermix.in is an idea by <a href="https://twitter.com/TimPietrusky">Tim Pietrusky</a> and made by <a href="https://twitter.com/DerVonDenBergen">Felix De Montis</a>.</p>
    <p>Thanks to <a href="https://twitter.com/Lukyvj">Lucas Bonomi</a>, <a href="https://twitter.com/_kevinatari">Kevin Gimbel</a> and the people who hang out here: <a href="http://tlk.io/codepen">tlk.io/codepen</a> for ideas and tipps.</p>
  </div>
  <img src="assets/logo.svg" alt="mastermix.in" />
</aside>
<aside class="add" id="add">
  <h1>Add your own mixin</h1>
  <form action="index.php" method="POST" accept-charset="utf-8">
    <label for="name">Mixin Name:</label>
    <input id="name" name="name" placeholder="blink" required>
    <label for="author">Your Name:</label>
    <input id="author" name="author" placeholder="Felix De Montis" required>
    <label for="author_link">Website:</label>
    <input type="url" id="author_link" name="author_link" placeholder="https://github.com/dervondenbergen" required>
    <label for="email">Your Email <sup><abbr title="for gravatar">ⓘ</abbr></sup> :</label>
    <input type="email" id="email" name="email" placeholder="felix@demont.is" required>
    <label for="code">Code:</label>
    <textarea cols="40" rows="8" name="code" id="code" placeholder="@mixin blink ($time: 1s) {
  blink {
    animation:blink $time step-end infinite;
  }
}

@keyframes blink {
  50%  { opacity: 0 }
}

@include blink(0.5s)" required></textarea>
    <label>Preprocessor:</label>
    <div class="pp_form">
      <label for="pp_Sass">Sass: <input type="radio" id="pp_Sass" name="preprocessor" value="sass" required></label>
      <label for="pp_SCSS">SCSS: <input type="radio" id="pp_SCSS" name="preprocessor" value="scss"></label>
      <label for="pp_less">LESS: <input type="radio" id="pp_less" name="preprocessor" value="less"></label>
      <label for="pp_Stylus">Stylus: <input type="radio" id="pp_Stylus" name="preprocessor" value="stylus"></label>
    </div>
    <label for="description">Description <sup><abbr title="description of mixin">ⓘ</abbr></sup> :</label>
    <textarea cols="40" rows="8" name="description" id="description" placeholder="A mixin/polyfill for the <blink> tag." ></textarea>
    <div class="example">
      <div>Example:</div>
      <i>The example should be hosted on <a href="http://codepen.io/" target="_blank">codepen.io</a>. The first field is for your codepen username and the second one for the pen hash.</i>
      <input id="example_user" name="example_user" placeholder="dervondenbergen" required><input id="example_hash" name="example_hash" placeholder="coxnC" required>
    </div>
    <label for="tags">Tags <sup><abbr title="seperate with ','">ⓘ</abbr></sup> :</label>
    <input id="tags" placeholder="polyfill,blink" name="tags">
    <input type="submit" id="submit" name="submit" value="submit">
  </form>
</aside>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>