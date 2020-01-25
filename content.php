<h3><?php the_title() ?></h3>
<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail') ?></div>
<!--  the_time()で記事の投稿された時間を表示し、the_category()で記事のカテゴリーを表示 -->
<small>Posted on: <?php the_time(); ?><?php the_category(); ?> </small>
<p><?php the_content() ?></p>

<hr>

<ul>
  <li>関数である</li>
  <li>関数を引数にとり、関数を戻り値とする(returnする)関数である。</li>
  <li>デコレーターは複数個つけることができる。</li>
  <li>複数個デコレーターがついてる場合、実行される順番は下から上である。(bottom to top)</li>
  <li>下から上に実行されるということの覚え方はdecorator stcking(デコレーターを積んでいく、下から新しいのを上に積み上げていく)と覚える。</li>
</ul>

<ul>
  <li>関数はオブジェクトである</li>
  <li>関数は変数に収納できる(関数はオブジェクトなので当然)</li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>
