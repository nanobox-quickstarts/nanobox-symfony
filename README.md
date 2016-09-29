# Symfony with Nanobox
This is the companion application for the [Symfony: Getting Started](https://guides.nanobox.io/symfony/) guide on [guides.nanobox.io](https://guides.nanobox.io) and is pre-configured and ready to run with [Nanobox](https://nanobox.io/)!

## Up and Running

``` bash
# clone the code
git clone --recursive https://github.com/nanobox-quickstarts/nanobox-symfony.git

# cd into the symfony app
cd nanobox-symfony

# build the runtime
nanobox build

# add a convenient way to access your app from the browser
nanobox dev dns add symfony.nanobox.dev

# start PHP-FPM & Apache
nanobox dev run
```

Visit the app from your favorite browser at: `symfony.nanobox.dev:8080`

## Now What?
For more details about how this works or for more advanced topics related to running Symfony applications with Nanobox visit [guides.nanobox.io/symfony/](https://guides.nanobox.io/symfony/).
