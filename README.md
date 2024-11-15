# <div align="center">Yii2 Advanced Debugger</div>

<div align="center">
    <a href="https://www.yiiframework.com/" target="_blank">
        <img src="https://www.yiiframework.com/image/yii_logo_light.svg" width="400" alt="Yii Framework" />
    </a>
</div>

<div align="center">
    <a href="https://packagist.org/packages/samman/yii2-advanced-debugger" target="_blank">
        <img src="https://img.shields.io/packagist/v/samman/yii2-advanced-debugger.svg" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/samman/yii2-advanced-debugger" target="_blank">
        <img src="https://img.shields.io/packagist/dt/samman/yii2-advanced-debugger.svg" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/samman/yii2-advanced-debugger" target="_blank">
        <img src="https://img.shields.io/packagist/l/samman/yii2-advanced-debugger.svg" alt="License">
    </a>
</div>

## About

Yii2 Advanced Debugger enhances the default Yii2 Debug toolbar with additional panels specifically designed for API development and debugging. This package provides tools to inspect API responses and easily reproduce API requests using cURL commands.

## Features

### Response Panel
A dedicated panel for inspecting JSON API responses with features including:
- Pretty-printed JSON response viewing
- Response headers inspection
- Response timing information
- Response size metrics
- HTTP status code display
- Content-Type verification

![Response Panel](https://user-images.githubusercontent.com/59656525/198234064-152310e8-da7f-4b18-8e2b-f84b38d9bd2a.png)

### CURL Panel
Generate and copy cURL commands for any request with:
- Complete request headers
- Query parameters
- Request body
- Authentication headers
- Content-Type specifications
- Method specifications (GET, POST, PUT, DELETE, etc.)

![CURL Panel](https://user-images.githubusercontent.com/59656525/198233273-b7378f40-6a01-4232-98db-2e07f352552f.png)

## Requirements

- PHP >= 7.2
- Yii2 >= 2.0.13
- Yii2 Debug Module enabled

## Installation

### Via Composer

The preferred installation method is through [Composer](http://getcomposer.org/download/). Run either:

```bash
composer require samman/yii2-advanced-debugger
```

or add the following to the require section of your `composer.json`:

```json
{
    "require": {
        "samman/yii2-advanced-debugger": "*"
    }
}
```

## Configuration

### Basic Template
Add the debug panels to your configuration in `config/web.php`:

```php
$config['modules']['debug'] = [
    'class' => 'yii\debug\Module',
    'panels' => [
        'curl-panel' => ['class' => 'samman\debug\CurlPanel'],
        'response-panel' => ['class' => 'samman\debug\ResponsePanel'],
    ],
];
```

### Advanced Template
Add the debug panels to your configuration in `config/main-local.php`:

```php
$config['modules']['debug'] = [
    'class' => 'yii\debug\Module',
    'panels' => [
        'curl-panel' => ['class' => 'samman\debug\CurlPanel'],
        'response-panel' => ['class' => 'samman\debug\ResponsePanel'],
    ],
];
```

## Usage

### Response Panel

The Response Panel automatically captures and displays API responses. Access it through the debug toolbar by clicking on the "Response" tab.

Key features:
1. View formatted JSON responses
2. Inspect response headers
3. Check response timing
4. Monitor response size
5. Verify HTTP status codes

### CURL Panel

The CURL Panel provides copyable cURL commands for reproducing requests. To use:

1. Make your API request
2. Open the debug toolbar
3. Click on the "CURL" tab
4. Click the "Copy" button to get the full cURL command

Example generated cURL command:
```bash
curl -X POST 'http://api.example.com/v1/users' \
  -H 'Content-Type: application/json' \
  -H 'Authorization: Bearer your-token' \
  -d '{
    "username": "john_doe",
    "email": "john@example.com"
  }'
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request. For major changes, please open an issue first to discuss what you would like to change.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Support

If you discover any issues or have questions, please [create an issue](https://github.com/yourusername/yii2-advanced-debugger/issues).

## Credits

- Created by Mazen Al saman
- Logo by [Yii Framework](https://www.yiiframework.com/)
- Contributors: [List of contributors]
