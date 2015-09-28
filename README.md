# SOAP-Registration-Site
SOAP-based registration site for World of Warcraft private servers

Note: As-is, this site is currently only compatible with WoD. Go back in history for Classic-WotLK compatibility.

This replaces the old-method of injecting accounts directly into MySQL databases. Tested for use on TrinityCore, and probably easily adaptable for other server emulators.

This site uses Jeutie's registration site as a base, and is stripped-down to include no images (meaning it's very basic looking, but light as well).

You will need to edit config.php in order to provide the script the correct details to connect to the database and SOAP server at the very least. Both that file and index.php have other little sections you can (and should; there's a few visible "CHANGEME" placeholders) configure as well to personalize for your server. site.css can also be freely modified to change various fonts and colors.

As for how to use it, you need a working World of Warcraft private server that has a SOAP backend (such as TrinityCore). You also need a web server with PHP and SOAP suppor. You simply take these files and put them in a folder somewhere on your web host (I wouldn't recommend using it as the landing page since it is pretty plain looking).

Tested on Fedora 22 Server (Web + PHP), which uses MariaDB and Apache. Not sure how it'll perform or what changes are needed for any other platform/setup.

If you're using a repack, then you'll need to figure out whether or not that repack includes all of that stuff above, or just use whatever web stuff it comes with. If you're using Jeutie's 3.3.5a repack, you already have a better looking version of this.

Original code by Jeutie and Chocochaos. Modified and stripped down by me.
