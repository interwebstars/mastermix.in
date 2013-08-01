<aside class="about" id="about">
  <h1>About mastermix.in</h1>
  <h3>Your one and only mixin collection.</h3>
</aside>
<aside class="add" id="">
  <h1>Add your own mixin</h1>
  <form action="index.php" method="POST" accept-charset="utf-8">
    <label for="name">Mixin Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="author">Your Name:</label>
    <input type="text" id="author" name="author" required>
    <label for="author_link">Website:</label>
    <input type="text" id="author_link" name="author_link" required>
    <label for="email">Your Email <sup><abbr title="for gravatar">ⓘ</abbr></sup> :</label>
    <input type="email" id="email" name="email" required>
    <label for="code">Code:</label>
    <textarea cols="40" rows="8" name="code" id="code" required></textarea>
    <label>Preprocessor:</label>
    <div class="pp_form">
      <label for="pp_Sass">Sass: <input type="radio" id="pp_Sass" name="preprocessor" value="sass" required></label>
      <label for="pp_SCSS">SCSS: <input type="radio" id="pp_SCSS" name="preprocessor" value="scss"></label>
      <label for="pp_less">LESS: <input type="radio" id="pp_less" name="preprocessor" value="less"></label>
      <label for="pp_Stylus">Stylus: <input type="radio" id="pp_Stylus" name="preprocessor" value="stylus"></label>
    </div>
    <label for="description">Description <sup><abbr title="description of mixin">ⓘ</abbr></sup> :</label>
    <textarea cols="40" rows="8" name="description" id="description"></textarea>
    <label class="example">
      <div>Example:</div>
      <i>If you want to provide an example use <a href="http://codepen.io/" target="_blank">codepen.io</a>. The first field is for your codepen username and the second one for the pen hash.</i>
      <input type="text" id="example_user" name="example_user"><input type="text" id="example_hash" name="example_hash">
    </label>
    <label for="tags">Tags <sup><abbr title="seperate with ','">ⓘ</abbr></sup> :</label>
    <input type="text" id="tags" name="tags">
    <input type="submit" id="submit" name="submit" value="submit">
  </form>
</aside>
</body>
</html>