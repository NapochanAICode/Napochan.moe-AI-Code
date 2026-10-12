<!DOCTYPE html>
<html>
<head>
    <title>Napo</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico?v=2">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="An Open Source social network">
    <link rel="stylesheet" href="/static/css/global.css?v=1.7 type="text/css">
    <link rel="stylesheet" href="/static/css/forum.css?v=1.7 type="text/css">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url"  content="https://napochan.moe/">
    <meta property="og:title" content="Napo">
    <meta property="og:description" content="A space for anyone.">
    <meta property="og:image" content="https://3to.moe/a/corespace.png">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://napochan.moe/">
    <meta name="twitter:title" content="Napo">
    <meta name="twitter:description" content="Napo. A space for anyone">
    <meta name="twitter:image" content="https://3to.moe/a/corespace.png">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden; 
        }

        @media screen and (max-width: 768px) {
            .row.home {
                display: flex;
                flex-direction: column;
            }

            .col {
                width: 100%;
            }

            .col.right {
                width: 60%;
                margin: 0 auto; 
            }

             .col.w-60 {
                width: 100%;
            }

            .master-container {
                width: 100%;
            }
        }
    </style>
</head>

<body>
<script src="/static/js/confirm.js"></script>
    
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
      <li><a href="/forum/" class="active">Forum</a></li>
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
</header>        <main>

<link rel="stylesheet" href="/css/forum.css">

<style>
.forum-two-col {
    display: flex;
    gap: 20px;
    align-items: stretch;
    margin-top: 10px;
}
.forum-col-left {
    flex: 2;
    min-width: 0;
}
.forum-col-right {
    flex: 1;
    min-width: 0;
}
.forum-col-right .forum-table {
    width: 100%;
}
.forum-col-right .forum-table td {
    padding: 6px 10px;
    font-size: 12px;
    word-wrap: break-word;
}
@media (max-width: 768px) {
    .forum-two-col {
        flex-direction: column;
    }
    .forum-col-left, .forum-col-right {
        flex: none;
        width: 100%;
    }
}
</style>

<div class="p-body">
<div class="p-body-inner">

    <div class="forum-header-bar">
        <span class="breadcrumb">Forum &raquo; Napo</span>
        <span style="display:flex; gap:8px; align-items:center;">
            <a href="board_list.php" class="post-topic-btn">View all boards</a>
                            <a href="create_board.php" class="post-topic-btn">+ Create a Board</a>
                    </span>
    </div>

    <!-- ── Followed Boards (full width) ──────────────────────────────────── -->
    
    <!-- ── Two‑column: Boards | Latest Posts ─────────────────────────────── -->
    <div class="forum-two-col">

        <!-- Left column: Most Active Boards -->
        <div class="forum-col-left">
            <table class="forum-table" cellspacing="0" cellpadding="3" style="width: 100%;">
                <thead>
                    <tr class="table-header">
                        <th colspan="4">
                            Most Active Boards
                            <span style="float: right; font-weight: normal; font-size: 12px;">
                                <a href="board_list.php" style="color: #fff; text-decoration: underline;">View all →</a>
                            </span>
                        </th>
                    </tr>
                    <tr class="table-sub-header">
                        <th class="w-topic">Board</th>
                        <th class="w-posts">Threads</th>
                        <th class="w-last">Last Post</th>
                        <th class="w-starter">Owner / Followers</th>
                    </tr>
                </thead>
                <tbody>
                                                        <tr>
                        <td class="td-topic">
                            <img src="/static/icons/pinned.png" class="forum-icon">
                            <div class="topic-info">
                                <a href="view_board.php?id=4" class="board-link">
                                    Off-topic                                </a>
                                <p class="board-desc">Talk about anything and nothing.</p>
                            </div>
                        </td>
                        <td class="td-posts">221</td>
                        <td class="td-last">
                                                            <div style="font-size:10px;">
                                    Oct 12, 2026<br>
                                                                            by <b>Stepclaw</b>
                                                                    </div>
                                                    </td>
                        <td class="td-starter" style="font-size:10px;">
                                                            <em>Site-owned</em><br>
                                                        <span style="color:#666;">16 followers</span>
                        </td>
                    </tr>
                                        <tr>
                        <td class="td-topic">
                            <img src="/static/icons/pinned.png" class="forum-icon">
                            <div class="topic-info">
                                <a href="view_board.php?id=2" class="board-link">
                                    Introduction                                </a>
                                <p class="board-desc">New users goes here.</p>
                            </div>
                        </td>
                        <td class="td-posts">194</td>
                        <td class="td-last">
                                                            <div style="font-size:10px;">
                                    Oct 12, 2026<br>
                                                                            by <b>lavendercat</b>
                                                                    </div>
                                                    </td>
                        <td class="td-starter" style="font-size:10px;">
                                                            <em>Site-owned</em><br>
                                                        <span style="color:#666;">6 followers</span>
                        </td>
                    </tr>
                                        <tr>
                        <td class="td-topic">
                            <img src="/static/icons/pinned.png" class="forum-icon">
                            <div class="topic-info">
                                <a href="view_board.php?id=11" class="board-link">
                                    HTML/CSS Discussion                                </a>
                                <p class="board-desc">Programming discussion!</p>
                            </div>
                        </td>
                        <td class="td-posts">135</td>
                        <td class="td-last">
                                                            <div style="font-size:10px;">
                                    Oct 9, 2026<br>
                                                                            by <b>vogel</b>
                                                                    </div>
                                                    </td>
                        <td class="td-starter" style="font-size:10px;">
                                                            <em>Site-owned</em><br>
                                                        <span style="color:#666;">12 followers</span>
                        </td>
                    </tr>
                                        <tr>
                        <td class="td-topic">
                            <img src="/static/icons/pinned.png" class="forum-icon">
                            <div class="topic-info">
                                <a href="view_board.php?id=5" class="board-link">
                                    Vgames                                </a>
                                <p class="board-desc">Discourse about electronic entertainments.</p>
                            </div>
                        </td>
                        <td class="td-posts">105</td>
                        <td class="td-last">
                                                            <div style="font-size:10px;">
                                    Oct 11, 2026<br>
                                                                            by <b>xxquirkymoexx</b>
                                                                    </div>
                                                    </td>
                        <td class="td-starter" style="font-size:10px;">
                                                            <em>Site-owned</em><br>
                                                        <span style="color:#666;">7 followers</span>
                        </td>
                    </tr>
                                        <tr>
                        <td class="td-topic">
                            <img src="/static/icons/pinned.png" class="forum-icon">
                            <div class="topic-info">
                                <a href="view_board.php?id=10" class="board-link">
                                    Weeb                                </a>
                                <p class="board-desc">Japanese animation and manga.</p>
                            </div>
                        </td>
                        <td class="td-posts">68</td>
                        <td class="td-last">
                                                            <div style="font-size:10px;">
                                    Oct 12, 2026<br>
                                                                            by <b>ippinkorca</b>
                                                                    </div>
                                                    </td>
                        <td class="td-starter" style="font-size:10px;">
                                                            <em>Site-owned</em><br>
                                                        <span style="color:#666;">13 followers</span>
                        </td>
                    </tr>
                                                    </tbody>
            </table>
        </div>

        <!-- Right column: Latest Posts (content on its own line) -->
        <div class="forum-col-right">
            <table class="forum-table" cellspacing="0" cellpadding="3" style="width: 100%;">
                <thead>
                    <tr class="table-header">
                        <th colspan="1">Latest Posts</th>
                    </tr>
                </thead>
                <tbody>
                                                                    <tr>
                            <td style="padding: 6px 10px; font-size: 12px; color: #333; border-bottom: 1px solid #eee;">
                                <a href="view_thread.php?id=1266#post-14695" style="color: #003399; text-decoration: none; font-weight: bold;">
                                    &gt;&gt; /buring hot takes/14695/Mr. KokoPudgeFudge                                </a>
                                <div style="padding-left: 20px; color: #555; font-size: 12px; word-wrap: break-word; margin-top: 2px;">
                                    "Does not keep the doctor away"
                                </div>
                            </td>
                        </tr>
                                                <tr>
                            <td style="padding: 6px 10px; font-size: 12px; color: #333; border-bottom: 1px solid #eee;">
                                <a href="view_thread.php?id=1263#post-14694" style="color: #003399; text-decoration: none; font-weight: bold;">
                                    &gt;&gt; /Indie Projects/14694/Mr. KokoPudgeFudge                                </a>
                                <div style="padding-left: 20px; color: #555; font-size: 12px; word-wrap: break-word; margin-top: 2px;">
                                    "I feel like the magical girl setting is kinda unrelated to the events in the story in a way which is awkward. Like the idea of using knives when you can cast spells and stuff is really funny to me lol…"
                                </div>
                            </td>
                        </tr>
                                                <tr>
                            <td style="padding: 6px 10px; font-size: 12px; color: #333; border-bottom: 1px solid #eee;">
                                <a href="view_thread.php?id=1265#post-14693" style="color: #003399; text-decoration: none; font-weight: bold;">
                                    &gt;&gt; /Weeb/14693/ippinkorca                                </a>
                                <div style="padding-left: 20px; color: #555; font-size: 12px; word-wrap: break-word; margin-top: 2px;">
                                    "I mainly watch Korone on youtube and milknocnannel on twitch, who&#039;s your favorite?"
                                </div>
                            </td>
                        </tr>
                                                <tr>
                            <td style="padding: 6px 10px; font-size: 12px; color: #333; border-bottom: 1px solid #eee;">
                                <a href="view_thread.php?id=265#post-14692" style="color: #003399; text-decoration: none; font-weight: bold;">
                                    &gt;&gt; /Off-topic/14692/Stepclaw                                </a>
                                <div style="padding-left: 20px; color: #555; font-size: 12px; word-wrap: break-word; margin-top: 2px;">
                                    "squeak"
                                </div>
                            </td>
                        </tr>
                                                <tr>
                            <td style="padding: 6px 10px; font-size: 12px; color: #333; border-bottom: 1px solid #eee;">
                                <a href="view_thread.php?id=265#post-14691" style="color: #003399; text-decoration: none; font-weight: bold;">
                                    &gt;&gt; /Off-topic/14691/akutagawa                                </a>
                                <div style="padding-left: 20px; color: #555; font-size: 12px; word-wrap: break-word; margin-top: 2px;">
                                    "meow"
                                </div>
                            </td>
                        </tr>
                                                <tr>
                            <td style="padding: 6px 10px; font-size: 12px; color: #333; border-bottom: 1px solid #eee;">
                                <a href="view_thread.php?id=1264#post-14690" style="color: #003399; text-decoration: none; font-weight: bold;">
                                    &gt;&gt; /Introduction/14690/lavendercat                                </a>
                                <div style="padding-left: 20px; color: #555; font-size: 12px; word-wrap: break-word; margin-top: 2px;">
                                    "I saw a few peeps make introductions like this so why not give it a go :)) Hi my name&#039;s Lavender I&#039;m 14 and I am looking for friends! :3 I like doing art, birding, and a few other hobbies I switch bet…"
                                </div>
                            </td>
                        </tr>
                                                <tr>
                            <td style="padding: 6px 10px; font-size: 12px; color: #333; border-bottom: 1px solid #eee;">
                                <a href="view_thread.php?id=1033#post-14689" style="color: #003399; text-decoration: none; font-weight: bold;">
                                    &gt;&gt; /Off-topic/14689/eeveefixation                                </a>
                                <div style="padding-left: 20px; color: #555; font-size: 12px; word-wrap: break-word; margin-top: 2px;">
                                    "punk punch and the thing in the lilac can"
                                </div>
                            </td>
                        </tr>
                                                <tr>
                            <td style="padding: 6px 10px; font-size: 12px; color: #333; border-bottom: 1px solid #eee;">
                                <a href="view_thread.php?id=320#post-14688" style="color: #003399; text-decoration: none; font-weight: bold;">
                                    &gt;&gt; /Off-topic/14688/eeveefixation                                </a>
                                <div style="padding-left: 20px; color: #555; font-size: 12px; word-wrap: break-word; margin-top: 2px;">
                                    "i was just really tomboyish honestly. and when puberty hit i rejected it 😭"
                                </div>
                            </td>
                        </tr>
                                                <tr>
                            <td style="padding: 6px 10px; font-size: 12px; color: #333; border-bottom: 1px solid #eee;">
                                <a href="view_thread.php?id=1165#post-14687" style="color: #003399; text-decoration: none; font-weight: bold;">
                                    &gt;&gt; /Off-topic/14687/eeveefixation                                </a>
                                <div style="padding-left: 20px; color: #555; font-size: 12px; word-wrap: break-word; margin-top: 2px;">
                                    "i have an ipod nano 5 and an ipod touch 4 if that one counts.
the nano has a bad case of inflated battery, so it&#039;s currently unusable:( i think i found a guy that can fix it though! no idea what&#039;s on…"
                                </div>
                            </td>
                        </tr>
                                                <tr>
                            <td style="padding: 6px 10px; font-size: 12px; color: #333; border-bottom: 1px solid #eee;">
                                <a href="view_thread.php?id=265#post-14686" style="color: #003399; text-decoration: none; font-weight: bold;">
                                    &gt;&gt; /Off-topic/14686/Stepclaw                                </a>
                                <div style="padding-left: 20px; color: #555; font-size: 12px; word-wrap: break-word; margin-top: 2px;">
                                    "ribbit"
                                </div>
                            </td>
                        </tr>
                                                            </tbody>
            </table>
        </div>

    </div> <!-- /.forum-two-col -->

</div>
</div>

</main>
<footer>
        <p>
                Brought to you by <a href="https://www.austerlitz.im/" target="_blank" rel="noopener">Austerlitz Informativ</a>
        </p>
        <p> <i>Disclaimer: This project is not affiliated with MySpace&reg; in any way.</i>
        </p>
        <ul class="links">
                <li><a href="/about.php">About</a></li>
                <li><a href="/help.html">Rules</a></li>
                <li><a href="https://discord.gg/cQ6S4rSpbe">Discord</a></li>
                <li><a href="/privacy.php">Privacy</a></li>
                <li><a href="https://www.gnu.org/licenses/gpl-3.0.en.html">License</a></li>
        </ul>
        <p class="copyright">
                <a href="https://github.com/superswan/anyspace/">&copy;2024 Copyleft</a>
        </p>
</footer>

</div>

<script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/v4bc70e2c01a94c73b74392e4234840661791215815920" integrity="sha512-L0ha0OXavK/8okipN9F8BtP84dg9DUhPERbBXzwI6dgTA55d2+yweo3pn5CSFYs45/r8md2+xvUPtTdvTNRfjA==" data-cf-beacon='{"version":"2024.11.0","token":"c29c5abe046848eda8e5306a12deb660","r":1,"spa":2}' crossorigin="anonymous"></script>
</body>

</html>
