<?php
namespace tests\Flarum\Admin\Middleware;

use Flarum\Admin\Middleware\LoginWithCookieAndCheckAdmin;
use Flarum\Core\Exceptions\PermissionDeniedException;
use Mockery as m;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use tests\Test\TestCase;

class LoginWithCookieAndCheckAdminTest extends TestCase
{
    public function test_it_should_not_allow_invalid_logins()
    {
        $this->setExpectedException(PermissionDeniedException::class);

        $request = m::mock(ServerRequestInterface::class);
        $response = m::mock(ResponseInterface::class);

        $middleware = new LoginWithCookieAndCheckAdmin;
        $middleware->__invoke($request, $response);
    }
}
