<?php

use Latte\Runtime as LR;

/** source: /home/marinakt/user-auth01-2/app/Module/Admin/Presenters/templates/Home/default.latte */
final class Template_00b88c64ba extends Latte\Runtime\Template
{
	public const Source = '/home/marinakt/user-auth01-2/app/Module/Admin/Presenters/templates/Home/default.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['post' => '4'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '
    <div class="prispevky">
';
		foreach ($posts as $post) /* line 4 */ {
			if ($post->status !== 'ARCHIVED' || $user->isLoggedIn()) /* line 5 */ {
				echo '        <div class="post">
            <div class="date">';
				echo LR\Filters::escapeHtmlText(($this->filters->date)($post->created_at, 'F j, Y')) /* line 7 */;
				echo '</div>

            <h2><a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Post:show', [$post->id])) /* line 9 */;
				echo '">';
				echo LR\Filters::escapeHtmlText($post->title) /* line 9 */;
				echo '</a></h2>

            <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 11 */;
				echo '/';
				echo LR\Filters::escapeHtmlAttr($post->image) /* line 11 */;
				echo '" class="img-fluid" alt="Obrázek k článku ';
				echo LR\Filters::escapeHtmlAttr($post->title) /* line 11 */;
				echo '">

            <div>';
				echo LR\Filters::escapeHtmlText(($this->filters->truncate)($post->content, 256)) /* line 13 */;
				echo '</div>

            <div class="views">Počet zhlédnutí: ';
				echo LR\Filters::escapeHtmlText($post->views) /* line 15 */;
				echo '</div>
            <div class="likes">Počet "Líbí se mi": ';
				echo LR\Filters::escapeHtmlText($post->likes) /* line 16 */;
				echo '</div>
            <div class="dislikes">Počet "Nelíbí se mi": ';
				echo LR\Filters::escapeHtmlText($post->dislikes) /* line 17 */;
				echo '</div>
        </div>
';
			}

		}

		echo '</div>

    ';
		if ($paginator->pageCount > 1) /* line 23 */ {
			echo ' 
    <div class="pagination"> 
        <span class="page">Strana ';
			echo LR\Filters::escapeHtmlText($paginator->page) /* line 25 */;
			echo ' z ';
			echo LR\Filters::escapeHtmlText($paginator->pageCount) /* line 25 */;
			echo '</span> 
        <span class="controls"> 
            ';
			if ($paginator->isFirst()) /* line 27 */ {
				echo ' 
                <span class="disabled">« Předchozí</span> 
';
			} else /* line 29 */ {
				echo '                <a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $paginator->page - 1])) /* line 30 */;
				echo '">« Předchozí</a> 
';
			}
			echo '            ';
			if ($paginator->isLast()) /* line 32 */ {
				echo ' 
                <span class="disabled">Další »</span> 
';
			} else /* line 34 */ {
				echo '                <a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $paginator->page + 1])) /* line 35 */;
				echo '">Další »</a> 
';
			}
			echo '        </span>
    </div>
';
		}
		echo '
    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Edit:create')) /* line 41 */;
		echo '">Napsat nový příspěvek</a>
';
	}
}
