<?php

use Latte\Runtime as LR;

/** source: /home/marinakt/user-auth01-2/app/Module/Admin/Presenters/templates/Sign/up.latte */
final class Template_a771852325 extends Latte\Runtime\Template
{
	public const Source = '/home/marinakt/user-auth01-2/app/Module/Admin/Presenters/templates/Sign/up.latte';

	public const Blocks = [
		['content' => 'blockContent', 'title' => 'blockTitle'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('title', get_defined_vars()) /* line 4 */;
		echo "\n";
		$this->createTemplate('../@form.latte', ['name' => 'signUpForm'] + $this->params, 'include')->renderToContentType('html') /* line 7 */;
		echo '
<p class="text-center"><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('in')) /* line 9 */;
		echo '">Already have an account? Log in.</a></p>
';
	}


	/** n:block="title" on line 4 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '<h1>Sign Up</h1>
';
	}
}
