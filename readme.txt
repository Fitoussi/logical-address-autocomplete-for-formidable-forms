=== Logical Address Autocomplete for Formidable Forms ===
Contributors: ninjew
Tags: address autocomplete, formidable forms, google places, address, geolocation
Requires at least: 6.5
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPL-3.0-or-later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Google Places address suggestions for Formidable Forms, with country and language controls, location bias and required selection.

== Description ==

Add Google-powered address suggestions to Formidable Forms with a dedicated single-line Address field or optional native Address autofill. Visitors start typing, choose a suggestion, and continue filling out the form with less typing.

= Features =

* Dedicated single-line Address field in the native Formidable Forms builder.
* Optional autofill for native Address fields in editions that provide them.
* Country restrictions: up to five countries per field.
* Result types: regions, cities, street addresses or premises.
* Per-field suggestion language.
* Global language and region preferences.
* Location bias by point and radius or rectangular bounds.
* Optional restriction to rectangular bounds.
* Required suggestion selection with a custom alert message.
* Open a saved single-line address in Google Maps from the admin entry-detail page.

= Address fields for your forms =

Add the dedicated Address field from the Geolocation field group and configure autocomplete in its field settings. This single-line field works with the free Formidable Forms plugin.

If your Formidable edition supplies a native multipart Address field, enable autocomplete in its options to fill street address, city, state, postal code and country. Google may not return every component for every suggestion.

= Customize suggestions =

Choose countries, result types and language for each field. Prioritize suggestions near a point or within map bounds, or restrict results to those bounds. The global region preference influences results; country restrictions limit which countries can appear.

= Require a suggestion selection =

Optionally require visitors to choose an address suggestion. Manually typed, unselected text is cleared, and your custom alert prompts them to select a suggestion. This is not postal address validation or a deliverability guarantee.

= Google API requirements =

A Google Maps API key is required for address autocomplete to work. Follow [this tutorial](https://formidablegeolocation.com/docs/google-maps-api-keys-formidable-geolocation/) to create your Google Maps API key.

[Google Maps Platform terms](https://cloud.google.com/maps-platform/terms/) | [Google privacy policy](https://policies.google.com/privacy)

= Need more than autocomplete? =

[Formidable Geolocation](https://formidablegeolocation.com/) offers paid packages for interactive maps, geocoding, dynamic location fields, current-location detection, directions, distance calculations, address validation, nearby locations and drawing tools. Feature availability depends on the package.

Formidable Geolocation is a separate plugin, not functionality unlocked inside this free plugin by entering a license.

[Explore packages and pricing](https://formidablegeolocation.com/pricing/) | [Try the live demos](https://demo.formidablegeolocation.com/) | [Read the documentation](https://formidablegeolocation.com/docs/)

== Installation ==

1. Install and activate Formidable Forms 6.23 or newer.
2. Install and activate Logical Address Autocomplete for Formidable Forms. Deactivate Formidable Geolocation first if you are switching to this free plugin.
3. Open Formidable Forms' settings and select Address Autocomplete.
4. Enter your Google Maps API key with Maps JavaScript API and Places API (New) enabled.
5. Set optional global region and language preferences.
6. Add the Address field from Geolocation, or enable autocomplete on a native Address field if your Formidable edition supplies it. Configure its options and save.
7. Preview and test selecting suggestions and submitting the form.

== Frequently Asked Questions ==

= Are all the autocomplete controls included free? =

Yes. All autocomplete controls described above are included free. Formidable Forms and your own Google Maps API key are required. Native Address autofill needs a Formidable edition that provides that field.

= Does this validate postal addresses or provide maps and directions? =

No. Autocomplete helps visitors choose a Google suggestion, but does not verify postal deliverability or provide connected maps, directions or current-location detection. Those workflows belong to separate premium packages.

= Can I use Formidable's native Address field? =

Yes, if your host version/edition supplies it. Enable autocomplete in its options to fill its address components. The dedicated single-line Address field does not require that native field.

= What happens if someone types an address without selecting a suggestion? =

With required suggestion selection enabled, the plugin clears that unselected typed text on leaving the field and displays your configured message. The visitor can retry and select a suggestion. Without that option, manually typed addresses are permitted. Host-required-field validation remains separate.

= What is the difference between region and country restriction? =

The global region preference influences Google's results. A field's country restriction limits suggestions to the selected countries. Field language can override the global language.

= Can I use it on AJAX or multi-page forms? =

The adapter handles supported host form rendering and dynamic updates. Multi-page and conditional workflows depend on the corresponding Formidable Forms features/add-ons. Test your own form, theme and integrations before going live.

= Can free and premium be active together? =

Free stops registering its overlapping fields and hooks while the matching premium geolocation plugin is active. Deactivate free when using premium. Saved fields and settings are not deleted. This is not a conversion tool for premium-only fields left in a form after premium is removed.

= Is a plugin account or license required? =

No plugin account or license is required. You do need your own Google Cloud account and API key, as described above.

= Can another integration load Google? =

Developers can use the frmgeo_disable_google_maps_api filter to prevent this plugin from loading the API. Another integration must then supply a compatible Google Maps JavaScript API with Places. No Google API Loading switch is shown in the free settings interface.

= Where can developers find the source code? =

Readable JavaScript and SCSS sources are included in the plugin. The full development project, build configuration and dependency lockfile are available on [GitHub](https://github.com/Fitoussi/logical-address-autocomplete-for-formidable-forms). To rebuild assets, download the repository, install Node.js/npm, then run `npm ci` and `npm run build` (esbuild and Sass). These tools are not required to use the plugin.

Includes [Choices.js 11.1.0](https://github.com/Choices-js/Choices/tree/v11.1.0), MIT licensed; readable distribution: assets/js/editor/vendor/choices.js; license: assets/licenses/choices.txt.

== Screenshots ==

1. Live Google Places suggestions in the dedicated Formidable Forms Address field. Google attribution remains visible.
2. Dedicated single-line Address field options, including required suggestion selection, its alert message, result types, countries, language and location bias.
3. Autocomplete options for Formidable Forms' native multipart Address field, available in host editions that provide that field.
4. Global Google browser API key, region and language settings, with a link to the API setup guide.
5. The plugin overview introduces the included standalone Address Autocomplete integration and links to its configuration.

== Changelog ==

= 1.0.0 =

* Initial release.
