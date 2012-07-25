<?php $this->beginContent('//layouts/main'); ?>
	<div class="page-header">
		<div class = "row">
			<div class = "span12">
				<?php $this->widget('bootstrap.widgets.BootBreadcrumbs', array(
				    'links'=> $this->bootBreadcrumbs
				)); ?>
			</div>
		</div>
		<div class="row">
				<div class = "span4">
					<h1> <?php echo $this->content_title; ?> </h1>
				</div>
			<div class="pull-right">
						<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
					        'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
					        'buttons'=>array(
					            array(
					            	'label'=>'Options', 
					            	'items' => $this->menu, 
					            	'visible' => count($this->menu) != 0
					            	),
					            ),
				        )); ?>
				</div>
			</div>
		</div>
	<div class="row">
			<div class = "span12">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	
<?php $this->endContent(); ?>