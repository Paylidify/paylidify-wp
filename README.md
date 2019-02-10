# Paylidify.com Site Refresh

This repo contains the WordPress code for Paylidify.com, without WP core files so they can be updated by WP Engine.

## Getting Started

Clone the repo locally:

```
git clone https://github.com/Paylidify/paylidify-wp
```

You can download a copy of the database by exporting it from PHPMyAdmin from inside the WP Engine account. Use a local environment like MAMP to run the site and database. You'll need to import the database, then change the site URL in the database to `localhost` or something like http://lvh.me, per https://kinsta.com/knowledgebase/change-wordpress-url/.


## Deployment

Add your ssh keys to each Paylidify WP Engine environment by following the steps at https://wpengine.com/git/.


```
# Add WP Engine remotes:
git remote add wpengine-dev git@git.wpengine.com:production/paylidifydev.git
git remote add wpengine-stage git@git.wpengine.com:production/paylidifystage.git
git remote add wpengine-prod git@git.wpengine.com:production/paylidify2019.git

# Push to the Development environment:
git push wpengine-dev master

# Push to the Stage environment:
git push wpengine-stage master

# Push to the Production environment:
git push wpengine-prod master
```
