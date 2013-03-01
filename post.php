<?php include "header.php"; ?>

    <article class="post">
      <div class="featured-image">
        <div class="flexslider">
          <ul class="slides">
            <li><img src="http://beautifulpixels.beautifulpixels.netdna-cdn.com/wp-content/uploads/2009/12/candy-bokeh.jpg" alt=""></li>
          </ul> <!-- end slides -->
        </div> <!-- end flexslider -->
      </div> <!-- end featured-image -->
      <div class="post-content">
        <header>
          <span class="meta-date">February 12, 2013</span>
          <a href="#"><h1>Custom Post Types for WordPress 3.5</h1></a>
          <span class="meta-categories">Posted in: <a href="#">Accessibility</a>, <a href="#">JavaScript</a>, <a href="#">CSS</a></span>
        </header>
        <p>Coming out of the grunge, graffiti and David Carson era through the 90"s, there has been a major resurgence of interest in typography.</p>
        <p>Unfortunately, as with any <a href="#">popularity</a> surge, there have come with it a lot of misunderstandings of some of the terms and concepts that we use. This article will help you gain a clearer understanding of what typography is and isn"t, and why.</p>
        <h4>CSS</h4>
<pre>#body {
  color: red;
  background: yellow;
  line-height: 1;
}</pre>
        <p>One rather common example of this is the <b>myriad of blog posts</b> and showcases claiming to display “hand-lettered typography” — I’ve even heard university professors say it. Though the phrase seems to make sense, it’s actually a contradiction in terms — hand-lettering is not typography at all! Before you throw your pens and brushes at me in protest, please let me explain!.</p>
        <p>
          <h1>Heading 1</h1>
          <h2>Heading 2</h2>
          <h3>Heading 3</h3>
          <h4>Heading 4</h4>
          <h5>Heading 5</h5>
          <h6>Heading 6</h6>
        </p>
        <p>Hello this is a sample paragraph.</p>
        <div class="article-author">
          <h3>Written by <a href="#">Erik Hellman</a></h3>
          <p>Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci.</p>
        </div> <!-- end article-author -->
      </div> <!-- end post-content -->
      
      
    </article>
    
    <div class="post-navigation">
        <a href="#" class="page-next inactive">Newer post <i class="icon-chevron-right"></i></a>
        <a href="#" class="page-previous"><i class="icon-chevron-left"></i> Previous post</a>
    </div> <!-- end comment-navigation -->
    
    <div class="comments-area" id="comments">
      <h3>This post has 14 comments</h3>
      <ol class="comment-list">
        
        <li>
          <article>
            <header>
              <h4><a href="#">Freddy McGrammar</a></h4> <span>on February 28, 2013 at 4:51 PM -</span> <a href="#">Reply</a>
            </header>
            <figure class="comment-avatar">
              <a href="#"><img src="http://placekitten.com/80/80" alt="Avatar" /></a>
            </figure>       
            <p>This is a comment. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis.</p>
          </article>
        </li>

        <li>
          <article>
            <header>
              <h4><span>admin</span><a href="#">Freddy McGrammar</a></h4> <span>on February 28, 2013 at 4:51 PM -</span> <a href="#">Reply</a>
            </header>
            <figure class="comment-avatar">
              <a href="#"><img src="http://placekitten.com/80/80" alt="Avatar" /></a>
            </figure>
            <p class="awaiting-moderation">Your comment is awaiting moderation.</p>            
            <p>This is a comment. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis.</p>
          </article>
          
          <ol>
            <li>
              <article>
                <header>
                  <h4>Freddy McGrammar</h4> <span>on February 28, 2013 at 4:51 PM -</span> <a href="#">Reply</a>
                </header>
                <figure class="comment-avatar">
                  <a href="#"><img src="http://placekitten.com/80/80" alt="Avatar" /></a>
                </figure>
                <p>This is a comment. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis.</p>
              </article>
            </li>
          </ol>

        </li>
        
      </ol>
      
      <div class="comment-navigation">
        <a href="#" class="page-previous inactive"><i class="icon-chevron-left"></i> Older</a>
        <a href="#" class="page-next">Newer <i class="icon-chevron-right"></i></a>
      </div> <!-- end comment-navigation -->
      
      <div id="respond">
        
        <h3>Leave a reply</h3>
        <form action="" method="post" id="comment-form">
          <p>
            <input type="text" value="" name="author" id="author">
            <label for="author">Name (required)</label>
          </p>
          <p>
            <input type="text" value="" name="email" id="email">
            <label for="author">Email (required)(will not be published)</label>
          </p>
          <p>
            <input type="text" value="" name="website" id="website">
            <label for="author">Website</label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
          </p>
          <p><input type="submit" value="Post Comment"></p>
        </form>
        
      </div> <!-- end respond -->
      
      
    </div> <!-- end comments-area -->

<?php include "footer.php"; ?>