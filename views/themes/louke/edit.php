<?=form_open("x/process/edit",array("id" => "editform"))?>
	<p><?=form_label("Your post's body")?></p>
	<p><?=form_textarea("body",$post->body)?></p>
	<p><?=form_submit("","Save")?><?=form_submit("","Cancel",'onClick="window.location=\''.base_url()."display/topic/".$post->url.'\';return false;"')?></p>
	<?=form_hidden("id",$post->id)?>
	<?=form_hidden("forum",$post->forum)?>
	<?=form_hidden("post",$post->url)?>
<?=form_close()?>