<?
/**
 * Belgian Police Web Platform - News Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		http://www.police.be
 */
?>

<?= helper('behavior.validator'); ?>

<!--
<script src="assets://js/koowa.js" />
-->

<script>
    window.addEvent('domready', (function(){
        <? if (!$article->id) : ?>
        new Attachments.Upload({container: 'article-form'});
        <? endif ?>
    }));
</script>

<ktml:module position="actionbar">
    <ktml:toolbar type="actionbar">
</ktml:module>

<form action="" method="post" id="article-form" class="-koowa-form" enctype="multipart/form-data">
	<input type="hidden" name="access" value="0" />
	<input type="hidden" name="published" value="0" />

	<div class="main">
		<div class="title">
			<input class="required" type="text" name="title" maxlength="255" value="<?= $article->title ?>" placeholder="<?= translate('Title') ?>" />
			<div class="slug">
			    <span class="add-on">Slug</span>
			    <input type="text" name="slug" maxlength="255" value="<?= $article->slug ?>" />
			</div>
		</div>

		<?= object('com:ckeditor.controller.editor')->render(array('name' => 'text', 'text' => $article->text)) ?>
	</div>
	<div class="sidebar">
        <fieldset>
            <legend><?= translate('Publish') ?></legend>
            <div>
                <label for="published"><?= translate('Published') ?></label>
                <div>
                    <input type="checkbox" name="published" value="1" <?= $article->published ? 'checked="checked"' : '' ?> />
                </div>
            </div>
            <div>
                <label for="created_on"><?= translate('Created on') ?></label>
                <div class="controls">
                    <?= helper('com:articles.date.datetime', array('row' => $article, 'name' => 'created_on')) ?>
                </div>
            </div>
        </fieldset>

        <? if($article->isAttachable()) : ?>
            <fieldset>
                <legend><?= translate('Attachments') ?></legend>
                <? if (!$article->isNew()) : ?>
                    <?= import('com:attachments.view.attachments.list.html', array('attachments' => $article->getAttachments(), 'attachments_attachment_id' => $article->attachments_attachment_id)) ?>
                <? endif ?>
                <?= import('com:attachments.view.attachments.upload.html') ?>
            </fieldset>
        <? endif ?>

        <? if($article->isTranslatable()) : ?>
        <fieldset>
            <legend><?= translate('Translations') ?></legend>
            <? $translations = $article->getTranslations() ?>
            <? foreach($article->getLanguages() as $language) : ?>
                <?= $language->name.':' ?>
                <? $translation = $translations->find(array('iso_code' => $language->iso_code)) ?>
                <?= helper('com:languages.grid.status',
                    array('status' => $translation->status, 'original' => $translation->original, 'deleted' => $translation->deleted)) ?>
            <? endforeach ?>
        </fieldset>
        <? endif ?>
    </div>
</form>