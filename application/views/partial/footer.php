		</div>
	</div>

	<div id="footer">
		<div class="jumbotron push-spaces">
			<strong><?php echo $this->lang->line('common_copyrights', date('Y')); ?> · 
			<a href="https://naaenterprises.org" target="_blank"><?php echo $this->lang->line('common_website'); ?></a>  · 
			<?php echo $this->config->item('application_version'); ?> - <a target="_blank" href="https://naaenterprises.org/commit/<?php echo $this->config->item('commit_sha1'); ?>"><?php echo substr($this->config->item('commit_sha1'), 0, 6); ?></a></strong>.
		</div>
	</div>
</body>
</html>
