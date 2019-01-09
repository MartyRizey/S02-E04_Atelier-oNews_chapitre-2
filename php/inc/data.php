<?php

// $list_article sera ma variable contenant mon tableau. Se sera aussi un tableau associatif, clé/valeur.
$list_articles = array();

$list_articles['__404__'] = [

    'title'    => 'Un article qui ne devrais pas exister',
    'author'   => 'Edward Nigma',
    'text'     => '<p style="color: red; font-weight: bold;">
                     Votre article n\'existe pas !!
                   </p>',
    'category' => 'ERROR 404',
    'publish'  => date('D d M Y'),
    'image'    => 'riddler-edward-nigma-mad-6.39.jpg'
  
];

// j'ajoute dans le tableau $list_articles à la clé ['artcile_1'] un tableau associatif, qui sera la valeur de cette clé.
// 'article_1', correspond à l'identifiant(ID) de l'article.
$list_articles['article_1'] = [

    'title'    => 'Lorem ipsum dolor sit amet',
    'author'   => 'Kara Melmou',
    'text'     => '<p>ARTICLE 1 : 文書のレイアウトを決める際、テキストの入る部分はべた塗りや記号にするよりは実際の出来上がりに近いフォントによる文章を入れた方が完成時の姿を想像しやすい。しか  字一方で、文章が入ると文書全体のデザインよりも文章の内容の方に意識が集中してしまう。そこで欧米などの出版業界やデザイン業界ではタイポグラフィやレイアウトにプレゼンテーションの焦点を           当てるため、意味の全くない文字の羅列をテキスト部分に流し込む。.</p>
    <p>こういった意味不明のダミーテキストを、ギリシャ語（英語圏などでは意味のわからない文章の典型としてギリシャ語が引き合いに出される）にちなみ「グリーキング」（greeking）という。「lorem ipsum」は、英米の出版業界で印刷業の始まりの15世紀以来伝統的に使われてきた典型的なグリーキング用の文字列であるが、これはギリシア語ではなくラテン語がもとである。「lorem ipsum」は古典ラテン語に非常によく似ているため見る者に内容についての興味を起こさせるが、実際には全く意味を持たないように作られている。また英語における各文字の出現頻度とほぼ等しいため、プレゼンテーションには向いている。</p>
    <p>語が引き合いに出される）にちなみ「グリーキング」（greeking）という。「lorem ipsum」は、英米の出版業界で印刷業の始まりの15世紀以来伝統的に使われてきた典型的なグリーキング用の文字列であるが、これはギリシア語ではなくラテン語がもとである。「lorem ipsum」は古典ラテン語に非常によく似ているため見る者に内容についての興味を起こさせるが、実際には全く意味を持たないように作られている。また英語における各文字の出現頻度とほぼ等しいため、プレゼンテーションには向いている。.</p>',
    'category' => 'team',
    'publish'  => 'le 26 mars 2018',
    'image'    => 'icon-dar.png'
  
];

// j'ajoute dans le tableau $list_articles à la clé ['artcile_2'] un tableau associatif, qui sera la valeur de cette clé.
// 'article_2', correspond à l'identifiant(ID) de l'article.
$list_articles['article_2'] = [

    'title'    => 'Lorem ipsum dolor sit amet',
    'author'   => 'John Marchill',
    'text'     => '<p>ARTICLE 2 : Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d\'attente. L\'avantage de le mettre en latin est que l\'opérateur sait au premier coup d\'oeil que la page contenant ces lignes n\'est pas valide, et surtout l\'attention du client n\'est pas dérangée par le contenu, il demeure concentré seulement sur l\'aspect graphique.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, ullam! Harum deleniti optio assumenda veritatis ab! Corporis itaque ullam perspiciatis fugit repellendus voluptas aspernatur exercitationem cupiditate harum commodi quo quidem nesciunt, blanditiis odio mollitia nobis veritatis? Omnis quo quibusdam sunt nesciunt! Beatae saepe perspiciatis sapiente tempore nemo fugiat vero ut dignissimos maiores in id minima repudiandae eaque aliquam sed, nobis alias natus aspernatur quis sint? Similique nulla eveniet cupiditate praesentium non animi, voluptate magnam aliquid nostrum blanditiis quas eligendi provident beatae nemo debitis neque hic dicta rerum, obcaecati exercitationem quis vel alias voluptates veniam? Qui enim, dolorum, reiciendis laborum modi voluptatem labore porro fuga iste impedit nam eius aspernatur quam voluptates ipsam excepturi asperiores sapiente quos illo recusandae quidem veritatis ut blanditiis. Id ipsam temporibus expedita molestias quis ex deleniti quos iste vero quibusdam odio quidem suscipit, reiciendis similique eligendi quas est asperiores sit ipsum veritatis. Aspernatur laboriosam dolorum repellat voluptatum inventore, eum, laborum delectus facere dicta quibusdam mollitia quidem et iusto distinctio doloribus iure similique. Natus sed provident fuga nihil harum sit odio ipsam error velit architecto maxime assumenda doloremque veritatis, praesentium repudiandae aliquam nisi molestiae modi necessitatibus! Dolorem autem odit possimus incidunt! Doloremque at unde sed, asperiores voluptatibus harum similique repellat fugiat voluptatum eius animi debitis, vero omnis minus esse quod. Obcaecati odio nam voluptatum harum quas, suscipit ab atque nemo natus reiciendis, distinctio maiores dicta ipsum labore eum vel quos! Voluptates magni, vitae asperiores voluptatem quod mollitia nisi, laudantium rerum facere obcaecati, minus eligendi perspiciatis repudiandae natus.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi saepe iure neque minima repudiandae ratione. Soluta temporibus amet ipsum dolorum aliquid harum cumque neque, odio eos. Omnis id laborum molestiae, officiis ipsa corrupti nihil quis sed quia quos est quasi iure aperiam dolores praesentium alias minus ipsum explicabo libero possimus harum quaerat? Ipsam modi, in, aperiam magnam, accusamus vel officiis deleniti earum aliquid est mollitia nemo nesciunt recusandae doloribus debitis nihil ipsum molestias iste sit corporis unde quam. Et nulla ipsum alias blanditiis? In, ad officiis magnam adipisci maiores, exercitationem iste a alias sed libero harum hic vitae consequuntur autem.</p>',
                   
    'category' => 'news',
    'publish'  => 'le 27 mars 2018',
    'image'    => 'icon-john.png'
  
];

$list_articles['article_3'] = [

    'title'    => 'Lorem ipsum dolor sit amet',
    'author'   => 'Harry Covert',
    'text'     => '<p>ARTICLE 3 : Even though using "lorem ipsum" often arouses curiosity due to its resemblance to classical Latin, it is not intended to have meaning. Where text is visible in a document, people tend to focus on the textual content rather than upon overall presentation, so publishers use lorem ipsum when displaying a typeface or design in order to direct the focus to presentation. "Lorem ipsum" also approximates a typical distribution of spaces in English.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit doloribus necessitatibus eveniet et blanditiis deleniti velit laboriosam fugiat quasi atque, error a quibusdam quaerat eos distinctio illum. Maiores commodi a numquam placeat enim iste, facilis, illo rerum at officiis sequi, saepe nisi impedit distinctio exercitationem ut dignissimos asperiores. Sunt vitae vel, eveniet atque magnam rem, natus consequuntur eum quidem quasi nemo est maiores consectetur iure ipsam necessitatibus beatae fugiat similique officiis esse adipisci! Saepe, ex. Id dolor fuga aperiam, tempore ut earum eius vero, numquam mollitia labore pariatur voluptatum. Delectus, laborum natus. Quaerat, nihil excepturi libero esse unde fuga vero veniam molestias cum rem nostrum nemo, laboriosam, fugiat vitae enim consequuntur fugit nisi. Dolor veritatis modi exercitationem nesciunt quia placeat, at fuga ratione nisi unde sequi, ullam facere quisquam minus natus id accusamus a architecto impedit similique odio possimus fugit quasi inventore. Omnis quibusdam reiciendis doloremque fugit asperiores harum recusandae tempore repellendus nesciunt eligendi quis officiis molestias ipsam mollitia, alias architecto ipsa, iusto porro consectetur officia reprehenderit sed saepe sapiente inventore! Corrupti neque cupiditate facere beatae iusto iure in suscipit dolore explicabo numquam aut, accusantium molestiae tenetur corporis dolorum est, consectetur ducimus, ab atque! Atque dolores consequatur perspiciatis aliquam nemo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi facere perspiciatis at corrupti quam impedit quasi accusantium porro magnam suscipit officiis voluptatum autem velit eveniet laudantium, consectetur reprehenderit ut beatae sint labore expedita! Natus mollitia dolores ipsum, quasi unde doloremque porro delectus sapiente est numquam voluptatibus, maiores voluptates excepturi, repellat quas adipisci commodi! Mollitia maiores accusamus vel eius? Ad, culpa hic obcaecati officia, natus soluta harum asperiores a esse ex praesentium laudantium consequatur quas. Veniam.</p>',
    'category' => 'news',
    'publish'  => 'le 1 avril 2020',
    'image'    => 'icon-ohz.png'
  
];

$list_articles['article_4'] = [

    'title'    => 'Lorem ipsum dolor sit amet',
    'author'   => 'Gerard Menvu',
    'text'     => '<p>ARTICLE 4 :Lorem ipsum dolor sit amet consectetur adipisicing elit. A quaerat commodi architecto perferendis sit sed ipsa excepturi repellendus accusamus iure, ipsam quos esse iste consectetur nam dolore minima eum obcaecati libero officiis quisquam quo? Ab, magni nostrum! Quia, laborum ad. Dolorem quidem, modi odit saepe enim perferendis, dolorum dolore hic illum accusamus nesciunt eos animi culpa tempora numquam, veniam rerum? Sapiente officia fugit quos eligendi tempore modi, dolore consequuntur vel tempora inventore culpa saepe eius, aperiam est quo? Nostrum aliquid dicta veniam ratione! Quis, possimus distinctio non expedita praesentium incidunt sunt voluptatum, eius omnis perferendis commodi voluptate quisquam. Harum consequatur consequuntur sint et, accusamus illo, autem voluptate aliquam at adipisci ut exercitationem repellat a perspiciatis commodi necessitatibus sit odit? Nisi aut sapiente repudiandae cum aliquid asperiores pariatur quibusdam libero, reprehenderit quisquam illo quaerat porro, veniam, atque temporibus laboriosam quidem consectetur ex sunt. Ratione minima eveniet, vel similique magnam ex totam.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit doloribus necessitatibus eveniet et blanditiis deleniti velit laboriosam fugiat quasi atque, error a quibusdam quaerat eos distinctio illum. Maiores commodi a numquam placeat enim iste, facilis, illo rerum at officiis sequi, saepe nisi impedit distinctio exercitationem ut dignissimos asperiores. Sunt vitae vel, eveniet atque magnam rem, natus consequuntur eum quidem quasi nemo est maiores consectetur iure ipsam necessitatibus beatae fugiat similique officiis esse adipisci! Saepe, ex. Id dolor fuga aperiam, tempore ut earum eius vero, numquam mollitia labore pariatur voluptatum. Delectus, laborum natus. Quaerat, nihil excepturi libero esse unde fuga vero veniam molestias cum rem nostrum nemo, laboriosam, fugiat vitae enim consequuntur fugit nisi. Dolor veritatis modi exercitationem nesciunt quia placeat, at fuga ratione nisi unde sequi, ullam facere quisquam minus natus id accusamus a architecto impedit similique odio possimus fugit quasi inventore. Omnis quibusdam reiciendis doloremque fugit asperiores harum recusandae tempore repellendus nesciunt eligendi quis officiis molestias ipsam mollitia, alias architecto ipsa, iusto porro consectetur officia reprehenderit sed saepe sapiente inventore! Corrupti neque cupiditate facere beatae iusto iure in suscipit dolore explicabo numquam aut, accusantium molestiae tenetur corporis dolorum est, consectetur ducimus, ab atque! Atque dolores consequatur perspiciatis aliquam nemo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi facere perspiciatis at corrupti quam impedit quasi accusantium porro magnam suscipit officiis voluptatum autem velit eveniet laudantium, consectetur reprehenderit ut beatae sint labore expedita! Natus mollitia dolores ipsum, quasi unde doloremque porro delectus sapiente est numquam voluptatibus, maiores voluptates excepturi, repellat quas adipisci commodi! Mollitia maiores accusamus vel eius? Ad, culpa hic obcaecati officia, natus soluta harum asperiores a esse ex praesentium laudantium consequatur quas. Veniam.</p>',
    'category' => 'work',
    'publish'  => 'le 25 decembre 1902',
    'image'    => 'icon-spr.png'
  
];

$list_articles['article_5'] = [

    'title'    => 'Lorem ipsum dolor sit amet',
    'author'   => 'Adam Troijoure',
    'text'     => '<p>ARTICLE 5 : Lorem ipsum dolor sit amet consectetur adipisicing elit. A quaerat commodi architecto perferendis sit sed ipsa excepturi repellendus accusamus iure, ipsam quos esse iste consectetur nam dolore minima eum obcaecati libero officiis quisquam quo? Ab, magni nostrum! Quia, laborum ad. Dolorem quidem, modi odit saepe enim perferendis, dolorum dolore hic illum accusamus nesciunt eos animi culpa tempora numquam, veniam rerum? Sapiente officia fugit quos eligendi tempore modi, dolore consequuntur vel tempora inventore culpa saepe eius, aperiam est quo? Nostrum aliquid dicta veniam ratione! Quis, possimus distinctio non expedita praesentium incidunt sunt voluptatum, eius omnis perferendis commodi voluptate quisquam. Harum consequatur consequuntur sint et, accusamus illo, autem voluptate aliquam at adipisci ut exercitationem repellat a perspiciatis commodi necessitatibus sit odit? Nisi aut sapiente repudiandae cum aliquid asperiores pariatur quibusdam libero, reprehenderit quisquam illo quaerat porro, veniam, atque temporibus laboriosam quidem consectetur ex sunt. Ratione minima eveniet, vel similique magnam ex totam.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit doloribus necessitatibus eveniet et blanditiis deleniti velit laboriosam fugiat quasi atque, error a quibusdam quaerat eos distinctio illum. Maiores commodi a numquam placeat enim iste, facilis, illo rerum at officiis sequi, saepe nisi impedit distinctio exercitationem ut dignissimos asperiores. Sunt vitae vel, eveniet atque magnam rem, natus consequuntur eum quidem quasi nemo est maiores consectetur iure ipsam necessitatibus beatae fugiat similique officiis esse adipisci! Saepe, ex. Id dolor fuga aperiam, tempore ut earum eius vero, numquam mollitia labore pariatur voluptatum. Delectus, laborum natus. Quaerat, nihil excepturi libero esse unde fuga vero veniam molestias cum rem nostrum nemo, laboriosam, fugiat vitae enim consequuntur fugit nisi. Dolor veritatis modi exercitationem nesciunt quia placeat, at fuga ratione nisi unde sequi, ullam facere quisquam minus natus id accusamus a architecto impedit similique odio possimus fugit quasi inventore. Omnis quibusdam reiciendis doloremque fugit asperiores harum recusandae tempore repellendus nesciunt eligendi quis officiis molestias ipsam mollitia, alias architecto ipsa, iusto porro consectetur officia reprehenderit sed saepe sapiente inventore! Corrupti neque cupiditate facere beatae iusto iure in suscipit dolore explicabo mquam aut, accusantium molestiae tenetur corporis dolorum est, consectetur ducimus, ab atque! Atque dolores consequatur perspiciatis aliquam nemo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi facere perspiciatis at corrupti quam impedit quasi accusantium porro magnam suscipit officiis voluptatum autem velit eveniet laudantium, consectetur reprehenderit ut beatae sint labore expedita! Natus mollitia dolores ipsum, quasi unde doloremque porro delectus sapiente est numquam voluptatibus, maiores voluptates excepturi, repellat quas adipisci commodi! Mollitia maiores accusamus vel eius? Ad, culpa hic obcaecati officia, natus soluta harum asperiores a esse ex praesentium laudantium consequatur quas. Veniam.</p>',
    'category' => 'team',
    'publish'  => 'le 14 juillet 1789',
    'image'    => 'icon-tr.png'
  
];

$list_articles['article_6'] = [

    'title'    => 'Lorem ipsum dolor sit amet',
    'author'   => 'Claire Lafermeturé',
    'text'     => '<p>ARTICLE 6 : Lorem ipsum dolor sit amet consectetur adipisicing elit. A quaerat commodi architecto perferendis sit sed ipsa excepturi repellendus accusamus iure, ipsam quos esse iste consectetur nam dolore minima eum obcaecati libero officiis quisquam quo? Ab, magni nostrum! Quia, laborum ad. Dolorem quidem, modi odit saepe enim perferendis, dolorum dolore hic illum accusamus nesciunt eos animi culpa tempora numquam, veniam rerum? Sapiente officia fugit quos eligendi tempore modi, dolore consequuntur vel tempora inventore culpa saepe eius, aperiam est quo? Nostrum aliquid dicta veniam ratione! Quis, possimus distinctio non expedita praesentium incidunt sunt voluptatum, eius omnis perferendis commodi voluptate quisquam. Harum consequatur consequuntur sint et, accusamus illo, autem voluptate aliquam at adipisci ut exercitationem repellat a perspiciatis commodi necessitatibus sit odit? Nisi aut sapiente repudiandae cum aliquid asperiores pariatur quibusdam libero, reprehenderit quisquam illo quaerat porro, veniam, atque temporibus laboriosam quidem consectetur ex sunt. Ratione minima eveniet, vel similique magnam ex totam.</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit doloribus necessitatibus eveniet et blanditiis deleniti velit laboriosam fugiat quasi atque, error a quibusdam quaerat eos distinctio illum. Maiores commodi a numquam placeat enim iste, facilis, illo rerum at officiis sequi, saepe nisi impedit distinctio exercitationem ut dignissimos asperiores. Sunt vitae vel, eveniet atque magnam rem, natus consequuntur eum quidem quasi nemo est maiores consectetur iure ipsam necessitatibus beatae fugiat similique officiis esse adipisci! Saepe, ex. Id dolor fuga aperiam, tempore ut earum eius vero, numquam mollitia labore pariatur voluptatum. Delectus, laborum natus. Quaerat, nihil excepturi libero esse unde fuga vero veniam molestias cum rem nostrum nemo, laboriosam, fugiat vitae enim consequuntur fugit nisi. Dolor veritatis modi exercitationem nesciunt quia placeat, at fuga ratione nisi unde sequi, ullam facere quisquam minus natus id accusamus a architecto impedit similique odio possimus fugit quasi inventore. Omnis quibusdam reiciendis doloremque fugit asperiores harum recusandae tempore repellendus nesciunt eligendi quis officiis molestias ipsam mollitia, alias architecto ipsa, iusto porro consectetur officia reprehenderit sed saepe sapiente inventore! Corrupti neque cupiditate facere beatae iusto iure in suscipit dolore explicabo numquam aut, accusantium molestiae tenetur corporis dolorum est, consectetur ducimus, ab atque! Atque dolores consequatur perspiciatis aliquam nemo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi facere perspiciatis at corrupti quam impedit quasi accusantium porro magnam suscipit officiis voluptatum autem velit eveniet laudantium, consectetur reprehenderit ut beatae sint labore expedita! Natus mollitia dolores ipsum, quasi unde doloremque porro delectus sapiente est numquam voluptatibus, maiores voluptates excepturi, repellat quas adipisci commodi! Mollitia maiores accusamus vel eius? Ad, culpa hic obcaecati officia, natus soluta harum asperiores a esse ex praesentium laudantium consequatur quas. Veniam.</p>',
    'category' => 'work',
    'publish'  => 'le 12 avril 1969',
    'image'    => 'icon-tre.png'
  
];