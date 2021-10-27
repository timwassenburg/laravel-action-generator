<br />
<div align="center">
  <a href="https://github.com/timwassenburg/laravel-action-generator">
    <img src="img/wrench.png" alt="Logo" width=120>
  </a>

<h1 align="center">Laravel Action Generator</h1>

  <p align="center">
    Quickly generate actions for your projects!
  </p>
<br><br>
</div>

## Table of Contents
  <ol>
    <li><a href="#features">Features</a></li>
    <li><a href="#installation">Installation</a></li>
    <li>
      <a href="#usage">Usage</a>
    </li>
    <li><a href="#more-generator-packages">More generator packages</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
  </ol>

## Features
This package adds the ```php artisan make:action {name}``` command. The command 
generates an empty service class in ```app\Services``` to get started. I made this mainly
for own use because I like to be able to generate recurring files from the command line to keep
my workflow consistent.

## Installation
Install the package with composer.
```bash
composer require timwassenburg/laravel-action-generator
```

## Usage
After installation the ```php artisan make:action {name}``` will be available in the list
of artisan commands.

## More generator packages
Looking for more ways to speed up your workflow? Make sure to check out these packages.

- [Laravel Repository Generator](https://github.com/timwassenburg/laravel-repository-generator)
- [Laravel Service Generator](https://github.com/timwassenburg/laravel-service-generator)
- [Laravel Action Generator](https://github.com/timwassenburg/laravel-action-generator)
- [Improved Resource Controllers](https://github.com/timwassenburg/laravel-improved-resource-controllers)

## Contributing
Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
