=== WP Authograph ===
Contributors: @authograph
Tags: images, metadata, fourcorners, authograph
Requires at least: 4.0
Tested up to: 4.7
Stable tag: 4.7
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Authograph is a way for photo-journalists and content creators to display a rich visual overlay of metadata onto their web-based images.

== Description ==

**Authograph** is a way for photo-journalists and content creators to display a rich visual overlay of metadata onto their web-based images. Announced at World Press Photo Foundation awards ceremony 2016, this simple drop-in javascript library automatically augments selected photos with additional content, curated by the content owner.

See the [Project Site](https://fourcorners.io) for more background on the project and future directions.

[Click Here](https://digitalinteraction.github.io/fourcorners/docs/) to see a live demo in action.

## WP-Authograph

**WP-Authograph** simplifies the process of embedding the **Authograph** library and creating **Four Corners** images in your wordpress site.

the plugin adds an additional 'insert authograph' button to the editor toolbar, which links to the external **Authograph Metadata Editor**. We overlay the **Authograph Metadata Editor** directly into the wordpress text editor to enable you to modify the associated metadata of the image, then store this inline with the post / page. **Authograph Metadata Editor** runs completely client-side and does not retain copies of your images and or metadata, our scripts run entirely in your browser to ensure your images and authorship are secure.


## Four Corners (powered by Authograph)
The Four Corners Project aims to increase the authorship and authority of the photographer by providing a template to add context to each of the four corners of a photograph.

This contextualization is intended to remain with the photograph as it is re-published and travels throughout the Internet, adding to the credibility of the image in an era in which the veracity of media is being constantly challenged.

<p align="center">
    <img src="4Corners-1024x649.jpg" />
</p>


== Installation ==

This section describes how to install the plugin and get it working.


1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Thats it, you're ready to start using Authograph images via the wordpress editor toolbar.


== 3rd Party Services == 

**Important Notice**

WP Authograph uses externally hosted web services [Four Corners Metadata Editor](https://cdn.rawgit.com/digitalinteraction/fourcorners-editor/gh-pages/index.html) and [Four Corners Viewer](https://cdn.rawgit.com/digitalinteraction/fourcorners/master/dist/) to generate the Authograph images. 

These 3rd Party Services DO NOT RETAIN ANY OF YOUR CONTENT. In both cases the services will run locally within your web browser. Your images are never uploaded beyond your own Wordpress site. 

**Why are these services not embedded in the WP Authograph Plugin?**

In an effort to remain completely transparent about how your images and metadata are handled, Authograph's web services and source code exist entirely within the public domain. Anyone can view and contribute to these services via our [GitHub Repository](https://github.com/digitalinteraction).


