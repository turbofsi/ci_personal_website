<section class="container">
	<div class="form-wrap">

		<?php 

		$this->load->helper("form");

		echo form_open("site/send_email");

		echo form_label("Name:", "name");
		$data = array(
				"name" => "uname",
				"id" => "name",
				"value" => ""
			);
		echo form_input($data);

		echo form_label("Email:", "email");
		$data = array(
				"name" => "uemail",
				"id" => "email",
				"value" => ""
			);
		echo form_input($data);


		echo form_label("Message: ", "message");
		$data = array(
				"name" => "umessage",
				"id" => "message",
				"value" => ""
			);
		echo form_textarea($data);

		echo form_submit("contact_submit", "Send it!");

		echo form_close();
	 ?>


	</div>
	
</section>