CKEDITOR.plugins.add('footnote',
{
    init: function(editor)
    {
        var pluginName = 'footnote';
		console.log("this.path"); console.log(this.path);
        CKEDITOR.dialog.add(pluginName, this.path + 'dialogs/footnote.js');
        editor.addCommand(pluginName, new CKEDITOR.dialogCommand(pluginName));
        editor.ui.addButton('Footnote',
            {
                label: 'Footnote or Citation',
                command: pluginName
            });
    }
});