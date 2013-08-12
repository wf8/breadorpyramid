    	<div class="container-narrow">
      		<div class="masthead">
        		<ul class="nav nav-pills pull-right">
        			<?php if ($active == 'about') { ?>
          				<li class="active"><a href="/about">About</a></li>
          			<?php } else { ?>
          				<li><a href="/about">About</a></li>
          			<?php } ?>
          			<?php if ($active == 'restorationmap' || $active == 'rhodiola' || $active == 'fqa') { ?>
	          			<li class="active dropdown">
	          		<?php } else { ?>
	          			<li class="dropdown">
	          		<?php } ?>
          				<a id="projects_drop" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
          				<ul class="dropdown-menu" role="menu" aria-labelledby="projects_drop">
                        	<li role="presentation"><a role="menuitem" tabindex="-1" href="/restorationmap">Restoration Map</a></li>
                        	<li role="presentation"><a role="menuitem" tabindex="-1" href="/rhodiola"><em>Rhodiola</em> Phylogenetics</a></li>
                        	<li role="presentation"><a role="menuitem" tabindex="-1" href="/fqa">Universal FQA Calculator</a></li>
                      	</ul>
                   	</li>
					<?php if ($active == 'publications') { ?>
          				<li class="active"><a href="/publications">Publications</a></li>
          			<?php } else { ?>
          				<li><a href="/publications">Publications</a></li>
          			<?php } ?>
          			<?php if ($active == 'contact') { ?>
          				<li class="active"><a href="/contact">Contact</a></li>
          			<?php } else { ?>
          				<li><a href="/contact">Contact</a></li>
          			<?php } ?>
        		</ul>
        		<h3 class="muted"><a class="muted no_underline" href="http://breadorpyramid.org">Will Freyman</a></h3>
      		</div>