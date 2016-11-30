![Symfony from scratch](https://guides.nanobox.io/assets/quickstart-icons/symfony.png)

# Symfony from scratch

Run a Symfony app locally, install nothing besides nanobox.

<a href="https://nanobox.io/download"><img src="https://guides.nanobox.io/assets/quickstart-icons/download.png" /></a>


## Clone the repo

```bash
# clone the code
git clone https://github.com/nanobox-quickstarts/nanobox-symfony.git

# cd into the symfony app
cd nanobox-symfony
```

## Run the app

```bash
# Run symfony as you would normally, with Nanobox
nanobox run php bin/console server:run 0.0.0.0
```

## Check it out

```bash
# Add a convenient way to access your app from the browser
nanobox dns add local symfony.dev
```

Visit your app at <a href="http://symfony.dev:8000" target="\_blank">symfony.dev:8000</a>

## Explore

With Nanobox, you don't have to have anything installed on your machine to run your app:

```bash
# drop into a Nanobox console
nanobox run

# where symfony is installed,
php -v

# your packages are available,
composer show

# and your code is mounted
ls
```

## Now What?
For more details about running symfony apps with nanobox visit [guides.nanobox.io/php/symfony/](https://guides.nanobox.io/php/symfony/)

<a href="https://nanobox.io"><img src="https://guides.nanobox.io/assets/quickstart-icons/footer.png" /></a>
