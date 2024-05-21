<?php

use Latte\Runtime as LR;

/** source: /home/marinakt/user-auth01-2/app/Module/Admin/Presenters/templates/@layout.latte */
final class Template_d5e56244f3 extends Latte\Runtime\Template
{
	public const Source = '/home/marinakt/user-auth01-2/app/Module/Admin/Presenters/templates/@layout.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="www/css/style.css" type="text/css">
	  <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 7 */;
		echo '/css/style.css">
	
	<title>Document</title>
</head>
<body>

<header>
	<h1>Můj blog</h1>
</header>

<nav>
	<ul class="navigation">
		<li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:')) /* line 19 */;
		echo '">Články</a></li>
';
		if ($user->isLoggedIn()) /* line 20 */ {
			echo '			<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:out')) /* line 21 */;
			echo '">Odhlásit</a></li>
';
		} else /* line 22 */ {
			echo '			<li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:in')) /* line 23 */;
			echo '">Přihlásit</a></li>
';
		}
		echo '		<li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Edit:create')) /* line 25 */;
		echo '">Napsat nový příspěvek</a></li>
	</ul>
</nav>

';
		foreach ($flashes as $flash) /* line 29 */ {
			echo '<div';
			echo ($ʟ_tmp = array_filter(['flash', $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 29 */;
			echo '>
	';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 30 */;
			echo '
</div>
';

		}

		echo "\n";
		$this->renderBlock('content', [], 'html') /* line 33 */;
		echo '
</body>
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['flash' => '29'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
