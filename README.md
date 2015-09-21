# SOAP-Registration-Site
SOAP-based registration site for World of Warcraft private servers

This replaces the old-method of injecting accounts directly into MySQL databases. Tested for use on TrinityCore, and probably easily adaptable for other server emulators.

This site uses Jeutie's registration site as a base, and is stripped-down to include no images (meaning it's very basic looking, but light as well).

You will need to edit config.php in order to provide the script the correct details to connect to the database and SOAP server at the very least. Both that file and index.php have other little sections you can configure as well to personalize for your server. site.css can also be freely modified to change various fonts and colors.

As for how to use it, you need a working World of Warcraft private server that has a SOAP backend (such as TrinityCore). You also need an Apache server with PHP and SOAP support. You simply take these files and put them in a folder somewhere on your web host (I wouldn't suggest using it as the landing page since it is pretty boring looking).

If you're using a repack, then you'll need to figure out whether or not that repack includes all of that stuff above, or just use whatever web stuff it comes with. If you're using Jeutie's 3.3.5a repack, you already have a better looking version of this.

Original code by Jeutie and Chocochaos. Modified and stripped down by me.
