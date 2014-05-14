<?php 
require_once('classes/mysqlManager.php');
require_once('template/hea.php');
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
						<li class="projectImage" style="background-color: #70ffb3">
							<a href="http://tumall.do/">
							<span class="projectInfo">
								<img src="images/cenapecvirtsite.jpg">
							</span>
							</a>
							<div class="wtMark">
								<h3>
									CENAPEC Moodle
								</h3>
							</div>
							
						</li>
						<li class="projectImage" style="background-color: #ff9292">
							<a href="http://tumall.do/">
							<span class="projectInfo">
								<img src="images/tumallsite.jpg">
							</span>
							</a>
							<div class="wtMark">
								<h3>
									TuMall
								</h3>
							</div>
							
						</li>
						<li class="projectImage" style="background-color: #aafff2">
							<a href="http://pekepolis.com/">
							<span class="projectInfo">
								<img src="images/pekesite.jpg">
							</span>
							</a>
							<div class="wtMark">
								<h3>
									Peképolis
								</h3>
							</div>
							
						</li>
						<li class="projectImage" style="background-color: #ffcaf9"> 
							<a href="http://www.dreamcher.com/home.php/">
							<span class="projectInfo">
								<img src="images/dreamsite.jpg">
							</span>
							</a>
							<div class="wtMark">
								<h3>
									Dreamcher
								</h3>
							</div>
							
						</li>
					</ul>
					<div class="projectDetail" style="display: none">
						
					</div>
				</div>
			</div>
			
<?php 
require_once('template/foo.php');
?>
