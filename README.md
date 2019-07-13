# Multisite URL Fixer

A WordPress plugin to fix admin links due to the Bedrock url changes. See [this issue](https://github.com/roots/bedrock/issues/250) for more background.

_Note: This plugin does not affect the paths for other stylesheets or plugins, just the URLs for sites using Bedrock. Specifically, it fixes broken links by ensuring that /wp/ is in the URL. (This is needed for admin panel links because Bedrock installs WordPress in a subfolder.)_

Many thanks to [@felixarntz](https://github.com/felixarntz) for the original code!
