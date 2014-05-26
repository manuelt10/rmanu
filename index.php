<?php 
require_once('classes/mysqlManager.php');
require_once('template/hea.php');
$db = new mysqlManager();
$projects = $db->selectRecord('project', NULL, NULL, array('idproject' => 'desc'));
?>
<script>
	$(function() {
	    /*$('.projectImage').click(function()
	    {
	    	$(this).removeClass('projectImage');
	    	$('.projectImage').hide('slow');
	    	$(this).addClass('projectImage');
	    	$.ajax({
	    		type : 'POST',
	    		url : 'section/projectInfo.php',
	    		data : {id : 1}
	    	}).done(function(html)
	    	{
	    		$('.projectDetail').html(html);
	    		$('.projectDetail').fadeIn('slow');
	    	});
	    	
	    	
	    });
	    
	    $('.projectDetail').on('click','.goBackPInfo', function()
	    {
	    	$('.projectDetail').fadeOut('slow');
	    	$('.projectImage').show('slow');
	    })*/
	});
</script>
			<div class="container">
				<div class="projectsWrapper">
					<ul class="projectList">
						<?php 
						foreach($projects->data as $p)
						{
							?>
							<li class="projectImage" style="background-color: <?php echo $p->color ?>">
								<a href="<?php echo $p->href ?>" target="<?php echo $p->target ?>">
								<span class="projectInfo">
									<img src="images/<?php echo $p->image ?>">
								</span>
								</a>
								<div class="wtMark">
									<h3>
										<?php echo $p->name ?>
									</h3>
								</div>
							</li>
							<?
						}
						?>
					</ul>
					<div class="projectDetail" style="display: none">
						
					</div>
				</div>
			</div>
			
<?php 
require_once('template/foo.php');
?>
