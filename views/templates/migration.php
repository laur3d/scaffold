<?php echo '<?php'.PHP_EOL; ?>

class Create_<?php echo $this->plural_class; ?>_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{	
		Schema::create('<?php echo $this->plural; ?>', function($table)
		{
			$table->increments('id');

<?php foreach($this->fields as $field => $type): ?>
			$table-><?php echo $type; ?>('<?php echo $field; ?>');
<?php endforeach; ?>
<?php if($this->timestamps): ?>

			$table->timestamps();
<?php endif; ?>
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('<?php echo $this->plural; ?>');
	}

}