MyWpTheme
=========

MyWpTheme is a highly customisable WordPress theme based on Bootstrap 4.0. The project is still in development stage, and trying to get it to an alpha stage at least.

Getting started for developers
------------------------------

## Pre-requisites and dependecies

1. [Install Node](https://nodejs.org/en/download/package-manager/) which is used for managing the build and some package dependencies for development.
2. [Install Bower](https://bower.io/#install-bower) which is used to manage packages used for distribution.
3. Sass compiler used by us is [node-sass](https://github.com/sass/node-sass). This is a development dependency to be installed by `npm install node-sass`.
4. Run `bower install` to get all the distribution dependencies.
5. Optionally [build Bootstrap](https://getbootstrap.com/docs/4.0/getting-started/build-tools/) if you want to customise your css. The bootstrap folder should be in `./libweb`.

Note: I am using simple (gnu-make)[https://www.gnu.org/software/make/] for building and testing as of now. I might switch to something else based on public demand or ease of use.

## Bugs and features

Currently bugs and feature list is being manintained in the README-DEV.md folder. Until an alpha release happens, I'll stick to that only.