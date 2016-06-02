<h1>Blog articles</h1>
<p><?= $this->Html->link('新規作成', ['action' => 'add'], array('class' => 'btn btn-primary')) ?></p>
<table class="table">
    <tr>
        <th>Id</th>
        <th>タイトル</th>
        <th>作成日</th>
        <th>Actions</th>
    </tr>

<!-- ここで $articles クエリオブジェクトをループして、投稿情報を表示 -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Html->link('編集', ['action' => 'edit', $article->id], array('class' => 'btn btn-warning btn-xs')) ?>
            <?= $this->Form->postLink(
                    '削除',
                    ['action' => 'delete', $article->id],
                    array('confirm' => '削除してよろしいですか？','class' => 'btn btn-danger btn-xs')
                )
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>