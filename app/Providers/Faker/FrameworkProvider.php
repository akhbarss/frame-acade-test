<?php

namespace App\Providers\Faker;

use Faker\Provider\Base;

class FrameworkProvider extends Base
{
    protected static $names = [
        'CakePHP',
        'CodeIgniter',
        'Laravel',
        'Lumen',
        'Phalcon',
        'Slim',
        'Symfony',
        'Spring Boot',
        'NextJS',
        'NestJS',
    ];

    protected static $content = [
        'CakePHP' => [
            "type" => "BACKEND",
            "description" => "CakePHP is a popular open-source PHP web framework known for its simplicity and rapid development capabilities.",
            "logo" => "/image/cakephp_logo.png"
        ],
        'CodeIgniter' => [
            "type" => "BACKEND",
            "description" => "CodeIgniter is a lightweight PHP framework that offers a small footprint and high performance for building web applications.",
            "logo" => "/image/codeigniter_logo.png"
        ],
        'Laravel' => [
            "type" => "BACKEND",
            "description" => "Laravel is a powerful PHP web framework with elegant syntax and features like ORM, routing, and authentication.",
            "logo" => "/image/laravel_logo.png"
        ],
        'Lumen' => [
            "type" => "BACKEND",
            "description" => "Lumen is a micro-framework by Laravel designed for building fast and efficient microservices and APIs.",
            "logo" => "/image/lumen_logo.png"
        ],
        'Phalcon' => [
            "type" => "BACKEND",
            "description" => "Phalcon is a full-stack PHP framework delivered as a C extension, offering high performance and low resource consumption.",
            "logo" => "/image/phalcon_logo.png"
        ],
        'Slim' => [
            "type" => "BACKEND",
            "description" => "Slim is a PHP micro-framework designed for building simple yet powerful web applications and APIs.",
            "logo" => "/image/slim_logo.png"
        ],
        'Symfony' => [
            "type" => "BACKEND",
            "description" => "Symfony is a mature and highly customizable PHP framework used to build complex web applications.",
            "logo" => "/image/symfony_logo.png"
        ],
        'Spring Boot' => [
            "type" => "BACKEND",
            "description" => "Spring Boot is an opinionated framework for building production-ready Java applications with ease.",
            "logo" => "/image/springboot_logo.png"
        ],
        'NextJS' => [
            "type" => "FRONTEND",
            "description" => "Next.js is a popular React framework that enables server-side rendering and seamless client-side routing for fast web applications.",
            "logo" => "/image/nextjs_logo.png"
        ],
        'NestJS' => [
            "type" => "BACKEND",
            "description" => "NestJS is a progressive Node.js framework for building efficient and scalable server-side applications.",
            "logo" => "/image/nestjs_logo.png"
        ],
        'FastAPI' => [
            "type" => "BACKEND",
            "description" => "FastAPI is a modern, fast (high-performance) web framework for building APIs with Python 3.7+ based on standard Python type hints.",
            "logo" => "/image/fastapi_logo.png"
        ],
        'Flask' => [
            "type" => "BACKEND",
            "description" => "Flask is a lightweight Python web framework that provides the essentials for building web applications.",
            "logo" => "/image/flask_logo.png"
        ],
        'Express.js' => [
            "type" => "BACKEND",
            "description" => "Express.js is a fast, unopinionated, and minimalist web framework for Node.js, used to build web applications and APIs.",
            "logo" => "/image/expressjs_logo.png"
        ],
        'Meteor' => [
            "type" => "BACKEND",
            "description" => "Meteor is a full-stack JavaScript framework for building real-time web applications.",
            "logo" => "/image/meteor_logo.png"
        ],
    ];

    public function framework(): string
    {
        return static::randomElement(static::$names);
    }

    public function type($framework) : string {
        return static::$content[$framework]["type"];
    }

    public function description($framework) : string {
        return static::$content[$framework]["description"];
    }

    public function logo($framework) : string {
        return static::$content[$framework]["logo"];
    }
}
