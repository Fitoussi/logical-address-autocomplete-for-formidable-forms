# Logical Formidable autocomplete 1.0.0

Release preparation: October 19, 2026, Pacific/Honolulu.

## Identity and scope

- Public name: Logical Address Autocomplete for Formidable Forms.
- WordPress.org slug, ZIP root, entry filename and text domain:
  logical-address-autocomplete-for-formidable-forms.
- Plugin version and readme stable tag: 1.0.0.
- Contributor: ninjew. Author: Eyal Fitoussi.
- Internal plugin name: Address Autocomplete for Formidable Forms.
- Dashboard heading: Address Autocomplete, with For Formidable Forms above it.

The only production change after the approved resubmission moves the existing
wp-header-end notice anchor below the main navigation. No feature, saved setting,
field identity, SDK, framework or dependency version changes. A source fixture
guards that placement. Development dependencies remain pinned by package-lock.json;
there are no Composer or third-party PHP runtime dependencies.

## Verification and artifacts

Rebuild compiled assets from the locked npm dependencies, run all PHP fixtures
and built-bundle JavaScript tests, check PHP 7.4 syntax/fixtures, and inspect the
actual installable ZIP. Compare every archive entry against the prior approved
package: only the dashboard template may differ. Verify the finalized ZIP on
Test Site 2, including Plugin Check and browser smoke, without changing existing
forms, entries, host settings or unrelated plugin activation state.

The exact source revision, test logs, manifests, checksums and publication
readback are recorded in the workspace release folder:
release-artifacts/formidable-1.0.0-release-20261019.ejoonw/.
Historical installed acceptance remains in docs/acceptance-20261007.md. Full
installed minimum-version combinations are not certified by fixture/syntax
checks and must not be presented as newly tested.

Verified candidate SHA-256:
0c7a339dca97ae7473d9eb3f67b6a26a08166183c95e105e06d1eaff9ee1ac5f.
The versioned and unversioned ZIPs contain the same bytes. All 42 packaged files
match source and the Test Site 2 installation; comparison with the resubmission
ZIP changes only src/Admin/Dashboard/views/dashboard.php.

Final checks passed: all six PHP fixture suites, 19 built-bundle JavaScript
tests, PHP 7.4.30 fixtures and source syntax, archive integrity, and Plugin Check
2.0.0 with no errors. Installed WordPress 7.1.3 browser smoke covered all four
dashboard sections, correct notice placement, and real Google suggestions plus
selection on the existing Formidable QA form without submitting an entry.
Existing active plugins, protected settings and form/entry fingerprints are
checked against their pre-install snapshot in the release artifacts.

## Publication boundary

The owner authorized the matching source commit, push, tag and GitHub release.
The owner subsequently withheld WordPress.org publication pending a final live
review. Prepare the separate SVN working copy with matching trunk, local 1.0.0
tag and existing real screenshots, but do not run svn commit until the owner
explicitly approves that later publication. Leave the final package installed
on Test Site 2 for that review.
