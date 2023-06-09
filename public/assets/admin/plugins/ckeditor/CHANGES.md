CKEditor 4 Changelog
====================

## CKEditor 4.2.1

Fixed Issues:

* [#10301](https://dev.ckeditor.com/ticket/10301): [IE9-10] Undo fails after 3+ consecutive paste actions with a JavaScript error.
* [#10689](https://dev.ckeditor.com/ticket/10689): Save toolbar button saves only the first editor instance.
* [#10368](https://dev.ckeditor.com/ticket/10368): Move language reading direction definition (`dir`) from main language file to core.
* [#9330](https://dev.ckeditor.com/ticket/9330): Fixed pasting anchors from MS Word.
* [#8103](https://dev.ckeditor.com/ticket/8103): Fixed pasting nested lists from MS Word.
* [#9958](https://dev.ckeditor.com/ticket/9958): [IE9] Pressing the "OK" button will trigger the `onbeforeunload` event in the popup dialog.
* [#10662](https://dev.ckeditor.com/ticket/10662): Fixed styles from the Styles drop-down list not registering to the ACF in case when the [Shared Spaces plugin](https://ckeditor.com/addon/sharedspace) is used.
* [#9654](https://dev.ckeditor.com/ticket/9654): Problems with Internet Explorer 10 Quirks Mode.
* [#9816](https://dev.ckeditor.com/ticket/9816): Floating toolbar does not reposition vertically in several cases.
* [#10646](https://dev.ckeditor.com/ticket/10646): Removing a selected sublist or nested table with *Backspace/Delete* removes the parent element.
* [#10623](https://dev.ckeditor.com/ticket/10623): [WebKit] Page is scrolled when opening a drop-down list.
* [#10004](https://dev.ckeditor.com/ticket/10004): [ChromeVox] Button names are not announced.
* [#10731](https://dev.ckeditor.com/ticket/10731): [WebSpellChecker](https://ckeditor.com/addon/wsc) plugin breaks cloning of editor configuration.
* It is now possible to set per instance [WebSpellChecker](https://ckeditor.com/addon/wsc) plugin configuration instead of setting the configuration globally.

## CKEditor 4.2

**Important Notes:**

* Dropped compatibility support for Internet Explorer 7 and Firefox 3.6.

* Both the Basic and the Standard distribution packages will not contain the new [Indent Block](https://ckeditor.com/addon/indentblock) plugin. Because of this the [Advanced Content Filter](https://docs.ckeditor.com/#!/guide/dev_advanced_content_filter) might remove block indentations from existing contents. If you want to prevent this, either [add an appropriate ACF rule to your filter](https://docs.ckeditor.com/#!/guide/dev_allowed_content_rules) or create a custom build based on the Basic/Standard package and add the Indent Block plugin in [CKBuilder](https://ckeditor.com/builder).

New Features:

* [#10027](https://dev.ckeditor.com/ticket/10027): Separated list and block indentation into two plugins: [Indent List](https://ckeditor.com/addon/indentlist) and [Indent Block](https://ckeditor.com/addon/indentblock).
* [#8244](https://dev.ckeditor.com/ticket/8244): Use *(Shift+)Tab* to indent and outdent lists.
* [#10281](https://dev.ckeditor.com/ticket/10281): The [jQuery Adapter](https://docs.ckeditor.com/#!/guide/dev_jquery) is now available. Several jQuery-related issues fixed: [#8261](https://dev.ckeditor.com/ticket/8261), [#9077](https://dev.ckeditor.com/ticket/9077), [#8710](https://dev.ckeditor.com/ticket/8710), [#8530](https://dev.ckeditor.com/ticket/8530), [#9019](https://dev.ckeditor.com/ticket/9019), [#6181](https://dev.ckeditor.com/ticket/6181), [#7876](https://dev.ckeditor.com/ticket/7876), [#6906](https://dev.ckeditor.com/ticket/6906).
* [#10042](https://dev.ckeditor.com/ticket/10042): Introduced [`config.title`](https://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-title) setting to change the human-readable title of the editor.
* [#9794](https://dev.ckeditor.com/ticket/9794): Added [`editor.onChange`](https://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-change) event.
* [#9923](https://dev.ckeditor.com/ticket/9923): HiDPI support in the editor UI. HiDPI icons for [Moono skin](https://ckeditor.com/addon/moono) added.
* [#8031](https://dev.ckeditor.com/ticket/8031): Handle `required` attributes on `<textarea>` elements &mdash; introduced [`editor.required`](https://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-required) event.
* [#10280](https://dev.ckeditor.com/ticket/10280): Ability to replace `<textarea>` elements with the inline editor.

Fixed Issues:

* [#10599](https://dev.ckeditor.com/ticket/10599): [Indent](https://ckeditor.com/addon/indent) plugin is no longer required by the [List](https://ckeditor.com/addon/list) plugin.
* [#10370](https://dev.ckeditor.com/ticket/10370): Inconsistency in data events between framed and inline editors.
* [#10438](https://dev.ckeditor.com/ticket/10438): [FF, IE] No selection is done on an editable element on executing [`editor.setData()`](https://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-setData).

## CKEditor 4.1.3

New Features:

* Added new translation: Indonesian.

Fixed Issues:

* [#10644](https://dev.ckeditor.com/ticket/10644): Fixed a critical bug when pasting plain text in Blink-based browsers.
* [#5189](https://dev.ckeditor.com/ticket/5189): [Find/Replace](https://ckeditor.com/addon/find) dialog window: rename "Cancel" button to "Close".
* [#10562](https://dev.ckeditor.com/ticket/10562): [Housekeeping] Unified CSS gradient filter formats in the [Moono](https://ckeditor.com/addon/moono) skin.
* [#10537](https://dev.ckeditor.com/ticket/10537): Advanced Content Filter should register a default rule for [`config.shiftEnterMode`](https://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-shiftEnterMode).
* [#10610](https://dev.ckeditor.com/ticket/10610): [`CKEDITOR.dialog.addIframe()`](https://docs.ckeditor.com/#!/api/CKEDITOR.dialog-static-method-addIframe) incorrectly sets the iframe size in dialog windows.

## CKEditor 4.1.2

New Features:

* Added new translation: Sinhala.

Fixed Issues:

* [#10339](https://dev.ckeditor.com/ticket/10339): Fixed: Error thrown when inserted data was totally stripped out after filtering and processing.
* [#10298](https://dev.ckeditor.com/ticket/10298): Fixed: Data processor breaks attributes containing protected parts.
* [#10367](https://dev.ckeditor.com/ticket/10367): Fixed: [`editable.insertText()`](https://docs.ckeditor.com/#!/api/CKEDITOR.editable-method-insertText) loses characters when `RegExp` replace controls are being inserted.
* [#10165](https://dev.ckeditor.com/ticket/10165): [IE] Access denied error when `document.domain` has been altered.
* [#9761](https://dev.ckeditor.com/ticket/9761): Update the *Backspace* key state in [`keystrokeHandler.blockedKeystrokes`](https://docs.ckeditor.com/#!/api/CKEDITOR.keystrokeHandler-property-blockedKeystrokes) when calling [`editor.setReadOnly()`](https://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-setReadOnly).
* [#6504](https://dev.ckeditor.com/ticket/6504): Fixed: Race condition while loading several [`config.customConfig`](https://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-customConfig) files.
* [#10146](https://dev.ckeditor.com/ticket/10146): [Firefox] Empty lines are being removed while [`config.enterMode`](https://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-enterMode) is [`CKEDITOR.ENTER_BR`](https://docs.ckeditor.com/#!/api/CKEDITOR-property-ENTER_BR).
* [#10360](https://dev.ckeditor.com/ticket/10360): Fixed: ARIA `role="application"` should not be used for dialog windows.
* [#10361](https://dev.ckeditor.com/ticket/10361): Fixed: ARIA `role="application"` should not be used for floating panels.
* [#10510](https://dev.ckeditor.com/ticket/10510): Introduced unique voice labels to differentiate between different editor instances.
* [#9945](https://dev.ckeditor.com/ticket/9945): [iOS] Scrolling not possible on iPad.
* [#10389](https://dev.ckeditor.com/ticket/10389): Fixed: Invalid HTML in the "Text and Table" template.
* [WebSpellChecker](https://ckeditor.com/addon/wsc) plugin user interface was changed to match CKEditor 4 style.

## CKEditor 4.1.1

New Features:

* Added new translation: Albanian.

Fixed Issues:

* [#10172](https://dev.ckeditor.com/ticket/10172): Pressing *Delete* or *Backspace* in an empty table cell moves the cursor to the next/previous cell.
* [#10219](https://dev.ckeditor.com/ticket/10219): Error thrown when destroying an editor instance in parallel with a `mouseup` event.
* [#10265](https://dev.ckeditor.com/ticket/10265): Wrong loop type in the [File Browser](https://ckeditor.com/addon/filebrowser) plugin.
* [#10249](https://dev.ckeditor.com/ticket/10249): Wrong undo/redo states at start.
* [#10268](https://dev.ckeditor.com/ticket/10268): [Show Blocks](https://ckeditor.com/addon/showblocks) does not recover after switching to Source view.
* [#9995](https://dev.ckeditor.com/ticket/9995): HTML code in the `<textarea>` should not be modified by the [`htmlDataProcessor`](https://docs.ckeditor.com/#!/api/CKEDITOR.htmlDataProcessor).
* [#10320](https://dev.ckeditor.com/ticket/10320): [Justify](https://ckeditor.com/addon/justify) plugin should add elements to Advanced Content Filter based on current [Enter mode](https://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-enterMode).
* [#10260](https://dev.ckeditor.com/ticket/10260): Fixed: Advanced Content Filter blocks [`tabSpaces`](https://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-tabSpaces). Unified `data-cke-*` attributes filtering.
* [#10315](https://dev.ckeditor.com/ticket/10315): [WebKit] [Undo manager](https://docs.ckeditor.com/#!/api/CKEDITOR.plugins.undo.UndoManager) should not record snapshots after a filling character was added/removed.
* [#10291](https://dev.ckeditor.com/ticket/10291): [WebKit] Space after a filling character should be secured.
* [#10330](https://dev.ckeditor.com/ticket/10330): [WebKit] The filling character is not removed on `keydown` in specific cases.
* [#10285](https://dev.ckeditor.com/ticket/10285): Fixed: Styled text pasted from MS Word causes an infinite loop.
* [#10131](https://dev.ckeditor.com/ticket/10131): Fixed: [`undoManager.update()`](https://docs.ckeditor.com/#!/api/CKEDITOR.plugins.undo.UndoManager-method-update) does not refresh the command state.
* [#10337](https://dev.ckeditor.com/ticket/10337): Fixed: Unable to remove `<s>` using [Remove Format](https://ckeditor.com/addon/removeformat).

## CKEditor 4.1

Fixed Issues:

* [#10192](https://dev.ckeditor.com/ticket/10192): Closing lists with the *Enter* key does not work with [Advanced Content Filter](https://docs.ckeditor.com/#!/guide/dev_advanced_content_filter) in several cases.
* [#10191](https://dev.ckeditor.com/ticket/10191): Fixed allowed content rules unification, so the [`filter.allowedContent`](https://docs.ckeditor.com/#!/api/CKEDITOR.filter-property-allowedContent) property always contains rules in the same format.
* [#10224](https://dev.ckeditor.com/ticket/10224): Advanced Content Filter does not remove non-empty `<a>` elements anymore.
* Minor issues in plugin integration with Advanced Content Filter:
  * [#10166](https://dev.ckeditor.com/ticket/10166): Added transformation from the `align` attribute to `float` style to preserve backward compatibility after the introduction of Advanced Content Filter.
  * [#10195](https://dev.ckeditor.com/ticket/10195): [Image](https://ckeditor.com/addon/image) plugin no longer registers rules for links to Advanced Content Filter.
  * [#10213](https://dev.ckeditor.com/ticket/10213): [Justify](https://ckeditor.com/addon/justify) plugin is now correctly registering rules to Advanced Content Filter when [`config.justifyClasses`](https://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-justifyClasses) is defined.

## CKEditor 4.1 RC

New Features:

* [#9829](https://dev.ckeditor.com/ticket/9829): Advanced Content Filter - data and features activation based on editor configuration.

  Brand new data filtering system that works in 2 modes:

  * Based on loaded features (toolbar items, plugins) - the data will be filtered according to what the editor in its
  current configuration can handle.
  * Based on [`config.allowedContent`](https://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-allowedContent) rules - the data
  will be filtered and the editor features (toolbar items, commands, keystrokes) will be enabled if they are allowed.

  See the `datafiltering.html` sample, [guides](https://docs.ckeditor.com/#!/guide/dev_advanced_content_filter) and [`CKEDITOR.filter` API documentation](https://docs.ckeditor.com/#!/api/CKEDITOR.filter).
* [#9387](https://dev.ckeditor.com/ticket/9387): Reintroduced [Shared Spaces](https://ckeditor.com/addon/sharedspace) - the ability to display toolbar and bottom editor space in selected locations and to share them by different editor instances.
* [#9907](https://dev.ckeditor.com/ticket/9907): Added the [`contentPreview`](https://docs.ckeditor.com/#!/api/CKEDITOR-event-contentPreview) event for preview data manipulation.
* [#9713](https://dev.ckeditor.com/ticket/9713): Introduced the [Source Dialog](https://ckeditor.com/addon/sourcedialog) plugin that brings raw HTML editing for inline editor instances.
* Included in [#9829](https://dev.ckeditor.com/ticket/9829): Introduced new events, [`toHtml`](https://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-toHtml) and [`toDataFormat`](https://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-toDataFormat), allowing for better integration with data processing.
* [#9981](https://dev.ckeditor.com/ticket/9981): Added ability to filter [`htmlParser.fragment`](https://docs.ckeditor.com/#!/api/CKEDITOR.htmlParser.fragment), [`htmlParser.element`](https://docs.ckeditor.com/#!/api/CKEDITOR.htmlParser.element) etc. by many [`htmlParser.filter`](https://docs.ckeditor.com/#!/api/CKEDITOR.htmlParser.filter)s before writing structure to an HTML string.
* Included in [#10103](https://dev.ckeditor.com/ticket/10103):
  * Introduced the [`editor.status`](https://docs.ckeditor.com/#!/api/CKEDITOR.editor-property-status) property to make it easier to check the current status of the editor.
  * Default [`command`](https://docs.ckeditor.com/#!/api/CKEDITOR.command) state is now [`CKEDITOR.TRISTATE_DISABLE`](https://docs.ckeditor.com/#!/api/CKEDITOR-property-TRISTATE_DISABLED). It will be activated on [`editor.instanceReady`](https://docs.ckeditor.com/#!/api/CKEDITOR-event-instanceReady) or immediately after being added if the editor is already initialized.
* [#9796](https://dev.ckeditor.com/ticket/9796): Introduced `<s>` as a default tag for strikethrough, which replaces obsolete `<strike>` in HTML5.

## CKEditor 4.0.3

Fixed Issues:

* [#10196](https://dev.ckeditor.com/ticket/10196): Fixed context menus not opening with keyboard shortcuts when [Autogrow](https://ckeditor.com/addon/autogrow) is enabled.
* [#10212](https://dev.ckeditor.com/ticket/10212): [IE7-10] Undo command throws errors after multiple switches between Source and WYSIWYG view.
* [#10219](https://dev.ckeditor.com/ticket/10219): [Inline editor] Error thrown after calling [`editor.destroy()`](https://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-destroy).

## CKEditor 4.0.2

Fixed Issues:

* [#9779](https://dev.ckeditor.com/ticket/9779): Fixed overriding [`CKEDITOR.getUrl()`](https://docs.ckeditor.com/#!/api/CKEDITOR-method-getUrl) with `CKEDITOR_GETURL`.
* [#9772](https://dev.ckeditor.com/ticket/9772): Custom buttons in the dialog window footer have different look and size ([Moono](https://ckeditor.com/addon/moono), [Kama](https://ckeditor.com/addon/kama) skins).
* [#9029](https://dev.ckeditor.com/ticket/9029): Custom styles added with the [`stylesSet.add()`](https://docs.ckeditor.com/#!/api/CKEDITOR.stylesSet-method-add) are displayed in the wrong order.
* [#9887](https://dev.ckeditor.com/ticket/9887): Disable [Magic Line](https://ckeditor.com/addon/magicline) when [`editor.readOnly`](https://docs.ckeditor.com/#!/api/CKEDITOR.editor-property-readOnly) is set.
* [#9882](https://dev.ckeditor.com/ticket/9882): Fixed empty document title on [`editor.getData()`](https://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getData) if set via the Document Properties dialog window.
* [#9773](https://dev.ckeditor.com/ticket/9773): Fixed rendering problems with selection fields in the Kama skin.
* [#9851](https://dev.ckeditor.com/ticket/9851): The [`selectionChange`](https://docs.ckeditor.com/#!/api/CKEDITOR.editor-event-selectionChange) event is not fired when mouse selection ended outside editable.
* [#9903](https://dev.ckeditor.com/ticket/9903): [Inline editor] Bad positioning of floating space with page horizontal scroll.
* [#9872](https://dev.ckeditor.com/ticket/9872): [`editor.checkDirty()`](https://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-checkDirty) returns `true` when called onload. Removed the obsolete `editor.mayBeDirty` flag.
* [#9893](https://dev.ckeditor.com/ticket/9893): [IE] Fixed broken toolbar when editing mixed direction content in Quirks mode.
* [#9845](https://dev.ckeditor.com/ticket/9845): Fixed TAB navigation in the [Link](https://ckeditor.com/addon/link) dialog window when the Anchor option is used and no anchors are available.
* [#9883](https://dev.ckeditor.com/ticket/9883): Maximizing was making the entire page editable with [divarea](https://ckeditor.com/addon/divarea)-based editors.
* [#9940](https://dev.ckeditor.com/ticket/9940): [Firefox] Navigating back to a page with the editor was making the entire page editable.
* [#9966](https://dev.ckeditor.com/ticket/9966): Fixed: Unable to type square brackets with French keyboard layout. Changed [Magic Line](https://ckeditor.com/addon/magicline) keystrokes.
* [#9507](https://dev.ckeditor.com/ticket/9507): [Firefox] Selection is moved before editable position when the editor is focused for the first time.
* [#9947](https://dev.ckeditor.com/ticket/9947): [WebKit] Editor overflows parent container in some edge cases.
* [#10105](https://dev.ckeditor.com/ticket/10105): Fixed: Broken [sourcearea](https://ckeditor.com/addon/sourcearea) view when an RTL language is set.
* [#10123](https://dev.ckeditor.com/ticket/10123): [WebKit] Fixed: Several dialog windows have broken layout since the latest WebKit release.
* [#10152](https://dev.ckeditor.com/ticket/10152): Fixed: Invalid ARIA property used on menu items.

## CKEditor 4.0.1.1

Fixed Issues:

* Security update: Added protection against XSS attack and possible path disclosure in the PHP sample.

## CKEditor 4.0.1

Fixed Issues:

* [#9655](https://dev.ckeditor.com/ticket/9655): Support for IE Quirks Mode in the new [Moono skin](https://ckeditor.com/addon/moono).
* Accessibility issues (mainly in inline editor): [#9364](https://dev.ckeditor.com/ticket/9364), [#9368](https://dev.ckeditor.com/ticket/9368), [#9369](https://dev.ckeditor.com/ticket/9369), [#9370](https://dev.ckeditor.com/ticket/9370), [#9541](https://dev.ckeditor.com/ticket/9541), [#9543](https://dev.ckeditor.com/ticket/9543), [#9841](https://dev.ckeditor.com/ticket/9841), [#9844](https://dev.ckeditor.com/ticket/9844).
* [Magic Line](https://ckeditor.com/addon/magicline) plugin:
    * [#9481](https://dev.ckeditor.com/ticket/9481): Added accessibility support for Magic Line.
    * [#9509](https://dev.ckeditor.com/ticket/9509): Added Magic Line support for forms.
    * [#9573](https://dev.ckeditor.com/ticket/9573): Magic Line does not disappear on `mouseout` in a specific case.
* [#9754](https://dev.ckeditor.com/ticket/9754): [WebKit] Cutting & pasting simple unformatted text generates an inline wrapper in WebKit browsers.
* [#9456](https://dev.ckeditor.com/ticket/9456): [Chrome] Properly paste bullet list style from MS Word.
* [#9699](https://dev.ckeditor.com/ticket/9699), [#9758](https://dev.ckeditor.com/ticket/9758): Improved selection locking when selecting by dragging.
* Context menu:
    * [#9712](https://dev.ckeditor.com/ticket/9712): Opening the context menu destroys editor focus.
    * [#9366](https://dev.ckeditor.com/ticket/9366): Context menu should be displayed over the floating toolbar.
    * [#9706](https://dev.ckeditor.com/ticket/9706): Context menu generates a JavaScript error in inline mode when the editor is attached to a header element.
* [#9800](https://dev.ckeditor.com/ticket/9800): Hide float panel when resizing the window.
* [#9721](https://dev.ckeditor.com/ticket/9721): Padding in content of div-based editor puts the editing area under the bottom UI space.
* [#9528](https://dev.ckeditor.com/ticket/9528): Host page `box-sizing` style should not influence the editor UI elements.
* [#9503](https://dev.ckeditor.com/ticket/9503): [Form Elements](https://ckeditor.com/addon/forms) plugin adds context menu listeners only on supported input types. Added support for `tel`, `email`, `search` and `url` input types.
* [#9769](https://dev.ckeditor.com/ticket/9769): Improved floating toolbar positioning in a narrow window.
* [#9875](https://dev.ckeditor.com/ticket/9875): Table dialog window does not populate width correctly.
* [#8675](https://dev.ckeditor.com/ticket/8675): Deleting cells in a nested table removes the outer table cell.
* [#9815](https://dev.ckeditor.com/ticket/9815): Cannot edit dialog window fields in an editor initialized in the jQuery UI modal dialog.
* [#8888](https://dev.ckeditor.com/ticket/8888): CKEditor dialog windows do not show completely in a small window.
* [#9360](https://dev.ckeditor.com/ticket/9360): [Inline editor] Blocks shown for a `<div>` element stay permanently even after the user exits editing the `<div>`.
* [#9531](https://dev.ckeditor.com/ticket/9531): [Firefox & Inline editor] Toolbar is lost when closing the Format drop-down list by clicking its button.
* [#9553](https://dev.ckeditor.com/ticket/9553): Table width incorrectly set when the `border-width` style is specified.
* [#9594](https://dev.ckeditor.com/ticket/9594): Cannot tab past CKEditor when it is in read-only mode.
* [#9658](https://dev.ckeditor.com/ticket/9658): [IE9] Justify not working on selected images.
* [#9686](https://dev.ckeditor.com/ticket/9686): Added missing contents styles for `<pre>` elements.
* [#9709](https://dev.ckeditor.com/ticket/9709): [Paste from Word](https://ckeditor.com/addon/pastefromword) should not depend on configuration from other styles.
* [#9726](https://dev.ckeditor.com/ticket/9726): Removed [Color Dialog](https://ckeditor.com/addon/colordialog) plugin dependency from [Table Tools](https://ckeditor.com/addon/tabletools).
* [#9765](https://dev.ckeditor.com/ticket/9765): Toolbar Collapse command documented incorrectly in the [Accessibility Instructions](https://ckeditor.com/addon/a11yhelp) dialog window.
* [#9771](https://dev.ckeditor.com/ticket/9771): [WebKit & Opera] Fixed scrolling issues when pasting.
* [#9787](https://dev.ckeditor.com/ticket/9787): [IE9] `onChange` is not fired for checkboxes in dialogs.
* [#9842](https://dev.ckeditor.com/ticket/9842): [Firefox 17] When opening a toolbar menu for the first time and pressing the *Down Arrow* key, focus goes to the next toolbar button instead of the menu options.
* [#9847](https://dev.ckeditor.com/ticket/9847): [Elements Path](https://ckeditor.com/addon/elementspath) should not be initialized in the inline editor.
* [#9853](https://dev.ckeditor.com/ticket/9853): [`editor.addRemoveFormatFilter()`](https://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-addRemoveFormatFilter) is exposed before it really works.
* [#8893](https://dev.ckeditor.com/ticket/8893): Value of the [`pasteFromWordCleanupFile`](https://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-pasteFromWordCleanupFile) configuration option is now taken from the instance configuration.
* [#9693](https://dev.ckeditor.com/ticket/9693): Removed "Live Preview" checkbox from UI color picker.


## CKEditor 4.0

The first stable release of the new CKEditor 4 code line.

The CKEditor JavaScript API has been kept compatible with CKEditor 4, whenever
possible. The list of relevant changes can be found in the [API Changes page of
the CKEditor 4 documentation][1].

[1]: https://docs.ckeditor.com/#!/guide/dev_api_changes "API Changes"
