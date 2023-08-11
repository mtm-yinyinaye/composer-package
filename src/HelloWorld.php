<?php

namespace ComposerPackage;

class HelloWorld
{
    public static function sayHello()
    {
        return <<<HTML
            <html>
            <body>
                <h1>Test From Html Element</h1>
            </body>
            </html>
        HTML;
    }
}
