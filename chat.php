	<?php

	include 'db.php';
		$query = "select * from chat order by id DESC";
		$run = $con->query($query);
		while($row = $run->fetch_array());
					?>			
			<div id = "chat box">
					<div id = "chat_data">
				<span style="color:green;">Wali: </span>
		<span style="color:brown;">How are you? </span>
						<span style="float:right;">12:30pm</span>
					</div>
				<?php endwhile;?>