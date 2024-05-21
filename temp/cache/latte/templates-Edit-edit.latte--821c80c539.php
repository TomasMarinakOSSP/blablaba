<?php

use Latte\Runtime as LR;

/** source: /home/marinakt/user-auth01-2/app/Module/Admin/Presenters/templates/Edit/edit.latte */
final class Template_821c80c539 extends Latte\Runtime\Template
{
	public const Source = '/home/marinakt/user-auth01-2/app/Module/Admin/Presenters/templates/Edit/edit.latte';

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


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '    <h1>Edit Post</h1>

    

';
		if ($post->image) /* line 6 */ {
			if (isset($post) && $post->image) /* line 7 */ {
				echo '    <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 8 */;
				echo '/';
				echo LR\Filters::escapeHtmlAttr($post->image) /* line 8 */;
				echo '" alt="Obrázek k článku ';
				echo LR\Filters::escapeHtmlAttr($post->title) /* line 8 */;
				echo '">
';
			}
			echo '    <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('deleteImage!', [$post->id])) /* line 10 */;
			echo '">Smazat obrázek</a>
';
		}
		echo "\n";
		$ʟ_tmp = $this->global->uiControl->getComponent('postForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 13 */;
	}
}
