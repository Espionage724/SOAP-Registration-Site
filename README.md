# SOAP-Registration-Site
Standalone SOAP-based registration site for World of Warcraft private servers

Live Preview (don't create accounts unless you want to play on my server): https://www.realmofespionage.com/wow/index.php

This replaces the old-method of injecting accounts directly into MySQL databases. Tested for use on TrinityCore (3.3.5 and 6.x), and probably easily adaptable for other server emulators.

This site uses Jeutie's registration site as a base, and is stripped-down to include no images (meaning it's very basic looking, but light as well), and updated to support WoD account creations on TrinityCore (6.x branch).

- You will have to look at **config.php** at the very least in order to use this with a TrinityCore 3.3.5 server.
- You'll need to look at **SOAPRegistration.php** as well for non-TrinityCore and TrinityCore 6.x branch servers.
- Should glance through **index.php** to add/remove/edit the links that appear below the registration form
- **site.css** can be modified to adjust colors (use HTML color codes)

As for how to use it, you need a working World of Warcraft private server that has a SOAP backend (such as TrinityCore). You also need a web server with PHP and SOAP support. You simply take these files and put them in a folder somewhere on your web host (I wouldn't recommend using it as the landing page since it is pretty plain looking).

Tested on Fedora 22 Server (Web + PHP), which uses MariaDB and Apache. Not sure how it'll perform or what changes are needed for any other platform/setup.

If you're using a repack, then you'll need to figure out whether or not that repack includes all of that stuff above, or just use whatever web stuff it comes with. If you're using Jeutie's 3.3.5a repack, you already have a better looking version of this for Classic-WotLK.

Original code by Jeutie and Chocochaos. Generalized, updated to support WoD, and stripped down by me.
