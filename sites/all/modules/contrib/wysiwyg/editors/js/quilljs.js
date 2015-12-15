(function($) {

/**
 * Attach this editor to a target element.
 */
Drupal.wysiwyg.editor.attach.quilljs = function(context, params, settings) {
  // Attach editor.
	var editor = new Quill('#' + params.field,{formats: ['bold', 'italic', 'color']}); 
	editor.addModule('toolbar', {container: '#toolbar'});
	
};

/**
 * Detach a single or all editors.
 */
Drupal.wysiwyg.editor.detach.quilljs = function (context, params, trigger) {
  var $field = $('#' + params.field);
  var editor = $field.data('wysiwyg');
  if (typeof editor != 'undefined') {
    editor.saveContent();
    if (trigger != 'serialize') {
      editor.element.remove();
    }
  }
  $field.removeData('wysiwyg');
  if (trigger != 'serialize') {
    $field.show();
  }
};

Drupal.wysiwyg.editor.instance.quilljs = {
  insert: function (content) {
    $('#' + this.field).insertText(0, content);
  },

  setContent: function (content) {
    $('#' + this.field).setText(content);
  },

  getContent: function () {
    return $('#' + this.field).getText();
  }
};

})(jQuery);
