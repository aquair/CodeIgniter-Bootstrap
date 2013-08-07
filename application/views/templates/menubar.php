<?
/* $this->ci->load->config('menubar');
 * OR
 * $autoload['config'] = array('menubar');
 * in autoload.php
 */
$menubar = $this->config->item('menubar');
?>

<div class="subnav" style="margin-bottom: 10px;">
	<ul class="nav nav-pills">
	<? foreach($menubar['items'] as $item): ?>
		<? if(isset($item['items'])): ?>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown"><?= $item['name']?> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<? foreach($item['items'] as $dropdown): ?>
						<li><a href="<?=site_url($dropdown['url'])?>"><?=$dropdown['name']?></a></li>
					<? endforeach ?>
				</ul>
			</li> 
		<? else: ?>
			<li<? if(is_active($item['url'])): ?> class="active"<? endif; ?>><a href="<?= site_url($item['url']) ?>"><?= $item['name']?></a></li>
		<? endif ?>
	<? endforeach ?>
	</ul>
</div>
