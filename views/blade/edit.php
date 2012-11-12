<ul class="breadcrumbs six columns">
<?php if( ! empty($belongs_to)): ?>
		<li>
			<a href="{{URL::to('<?php echo $url[$belongs_to[0]]; ?>/view/'.$<?php echo $singular; ?>-><?php echo $belongs_to[0]; ?>->id)}}"><?php echo ucwords(str_replace('_', ' ', $belongs_to[0])); ?></a> 
		</li>
<?php endif; ?>
		<li>
			<a href="{{URL::to('<?php echo $nested_path.$plural; ?>')}}"><?php echo str_replace('_', ' ', $plural_class); ?></a> 
		</li>
		<li class="current"><span>Editing <?php echo str_replace('_', ' ', $singular_class); ?></span></li>
	</ul>
<div class="row">
	<div class="twelve columns">
		
{{Form::open(null, 'post', array('class' => 'form-stacked'))}}
<div class="row">
	<div class="eight columns">
<?php foreach($fields as $field => $type): ?>
		<div class="clearfix">
			{{Form::label('<?php echo $field; ?>', '<?php echo ucwords(str_replace('_', ' ', $field)); ?>')}}

			<div class="input">
<?php if(in_array($type, array('string', 'integer', 'float', 'date', 'timestamp'))): ?>
				{{Form::text('<?php echo $field; ?>', Input::old('<?php echo $field; ?>', $<?php echo $singular; ?>-><?php echo $field; ?>), array('class' => 'six'))}}
<?php elseif($type == 'boolean'): ?>
				{{Form::checkbox('<?php echo $field; ?>', '1', Input::old('<?php echo $field; ?>', $<?php echo $singular; ?>-><?php echo $field; ?>))}}
<?php elseif($type == 'text' || $type == 'blob'): ?>
				{{Form::textarea('<?php echo $field; ?>', Input::old('<?php echo $field; ?>', $<?php echo $singular; ?>-><?php echo $field; ?>), array('class' => 'ten'))}}
<?php endif; ?>
			</div>
		</div>
<?php endforeach; ?>

		<div class="actions">
			{{Form::submit('Save', array('class' => 'button '))}}

			or <a href="{{URL::to(Request::referrer())}}">Cancel</a>
		</div>
	</div>
</div>
{{Form::close()}}

	</div>
</div>