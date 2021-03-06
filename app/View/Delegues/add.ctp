<div class="">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2><?php echo __('Add Delegue') ;?></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<?php echo $this->Form->create('Delegue', array('class' => 'form-horizontal form-label-left')); ?>
						<div class="form-group">
							<?php echo $this->Form->label('name', 'Nom <span class="required">*</span>', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
							<?php echo $this->Form->input('name', array('label' => false, 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12', 
								'div' => array('class' => 'col-md-6 col-sm-6 col-xs-12'))); ?>
						</div>
						<div class="form-group">
							<?php echo $this->Form->label('prenom', 'Prénom <span class="required">*</span>', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
							<?php echo $this->Form->input('prenom', array('label' => false, 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12', 
								'div' => array('class' => 'col-md-6 col-sm-6 col-xs-12'))); ?>
						</div>
						<div class="form-group">
							<?php echo $this->Form->label('ville_id', 'Ville <span class="required">*</span>', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
							<?php echo $this->Form->input('ville_id', array('label' => false, 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12', 
								'div' => array('class' => 'col-md-6 col-sm-6 col-xs-12'))); ?>
						</div>
						<div class="form-group">
							<?php echo $this->Form->label('type_voiture', 'Type de voiture <span class="required">*</span>', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
							<?php echo $this->Form->input('type_voiture', array('label' => false, 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12', 
								'div' => array('class' => 'col-md-6 col-sm-6 col-xs-12'))); ?>						
						</div>
						<div class="form-group">	
							<?php echo $this->Form->label('Laboratoire', 'Laboratoires', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
							<?php echo $this->Form->input('Laboratoire', array('label' => false, 'class' => 'form-control select2_multiple col-md-7 col-xs-12', 
								'multiple' => 'multiple', 'div' => array('class' => 'col-md-6 col-sm-6 col-xs-12'))); ?>	
						</div>
						<div class="form-group">
							<?php echo $this->Form->label('Zone', 'Zones', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
							<?php echo $this->Form->input('Zone', array('label' => false, 'class' => 'form-control select2_multiple col-md-7 col-xs-12', 
								'multiple' => 'multiple', 'div' => array('class' => 'col-md-6 col-sm-6 col-xs-12'))); ?>	
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<?php echo $this->Form->button('Submit', array('type' => 'submit', 'class' => 'btn btn-success')); ?>
							</div>
						</div>
					<?php echo $this->Form->end(); ?> 
				</div>
			</div>
		</div>
	</div>
</div>