<div id="app-navigation">
	<ul class="with-icon">
		<?php foreach ($_['navigationItems'] as $item) { ?>
		<li data-id="<?php p($item['id']) ?>" class="nav-<?php p($item['id']) ?>">
			<a href="<?php p(isset($item['href']) ? $item['href'] : '#') ?>"
				class="nav-icon-<?php p($item['icon'] !== '' ? $item['icon'] : $item['id']) ?> svg">
				<?php p($item['name']);?>
			</a>
		</li>
		<?php } ?>
	</ul>
	<div id="app-settings">
		<div id="app-settings-header">
			<button class="settings-button" data-apps-slide-toggle="#app-settings-content">
				<span><?php p($l->t('Settings'));?></span>
			</button>
		</div>
		<div id="app-settings-content">
				<h2>
					<label for="webdavurl"><?php p($l->t('WebDAV'));?></label>
				</h2>
				<input id="webdavurl" type="text" readonly="readonly" value="<?php p(\OCP\Util::linkToRemote('webdav')); ?>" />
				<em><?php print_unescaped($l->t('Use this address to <a href="%s" target="_blank">access your Files via WebDAV</a>', array(link_to_docs('user-webdav'))));?></em>
		</div>
	</div>
</div>
