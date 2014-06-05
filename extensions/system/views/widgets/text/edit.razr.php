<div class="uk-form-row">
    <div class="uk-form-controls">
        @editor('widget[settings][content]', widget.get('content'), ['id' => 'form-content', 'data-markdown' => widget.get('markdown', 0)])
        <p class="uk-form-controls-condensed">
            <label><input type="checkbox" name="widget[settings][markdown]" value="1"@(widget.get('markdown', 0) ? ' checked')> @trans('Enable Markdown')</label>
        </p>
    </div>
</div>

<script>

    jQuery(function($) {

        var editor = $('#form-content'), tab = editor.closest('li');

        $('input[name="widget[title]"]', tab).removeClass('uk-form-width-large').addClass('uk-form-large uk-width-1-1');
        $('input[name="widget[settings][markdown]"]', tab).on('change', function() {
            editor.trigger($(this).prop('checked') ? 'enableMarkdown' : 'disableMarkdown');
        });

        tab.removeClass('uk-form-horizontal').addClass('uk-form-stacked').find('.uk-form-label').remove();

    });

</script>