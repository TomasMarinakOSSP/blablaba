<?php
// source: /home/marinakt/user-auth01-2/config/common.neon
// source: /home/marinakt/user-auth01-2/config/services.neon
// source: /home/marinakt/user-auth01-2/config/local.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_cb5cbd1609 extends Nette\DI\Container
{
	protected array $tags = [
		'nette.inject' => [
			'application.1' => true,
			'application.2' => true,
			'application.3' => true,
			'application.4' => true,
			'application.5' => true,
			'application.6' => true,
			'application.7' => true,
			'application.8' => true,
			'application.9' => true,
		],
	];

	protected array $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'database.default.context' => 'database.default.explorer',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.explorer',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected array $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\Conventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Explorer' => [['database.default.explorer']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Nette\Routing\RouteList' => [['01']],
		'Nette\Routing\Router' => [['01']],
		'ArrayAccess' => [
			2 => [
				'01',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
			],
		],
		'Nette\Application\Routers\RouteList' => [['01']],
		'Nette\Application\UI\Presenter' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'Nette\Application\UI\Control' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'Nette\Application\UI\Component' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'Nette\ComponentModel\Container' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'Nette\ComponentModel\Component' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'Nette\Application\IPresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
			],
		],
		'Nette\Application\UI\Renderable' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'Nette\Application\UI\StatePersistent' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'Nette\Application\UI\SignalReceiver' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'Nette\ComponentModel\IContainer' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'Nette\ComponentModel\IComponent' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'App\Module\Admin\Presenters\SignPresenter' => [2 => ['application.1']],
		'App\Module\Admin\Presenters\HomePresenter' => [2 => ['application.2']],
		'App\Module\Admin\Presenters\DashboardPresenter' => [2 => ['application.3']],
		'App\Module\Admin\Presenters\EditPresenter' => [2 => ['application.4']],
		'App\Module\Admin\Presenters\PostPresenter' => [2 => ['application.5']],
		'App\Module\Auxiliary\Presenters\Error4xxPresenter' => [2 => ['application.6']],
		'App\Module\Auxiliary\Presenters\ErrorPresenter' => [2 => ['application.7']],
		'NetteModule\ErrorPresenter' => [2 => ['application.8']],
		'NetteModule\MicroPresenter' => [2 => ['application.9']],
		'App\Model\PostFacade' => [['02']],
		'Nette\Security\Authenticator' => [['03']],
		'Nette\Security\IAuthenticator' => [['03']],
		'App\Model\UserFacade' => [['03']],
		'App\Forms\FormFactory' => [['04']],
		'App\Forms\SignInFormFactory' => [['05']],
		'App\Forms\SignUpFormFactory' => [['06']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): Nette\Application\Routers\RouteList
	{
		return App\Router\RouterFactory::createRouter();
	}


	public function createService02(): App\Model\PostFacade
	{
		return new App\Model\PostFacade($this->getService('database.default.explorer'));
	}


	public function createService03(): App\Model\UserFacade
	{
		return new App\Model\UserFacade($this->getService('database.default.explorer'), $this->getService('security.passwords'));
	}


	public function createService04(): App\Forms\FormFactory
	{
		return new App\Forms\FormFactory($this->getService('security.user'));
	}


	public function createService05(): App\Forms\SignInFormFactory
	{
		return new App\Forms\SignInFormFactory($this->getService('04'), $this->getService('security.user'));
	}


	public function createService06(): App\Forms\SignUpFormFactory
	{
		return new App\Forms\SignUpFormFactory($this->getService('04'), $this->getService('03'));
	}


	public function createServiceApplication__1(): App\Module\Admin\Presenters\SignPresenter
	{
		$service = new App\Module\Admin\Presenters\SignPresenter($this->getService('05'), $this->getService('06'));
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__2(): App\Module\Admin\Presenters\HomePresenter
	{
		$service = new App\Module\Admin\Presenters\HomePresenter($this->getService('02'));
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): App\Module\Admin\Presenters\DashboardPresenter
	{
		$service = new App\Module\Admin\Presenters\DashboardPresenter;
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->injectRequireLoggedUser();
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__4(): App\Module\Admin\Presenters\EditPresenter
	{
		$service = new App\Module\Admin\Presenters\EditPresenter($this->getService('02'));
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__5(): App\Module\Admin\Presenters\PostPresenter
	{
		$service = new App\Module\Admin\Presenters\PostPresenter($this->getService('02'));
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__6(): App\Module\Auxiliary\Presenters\Error4xxPresenter
	{
		$service = new App\Module\Auxiliary\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__7(): App\Module\Auxiliary\Presenters\ErrorPresenter
	{
		return new App\Module\Auxiliary\Presenters\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__8(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__9(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('01'));
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
		);
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service,
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory'),
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('01'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory'),
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'/home/marinakt/user-auth01-2/temp/cache/nette.application/touch',
		));
		$service->setMapping(['*' => 'App\Module\*\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage('/home/marinakt/user-auth01-2/temp/cache');
	}


	public function createServiceContainer(): Nette\DI\Container
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection(
			'mysql:host=127.0.0.1;dbname=usertest2',
			/*sensitive{*/'root'/*}*/,
			/*sensitive{*/'root'/*}*/,
			[],
		);
		Nette\Bridges\DatabaseTracy\ConnectionPanel::initialize(
			$service,
			true,
			'default',
			true,
			$this->getService('tracy.bar'),
			$this->getService('tracy.blueScreen'),
		);
		return $service;
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__explorer(): Nette\Database\Explorer
	{
		return new Nette\Database\Explorer(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage'),
		);
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			public function __construct(
				private Container_cb5cbd1609 $container,
			) {
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/home/marinakt/user-auth01-2/temp/cache/latte');
				$service->setAutoRefresh(true);
				$service->setStrictTypes(false);
				$service->setStrictParsing(false);
				$service->enablePhpLinter(null);
				func_num_args() && $service->addExtension(new Nette\Bridges\ApplicationLatte\UIExtension(func_get_arg(0)));
				$service->addExtension(new Nette\Bridges\CacheLatte\CacheExtension($this->container->getService('cache.storage')));
				$service->addExtension(new Nette\Bridges\FormsLatte\FormsExtension);
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage'),
			null,
		);
		Nette\Bridges\ApplicationDI\LatteExtension::initLattePanel($service, $this->getService('tracy.bar'), false);
		return $service;
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('03'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		$service->setOptions(['cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize(): void
	{
		// di.
		(function () {
			$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		})();
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// session.
		(function () {
			$this->getService('session.session')->autoStart(false);
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			$logger = $this->getService('tracy.logger');
		})();
	}


	protected function getStaticParameters(): array
	{
		return [
			'appDir' => '/home/marinakt/user-auth01-2/app',
			'wwwDir' => '/home/marinakt/user-auth01-2/www',
			'vendorDir' => '/home/marinakt/user-auth01-2/vendor',
			'rootDir' => '/home/marinakt/user-auth01-2',
			'debugMode' => true,
			'productionMode' => false,
			'consoleMode' => false,
			'tempDir' => '/home/marinakt/user-auth01-2/temp',
		];
	}
}
