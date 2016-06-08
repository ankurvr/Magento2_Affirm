<?php
/**
 * Astound
 * NOTICE OF LICENSE
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to codemaster@astoundcommerce.com so we can send you a copy immediately.
 *
 * @category  Affirm
 * @package   Astound_Affirm
 * @copyright Copyright (c) 2016 Astound, Inc. (http://www.astoundcommerce.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Astound\Affirm\Test\Unit\Model\Config\System\Source;

use Astound\Affirm\Model\Config\System\Source\Logo;

/**
 * Class LogoTest
 *
 * @package Astound\Affirm\Test\Unit\Model\Config\System\Source
 */
class LogoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Logo source model instance
     *
     * @var \Astound\Affirm\Model\Config\System\Source\Logo logoSourceModel
     */
    protected $logoSourceModel;

    /**
     * Specify logo instance for tests class
     */
    public function setUp()
    {
        $this->logoSourceModel = new Logo();
    }

    /**
     * Test source model.
     *
     * @test
     */
    public function testToOptionArray()
    {
        $result = $this->logoSourceModel->toOptionArray();
        // This values just hardcoded in the source model.
        $expected = [
            '<img src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1NzEuNjQgMTY2LjA0Ij48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6IzJiYzJkZjt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmxvZ290eXBlX2JsdWU8L3RpdGxlPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTI5OC4zOSwwQTE3LjU3LDE3LjU3LDAsMSwwLDMxNiwxNy41NywxNy41OSwxNy41OSwwLDAsMCwyOTguMzksMFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMCkiLz48cmVjdCBjbGFzcz0iY2xzLTEiIHg9IjI4My4zIiB5PSI0Ni42OCIgd2lkdGg9IjI5Ljk5IiBoZWlnaHQ9IjExOS4zMSIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTQwMy40Nyw0My42MWMtMTUsMC0zMi4yNSwxMC44LTM3LjkzLDI0LjM0VjQ2LjY4SDMzNy4wOVYxNjZoMzBWMTEwLjU5YzAtMjMuNDUsOS0zNi41NCwyOC42MS0zNi45MUw0MTIuNDQsNDQuM0E2NC4xNyw2NC4xNywwLDAsMCw0MDMuNDcsNDMuNjFaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwIDApIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNTI0LDQzLjY5Yy0xMi44NywwLTI0LjQxLDQuODQtMzIuNSwxMy42MmwtMC40Mi40NS0wLjQxLS40NWMtOC04Ljc4LTE5LjQ4LTEzLjYyLTMyLjM2LTEzLjYyLTI3LjU4LDAtNDcuNiwyMC4xMS00Ny42LDQ3LjgxVjE2NmgyOS41MlY5MC44NmMwLTExLjYzLDcuMS0xOS4xNCwxOC4wOC0xOS4xNHMxOC4wOSw3LjUxLDE4LjA5LDE5LjE0VjE2Nkg1MDZWOTAuODZjMC0xMS42Myw3LjEtMTkuMTQsMTguMDktMTkuMTRzMTguMDksNy41MSwxOC4wOSwxOS4xNFYxNjZoMjkuNTFWOTEuNUM1NzEuNjQsNjMuOCw1NTEuNjIsNDMuNjksNTI0LDQzLjY5WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCAwKSIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTI0NywzNS42OWMwLTMuOTQuNTMtOC42NSwzLjktMTEuMjQsMy42OS0yLjg3LDkuMDktMi4zNCwxMy40Ni0yLjEybDUuODItMjEuNzItMy4xMS0uMTZjLTEyLjUyLS42Ny0yNS42OS0xLjYtMzYuNjcsNS42Ni05LjMxLDYuMTUtMTMuNDUsMTYuNzQtMTMuNDUsMjcuNjF2MTNIMTgxLjE4di0xMWMwLTMuOTIuNTItOC41OCwzLjgyLTExLjIsMy42OS0yLjkzLDkuMTYtMi4zOCwxMy41My0yLjE2bDUuODItMjEuNzItMy4xMS0uMTZjLTEyLjYyLS42OC0yNS45Mi0xLjYtMzYuOTEsNS44Ni05LjEyLDYuMTgtMTMuMTYsMTYuNjgtMTMuMTYsMjcuNDJ2MTNIMTM3LjY1VjY4LjM3aDEzLjUzVjE2NmgzMFY2OC4zN2gzNS43NlYxNjZoMzBWNjguMzdoMjAuNzdWNDYuNjhIMjQ3di0xMVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMCkiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xMjIuNDMsMTY2bDAtMTA1LjM2YTE3LjMyLDE3LjMyLDAsMCwwLTE1LjMyLTE3Yy01LjczLS4zNy0xMS44MiwxLjczLTE1LjQxLDYuMzhMMCwxNjZIMjIuNmM5LDAsMTYuMTgtNC42OSwyMS42MS0xMS43TDk1LDkwLjA3VjE2NmgyNy40NVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMCkiLz48L3N2Zz4=" style="height:1em; margin:0 .3em .15em;vertical-align:bottom;">' => 'Blue',
            '<img src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1NzEuNjQgMTY2LjA0Ij48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6IzIzMWYyMDt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmxvZ290eXBlX2JsazwvdGl0bGU+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMjk4LjM5LTEuOTJBMTcuNTcsMTcuNTcsMCwxLDAsMzE2LDE1LjY1LDE3LjU5LDE3LjU5LDAsMCwwLDI5OC4zOS0xLjkyWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCAxLjkyKSIvPjxyZWN0IGNsYXNzPSJjbHMtMSIgeD0iMjgzLjMiIHk9IjQ2LjY4IiB3aWR0aD0iMjkuOTkiIGhlaWdodD0iMTE5LjMxIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNDAzLjQ3LDQxLjY5Yy0xNSwwLTMyLjI1LDEwLjgtMzcuOTMsMjQuMzRWNDQuNzZIMzM3LjA5VjE2NC4wOGgzMFYxMDguNjdjMC0yMy40NSw5LTM2LjU0LDI4LjYxLTM2LjkxbDE2Ljc1LTI5LjM4QTY0LjE3LDY0LjE3LDAsMCwwLDQwMy40Nyw0MS42OVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMS45MikiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik01MjQsNDEuNzdjLTEyLjg3LDAtMjQuNDEsNC44NC0zMi41LDEzLjYybC0wLjQyLjQ1LTAuNDEtLjQ1Yy04LTguNzgtMTkuNDgtMTMuNjItMzIuMzYtMTMuNjItMjcuNTgsMC00Ny42LDIwLjExLTQ3LjYsNDcuODF2NzQuNTNoMjkuNTJWODguOTRjMC0xMS42Myw3LjEtMTkuMTQsMTguMDgtMTkuMTRzMTguMDksNy41MSwxOC4wOSwxOS4xNHY3NS4xN0g1MDZWODguOTRjMC0xMS42Myw3LjEtMTkuMTQsMTguMDktMTkuMTRzMTguMDksNy41MSwxOC4wOSwxOS4xNHY3NS4xN2gyOS41MVY4OS41OEM1NzEuNjQsNjEuODgsNTUxLjYyLDQxLjc3LDUyNCw0MS43N1oiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMS45MikiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0yNDcsMzMuNzdjMC0zLjk0LjUzLTguNjUsMy45LTExLjI0LDMuNjktMi44Nyw5LjA5LTIuMzQsMTMuNDYtMi4xMmw1LjgyLTIxLjcyLTMuMTEtLjE2Yy0xMi41Mi0uNjctMjUuNjktMS42LTM2LjY3LDUuNjYtOS4zMSw2LjE1LTEzLjQ1LDE2Ljc0LTEzLjQ1LDI3LjYxdjEzSDE4MS4xOHYtMTFjMC0zLjkyLjUyLTguNTgsMy44Mi0xMS4yLDMuNjktMi45Myw5LjE2LTIuMzgsMTMuNTMtMi4xNmw1LjgyLTIxLjcyLTMuMTEtLjE2Yy0xMi42Mi0uNjgtMjUuOTItMS42LTM2LjkxLDUuODYtOS4xMiw2LjE4LTEzLjE2LDE2LjY4LTEzLjE2LDI3LjQydjEzSDEzNy42NVY2Ni40NWgxMy41M3Y5Ny42M2gzMFY2Ni40NWgzNS43NnY5Ny42M2gzMFY2Ni40NWgyMC43N1Y0NC43NkgyNDd2LTExWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCAxLjkyKSIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTEyMi40MywxNjQuMDlsMC0xMDUuMzZhMTcuMzIsMTcuMzIsMCwwLDAtMTUuMzItMTdjLTUuNzMtLjM3LTExLjgyLDEuNzMtMTUuNDEsNi4zOEwwLDE2NC4wOEgyMi42YzksMCwxNi4xOC00LjY5LDIxLjYxLTExLjdMOTUsODguMTV2NzUuOTRoMjcuNDVaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwIDEuOTIpIi8+PC9zdmc+" style="height:1em; margin:0 .3em .15em;vertical-align:bottom;">' => 'Black'
        ];
        $this->assertEquals($expected, $result);
    }
}
