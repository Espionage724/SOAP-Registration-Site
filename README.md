# SOAP-Registration-Site
SOAP-based registration site for World of Warcraft private servers

This replaces the old-method of injecting accounts directly into MySQL databases. Tested for use on TrinityCore, and probably easily adaptable for other server emulators.

This site uses Jeutie's registration site as a base, and is stripped-down to include no images (meaning it's very basic looking, but light as well).

You will need to edit config.php in order to provide the script the correct details to connect to the database and SOAP server at the very least. Both that file and index.php have other little sections you can configure as well to personalize for your server. site.css can also be freely modified to change various fonts and colors.

Original code by Jeutie and Chocochaos. Modified and stripped down by me.
