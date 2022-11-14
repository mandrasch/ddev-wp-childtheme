# ddev-wp-childtheme

Repository for really simple and minimalistic child theme development.

## Develop locally

1. Install [DDEV](https://ddev.readthedocs.io/en/latest/users/install/ddev-installation/) on your computer
1. Fork this repo via "Use this template"
1. Clone it to your local harddrive
1. Run `ddev start` inside the cloned folder
1. Run `ddev wp core download`
1. Run `ddev launch` and finish installation
1. Activate the child theme (`ddev wp theme activate my-child-theme`)

Have fun developing!

## Deploy it

1. Install a WordPress live site
1. Install free plugin [Git Installer](https://git-installer.com/)
1. Use the following configuration with your repository values:

![Screenshot of git installer - add git repository](.screenshots/screenshot1.png)
![Screenshot of git installer - insert repository url](.screenshots/screenshot2.png)
![Screenshot of git installer - add path to subfolder wp-content/themes/my-child-theme](.screenshots/screenshot3.png)
![Screenshot of git installer - added git repository](.screenshots/screenshot4.png)

Please consider sponsoring the open source development of git installer 🤗
https://github.com/sponsors/SayHelloGmbH

## Advanced usage: Develop with live site data

If you want to develop with live data, you can pull in WordPress data via DDEV: https://my-ddev-lab.mandrasch.eu/tutorials/cms-and-frameworks/wordpress.html#pulling-wordpress
