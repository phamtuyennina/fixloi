/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
 
	config.extraPlugins = 'codemirror,wenzgmap,googledocs';
	config.codemirror_theme = 'rubyblue';  // Go here for theme names: http://codemirror.net/demo/theme.html
	config.codemirror = {
	lineNumbers: true,
	highlightActiveLine: true,
	enableSearchTools: true,
	showSearchButton: true,
	showFormatButton: true,
	showCommentButton: true,
	showUncommentButton: true,
	showAutoCompleteButton: true
	};
	
	// Comment out or remove the 2 lines below if you want to enable the Advanced Content Filter	
	config.allowedContent = true;
	config.extraAllowedContent = '*{*}';	
	config.uiColor = '#AADC6E';
	config.extraPlugins = 'entities';
	config.extraPlugins = 'bootstrapVisibility';
	config.extraPlugins = 'youtube,lineheight,letterspacing';
	//config.contentsCss = base_url+'/css/css.css';
	//config.font_names = 'SheliaVNFRegular/sheliavnfregular;'+'UVNBanhMi/uvnbanhmi;'+'QuicksandRegular/quicksandregular;'+'QuicksandBold/quicksandbold;'+'QuicksandMedium/quicksandmedium;' + config.font_names;
	config.line_height = "1; 1.1; 1.2; 1.3; 1.4; 1.5; 1.6; 1.7; 1.8; 1.9; 2; 2.1; 2.2; 2.3; 2.4; 2.5; 2.6; 2.7; 2.8; 2.9; 3";


	config.toolbar = 'Full';
 
	config.toolbar_Full =
	[
		{ name: 'document', items : [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
		{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
		{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
		{ name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 
	        'HiddenField' ] },
		'/',
		{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
		{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
		'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
		{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
		{ name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe','Youtube' ] },
		'/',
		{ name: 'styles', items : [ 'Styles','Format','Font','FontSize','lineheight','letterspacing' ] },
		{ name: 'colors', items : [ 'TextColor','BGColor' ] },
		{ name: 'tools', items : [ 'Maximize', 'ShowBlocks','-','About' ] }
	];
	 
	config.toolbar_Basic =
	[
		['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','About']
	];
};