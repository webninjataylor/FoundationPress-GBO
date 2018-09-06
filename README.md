# Custom Theme for GreenBankObservatory.org

## Background
This theme is based on FoundationPress (https://foundationpress.olefredrik.com/), cloned from version 2.10.4 of [the FoundationPress WordPress theme](https://github.com/olefredrik/FoundationPress). The origin of this repo was switched to upstream with `$ git remote rename origin upstream`, and the remote was set to this repo with `$ git remote set-url origin git@github.com:webninjataylor/FoundationPress-GBO.git`.  This combination allows for future updates to this theme through manual, controlled merging from the parent.

## Requirements

**This project requires [Node.js](http://nodejs.org) v4.x.x to v6.11.x to be installed on your machine.** Please be aware that you might encounter problems with the installation if you are using the most current Node version (bleeding edge) with all the latest features.

FoundationPress uses [Sass](http://Sass-lang.com/) (CSS with superpowers). In short, Sass is a CSS pre-processor that allows you to write styles more effectively and tidy.

The Sass is compiled using libsass, which requires the GCC to be installed on your machine. Windows users can install it through [MinGW](http://www.mingw.org/), and Mac users can install it through the [Xcode Command-line Tools](http://osxdaily.com/2014/02/12/install-command-line-tools-mac-os-x/).

If you have not worked with a Sass-based workflow before, I would recommend reading [FoundationPress for beginners](https://foundationpress.olefredrik.com/posts/tutorials/foundationpress-for-beginners), a short blog post that explains what you need to know.

## Getting Started
- Clone this repository (Note: you may need to check the repo connections to origin and upstream with `$ git remote -v`)
- `$ npm install`
- `$ npm run build` for changes to CSS and JS bundles; the files will be minified in your /dist folder.
- `$ npm run package` for entire theme, then upload zip and activate (delete old theme if using this method). Running this command will build and minify the theme's assets and place a .zip archive of the theme in the `packaged` directory. This excludes the developer files/directories from your theme like `/node_modules`, `/src`, etc. to keep the theme lightweight for transferring the theme to a staging or production server.

### Project structure

In the `/src` folder you will the working files for all your assets. Every time you make a change to a file that is watched by Gulp, the output will be saved to the `/dist` folder. The contents of this folder is the compiled code that you should not touch (unless you have a good reason for it).

The `/page-templates` folder contains templates that can be selected in the Pages section of the WordPress admin panel. To create a new page-template, simply create a new file in this folder and make sure to give it a template name.

### Styles and Sass Compilation

 * `style.css`: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the Sass files described below

 * `src/assets/scss/app.scss`: Make imports for all your styles here
 * `src/assets/scss/global/*.scss`: Global settings
 * `src/assets/scss/components/*.scss`: Buttons etc.
 * `src/assets/scss/modules/*.scss`: Topbar, footer etc.
 * `src/assets/scss/templates/*.scss`: Page template styling

 * `dist/assets/css/app.css`: This file is loaded in the `<head>` section of your document, and contains the compiled styles for your project.

If you're new to Sass, please note that you need to have Gulp running in the background (``npm start``), for any changes in your scss files to be compiled to `app.css`.

### JavaScript Compilation

All JavaScript files, including Foundation's modules, are imported through the `src/assets/js/app.js` file. The files are imported using module dependency with [webpack](https://webpack.js.org/) as the module bundler.

If you're unfamiliar with modules and module bundling, check out [this resource for node style require/exports](http://openmymind.net/2012/2/3/Node-Require-and-Exports/) and [this resource to understand ES6 modules](http://exploringjs.com/es6/ch_modules.html).

Foundation modules are loaded in the `src/assets/js/app.js` file. By default all components are loaded. You can also pick and choose which modules to include. Just follow the instructions in the file.

If you need to output additional JavaScript files separate from `app.js`, do the following:
* Create new `custom.js` file in `src/assets/js/`. If you will be using jQuery, add `import $ from 'jquery';` at the top of the file.
* In `config.yml`, add `src/assets/js/custom.js` to `PATHS.entries`.
* Build (`npm start`)
* You will now have a `custom.js` file outputted to the `dist/assets/js/` directory.

## GBO Customizations
### Features Beyond FoundationPress
- FontAwesome is included within the SASS files
- Google Fonts is included within header.php for Montserrat and Abel

### Home Page Hero
The home page hero is pulled randomly from posts categorized as Home Page Hero. This approach allows for greater control over the appearance and content of the hero as opposed to parsing posts for truncated content.  Each page refresh will display a random hero image from the available posts tagged as Home Page Hero.  This is configured in front.php.

```bash
<?php $catquery = new WP_Query( 'category_name=home-page-hero&posts_per_page=1&orderby=rand' ); ?>
```

The hero post format should be...

```bash
<h1>Hero Title</h1>
<h2>Hero Subtitle</h2>
<img src="https://placeimg.com/300/200/animals">
```

### Home Page Cards
The home page news cards are pulled from the Home Page Card post category.  This approach allows for greater control over the appearance and content of the cards as opposed to parsing posts for truncated content.  Any post tagged with this category will appear on the home page for up to six posts. The number of posts and the category can be changed in front.php...

```bash
<?php $catquery = new WP_Query( 'category_name=home-page-card&posts_per_page=6' ); ?>
```

The posts can handle any HTML markup with the following suggested starting point...

```bash
<img src="[recommended 300x200 image]">
<div class="card-content">
    <h4>Card Title</h4>
    <p>Card description or blurb, inclduing any links.</p>
</div>
```

### Content Pages with Tabs
- Select any GBO template
- Choose the HTML editor and use the following markup
```bash
<!-- Tabs -->
<ul class="tabs" data-responsive-accordion-tabs="accordion medium-tabs" id="example-tabs">
    <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
    <li class="tabs-title"><a href="#panel2">Tab 2</a></li>
    <li class="tabs-title"><a href="#panel3">Tab 3</a></li>
</ul>
<div class="tabs-content" data-tabs-content="example-tabs">
    <div class="tabs-panel is-active" id="panel1">
        <p>Content for Tab 1</p>
    </div>
    <div class="tabs-panel" id="panel2">
        <p>Content for Tab 2</p>
    </div>
    <div class="tabs-panel" id="panel3">
        <p>Content for Tab 3</p>
    </div>
</div>
```

## Demo

* [Clean FoundationPress install](http://foundationpress.olefredrik.com/)
* [FoundationPress Kitchen Sink - see every single element in action](http://foundationpress.olefredrik.com/kitchen-sink/)

## Tutorials

* [FoundationPress for beginners](https://foundationpress.olefredrik.com/posts/tutorials/foundationpress-for-beginners/)
* [Responsive images in WordPress with Interchange](http://rachievee.com/responsive-images-in-wordpress/)
* [Learn to use the _settings file to change almost every aspect of a Foundation site](http://zurb.com/university/lessons/66)
* [Other lessons from Zurb University](http://zurb.com/university/past-lessons)

## Additional Documentation

* [Zurb Foundation Docs](http://foundation.zurb.com/docs/)
* [WordPress Codex](http://codex.wordpress.org/)

