<!DOCTYPE html>
<html>

<head>
  <title>New Blog |
    Napo  </title>
  <link rel="stylesheet" href="/static/css/global.css">
  <link rel="stylesheet" href="editor/ui/trumbowyg.min.css">
  <link rel="stylesheet" href="editor/plugins/colors/ui/trumbowyg.colors.min.css">
  <link rel="stylesheet" href="editor/plugins/emoji/ui/trumbowyg.emoji.min.css">

  <style>
    .trumbowyg-button {
      width: 20px;
      height: 20px;
      background-size: 16px 16px;
    }

    .trumbowyg-toolbar {
      height: auto;
    }

    .viva-la-revolution { display: none !important; visibility: hidden !important; }
  </style>
</head>

<body>
  <div class="master-container">
    <header class="main-header">
  <nav>
    <div class="top">
      <div class="left">
        <a href="https://napochan.moe/" style="display: inline-block; text-decoration: none;">
          <img src="/static/napoleon.png?v=1" alt="Home" style="height: 60px; width: auto; display: block; padding: 5px 0;">
        </a>
      </div>

      <div class="center">
        <form action="/search.php" method="get">
          <label><input type="text" name="q" value=""></label>
          <input class="submit-btn" type="submit" name="submit-button" value="Search">
        </form>
      </div>

      <div class="right">
          <ul class="topnav signup">
                      <a href="/docs/rules.html">Rules</a> | <a href="/logout.php">LogOut</a>
                  </ul>
      </div>
    </div>

    <ul class="links">
      
      
      <li>
        <a href="/home.php" >Home</a>
      </li>

      <li><a href="/news.php">News</a></li>

      <li class="dropdown">
        <a class="dropbtn">Settings <span class="caret">&#9660;</span></a>
        <div class="dropdown-content">
          <a href="/manage.php">Edit Profile</a>
          <a href="/settings.php">Account Settings</a>
        </div>
      </li>

      <li class="dropdown">
        <a class="dropbtn">Users <span class="caret">&#9660;</span></a>
        <div class="dropdown-content">
          <a href="/browse.php">Browse Users</a>
          <a href="/browse.php?view=new">Newest Members</a>
          <a href="/browse.php?view=online">Active Users</a>
          <a href="/surprise.php">Surprise Me!</a>
        </div>
      </li>

      <li class="dropdown">
        <a class="dropbtn">Blogs <span class="caret">&#9660;</span></a>
        <div class="dropdown-content">
          <a href="/blog/?view=recent">Most Recent</a>
          <a href="/blog/?view=top">Top Rated</a>
        </div>
      </li>

      <li style="position:relative;">
        <a href="/im/" >Mail</a>
              </li>
      
      <li><a href="/chat/" >Chat!</a></li>
      <li><a href="/bulletins/" >Bulletins</a></li>
      <li><a href="/forum/" >Forum</a></li>
      <li><a href="/layouts/" >Layouts</a></li>
      <li><a href="/favorites.php" >Favs</a></li>

      <li class="dropdown">
        <a class="dropbtn">Help <span class="caret">&#9660;</span></a>
        <div class="dropdown-content">
          <a href="/docs/rules.html">Site Rules</a>
          <a href="/docs/help.html">FAQ</a>
          <a href="/about.php">About</a>
        </div>
      </li>

      
    </ul>
  </nav>
</header>    <main>


      <div class="row edit-blog-entry">
        <div class="col w-20 left">
          <div class="edit-info">
            <p>Use the visual WYSIWYG Editor to edit your content.</p>
          </div>
        </div>
        <div class="col right">
          <h1>Create Blog Entry</h1>
          <br>

          <form method="post" class="ctrl-enter-submit">
            <!-- HIDDEN INPUT FOR AUTOSAVE (always 0 for new posts) -->
            <input type="hidden" name="blog_id" value="0">

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" autocomplete="off" value="" required>

            <label for="category">Category:</label>
            <select name="category" id="category" required>
              <option value="" disabled selected>Choose a Category</option>
              <option value="1">Art</option>
              <option value="2">Automotive</option>
              <option value="3">Fashion</option>
              <option value="4">Financial</option>
              <option value="5">Food</option>
              <option value="6">Games</option>
              <option value="777">Life</option>
              <option value="8">Literature</option>
              <option value="9">Math & Science</option>
              <option value="10">Movies & TV</option>
              <option value="11">Music</option>
              <option value="12">Paranormal</option>
              <option value="13">Politics</option>
              <option value="14">Humanity</option>
              <option value="15">Romance</option>
              <option value="16">Sports</option>
              <option value="17">Technology</option>
              <option value="18">Travel</option>
            </select>
            <br><br>

            <label for="privacy">Privacy Setting:</label>
            <select name="privacy" id="privacy" required>
                <option value="0">Public (Everyone)</option>
                <option value="1">Friends Only</option>
                <option value="2">Private (Diary)</option>
            </select>
            <br><br>

            <!-- FOLDER / SERIES SECTION -->
            <label for="folder">Series / Folder (optional):</label>
            <select name="folder_id" id="folder">
                <option value="0">None</option>
                            </select>
            <br>
            <small>Or create a new folder:</small>
            <input type="text" id="new_folder_name" name="new_folder_name" placeholder="New folder name" style="width:auto;">
            <br><br>
            <!-- END FOLDER SECTION -->

            <label for="wysiwyg">Content:</label>
            <div>
              <textarea class="tb_wysiwyg" id="wysiwyg" name="content"></textarea>
            </div>

            <div class="publish">
            <div class="viva-la-revolution">
                         <input type="text" name="website" tabindex="-1" autocomplete="off">
                      </div>
            
                      <div id="captcha-area" style="margin: 15px 0; border: 1px solid #ccc; padding: 10px; background: #f9f9f9; max-width: fit-content; border-radius: 4px; text-align: left;">
                          <p style="font-size: 11px; margin-bottom: 8px; color: #666; font-weight: bold;">Security Check: Select matching image</p>
                          <div style="display: flex; gap: 12px; align-items: center; justify-content: center;">
                              <div style="text-align: center;">
                                  <img id="captcha-base" src="" width="55" style="border: 1px solid #000; background: #fff; display: block;">
                                  <small style="font-size: 9px; color: #888;">Target</small>
                              </div>
                              <span style="font-size: 20px; color: #999;">&rarr;</span>
                              <div id="captcha-choices" style="display: flex; gap: 8px;">
                                  <small>Loading...</small>
                              </div>
                          </div>
                          <input type="hidden" name="captcha_identity" id="captcha_identity" required>
                      </div>
                      
                      
                      <!-- AUTOSAVE STATUS INDICATOR -->
                      <span id="autosave-status" style="margin-right: 15px; font-size: 13px;">Ready</span>

              <button type="submit" name="submit">
                Publish Blog Entry </button>
            </div>
          </form>


        </div>
      </div>
    </main>
    <footer>
      <p>
        <a href="https://github.com/superswan/anyspace/superswan/anyspace" target="_blank" rel="noopener">AnySpace
          Engine</a>
      </p>
      <p> <i>Disclaimer: This project is not affiliated with MySpace&reg; in any way.</i>
      </p>
      <ul class="links">
        <li><a href="about.php">About</a></li>
        <li><a href="rules.php">Rules</a></li>
        <li><a href="https://github.com/superswan/anyspace/superswan/anyspace">Source Code</a></li>
      </ul>
      <p class="copyright">
        <a href="https://github.com/superswan/anyspace/superswan/anyspace/superswan/anyspace">&copy;2024 Copyleft</a>
      </p>
    </footer>

    <!-- JQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- WSYIWIG Editor -->
    <script src="editor/trumbowyg.min.js"></script>

    <!-- Editor Plugins and Injection -->
    <script src="editor/plugins/colors/trumbowyg.colors.js"></script>
    <script src="editor/plugins/emoji/trumbowyg.emoji.min.js"></script>
    <script src="editor.js"></script>
    <script src="/static/js/captcha.js"></script>

    <!-- AUTOSAVE SCRIPT -->
    <script src="autosave.js"></script>
<script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/v4bc70e2c01a94c73b74392e4234840661791215815920" integrity="sha512-L0ha0OXavK/8okipN9F8BtP84dg9DUhPERbBXzwI6dgTA55d2+yweo3pn5CSFYs45/r8md2+xvUPtTdvTNRfjA==" data-cf-beacon='{"version":"2024.11.0","token":"c29c5abe046848eda8e5306a12deb660","r":1,"spa":2}' crossorigin="anonymous"></script>
</body>

</html>
