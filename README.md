# Traveler Theme

**Traveler**, a theme for travelers or anyone who likes a modern website and wants to share their experiences with others. Works with the [Grav CMS](http://github.com/getgrav/grav).

## Sample

My own personal website uses this theme. Feel free to [check it out](https://hirter.dev) or show it on the [demo site](https://demo.hirter.dev/grav/traveler)

## Intstallation

1. From the root of your Grav installation, run `bin/gpm install traveler`.
   - Alternatively, download this repository, unzip it, rename the folder to `traveler`, and place it in the `user/themes/` directory of your Grav install
2. Edit `user/config/system.yaml` to contain the following:
	```yaml
	pages:
      theme: traveler
	```

Alternatively, you can install Traveler via the Grav Admin interface.

## Templates

Traveler offers several templates for your site's pages. Here's a brief overview of each one.

### Default

The `default` template is a simple template that just renders your content as-is.

### Blog

This template is to list your blogs and entries so that your visitors get an overview.
Here you can define how many entries per page will be displayed and if you have one day in the
Options have been entered so can be additionally filtered by tags.

### Entry Default

This is one of two templates to create an entry on your blog. Here is based on the template "Default".
If you want to have a simple and simple entry the best solution.

### Entry Modular

The second template for a blog entry. The modular design leaves you plenty of room and you are
free to set the respective modules in order There are some modules that you can use here.
More about the different modules below ...

### Form

This template is here to integrate a contact form on your site.
However, this is just the container and must still be filled with the desired fields.
I have an example in the `_demo / pages / 05.contact` folder.
If you want to know more about creating a contact form
I refer to the [Grav documentation](https://learn.getgrav.org/16/forms/forms/example-form?target=_blank)

## Home

A separate template for the home page

## Modular

This template is intended for pages and can also be built with any modules.

## Gallerie (Modular)

With this module you can create small galleries.
The gallery will also open a big preview when clicking on a picture.

## Image (Modular)
This module is used to insert an image

## Last Entries (Modular)

This module displays the last three entries of the blog.
It can be selected which subpages should be considered.
Originally intended for the home page

## Modul Container (Modular)

I have created this module as help for the start page.
With this module, several text blocks can be combined into one on the start page.
How exactly does that work you see in the example.

## Text (Modular)
Hereby a text can be inserted, it is handled as markdown.

## Youtube (Modular)

Simply insert a Youtube video by the ID.
